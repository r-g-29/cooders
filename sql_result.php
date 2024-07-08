<?php
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "king";
        // database connectivity
    $conn = mysqli_connect($servername,$username,$password,$database);
        // variable for field input
        $name = $_GET["name"];
        $email = $_GET["email"];
        $phno = $_GET["phn"];
        
            // table creation
        $insert =  "INSERT INTO `form` (`Name`, `email`, `Ph_no`) VALUES ('$name', '$email', '$phno');";
            //table execution
        $done = mysqli_query($conn,$insert);

        if($done == true){
             echo "<br>Data Submitted...";
            
        }
        else{
             echo "<br>Data not Submitted...";
        }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful</title>
    <style>
        body{
            display: grid;
            justify-content: center;
            align-content: center;
            margin: 2.5em;
        }
        .container{
            border: 1px solid green;
            width: 600px;
            height: 700px;
            color: white;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgb(0,151,0);
        }
        img{
            display:block;
            margin-top:40%;
            margin-left:auto;
            margin-right:auto;
            border: none;
            width:120px;
            height:120px;
        }
        h1{
            color:rgb(0,152,0);
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="correct.png" alt="right tick">
        <h1>Data Successfully Submitted</h1>
        <?php echo "$done"; ?>
    </div>
</body>
</html>