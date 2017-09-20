<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <header>
    
        <?php

            include("nav_bar.php");

        ?>
    
    </header>

    <?= $content ?>

    <!-- <script src="node_modules/jquery/dist/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>