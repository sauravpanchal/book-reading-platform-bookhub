<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookhub";

$login = "false";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = "";
    $lastname = "";
    
    
    $sql = "select firstname, lastname, email from signup where username='$username' AND password='$password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $login = "true";

      while ($fieldinfo = $result->fetch_assoc()) {
         $firstname = $fieldinfo['firstname'];
         $lastname = $fieldinfo['lastname'];
         $email = $fieldinfo['email'];
        
      }
        
  
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        
        header("location: index.php");
        // echo "successfully logged in";
    } else {
        $login = "false";
        echo "Incorrect password or username";
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



<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

</head>
<body>
    
    <div class="container">
        <div class="row col-md-6 col-md-offset-3" style="margin-top: 50px;">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h2>Login</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="login.php">
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
                <p class="text-center" style="margin-top: 4px; margin-bottom: 20px;">Don't have an account? <a href="signup.php">Sign up</a></p>
                <!-- <div class="panel-footer">
                    
                </div> -->
            </div>

        </div>
       
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>