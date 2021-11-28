<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookhub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['username'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    $sql = "INSERT INTO signup (id, firstname, lastname, email, username, password) VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!-- links -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

</head>
<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3" style="margin-top: 50px;">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h2>Sign Up</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="# ">

                        <div class="form-group" style="margin-top: 20px">
                            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name" style="height: 50px; font-size: 20px;">
                        </div>

                        <div class="form-group" style="margin-top: 20px">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" style="height: 50px; font-size: 20px;">
                        </div>

                        <div class="form-group" style="margin-top: 20px">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" style="height: 50px; font-size: 20px;">
                        </div>


                        <div class="form-group" style="margin-top: 20px">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" style="height: 50px; font-size: 20px;">
                        </div>

                        <div class="form-group" style="margin-top: 20px">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="height: 50px; font-size: 20px;">
                        </div>

                        <div style="text-align: center; margin-top: 30px; ">
                            <button type="submit" class="btn btn-success" style="font-family: 'Open Sans', sans-serif; font-size: 20px;">Submit</button>
                        </div>
                    </form>
                    
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>

        </div>
       
    </div>

    
</body>
</html>