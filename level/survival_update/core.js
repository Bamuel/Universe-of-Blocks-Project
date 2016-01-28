$world = []
$blocks = 9
$world_width = 150
$world_height = 50
$block_size = 40
$block_src = 20
$guy_size = 60
$guy_src = 60
$speed = $block_size / 8
$locX = $world_width * 40 / 2
$locY = 400
$jump = 0
$ani = 0
$ani2 = 0
$inv_size = 50
$items = {}
$selected = 0
$margin = 5
$leftmargin = (getScreenWidth() - (8 * $inv_size + 7 * $margin)) / 2
$falling = false
$crafting = false
$jump_height = 2 * $speed + 1

$current_block = []
$timer = new Timer(0)
$drops = []

$recipes = {
    "Pickaxe"   : {7 : 2, 5 : 3}
}

$sprite = new Image('blocks.png')
$guy = new Image('guy.png')
$cursor = new Image('cursor.png')
$inv = new Image('inv.png')

$c = getControls()
setCursor($cursor)
setFont(:courier, 14)

def worldGen()
    $world_width.times() do |x|
        $world[x] = []
        $world_height.times() do |y|
            if x == 0 || x == $world_width - 1
                $world[x][y] = new Block(1)
            elseif y == 0
                $world[x][y] = new Block(1)
            elseif y == $world_height - 1
                $world[x][y] = new Block(2)
            elseif y >= 0.7 * $world_height
               $world[x][y] = new Block(5)
            elseif y >= 0.6 * $world_height
                $world[x][y] = new Block(4)
            else
                $world[x][y] = new Block(0)
            end
            if x > 0 && y < $world_height - 1 && y > 5 && $world[x][y].getId() != 1 && $world[x][y].getId() != 2
                if $world[x - 1][y + 1].getId() == 4 && rand() >= 0.6
                    $world[x][y] = new Block(4)
                end
                if $world[x - 1][y - 1].getId() == 4 && rand() >= 0.6
                    $world[x][y] = new Block(4)
                end
                if $world[x][y - 1].getId() == 4 && $world[x][y].getId() == 0
                    $world[x][y] = new Block(4)
                end
                if $world[x - 1][y + 1].getId() == 5 && rand() >= 0.8
                    $world[x][y] = new Block(5)
                end
                if $world[x - 1][y - 1].getId() == 5 && rand() >= 0.8
                    $world[x][y] = new Block(5)
                end
                if $world[x][y - 1].getId() == 5 && $world[x][y].getId() == 4
                    $world[x][y] = new Block(5)
                end
            end
        end
    end
    $world_width.times() do |x|
        $world_height.times() do |y|
            if $world[x][y].getId() == 4 && $world[x][y - 1].getId() == 0 && x > 2 && x < $world_width - 3 && y > 5 && rand() >= 0.7
                generateTree(x, y - 1)
            end
        end
    end
end

def generateTree(x, y)
    if $world[x][y - 1].getId() == 0 && $world[x][y - 2].getId() == 0 && $world[x - 1][y - 2].getId() == 0 &&
            $world[x - 1][y - 2].getId() == 0 && $world[x + 1][y - 2].getId() == 0 && $world[x - 2][y - 3].getId() == 0 &&
            $world[x - 1][y - 3].getId() == 0 && $world[x][y - 3].getId() == 0 && $world[x + 1][y - 3].getId() == 0 &&
            $world[x + 2][y - 3].getId() == 0 && $world[x - 1][y - 4].getId() == 0 && $world[x][y - 4].getId() == 0 &&
            $world[x + 1][y - 4].getId() == 0 && $world[x][y - 5].getId() == 0
        $world[x][y].setId(7)
        $world[x][y - 1].setId(7)
        $world[x][y - 2].setId(7)
        $world[x - 1][y - 2].setId(8)
        $world[x + 1][y - 2].setId(8)
        $world[x - 2][y - 3].setId(8)
        $world[x - 1][y - 3].setId(8)
        $world[x][y - 3].setId(8)
        $world[x + 1][y - 3].setId(8)
        $world[x + 2][y - 3].setId(8)
        $world[x - 1][y - 4].setId(8)
        $world[x][y - 4].setId(8)
        $world[x + 1][y - 4].setId(8)
        $world[x][y - 5].setId(8)
    end
end

class Block
    
    def new(id)
        @id = id
        if @id == 0 ||  @id == 7 || @id == 8
            @state = :through
        elseif @id == 1 || @id == 2
            @state = :unbreakable
        elseif @id >= 9
            @state = :item
        else
            @state = :solid
        end
    end
    
    def getId()
        return @id
    end
    
    def setId(newId)
        @id = newId
        if @id == 0 ||  @id == 7 || @id == 8
            @state = :through
        elseif @id == 1 || @id == 2
            @state = :unbreakable
        else
            @state = :solid
        end
    end
    
    def getState()
        return @state
    end
    
    def getDelay()
        if @id == 3 || @id == 4 || @id == 6
            return 500
        end
        if @id == 5
            if $items.keys()[$selected] == 9
                return 300
            else
                return 1500
            end
        end
        if @id == 7
            return 1000
        end
        if @id == 8
            return 200
        end
    end
    
