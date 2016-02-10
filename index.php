<?php
/**
 * Created by PhpStorm.
 * User: Bamuel
 * Date: 8/02/2016
 */
include('version.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Universe of Blocks</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/uob.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<div class="playmenu">
<center>
<br>
<a class="btn btn-success" href="level/selector.php" role="button"><h4 style="font-weight: bold;">PLAY GAME!</h4></a>
            <h4>
                <span class="label label-danger">Version <?php echo $version; ?></span>
            </h4>
</center>

</div>
<body class="fondoweb">
<div id="page">

    <div class="panel" id="container">
    <img src="img/grass.png"><h1>Welcome to Universe of Blocks Project</h1>
    </div>
    <div class="panel" id="container2">
    <div style="color: #FFFFFF; font-size:35px; font-weight: bold;">Version 0.5.7 Alpha</div>
    <br><div style="color: #B5B5B4; font-size:20px; font-weight: bold;">- New index page! </div>
    <br><div style="color: #B5B5B4; font-size:20px; font-weight: bold;">- Updated version number </div>
    <br><div style="color: #B5B5B4; font-size:20px; font-weight: bold;">- Redesigned level selection </div>
    <br><div style="color: #B5B5B4; font-size:20px; font-weight: bold;">- New background </div>
    <br><br><div style="color: #B5B5B4; font-size:20px; font-weight: bold;">This project is a recreation of a 2D minecraft perception, it is made with HTML, CSS, JS. This game is at it's early stages meaning that there are still many features to add! </div>
    <center><br><a class="btn btn-warning" href="team.php" role="button"><h5>Our Team</h5></a><br></center>
        

        


        </div>
    </div>
</div>
<!--<h3>This project is a recreation of a 2D minecraft perception, it is made with HTML, CSS, JS. This game is at it's early stages meaning that there are still many features to add!</h3>
<a class="btn btn-warning" href="team.php" role="button"><h5>Our Team</h5></a><br>-->
</body>
</html>
