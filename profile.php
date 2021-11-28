<?php

session_start();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

    <div class="container">
        <div>
            <h1 class="mt-5" style="margin-left:30px"> Profile</h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="img/profile.png" style="height: 220px; margin-left: 20px;" >
            </div>
            <div class="col-md-8">
                <p style="font-size: 36px; font-weight: bold;"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]; ?></p>
                <p style="font-size: 28px;">UID: <?php echo $_SESSION["username"]; ?></p>

                <p style="font-size: 28px;">email: <?php echo $_SESSION["email"]; ?></p>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</body>
</html>