end

def blockUpdate()
        ((getScreenWidth() / $block_size).ceil() + 1).times() do |x|
        x = x + ($locX / $block_size).floor()
        if x >= 0 && x < $world_width
            ((getScreenHeight() / $block_size).ceil() + 1).times() do |y|
                y = y + ($locY / $block_size).floor()
                if y >= 0 && y < $world_height
                    if $world[x][y].getId() == 4 && $world[x][y - 1].getState() == :through
                        $world[x][y].setId(3)
                    elseif $world[x][y].getId() == 3 && $world[x][y - 1].getState() == :solid
                        $world[x][y].setId(4)
                    end
                    drawImage($sprite, $world[x][y].getId() * $block_src, 0, $block_src, $block_src, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size, false)
                    if $world[x][y].getState() != :through && isRectOverlap(x * $block_size, y * $block_size, $block_size, $block_size, $locX + getScreenWidth() / 2 - $guy_size / 4, $locY + getScreenHeight() / 2 - $guy_size / 2, $guy_size / 2, $guy_size + 1)
                        $falling = false
                    end
                    if isRectOverlap(x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size, $c.getMouseX() + 10, $c.getMouseY() + 10, 1, 1)
                        if $world[x][y].getState() != :unbreakable
                            setColor(:black)
                            drawRect(x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                            setColor(:white)
                        end
                        if $c.isLeftDown() && $world[x][y].getId() != 0 && $world[x][y].getState() != :unbreakable
                            if $current_block[0] == x && $current_block[1] == y
                                if $timer.isExpired()
                                    breakBlock(x, y)
                                else
                                    setAlpha($timer.getPercent() / 2)
                                    fillRect(x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                                    setAlpha(1)
                                end
                            else
                                $timer = new Timer($world[x][y].getDelay())
                                $current_block = [x, y]
                            end
                        else
                            $current_block = []
                        end
                        if $c.isRightDown() && $world[x][y].getId() == 0 && !isRectOverlap(getScreenWidth() / 2 - $guy_size / 4, getScreenHeight() / 2 - $guy_size / 2, $guy_size / 2, $guy_size, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                            if $items.keys().isSet($selected) && $items.keys()[$selected] != 9
                                $world[x][y].setId($items.keys()[$selected])
                                $items[$items.keys()[$selected]] = $items[$items.keys()[$selected]] - 1
                                if $items[$items.keys()[$selected]] == 0
                                    $items.delete($items.keys()[$selected])
                                end
                            end
                        end
                    end
                    if $world[x][y].getState() != :through && isRectOverlap(getScreenWidth() / 2 - $guy_size / 4 - 5, getScreenHeight() / 2 - $guy_size / 2, 1, $guy_size, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                        $canMoveLeft = false
                    end
                    if $world[x][y].getState() != :through && isRectOverlap(getScreenWidth() / 2 + $guy_size / 4, getScreenHeight() / 2 - $guy_size / 2, 1, $guy_size, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                        $canMoveRight = false
                    end
                    if $world[x][y].getState() != :through && isRectOverlap(getScreenWidth() / 2 - $guy_size / 4, getScreenHeight() / 2 - $guy_size / 2, $guy_size / 2, $speed, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size)
                        $canJump = false
                        $falling = true
                        $jump = 0
                    end
                    $drops.each() do |drop|
                        if $world[x][y].getState() != :through && isRectOverlap(drop[0] - $locX, drop[1] - $locY + $block_size / 4, $block_size / 2, $block_size / 2, x * $block_size - $locX, y * $block_size - $locY, $block_size, $block_size, false)
                            drop[3] = 0
                        end
                    end
                end
            end
        end
    end
end

def breakBlock(x, y)
    if $world[x][y].getId() == 3
        id = 4
    else
        id = $world[x][y].getId()
    end
    $drops.add([x * $block_size + rand($block_size / 4 - 5, $block_size / 4 + 5), y * $block_size, id, 0])
    $world[x][y].setId(0)
end

def dropUpdate()
    $drops.each() do |drop|
        if (drop[0] - $locX < -50 || drop[0] - $locX > getScreenWidth() + 50 || drop[1] - $locY < -50 || drop[1] - $locY > getScreenHeight() + 50)
            $drops.delete(drop)
        end
        if drop[3] == 1
            drop[1] = drop[1] + $speed
            bounce = 0
        else
            time = new Time()
            if time.seconds() % 2 == 0
                bounce = time.milliseconds() / 100 - 5
            else
                bounce = 0 - time.milliseconds() / 100 + 5
            end
        end
        if isRectOverlap(drop[0] - $locX, drop[1] - $locY, $block_size / 2, $block_size / 2, getScreenWidth() / 2 - $guy_size / 4, getScreenHeight() / 2 - $guy_size / 2, $guy_size / 2, $guy_size)
            added = false
            $empty = -1
            $items[drop[2]] = $items[drop[2]] + 1
            $drops.delete(drop)
        end
        drawImage($sprite, drop[2] * $block_src, 0, $block_src, $block_src, drop[0] - $locX, drop[1] - $locY + bounce, $block_size / 2, $block_size / 2)
    end
end

def drawInv()
    items = []
    $items.each() do |a,b|
        items.add([a,b])
    end
    8.times() do |x|
        if $selected == x
            drawImage($inv, $inv_size, 0, $inv_size, $inv_size, $leftmargin + x * ($inv_size + $margin), getScreenHeight() - $inv_size - $margin, $inv_size, $inv_size)
        else
            drawImage($inv, 0, 0, $inv_size, $inv_size, $leftmargin + x * ($inv_size + $margin), getScreenHeight() - $inv_size - $margin, $inv_size, $inv_size)
        end
        if items.isSet(x)
            drawImage($sprite, items[x][0] * $block_src, 0, $block_src, $block_src, $leftmargin + x * ($inv_size + $margin) + (($inv_size - $block_size) / 2), getScreenHeight() - $inv_size - $margin + (($inv_size - $block_size) / 2), $block_size, $block_size, false)
            fillText(items[x][1], $leftmargin + x * ($inv_size + $margin) + (($inv_size - $block_size) / 2), getScreenHeight() - $inv_size - $margin + (($inv_size - $block_size) / 2))
        end
    end
end

def controls()
    if $c.isKeyDown(:a) && $canMoveLeft && $crafting == false
        $ani = 2
        $locx = $locX - $speed
    end
    if $c.isKeyDown(:d) && $canMoveRight && $crafting == false
        $ani = 1
        $locX = $locX + $speed
    end
    if $c.isKeyPressed(:e)
        if $crafting == true
            $crafting = false
        else
            $crafting = true
//            A WORK IN PROGRESS!!
        end
    end
    if $c.isKeyDown(:space) && $jump == 0 && $falling == false && $crafting == false
        $jump = $jump_height
    end
    if $c.isKeyDown(:1)
        $selected = 0
    end
    if $c.isKeyDown(:2)
        $selected = 1
    end
    if $c.isKeyDown(:3)
        $selected = 2
    end
    if $c.isKeyDown(:4)
        $selected = 3
    end
    if $c.isKeyDown(:5)
        $selected = 4
    end
    if $c.isKeyDown(:6)
        $selected = 5
    end
    if $c.isKeyDown(:7)
        $selected = 6
    end
    if $c.isKeyDown(:8)
        $selected = 7
    end
end

def crafting()
    if $crafting == true
        setColor(:999)
        fillRect(getScreenWidth() / 2, getScreenHeight() / 2, 300, 200, true)
        index = 0
        $recipes.each() do |itemName, ingredients|
            canCraft = true
            ingredients.each() do |id, quantity|
                if $items[id] < quantity
                    canCraft = false
                end
            end
            if canCraft == true
                setColor(:777)
                fillRect(getScreenWidth() / 2, getScreenHeight() / 2 - 80 + index * 20, 280, 19, true)
                setColor(:fff)
                fillText(itemName, getScreenWidth() / 2, getScreenHeight() / 2 - 80 + index * 20, true)
                if $c.isLeftClick()
                    $c.getMouseXY() do |x, y|
                        if isRectOverlap(getScreenWidth() / 2, getScreenHeight() / 2 - 80 + index * 20, 280, 19, x, y, 1, 1, true)
                            ingredients.keys().each() do |id|
                                $items[id] = $items[id] - ingredients[id]
                                if $items[id] == 0
                                    $items.delete(id)
                                end
                            end
                            $items[9] = $items[9] + 1
                        end
                    end
                end
            end
        end
    end
end

def resets()
    $falling = true
    $canMoveLeft = true
    $canMoveRight = true
    $canJump = true
    $moveLeft = false
    $moveRight = false
    $ani = 0
    $drops.each() do |drop|
        drop[3] = 1
    end
end
$i = 1
onEachFrame() do
    fill(0, 100, 200)
    
    if ($i < 5)
        fillText("Generating World...", getScreenWidth() / 2, getScreenHeight() / 2, true)
        $i = $i + 1
    elseif ($i == 5)
        worldGen()
        $i = $i + 1
    else
        resets()
        blockUpdate()
        dropUpdate()
        drawInv()
        controls()
        
        if $falling == true
            $locY = $locY + $speed
        end
        
        if $jump > 0 && $canJump
            $locY = $locY - $jump
            $jump = $jump - 1
        end
        
        if $locY % $speed != 0
            $locY = (($locY / $speed).floor()) * $speed
        end
        
        if $ani > 0 && $falling == false
            $ani2 = (new Time().milliseconds() / 250).floor()
            if $ani2 > 1
                $ani2 = $ani2 - 2
            end
        else
            $ani2 = 0
        end
        drawImage($guy, $ani * $guy_src / 2, $ani2 * $guy_src, $guy_src / 2, $guy_src, getScreenWidth() / 2 - $guy_size / 4, getScreenHeight() / 2 - $guy_size / 2, $guy_size / 2, $guy_size)
        crafting()
    end
end