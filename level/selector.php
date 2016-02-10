<?php
/**
 * Created by PhpStorm.
 * User: Bamuel
 * Date: 8/02/2016
 */
include('../version.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Universe of Blocks</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/uob.css" rel="stylesheet" type="text/css">
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
<body class="fondoweb">
<div id="page">
    <img src="../img/grass.png">
    <h1>Universe of Blocks Project</h1>
    <hr>
    <div class="panel" id="container">
        <h3>Select Map</h3>
        <br>
        <br>
        <div id="select">
            <a class="btn btn-success" href="default/chunks/1.php" role="button">Default Map</a>
            <a class="btn btn-warning" href="" role="button" onclick="alert('Coming Soon')">Auto Generate</a>
            <a class="btn btn-info" href="" role="button" onclick="alert('Coming Soon')">Bamuel's Adventure</a>
        </div>
        <br>
        <br>
        <br>
        <div id="select">
            <a role="button" class="btn btn-danger" href="../index.php">Return</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="version">
            <h4>
                <span class="label label-danger">Version <?php echo $version; ?></span>
            </h4>
        </div>
    </div>
</div>
</body>
</html>
