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

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookName = $_POST['bookName'];
    $rating = $_POST['rating'];
    $views = $_POST['views'];
     
    
    $sql = "INSERT INTO reviews (bookName, rating, views) VALUES ('$bookName', '$rating', '$views')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Review Submitted";
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
    <h1 style="text-align:center; margin-top: 30px; margin-bottom:40px;">Add review</h1>
        
    <form method="POST" action="add_review.php">

        <input type="text" class="form-control" id="bookName" name="bookName" placeholder="Book name"
            style="height: 50px; font-size: 20px; margin-top: 60px;">

        <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating"
            style="height: 50px; font-size: 20px; margin-top: 40px;">

        <input type="textarea" class="form-control" id="views" name="views" placeholder="Your views..."
            style="height: 50px; font-size: 20px; margin-top: 40px;">


        <div style="text-align: center; margin-top: 30px; ">
                    <button type="submit" class="btn btn-success" style="font-family: 'Open Sans', sans-serif; font-size: 20px; margin-bottom:18px;">Submit</button>
                </div>

        </form>
       
    </div>

    
</body>
</html>