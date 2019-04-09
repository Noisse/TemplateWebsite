<!doctype html>
<?php
//Mocht er een database bij komen hier plaatsen.
//Komt hoogst waarschijnlijk een database bij voor foto's.
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Home page</title>
<!--        <link href="css/eigen.css" rel="stylesheet" type="text/css">-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

        </style>
    </head>
    <body>
        <?php
        //Roept de bijbehoorde pagina op die meegegeven wordt.
            include "InlogBar.php";
        ?>
        <div class="banner"><img src="Foto's/placeholder-750x451.png" width="100%" height="250"> </div>

        <?php
        //Roept de bijbehoorde pagina op die meegegeven wordt.
            include 'navigation.php';
        ?>
        <div id="contentHomepage" class="content-container" align="center">


        </div>



        <?php
        //Roept de bijbehoorde pagina op die meegegeven wordt.
        include "Footer.php";
        ?>
    </body>

</html>
