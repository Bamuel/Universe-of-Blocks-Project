<?php
include('../../../version.php');
?>
<!DOCTYPE html>
<html><head>
    <title>Universe of Blocks #2</title>

</head>
<body class="">
<style type="text/css">
    html{
        width:100%;
        height:100%;
        background:#F2F5A9;
        animation: animacionColor 500s infinite;
        -o-animation: animacionColor 500s infinite;
        -ms-animation: animacionColor 500s infinite;
        -webkit-animation: animacionColor 500s infinite;
        -moz-animation: animacionColor 500s infinite;
    }
    @keyframes animacionColor {
        0% {
            background: #F6A923;
        }
        35% {
            background: #36CCDF;
        }
        50% {
            background: #3C7CC1;
        }
        65% {
            background: #153556;
        }
        100% {
            background: #F6A923;
        }
    }
    @-webkit-keyframes animacionColor {
        0% {
            background: #F6A923;
        }
        35% {
            background: #36CCDF;
        }
        50% {
            background: #3C7CC1;
        }
        65% {
            background: #153556;
        }
        100% {
            background: #F6A923;
        }
    }
    @-ms-keyframes animacionColor {
        0% {
            background: #F6A923;
        }
        35% {
            background: #36CCDF;
        }
        50% {
            background: #3C7CC1;
        }
        65% {
            background: #153556;
        }
        100% {
            background: #F6A923;
        }
    }
    @-o-keyframes animacionColor {
        0% {
            background: #F6A923;
        }
        35% {
            background: #36CCDF;
        }
        50% {
            background: #3C7CC1;
        }
        65% {
            background: #153556;
        }
        100% {
            background: #F6A923;
        }
    }
    @-moz-keyframes animacionColor {
        0% {
            background: #F6A923;
        }
        35% {
            background: #36CCDF;
        }
        50% {
            background: #3C7CC1;
        }
        65% {
            background: #153556;
        }
        100% {
            background: #F6A923;
        }
    }
</style>
<script type="text/javascript">
    function rain_off(){
        var obj3 = 1;
        if (obj3 == 1){
            void(document.getElementById('rain_panel').style.visibility = 'hidden');
            var intevalo = setInterval('miscojones',1000);
        }
    }
    function rain_on(){
        var obj3 = 1;
        if (obj3 == 1){
            void(document.getElementById('rain_panel').style.visibility = 'visible');
            var intevalo = setInterval('miscojones',1000);
        }
    }</script>



<style type="text/css">
    @-webkit-keyframes rotating {

        from{
            -webkit-transform: rotate(0deg);
        }
        to{
            -webkit-transform: rotate(360deg);
        }
    }

    .rotating {
        -webkit-animation: rotating 500s linear infinite;
        -moz-animation: rotating 500s linear infinite;
        -ms-animation: rotating 500s linear infinite;
        -o-animation: rotating 500s linear infinite;
        animation: rotating 500s linear infinite;
    }
