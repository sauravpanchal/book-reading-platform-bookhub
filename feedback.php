<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookhub";

$conn = new mysqli($servername,$username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $city = $_POST['city'];
    $rate1 = $_POST['rate1'];
    $rate2 = $_POST['rate2'];

    #Inserting into database
    $sql = "INSERT INTO feedback (firstName, lastName, city, rate1, rate2) VALUES ('$firstName', '$lastName', '$city', '$rate1', '$rate2')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank You for submitting your feedback";
    } else {
        echo "Not submitted!";
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
    <title>Feedback</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="text-center mt-5">Feedback</h1>
            <h6 class="text-center mt-3">We would love to hear from you! Please take a moment to let us know about your
                experience.</h3>
        </div>
        <div class="content">
            <form method="POST" action="feedback.php">

                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                    style="height: 50px; font-size: 20px; margin-top: 60px;">

                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
                    style="height: 50px; font-size: 20px; margin-top: 40px;">

                <input type="textarea" class="form-control" id="city" name="city" placeholder="City"
                    style="height: 50px; font-size: 20px; margin-top: 40px;">

                <p style="font-size: 20px; margin-top: 40px;">How would you rate your overall experiencewith BookHub?
                </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate1" id="val_1" value="1">
                    <label class="form-check-label" for="val_1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate1" id="val_2" value="2">
                    <label class="form-check-label" for="val_2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate1" id="val_3" value="3">
                    <label class="form-check-label" for="val_3">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate1" id="val_4" value="4">
                    <label class="form-check-label" for="val_4">4</label>
                </div>

                <p style="font-size: 20px; margin-top: 40px;">How would you rate our communication with you?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate2" id="val_1" value="1">
                    <label class="form-check-label" for="val_1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate2" id="val_2" value="2">
                    <label class="form-check-label" for="val_2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate2" id="val_3" value="3">
                    <label class="form-check-label" for="val_3">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rate2" id="val_4" value="4">
                    <label class="form-check-label" for="val_4">4</label>
                </div>

                <div style="text-align: center; margin-top: 30px; ">
                            <button type="submit" class="btn btn-success" style="font-family: 'Open Sans', sans-serif; font-size: 20px; margin-bottom:18px;">Submit</button>
                        </div>

            </form>
        </div>

    </div>

</body>

</html>