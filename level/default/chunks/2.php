<?php
include('../../../version.php');
include('inv.php');
include('menu.php');
include('pickaxe.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Universe of Blocks #2</title>
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/sun&moon.css">
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" style="color: rgb(51, 51, 51);"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://examples.phaser.io/_site/js/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="http://examples.phaser.io/_site/phaser/phaser.2.2.2.box2d.min.js" type="text/javascript"></script>
    <script src="http://examples.phaser.io/_site/phaser/blob.js" type="text/javascript"></script>
    <script src="http://examples.phaser.io/_site/phaser/canvas-to-blob.js" type="text/javascript"></script>
    <script src="http://examples.phaser.io/_site/phaser/filesaver.js" type="text/javascript"></script>
    <script src="http://examples.phaser.io/_site/phaser/embed.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<!--Rain Script-->
<script type="text/javascript" src="js/rain.js"></script>
<script type="text/javascript" src="js/player.js"></script>
<center>
    <!-- Function ChangeBlock-->
    <script type="text/javascript" src="js/function.js"></script>
    <!--Clouds and Game version-->
    <div class="page" id="container">
        <div class="minecraft">
        </div>
    </div>
    <h3 style="margin-left: 50px; position: absolute; z-index: 1; "><?php echo $version; ?></h3>
    <br>
    <div id="rain_panel" style="position: absolute; z-index: 1; visibility: hidden; margin: auto; left: 0; right:0;">
        <img src="img/rain.gif">
    </div>
    <!--_______________________________________________________________________________________________________-->
    <!--                                                     GamePanel                                         -->
    <!--_______________________________________________________________________________________________________-->
    <!--Line1-->
    <img class="rotating" style="margin-left: auto; margin-right: auto; position: absolute; z-index: 1;" src="img/time_cycle.png">
    <div id="gamepanel1" style="position: relative; z-index: 2;" class="gamepanel1">
        <div id="EjCambioEstilo" class="block13" onclick="window.open('1.php')"></div>
        <div id="block10" class="10" onclick="getblockidf('block10');"></div>
        <div id="EjCambioEstilo2" class="block0" onclick="changeblock1('EjCambioEstilo2');"></div>
        <div id="EjCambioEstilo3" class="block0" onclick="changeblock1('EjCambioEstilo3')"></div>
        <div id="EjCambioEstilo4" class="block0" onclick="changeblock1('EjCambioEstilo4')"></div>
        <div id="EjCambioEstilo5" class="block0" onclick="changeblock1('EjCambioEstilo5')"></div>
        <div id="EjCambioEstilo6" class="block0" onclick="changeblock1('EjCambioEstilo6')"></div>
        <div id="EjCambioEstilo7" class="block0" onclick="changeblock1('EjCambioEstilo7')"></div>
        <div id="EjCambioEstilo8" class="block0" onclick="changeblock1('EjCambioEstilo8')"></div>
        <div id="EjCambioEstilo9" class="block0" onclick="changeblock1('EjCambioEstilo9')"></div>
        <div id="EjCambioEstilo10" class="block0" onclick="changeblock1('EjCambioEstilo10')"></div>
        <div id="EjCambioEstilo11" class="block0" onclick="changeblock1('EjCambioEstilo11')"></div>
        <div id="EjCambioEstilo12" class="block0" onclick="changeblock1('EjCambioEstilo12')"></div>
        <div id="EjCambioEstilo13" class="block0" onclick="changeblock1('EjCambioEstilo13')"></div>
        <div id="EjCambioEstilo14" class="block0" onclick="changeblock1('EjCambioEstilo14')"></div>
        <div id="EjCambioEstilo15" class="block0" onclick="changeblock1('EjCambioEstilo15')"></div>
        <div id="EjCambioEstilo16" class="block0" onclick="changeblock1('EjCambioEstilo16')"></div>
        <div id="EjCambioEstilo17" class="block0" onclick="changeblock1('EjCambioEstilo17')"></div>
        <div id="EjCambioEstilo18" class="block0" onclick="changeblock1('EjCambioEstilo18')"></div>
        <div id="EjCambioEstilo19" class="block0" onclick="changeblock1('EjCambioEstilo19')"></div>
        <div id="EjCambioEstilo20" class="block0" onclick="changeblock1('EjCambioEstilo20')"></div>
        <div id="EjCambioEstilo21" class="block0" onclick="changeblock1('EjCambioEstilo21')"></div>
        <div id="EjCambioEstilo22" class="block0" onclick="changeblock1('EjCambioEstilo22')"></div>
        <div id="EjCambioEstilo23" class="block0" onclick="changeblock1('EjCambioEstilo23')"></div>
        <div id="EjCambioEstilo24" class="block0" onclick="changeblock1('EjCambioEstilo24')"></div>
        <div id="EjCambioEstilo25" class="block24" ></div>
        <!--Line2-->
        <div id="EjCambioEstilo31" class="block0" onclick="changeblock1('EjCambioEstilo31')"></div>
        <div id="EjCambioEstilo32" class="block0" onclick="changeblock1('EjCambioEstilo32')"></div>
        <div id="EjCambioEstilo33" class="block0" onclick="changeblock1('EjCambioEstilo33')"></div>
        <div id="EjCambioEstilo34" class="block0" onclick="changeblock1('EjCambioEstilo34')"></div>
        <div id="EjCambioEstilo35" class="block0" onclick="changeblock1('EjCambioEstilo35')"></div>
        <div id="EjCambioEstilo36" class="block0" onclick="changeblock1('EjCambioEstilo36')"></div>
        <div id="EjCambioEstilo37" class="block0" onclick="changeblock1('EjCambioEstilo37')"></div>
        <div id="EjCambioEstilo38" class="block0" onclick="changeblock1('EjCambioEstilo38')"></div>
        <div id="EjCambioEstilo39" class="block0" onclick="changeblock1('EjCambioEstilo39')"></div>
        <div id="EjCambioEstilo40" class="block0" onclick="changeblock1('EjCambioEstilo40')"></div>
        <div id="EjCambioEstilo41" class="block0" onclick="changeblock1('EjCambioEstilo41')"></div>
        <div id="EjCambioEstilo42" class="block0" onclick="changeblock1('EjCambioEstilo42')"></div>
        <div id="EjCambioEstilo43" class="block0" onclick="changeblock1('EjCambioEstilo43')"></div>
        <div id="EjCambioEstilo44" class="block0" onclick="changeblock1('EjCambioEstilo44')"></div>
        <div id="EjCambioEstilo45" class="block0" onclick="changeblock1('EjCambioEstilo45')"></div>
        <div id="EjCambioEstilo46" class="block0" onclick="changeblock1('EjCambioEstilo46')"></div>
        <div id="EjCambioEstilo47" class="block0" onclick="changeblock1('EjCambioEstilo47')"></div>
        <div id="EjCambioEstilo48" class="block0" onclick="changeblock1('EjCambioEstilo48')"></div>
        <div id="EjCambioEstilo49" class="block0" onclick="changeblock1('EjCambioEstilo49')"></div>
        <div id="EjCambioEstilo50" class="block0" onclick="changeblock1('EjCambioEstilo50')"></div>
        <div id="EjCambioEstilo51" class="block0" onclick="changeblock1('EjCambioEstilo51')"></div>
        <div id="EjCambioEstilo52" class="block0" onclick="changeblock1('EjCambioEstilo52')"></div>
        <div id="EjCambioEstilo53" class="block0" onclick="changeblock1('EjCambioEstilo53')"></div>
        <div id="EjCambioEstilo54" class="block0" onclick="changeblock1('EjCambioEstilo54')"></div>
        <div id="EjCambioEstilo55" class="block0" onclick="changeblock1('EjCambioEstilo55')"></div>
        <!--Line3-->
        <div id="1EjCambioEstilo31" class="block0" onclick="changeblock1('1EjCambioEstilo31')"></div>
        <div id="1EjCambioEstilo32" class="block0" onclick="changeblock1('1EjCambioEstilo32')"></div>
        <div id="1EjCambioEstilo33" class="block0" onclick="changeblock1('1EjCambioEstilo33')"></div>
        <div id="1EjCambioEstilo34" class="block0" onclick="changeblock1('1EjCambioEstilo34')"></div>
        <div id="1EjCambioEstilo35" class="block0" onclick="changeblock1('1EjCambioEstilo35')"></div>
        <div id="1EjCambioEstilo36" class="block0" onclick="changeblock1('1EjCambioEstilo36')"></div>
        <div id="1EjCambioEstilo37" class="block0" onclick="changeblock1('1EjCambioEstilo37')"></div>
        <div id="1EjCambioEstilo38" class="block0" onclick="changeblock1('1EjCambioEstilo38')"></div>
        <div id="1EjCambioEstilo39" class="block0" onclick="changeblock1('1EjCambioEstilo39')"></div>
        <div id="1EjCambioEstilo40" class="block0" onclick="changeblock1('1EjCambioEstilo40')"></div>
        <div id="1EjCambioEstilo41" class="block0" onclick="changeblock1('1EjCambioEstilo41')"></div>
        <div id="1EjCambioEstilo42" class="block0" onclick="changeblock1('1EjCambioEstilo42')"></div>
        <div id="1EjCambioEstilo43" class="block0" onclick="changeblock1('1EjCambioEstilo43')"></div>
        <div id="1EjCambioEstilo44" class="block0" onclick="changeblock1('1EjCambioEstilo44')"></div>
        <div id="1EjCambioEstilo45" class="block0" onclick="changeblock1('1EjCambioEstilo45')"></div>
        <div id="1EjCambioEstilo46" class="block0" onclick="changeblock1('1EjCambioEstilo46')"></div>
        <div id="1EjCambioEstilo47" class="block0" onclick="changeblock1('1EjCambioEstilo47')"></div>
        <div id="1EjCambioEstilo48" class="block0" onclick="changeblock1('1EjCambioEstilo48')"></div>
        <div id="1EjCambioEstilo49" class="block0" onclick="changeblock1('1EjCambioEstilo49')"></div>
        <div id="1EjCambioEstilo50" class="block0" onclick="changeblock1('1EjCambioEstilo50')"></div>
        <div id="1EjCambioEstilo51" class="block0" onclick="changeblock1('1EjCambioEstilo51')"></div>
        <div id="1EjCambioEstilo52" class="block0" onclick="changeblock1('1EjCambioEstilo52')"></div>
        <div id="1EjCambioEstilo53" class="block0" onclick="changeblock1('1EjCambioEstilo53')"></div>
        <div id="1EjCambioEstilo54" class="block0" onclick="changeblock1('1EjCambioEstilo54')"></div>
        <div id="1EjCambioEstilo55" class="block0" onclick="changeblock1('1EjCambioEstilo55')"></div>
        <!--Line4-->
        <div id="2EjCambioEstilo31" class="block0" onclick="changeblock1('2EjCambioEstilo31')"></div>
        <div id="2EjCambioEstilo32" class="block0" onclick="changeblock1('2EjCambioEstilo32')"></div>
        <div id="2EjCambioEstilo33" class="block0" onclick="changeblock1('2EjCambioEstilo33')"></div>
        <div id="2EjCambioEstilo34" class="block0" onclick="changeblock1('2EjCambioEstilo34')"></div>
        <div id="2EjCambioEstilo35" class="block0" onclick="changeblock1('2EjCambioEstilo35')"></div>
        <div id="2EjCambioEstilo36" class="block0" onclick="changeblock1('2EjCambioEstilo36')"></div>
        <div id="2EjCambioEstilo37" class="block0" onclick="changeblock1('2EjCambioEstilo37')"></div>
        <div id="2EjCambioEstilo38" class="block0" onclick="changeblock1('2EjCambioEstilo38')"></div>
        <div id="2EjCambioEstilo39" class="block0" onclick="changeblock1('2EjCambioEstilo39')"></div>
        <div id="2EjCambioEstilo40" class="block0" onclick="changeblock1('2EjCambioEstilo40')"></div>
        <div id="2EjCambioEstilo41" class="block0" onclick="changeblock1('2EjCambioEstilo41')"></div>
        <div id="2EjCambioEstilo42" class="block10" onclick="changeblock1('2EjCambioEstilo42')"></div>
        <div id="2EjCambioEstilo43" class="block10" onclick="changeblock1('2EjCambioEstilo43')"></div>
        <div id="2EjCambioEstilo44" class="block10" onclick="changeblock1('2EjCambioEstilo44')"></div>
        <div id="2EjCambioEstilo45" class="block0" onclick="changeblock1('2EjCambioEstilo45')"></div>
        <div id="2EjCambioEstilo46" class="block0" onclick="changeblock1('2EjCambioEstilo46')"></div>
        <div id="2EjCambioEstilo47" class="block0" onclick="changeblock1('2EjCambioEstilo47')"></div>
        <div id="2EjCambioEstilo48" class="block0" onclick="changeblock1('2EjCambioEstilo48')"></div>
        <div id="2EjCambioEstilo49" class="block0" onclick="changeblock1('2EjCambioEstilo49')"></div>
        <div id="2EjCambioEstilo50" class="block0" onclick="changeblock1('2EjCambioEstilo50')"></div>
        <div id="2EjCambioEstilo51" class="block0" onclick="changeblock1('2EjCambioEstilo51')"></div>
        <div id="2EjCambioEstilo52" class="block0" onclick="changeblock1('2EjCambioEstilo52')"></div>
        <div id="2EjCambioEstilo53" class="block0" onclick="changeblock1('2EjCambioEstilo53')"></div>
        <div id="2EjCambioEstilo54" class="block0" onclick="changeblock1('2EjCambioEstilo54')"></div>
        <div id="2EjCambioEstilo55" class="block0" onclick="changeblock1('2EjCambioEstilo55')"></div>
        <!--Line5-->
        <div id="3EjCambioEstilo" class="block0" onclick="changeblock1('3EjCambioEstilo')"></div>
        <div id="3EjCambioEstilo2" class="block4" onclick="changeblock1('3EjCambioEstilo2')"></div>
        <div id="3EjCambioEstilo3" class="block4" onclick="changeblock1('3EjCambioEstilo3')"></div>
        <div id="3EjCambioEstilo4" class="block0" onclick="changeblock1('3EjCambioEstilo4')"></div>
        <div id="3EjCambioEstilo5" class="block0" onclick="changeblock1('3EjCambioEstilo5')"></div>
        <div id="3EjCambioEstilo6" class="block0" onclick="changeblock1('3EjCambioEstilo6')"></div>
        <div id="3EjCambioEstilo7" class="block0" onclick="changeblock1('3EjCambioEstilo7')"></div>
        <div id="3EjCambioEstilo8" class="block0" onclick="changeblock1('3EjCambioEstilo8')"></div>
        <div id="3EjCambioEstilo9" class="block0" onclick="changeblock1('3EjCambioEstilo9')"></div>
        <div id="3EjCambioEstilo10" class="block0" onclick="changeblock1('3EjCambioEstilo10')"></div>
        <div id="3EjCambioEstilo11" class="block10" onclick="changeblock1('3EjCambioEstilo11')"></div>
        <div id="3EjCambioEstilo12" class="block10" onclick="changeblock1('3EjCambioEstilo12')"></div>
        <div id="3EjCambioEstilo13" class="block10" onclick="changeblock1('3EjCambioEstilo13')"></div>
        <div id="3EjCambioEstilo14" class="block10" onclick="changeblock1('3EjCambioEstilo14')"></div>
        <div id="3EjCambioEstilo15" class="block10" onclick="changeblock1('3EjCambioEstilo15')"></div>
        <div id="3EjCambioEstilo16" class="block0" onclick="changeblock1('3EjCambioEstilo16')"></div>
        <div id="3EjCambioEstilo17" class="block0" onclick="changeblock1('3EjCambioEstilo17')"></div>
        <div id="3EjCambioEstilo18" class="block0" onclick="changeblock1('3EjCambioEstilo18')"></div>
        <div id="3EjCambioEstilo19" class="block0" onclick="changeblock1('3EjCambioEstilo19')"></div>
        <div id="3EjCambioEstilo20" class="block0" onclick="changeblock1('3EjCambioEstilo20')"></div>
        <div id="3EjCambioEstilo21" class="block0" onclick="changeblock1('3EjCambioEstilo21')"></div>
        <div id="3EjCambioEstilo22" class="block0" onclick="changeblock1('3EjCambioEstilo22')"></div>
        <div id="3EjCambioEstilo23" class="block0" onclick="changeblock1('3EjCambioEstilo23')"></div>
        <div id="3EjCambioEstilo24" class="block0" onclick="changeblock1('3EjCambioEstilo24')"></div>
        <div id="3EjCambioEstilo25" class="block0" onclick="changeblock1('3EjCambioEstilo25')"></div>
        <!--Line6-->
        <div id="3EjCambioEstilo31" class="block4" onclick="changeblock1('3EjCambioEstilo31')"></div>
        <div id="3EjCambioEstilo32" class="block4" onclick="changeblock1('3EjCambioEstilo32')"></div>
        <div id="3EjCambioEstilo33" class="block4" onclick="changeblock1('3EjCambioEstilo33')"></div>
        <div id="3EjCambioEstilo34" class="block4" onclick="changeblock1('3EjCambioEstilo34')"></div>
        <div id="3EjCambioEstilo35" class="block0" onclick="changeblock1('3EjCambioEstilo35')"></div>
        <div id="3EjCambioEstilo36" class="block0" onclick="changeblock1('3EjCambioEstilo36')"></div>
        <div id="3EjCambioEstilo37" class="block0" onclick="changeblock1('3EjCambioEstilo37')"></div>
        <div id="3EjCambioEstilo38" class="block0" onclick="changeblock1('3EjCambioEstilo38')"></div>
        <div id="3EjCambioEstilo39" class="block0" onclick="changeblock1('3EjCambioEstilo39')"></div>
        <div id="3EjCambioEstilo40" class="block10" onclick="changeblock1('3EjCambioEstilo40')"></div>
        <div id="3EjCambioEstilo41" class="block10" onclick="changeblock1('3EjCambioEstilo41')"></div>
        <div id="3EjCambioEstilo42" class="block10" onclick="changeblock1('3EjCambioEstilo42')"></div>
        <div id="3EjCambioEstilo43" class="block10" onclick="changeblock1('3EjCambioEstilo43')"></div>
        <div id="3EjCambioEstilo44" class="block10" onclick="changeblock1('3EjCambioEstilo44')"></div>
        <div id="3EjCambioEstilo45" class="block10" onclick="changeblock1('3EjCambioEstilo45')"></div>
        <div id="3EjCambioEstilo46" class="block10" onclick="changeblock1('3EjCambioEstilo46')"></div>
        <div id="3EjCambioEstilo47" class="block0" onclick="changeblock1('3EjCambioEstilo47')"></div>
        <div id="3EjCambioEstilo48" class="block0" onclick="changeblock1('3EjCambioEstilo48')"></div>
        <div id="3EjCambioEstilo49" class="block0" onclick="changeblock1('3EjCambioEstilo49')"></div>
        <div id="3EjCambioEstilo50" class="block0" onclick="changeblock1('3EjCambioEstilo50')"></div>
        <div id="3EjCambioEstilo51" class="block0" onclick="changeblock1('3EjCambioEstilo51')"></div>
        <div id="3EjCambioEstilo52" class="block0" onclick="changeblock1('3EjCambioEstilo52')"></div>
        <div id="3EjCambioEstilo53" class="block0" onclick="changeblock1('3EjCambioEstilo53')"></div>
        <div id="3EjCambioEstilo54" class="block0" onclick="changeblock1('3EjCambioEstilo54')"></div>
        <div id="3EjCambioEstilo55" class="block0" onclick="changeblock1('3EjCambioEstilo55')"></div>
        <!--Line7-->
        <div id="4EjCambioEstilo31" class="block4" onclick="changeblock1('4EjCambioEstilo31')"></div>
        <div id="4EjCambioEstilo32" class="block4" onclick="changeblock1('4EjCambioEstilo32')"></div>
        <div id="4EjCambioEstilo33" class="block4" onclick="changeblock1('4EjCambioEstilo33')"></div>
        <div id="4EjCambioEstilo34" class="block4" onclick="changeblock1('4EjCambioEstilo34')"></div>
        <div id="4EjCambioEstilo35" class="block4" onclick="changeblock1('4EjCambioEstilo35')"></div>
        <div id="4EjCambioEstilo36" class="block0" onclick="changeblock1('4EjCambioEstilo36')"></div>
        <div id="4EjCambioEstilo37" class="block0" onclick="changeblock1('4EjCambioEstilo37')"></div>
        <div id="4EjCambioEstilo38" class="block0" onclick="changeblock1('4EjCambioEstilo38')"></div>
        <div id="4EjCambioEstilo39" class="block0" onclick="changeblock1('4EjCambioEstilo39')"></div>
        <div id="4EjCambioEstilo40" class="block0" onclick="changeblock1('4EjCambioEstilo40')"></div>
        <div id="4EjCambioEstilo41" class="block0" onclick="changeblock1('4EjCambioEstilo41')"></div>
        <div id="4EjCambioEstilo42" class="block0" onclick="changeblock1('4EjCambioEstilo42')"></div>
        <div id="4EjCambioEstilo43" class="block6" onclick="changeblock1('4EjCambioEstilo43')"></div>
        <div id="4EjCambioEstilo44" class="block0" onclick="changeblock1('4EjCambioEstilo44')"></div>
        <div id="4EjCambioEstilo45" class="block0" onclick="changeblock1('4EjCambioEstilo45')"></div>
        <div id="4EjCambioEstilo46" class="block0" onclick="changeblock1('4EjCambioEstilo46')"></div>
        <div id="4EjCambioEstilo47" class="block0" onclick="changeblock1('4EjCambioEstilo47')"></div>
        <div id="4EjCambioEstilo48" class="block0" onclick="changeblock1('4EjCambioEstilo48')"></div>
        <div id="4EjCambioEstilo49" class="block0" onclick="changeblock1('4EjCambioEstilo49')"></div>
        <div id="4EjCambioEstilo50" class="block0" onclick="changeblock1('4EjCambioEstilo50')"></div>
        <div id="4EjCambioEstilo51" class="block0" onclick="changeblock1('4EjCambioEstilo51')"></div>
        <div id="4EjCambioEstilo52" class="block0" onclick="changeblock1('4EjCambioEstilo52')"></div>
        <div id="4EjCambioEstilo53" class="block0" onclick="changeblock1('4EjCambioEstilo53')"></div>
        <div id="4EjCambioEstilo54" class="block0" onclick="changeblock1('4EjCambioEstilo54')"></div>
        <div id="4EjCambioEstilo55" class="block0" onclick="changeblock1('4EjCambioEstilo55')"></div>
        <!--Line8-->
        <div id="44EjCambioEstilo31" class="block0" onclick="changeblock1('44EjCambioEstilo31')"></div>
        <div id="44EjCambioEstilo32" class="block6" onclick="changeblock1('44EjCambioEstilo32')"></div>
        <div id="44EjCambioEstilo33" class="block6" onclick="changeblock1('44EjCambioEstilo33')"></div>
        <div id="44EjCambioEstilo34" class="block0" onclick="changeblock1('44EjCambioEstilo34')"></div>
        <div id="44EjCambioEstilo35" class="block0" onclick="changeblock1('44EjCambioEstilo35')"></div>
        <div id="44EjCambioEstilo36" class="block0" onclick="changeblock1('44EjCambioEstilo36')"></div>
        <div id="44EjCambioEstilo37" class="block0" onclick="changeblock1('44EjCambioEstilo37')"></div>
        <div id="44EjCambioEstilo38" class="block0" onclick="changeblock1('44EjCambioEstilo38')"></div>
        <div id="44EjCambioEstilo39" class="block0" onclick="changeblock1('44EjCambioEstilo39')"></div>
        <div id="44EjCambioEstilo40" class="block0" onclick="changeblock1('44EjCambioEstilo40')"></div>
        <div id="44EjCambioEstilo41" class="block0" onclick="changeblock1('44EjCambioEstilo41')"></div>
        <div id="44EjCambioEstilo42" class="block0" onclick="changeblock1('44EjCambioEstilo42')"></div>
        <div id="44EjCambioEstilo43" class="block6" onclick="changeblock1('44EjCambioEstilo43')"></div>
        <div id="44EjCambioEstilo44" class="block0" onclick="changeblock1('44EjCambioEstilo44')"></div>
        <div id="44EjCambioEstilo45" class="block0" onclick="changeblock1('44EjCambioEstilo45')"></div>
        <div id="44EjCambioEstilo46" class="block0" onclick="changeblock1('44EjCambioEstilo46')"></div>
        <div id="44EjCambioEstilo47" class="block0" onclick="changeblock1('44EjCambioEstilo47')"></div>
        <div id="44EjCambioEstilo48" class="block0" onclick="changeblock1('44EjCambioEstilo48')"></div>
        <div id="44EjCambioEstilo49" class="block0" onclick="changeblock1('44EjCambioEstilo49')"></div>
        <div id="44EjCambioEstilo50" class="block0" onclick="changeblock1('44EjCambioEstilo50')"></div>
        <div id="44EjCambioEstilo51" class="block0" onclick="changeblock1('44EjCambioEstilo51')"></div>
        <div id="44EjCambioEstilo52" class="block0" onclick="changeblock1('44EjCambioEstilo52')"></div>
        <div id="44EjCambioEstilo53" class="block0" onclick="changeblock1('44EjCambioEstilo53')"></div>
        <div id="44EjCambioEstilo54" class="block0" onclick="changeblock1('44EjCambioEstilo54')"></div>
        <div id="44EjCambioEstilo55" class="block0" onclick="changeblock1('44EjCambioEstilo55')"></div>
        <!--Line9-->
        <div id="5EjCambioEstilo" class="block0" onclick="changeblock1('5EjCambioEstilo')"></div>
        <div id="5EjCambioEstilo2" class="block6" onclick="changeblock1('5EjCambioEstilo2')"></div>
        <div id="5EjCambioEstilo3" class="block6" onclick="changeblock1('5EjCambioEstilo3')"></div>
        <div id="5EjCambioEstilo4" class="block0" onclick="changeblock1('5EjCambioEstilo4')"></div>
        <div id="5EjCambioEstilo5" class="block0" onclick="changeblock1('5EjCambioEstilo5')"></div>
        <div id="5EjCambioEstilo6" class="block0" onclick="changeblock1('5EjCambioEstilo6')"></div>
        <div id="5EjCambioEstilo7" class="block0" onclick="changeblock1('5EjCambioEstilo7')"></div>
        <div id="5EjCambioEstilo8" class="block0" onclick="changeblock1('5EjCambioEstilo8')"></div>
        <div id="5EjCambioEstilo9" class="block0" onclick="changeblock1('5EjCambioEstilo9')"></div>
        <div id="5EjCambioEstilo10" class="block0" onclick="changeblock1('5EjCambioEstilo10')"></div>
        <div id="5EjCambioEstilo11" class="block0" onclick="changeblock1('5EjCambioEstilo11')"></div>
        <div id="5EjCambioEstilo12" class="block0" onclick="changeblock1('5EjCambioEstilo12')"></div>
        <div id="5EjCambioEstilo13" class="block6" onclick="changeblock1('5EjCambioEstilo13')"></div>
        <div id="5EjCambioEstilo14" class="block0" onclick="changeblock1('5EjCambioEstilo14')"></div>
        <div id="5EjCambioEstilo15" class="block0" onclick="changeblock1('5EjCambioEstilo15')"></div>
        <div id="5EjCambioEstilo16" class="block0" onclick="changeblock1('5EjCambioEstilo16')"></div>
        <div id="5EjCambioEstilo17" class="block0" onclick="changeblock1('5EjCambioEstilo17')"></div>
        <div id="5EjCambioEstilo18" class="block0" onclick="changeblock1('5EjCambioEstilo18')"></div>
        <div id="5EjCambioEstilo19" class="block0" onclick="changeblock1('5EjCambioEstilo19')"></div>
        <div id="5EjCambioEstilo20" class="block0" onclick="changeblock1('5EjCambioEstilo20')"></div>
        <div id="5EjCambioEstilo21" class="block0" onclick="changeblock1('5EjCambioEstilo21')"></div>
        <div id="5EjCambioEstilo22" class="block0" onclick="changeblock1('5EjCambioEstilo22')"></div>
        <div id="5EjCambioEstilo23" class="block0" onclick="changeblock1('5EjCambioEstilo23')"></div>
        <div id="5EjCambioEstilo24" class="block0" onclick="changeblock1('5EjCambioEstilo24')"></div>
        <div id="5EjCambioEstilo25" class="block0" onclick="changeblock1('5EjCambioEstilo25')"></div>
        <!--Line10-->
        <div id="5EjCambioEstilo31" class="block0" onclick="changeblock1('5EjCambioEstilo31')"></div>
        <div id="5EjCambioEstilo32" class="block6" onclick="changeblock1('5EjCambioEstilo32')"></div>
        <div id="5EjCambioEstilo33" class="block6" onclick="changeblock1('5EjCambioEstilo33')"></div>
        <div id="5EjCambioEstilo34" class="block0" onclick="changeblock1('5EjCambioEstilo34')"></div>
        <div id="5EjCambioEstilo35" class="block0" onclick="changeblock1('5EjCambioEstilo35')"></div>
        <div id="5EjCambioEstilo36" class="block0" onclick="changeblock1('5EjCambioEstilo36')"></div>
        <div id="5EjCambioEstilo37" class="block0" onclick="changeblock1('5EjCambioEstilo37')"></div>
        <div id="5EjCambioEstilo38" class="block0" onclick="changeblock1('5EjCambioEstilo38')"></div>
        <div id="5EjCambioEstilo39" class="block0" onclick="changeblock1('5EjCambioEstilo39')"></div>
        <div id="5EjCambioEstilo40" class="block0" onclick="changeblock1('5EjCambioEstilo40')"></div>
        <div id="5EjCambioEstilo41" class="block0" onclick="changeblock1('5EjCambioEstilo41')"></div>
        <div id="5EjCambioEstilo42" class="block0" onclick="changeblock1('5EjCambioEstilo42')"></div>
        <div id="5EjCambioEstilo43" class="block6" onclick="changeblock1('5EjCambioEstilo43')"></div>
        <div id="5EjCambioEstilo44" class="block0" onclick="changeblock1('5EjCambioEstilo44')"></div>
        <div id="5EjCambioEstilo45" class="block0" onclick="changeblock1('5EjCambioEstilo45')"></div>
        <div id="5EjCambioEstilo46" class="block0" onclick="changeblock1('5EjCambioEstilo46')"></div>
        <div id="5EjCambioEstilo47" class="block0" onclick="changeblock1('5EjCambioEstilo47')"></div>
        <div id="5EjCambioEstilo48" class="block0" onclick="changeblock1('5EjCambioEstilo48')"></div>
        <div id="5EjCambioEstilo49" class="block0" onclick="changeblock1('5EjCambioEstilo49')"></div>
        <div id="5EjCambioEstilo50" class="block0" onclick="changeblock1('5EjCambioEstilo50')"></div>
        <div id="5EjCambioEstilo51" class="block0" onclick="changeblock1('5EjCambioEstilo51')"></div>
        <div id="5EjCambioEstilo52" class="block11" onclick="changeblock1('5EjCambioEstilo52')"></div>
        <div id="5EjCambioEstilo53" class="block11" onclick="changeblock1('5EjCambioEstilo53')"></div>
        <div id="5EjCambioEstilo54" class="block11" onclick="changeblock1('5EjCambioEstilo54')"></div>
        <div id="5EjCambioEstilo55" class="block11" onclick="changeblock1('5EjCambioEstilo55')"></div>
        <!--Line11-->
        <div id="6EjCambioEstilo31" class="block2" onclick="changeblock1('6EjCambioEstilo31')"></div>
        <div id="6EjCambioEstilo32" class="block6" onclick="changeblock1('6EjCambioEstilo32')"></div>
        <div id="6EjCambioEstilo33" class="block6" onclick="changeblock1('6EjCambioEstilo33')"></div>
        <div id="6EjCambioEstilo34" class="block0" onclick="changeblock1('6EjCambioEstilo34')"></div>
        <div id="6EjCambioEstilo35" class="block0" onclick="changeblock1('6EjCambioEstilo35')"></div>
        <div id="6EjCambioEstilo36" class="block0" onclick="changeblock1('6EjCambioEstilo36')"></div>
        <div id="6EjCambioEstilo37" class="block0" onclick="changeblock1('6EjCambioEstilo37')"></div>
        <div id="6EjCambioEstilo38" class="block0" onclick="changeblock1('6EjCambioEstilo38')"></div>
        <div id="6EjCambioEstilo39" class="block0" onclick="changeblock1('6EjCambioEstilo39')"></div>
        <div id="6EjCambioEstilo40" class="block0" onclick="changeblock1('6EjCambioEstilo40')"></div>
        <div id="6EjCambioEstilo41" class="block0" onclick="changeblock1('6EjCambioEstilo41')"></div>
        <div id="6EjCambioEstilo42" class="block0" onclick="changeblock1('6EjCambioEstilo42')"></div>
        <div id="6EjCambioEstilo43" class="block11" onclick="changeblock1('6EjCambioEstilo43')"></div>
        <div id="6EjCambioEstilo44" class="block11" onclick="changeblock1('6EjCambioEstilo44')"></div>
        <div id="6EjCambioEstilo45" class="block11" onclick="changeblock1('6EjCambioEstilo45')"></div>
        <div id="6EjCambioEstilo46" class="block11" onclick="changeblock1('6EjCambioEstilo46')"></div>
        <div id="6EjCambioEstilo47" class="block11" onclick="changeblock1('6EjCambioEstilo47')"></div>
        <div id="6EjCambioEstilo48" class="block11" onclick="changeblock1('6EjCambioEstilo48')"></div>
        <div id="6EjCambioEstilo49" class="block11" onclick="changeblock1('6EjCambioEstilo49')"></div>
        <div id="6EjCambioEstilo50" class="block11" onclick="changeblock1('6EjCambioEstilo50')"></div>
        <div id="6EjCambioEstilo51" class="block11" onclick="changeblock1('6EjCambioEstilo51')"></div>
        <div id="6EjCambioEstilo52" class="block11" onclick="changeblock1('6EjCambioEstilo52')"></div>
        <div id="6EjCambioEstilo53" class="block11" onclick="changeblock1('6EjCambioEstilo53')"></div>
        <div id="6EjCambioEstilo54" class="block11" onclick="changeblock1('6EjCambioEstilo54')"></div>
        <div id="6EjCambioEstilo55" class="block11" onclick="changeblock1('6EjCambioEstilo55')"></div>
        <!--Line12-->
        <div id="7EjCambioEstilo" class="block2" onclick="changeblock1('7EjCambioEstilo')"></div>
        <div id="7EjCambioEstilo2" class="block2" onclick="changeblock1('7EjCambioEstilo2')"></div>
        <div id="7EjCambioEstilo3" class="block2" onclick="changeblock1('7EjCambioEstilo3')"></div>
        <div id="7EjCambioEstilo4" class="block2" onclick="changeblock1('7EjCambioEstilo4')"></div>
        <div id="7EjCambioEstilo5" class="block2" onclick="changeblock1('7EjCambioEstilo5')"></div>
        <div id="7EjCambioEstilo6" class="block2" onclick="changeblock1('7EjCambioEstilo6')"></div>
        <div id="7EjCambioEstilo7" class="block2" onclick="changeblock1('7EjCambioEstilo7')"></div>
        <div id="7EjCambioEstilo8" class="block2" onclick="changeblock1('7EjCambioEstilo8')"></div>
        <div id="7EjCambioEstilo9" class="block2" onclick="changeblock1('7EjCambioEstilo9')"></div>
        <div id="7EjCambioEstilo10" class="block2" onclick="changeblock1('7EjCambioEstilo10')"></div>
        <div id="7EjCambioEstilo11" class="block2" onclick="changeblock1('7EjCambioEstilo11')"></div>
        <div id="7EjCambioEstilo12" class="block11" onclick="changeblock1('7EjCambioEstilo12')"></div>
        <div id="7EjCambioEstilo13" class="block11" onclick="changeblock1('7EjCambioEstilo13')"></div>
        <div id="7EjCambioEstilo14" class="block11" onclick="changeblock1('7EjCambioEstilo14')"></div>
        <div id="7EjCambioEstilo15" class="block11" onclick="changeblock1('7EjCambioEstilo15')"></div>
        <div id="7EjCambioEstilo16" class="block11" onclick="changeblock1('7EjCambioEstilo16')"></div>
        <div id="7EjCambioEstilo17" class="block11" onclick="changeblock1('7EjCambioEstilo17')"></div>
        <div id="7EjCambioEstilo18" class="block11" onclick="changeblock1('7EjCambioEstilo18')"></div>
        <div id="7EjCambioEstilo19" class="block11" onclick="changeblock1('7EjCambioEstilo19')"></div>
        <div id="7EjCambioEstilo20" class="block11" onclick="changeblock1('7EjCambioEstilo20')"></div>
        <div id="7EjCambioEstilo21" class="block11" onclick="changeblock1('7EjCambioEstilo21')"></div>
        <div id="7EjCambioEstilo22" class="block11" onclick="changeblock1('7EjCambioEstilo22')"></div>
        <div id="7EjCambioEstilo23" class="block11" onclick="changeblock1('7EjCambioEstilo23')"></div>
        <div id="7EjCambioEstilo24" class="block11" onclick="changeblock1('7EjCambioEstilo24')"></div>
        <div id="7EjCambioEstilo25" class="block11" onclick="changeblock1('7EjCambioEstilo25')"></div>

        <!--grass-->
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block7"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
        <div id="grass" class="block11"></div>
    </div>
    <!--Inventory, pickaxe and menu-->
    <?php echo $pickaxe; ?>
    <!-- Inventory -->
    <?php echo $inv; ?>
    <!--Menu modal-->
    <?php echo $menu; ?>
</body>
</html>