</style>
<center>

    <link rel="stylesheet" type="text/css" href="core.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" style="color: rgb(51, 51, 51);"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="player.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.animate-colors.js" type="text/javascript"></script>
    <script type="text/javascript">
        var defaultblock = 0;
        var blockid = 1;
        var woodm = 1;
        var hola = 0;
        function changeblock1(id) {
            var slot = document.getElementById(id);
            slot.className = "block" + parseInt(blockid);
        }

    </script>
    <!--
    Implementing survival!!!!! cool
    -->
    <script type="text/javascript">
        function getblockidf (id) {
            var getElementById = document.getElementById(id);
            switch(getElementById)
            {
                case 0:
                    alert('a = 0');
                    break;
                case "block10":
                    alert('a = 1');
                    break;
                default:
                    alert('a = ?');
                    break;
            }

        }
    </script>
    <script type="text/javascript">


        $('#oknicknameevermine').click(function(){ // primera forma
            defaultblock+=2;
            stop(a);
        });
    </script>
    <img class="rotating" style="left: 10px; top: 190px; position: absolute; z-index: 1;" src="img/time_cycle.png">
    <div class="page" id="container">
        <div class="minecraft">
        </div>
    </div>
    <h3 style="margin-left: 50px; position: absolute; z-index: 1; "><?php echo $version; ?></h3>
    <br>
    <div style="position: relative;">
        <!--
        <script type="text/javascript">
        setInterval(rain_off , 800000);
        setInterval(rain_on , 30000);
        </script>
        -->
        <!--Rain-->
        <div id="rain_panel" style="position: absolute; z-index: 1; visibility: hidden; margin: auto; left: 0; right:0;">
            <img src="rain.gif">
        </div>
        <center>
            <!--Line1-->
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
            <center>
                <div class="panel" style="height: 1000px; width: 100%; position: fixed; background-color: #36709D; border-radius: 0px; z-index: 1;">
                    <img id="pickaxe" src="img/remove_block_button.png" height="40" width="40" onclick="blockid = 0;return false" style="float: left; margin-left: 10px;"><p style="margin-top: 40px;float: left; margin-left: 0; position: fixed;">Pickaxe</p>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal" style="float: right; margin-right: 80px;">
                        Open Inventory
                    </button>
                    <button type="button" class="btn btn-primary btn-lg glyphicon glyphicon-pause" data-toggle="modal" data-target="#menumodal" style="z-index: 1;">
                        Menu
                    </button>
                </div>
                <!-- Inventory -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                <h4 class="modal-title" id="myModalLabel">Creative Inventory</h4>
                            </div>
                            <div class="modal-body" style="height:500px;">
                                <div class="modal-header">

                                </div>


                                <ul class="nav nav-tabs" id="tabContent">
                                    <li class="active"><a href="#details" data-toggle="tab">Blocks</a></li>
                                    <li><a href="#access-security" data-toggle="tab">Blocks</a></li>
                                    <li><a href="#networking" data-toggle="tab">Special</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="details">

                                        <a id="invslot1" class="block1" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 1;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Wood Planks</p></a>
                                        <a id="invslot2" class="block2" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 2;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Grass</p></a>
                                        <a id="invslot3" class="block34" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 34;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Snowy Grass</p></a>
                                        <a id="invslot4" class="block3" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 3;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone</p></a>
                                        <a id="invslot5" class="block4" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 4;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Leaves</p></a>
                                        <a id="invslot6" class="block5" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 5;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Glass</p></a>
                                        <a id="invslot7" class="block6" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 6;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Wood</p></a>
                                        <a id="invslot8" class="block7" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 7;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Dirt</p></a>
                                        <a id="invslot9" class="block9" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 9;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Wood Slab</p></a>
                                        <a id="invslot10" class="block10" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 10;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Desert Leaves</p></a>
                                        <a id="invslot11" class="block11" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 11;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Sand</p></a>
                                        <a id="invslot12" class="block14" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 14;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Wood Stairs</p></a>
                                        <a id="invslot13" class="block15" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 15;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Wood Stairs</p></a>
                                        <a id="invslot14" class="block22" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 22;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Tall Grass</p></a>
                                        <a id="invslot15" class="block25" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 25;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Pumpkin</p></a>
                                        <a id="invslot16" class="block32" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 32;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Dirt Farm</p></a>
                                        <a id="invslot17" class="block35" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 35;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Snow Block</p></a>
                                        <a id="invslot18" class="block38" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 38;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Bedrock</p></a>
                                        <a id="invslot19" class="block39" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 39;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Brick</p></a>
                                        <a id="invslot20" class="block43" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 43;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Cobble</p></a>
                                        <a id="invslot21" class="block44" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 44;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Mossy Cobble</p></a>
                                        <a id="invslot22" class="block47" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 47;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Gravel</p></a>
                                        <a id="invslot23" class="block48" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 48;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Hay Block</p></a>
                                        <a id="invslot24" class="block49" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 49;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Ice</p></a>
                                        <a id="invslot25" class="block50" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 50;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Melon</p></a>
                                        <a id="invslot26" class="block51" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 51;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Sandstone</p></a>
                                        <a id="invslot27" class="block52" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 52;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone</p></a>
                                        <a id="invslot28" class="block53" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 53;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Obsidian</p></a>
                                        <a id="invslot29" class="block54" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 54;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Quartz</p></a>
                                        <a id="invslot30" class="block55" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 55;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Quartz</p></a>
                                        <a id="invslot31" class="block56" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 56;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Quartz</p></a>
                                        <a id="invslot32" class="block8" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 8;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Music Box</p></a>

                                        <div class="control-group">

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="access-security">
                                        <a id="invslot33" class="block16" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 16;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Fence</p></a>
                                        <a id="invslot34" class="block17" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 17;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Fence</p></a>
                                        <a id="invslot35" class="block18" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 18;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Fence</p></a>
                                        <a id="invslot36" class="block19" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 19;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Fence</p></a>
                                        <a id="invslot37" class="block27" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 27;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone Bricks</p></a>
                                        <a id="invslot38" class="block28" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 28;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone Bricks</p></a>
                                        <a id="invslot39" class="block29" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 29;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone Bricks</p></a>
                                        <a id="invslot40" class="block30" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 30;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone Brick Stairs</p></a>
                                        <a id="invslot41" class="block31" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 31;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Stone Brick Stairs</p></a>
                                    </div>
                                    <div class="tab-pane" id="networking">
                                        <a id="invslot42" class="block20" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 20;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Water</p></a>
                                        <a id="invslot43" class="block21" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 21;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Lava</p></a>
                                        <a id="invslot44" class="block26" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 26;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Halloween pumpkin</p></a>
                                        <a id="invslot45" class="item1" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 33;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Seeds</p></a>
                                        <a id="invslot46" class="block36" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 36;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Snowman Hat</p></a>
                                        <a id="invslot47" class="block37" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 37;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Snowman Bottom</p></a>
                                        <a id="invslot48" class="block40" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 40;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Cactus</p></a>
                                        <a id="invslot49" class="block41" style="margin-left: 30px; margin-top: 2px;" blockid="" onclick="blockid = 41;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Cake</p></a>
                                        <a id="invslot50" class="block42" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 42;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Cauldron</p></a>
                                        <a id="invslot51" class="block45" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 45;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Crafting Table</p></a>
                                        <a id="invslot52" class="block46" style="margin-left: 30px; margin-top: 60px;" blockid="" onclick="blockid = 46;return false" data-dismiss="modal"><p style="margin-top: 48px;" data-dismiss="modal">Enchanting Table</p></a>
                                    </div>
                                </div>


                                <!--Implement Stone pilars!!!-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Menu modal-->


                <div class="modal fade" id="menumodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                <h4 class="modal-title" id="menumodalLabel">Game Menu</h4>
                            </div>
                            <div class="modal-body">
                                <h2>Load a World(Disabled)</h2>
                                <!--
                        <form enctype="multipart/form-data" action="uploader.php" method="POST">
                        <input name="uploadedfile" type="file">
                        <input type="submit" value="Subir archivo">
                        </form>
                        <a href="index.html" download="index.html">
                        Descargar Archivo
                        </a>
                        -->
                                <br>
                                <br>
                                <h2>Game Panels(Beta)</h2>
                                <button id="hidden" type="button" class="btn btn-success" onclick="void(document.getElementById('gamepanel1').style.visibility='hidden')">Primary Panel</button>
                                <button id="visible" type="button" class="btn btn-success" onclick="void(document.getElementById('gamepanel1').style.visibility='visible')">Second Panel</button>
                                <br>
                                <br>
                                <h2>Weather</h2>
                                <button id="rain_hidden" type="button" class="btn btn-success" onclick="void(document.getElementById('rain_panel').style.visibility='hidden')">Sun</button>
                                <button id="rain_visible" type="button" class="btn btn-danger" onclick="void(document.getElementById('rain_panel').style.visibility='visible')">Rain</button>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</body>
</html>
