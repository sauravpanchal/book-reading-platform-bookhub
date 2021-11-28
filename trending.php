
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">



</head>
<body>
<div class="container py-5">
    <h1 style="text-align:left; margin-bottom:40px;">Trending</h1>

    
    <div class="row">

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
            $query = "SELECT * FROM trending";
            $query_run = mysqli_query($conn, $query);
            $check_ques = mysqli_num_rows($query_run) > 0;

            if ($check_ques) {
                while($row = mysqli_fetch_array($query_run)) {
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> <?php echo $row['bookName']; ?> </h3>
                                <p card-text>Author: <?php echo $row['author']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php 

                }

            } else {
                echo "No books found!";
            }
        ?>


        
    </div>

</div>
</body>
</html>