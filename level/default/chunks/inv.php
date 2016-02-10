<?php
/**
 * Created by PhpStorm.
 * User: Bamuel
 * Date: 9/02/2016
 */
$inv = '
    <div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" style="display: none;" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">X</span></button>
                    <h4 class="modal-title" id="myModalLabel">Creative Inventory</h4>
                </div>
                <div class="modal-body" style="height:500px;">
                    <div class="modal-header"></div>
                    <ul class="nav nav-tabs" id="tabContent">
                        <li class="active">
                            <a data-toggle="tab" href="#details">Blocks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#access-security">Blocks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#networking">Special</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="details">
                            <a blockid="" class="block1" data-dismiss="modal" id="invslot1" onclick="blockid = 1;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Wood Planks</p></a> <a blockid="" class="block2" data-dismiss="modal" id="invslot2" onclick="blockid = 2;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Grass</p></a> <a blockid="" class="block34" data-dismiss="modal" id="invslot3" onclick="blockid = 34;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Snowy Grass</p></a> <a blockid="" class="block3" data-dismiss="modal" id="invslot4" onclick="blockid = 3;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone</p></a> <a blockid="" class="block4" data-dismiss="modal" id="invslot5" onclick="blockid = 4;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Leaves</p></a> <a blockid="" class="block5" data-dismiss="modal" id="invslot6" onclick="blockid = 5;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Glass</p></a> <a blockid="" class="block6" data-dismiss="modal" id="invslot7" onclick="blockid = 6;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Wood</p></a> <a blockid="" class="block7" data-dismiss="modal" id="invslot8" onclick="blockid = 7;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Dirt</p></a> <a blockid="" class="block9" data-dismiss="modal" id="invslot9" onclick="blockid = 9;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Wood Slab</p></a> <a blockid="" class="block10" data-dismiss="modal" id="invslot10" onclick="blockid = 10;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Desert Leaves</p></a> <a blockid="" class="block11" data-dismiss="modal" id="invslot11" onclick="blockid = 11;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Sand</p></a> <a blockid="" class="block14" data-dismiss="modal" id="invslot12" onclick="blockid = 14;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Wood Stairs</p></a> <a blockid="" class="block15" data-dismiss="modal" id="invslot13" onclick="blockid = 15;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Wood Stairs</p></a> <a blockid="" class="block22" data-dismiss="modal" id="invslot14" onclick="blockid = 22;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Tall Grass</p></a> <a blockid="" class="block25" data-dismiss="modal" id="invslot15" onclick="blockid = 25;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Pumpkin</p></a> <a blockid="" class="block32" data-dismiss="modal" id="invslot16" onclick="blockid = 32;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Dirt Farm</p></a> <a blockid="" class="block35" data-dismiss="modal" id="invslot17" onclick="blockid = 35;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Snow Block</p></a> <a blockid="" class="block38" data-dismiss="modal" id="invslot18" onclick="blockid = 38;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Bedrock</p></a> <a blockid="" class="block39" data-dismiss="modal" id="invslot19" onclick="blockid = 39;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Brick</p></a> <a blockid="" class="block43" data-dismiss="modal" id="invslot20" onclick="blockid = 43;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Cobble</p></a> <a blockid="" class="block44" data-dismiss="modal" id="invslot21" onclick="blockid = 44;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Mossy Cobble</p></a> <a blockid="" class="block47" data-dismiss="modal" id="invslot22" onclick="blockid = 47;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Gravel</p></a> <a blockid="" class="block48" data-dismiss="modal" id="invslot23" onclick="blockid = 48;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Hay Block</p></a> <a blockid="" class="block49" data-dismiss="modal" id="invslot24" onclick="blockid = 49;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Ice</p></a> <a blockid="" class="block50" data-dismiss="modal" id="invslot25" onclick="blockid = 50;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Melon</p></a> <a blockid="" class="block51" data-dismiss="modal" id="invslot26" onclick="blockid = 51;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Sandstone</p></a> <a blockid="" class="block52" data-dismiss="modal" id="invslot27" onclick="blockid = 52;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone</p></a> <a blockid="" class="block53" data-dismiss="modal" id="invslot28" onclick="blockid = 53;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Obsidian</p></a> <a blockid="" class="block54" data-dismiss="modal" id="invslot29" onclick="blockid = 54;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Quartz</p></a> <a blockid="" class="block55" data-dismiss="modal" id="invslot30" onclick="blockid = 55;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Quartz</p></a> <a blockid="" class="block56" data-dismiss="modal" id="invslot31" onclick="blockid = 56;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Quartz</p></a> <a blockid="" class="block8" data-dismiss="modal" id="invslot32" onclick="blockid = 8;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Music Box</p></a>
                            <div class="control-group"></div>
                        </div>
                        <div class="tab-pane" id="access-security">
                            <a blockid="" class="block16" data-dismiss="modal" id="invslot33" onclick="blockid = 16;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Fence</p></a> <a blockid="" class="block17" data-dismiss="modal" id="invslot34" onclick="blockid = 17;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Fence</p></a> <a blockid="" class="block18" data-dismiss="modal" id="invslot35" onclick="blockid = 18;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Fence</p></a> <a blockid="" class="block19" data-dismiss="modal" id="invslot36" onclick="blockid = 19;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Fence</p></a> <a blockid="" class="block27" data-dismiss="modal" id="invslot37" onclick="blockid = 27;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone Bricks</p></a> <a blockid="" class="block28" data-dismiss="modal" id="invslot38" onclick="blockid = 28;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone Bricks</p></a> <a blockid="" class="block29" data-dismiss="modal" id="invslot39" onclick="blockid = 29;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone Bricks</p></a> <a blockid="" class="block30" data-dismiss="modal" id="invslot40" onclick="blockid = 30;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone Brick Stairs</p></a> <a blockid="" class="block31" data-dismiss="modal" id="invslot41" onclick="blockid = 31;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Stone Brick Stairs</p></a>
                        </div>
                        <div class="tab-pane" id="networking">
                            <a blockid="" class="block20" data-dismiss="modal" id="invslot42" onclick="blockid = 20;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Water</p></a> <a blockid="" class="block21" data-dismiss="modal" id="invslot43" onclick="blockid = 21;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Lava</p></a> <a blockid="" class="block26" data-dismiss="modal" id="invslot44" onclick="blockid = 26;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Halloween pumpkin</p></a> <a blockid="" class="item1" data-dismiss="modal" id="invslot45" onclick="blockid = 33;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Seeds</p></a> <a blockid="" class="block36" data-dismiss="modal" id="invslot46" onclick="blockid = 36;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Snowman Hat</p></a> <a blockid="" class="block37" data-dismiss="modal" id="invslot47" onclick="blockid = 37;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Snowman Bottom</p></a> <a blockid="" class="block40" data-dismiss="modal" id="invslot48" onclick="blockid = 40;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Cactus</p></a> <a blockid="" class="block41" data-dismiss="modal" id="invslot49" onclick="blockid = 41;return false" style="margin-left: 30px; margin-top: 2px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Cake</p></a> <a blockid="" class="block42" data-dismiss="modal" id="invslot50" onclick="blockid = 42;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Cauldron</p></a> <a blockid="" class="block45" data-dismiss="modal" id="invslot51" onclick="blockid = 45;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Crafting Table</p></a> <a blockid="" class="block46" data-dismiss="modal" id="invslot52" onclick="blockid = 46;return false" style="margin-left: 30px; margin-top: 60px;">
                            <p data-dismiss="modal" style="margin-top: 48px;">Enchanting Table</p></a>
                        </div>
                    </div><!--Implement Stone pilars!!!-->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>';