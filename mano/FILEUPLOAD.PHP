<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="filecss.css">
    <title>file</title>
</head>
<body>
<div class="container">

    <form method="post" enctype="multipart/form-data">
        <div class="fg">
        <label class="label" >file name : </label>
        <input type="text" name="title" placeholder="file name">
        </div>
        <div class="fg1">
        <label class="label" > file upload : </label>
        <input type="file" name="file">
        </div>
        <div class="fh">
        <input type="submit" name="submit" >
        </div>
    </form>
</div>  


<div class="label5">

<?php

    $localhost = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "mano";


    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    if (isset($_POST["submit"]))
    {
        $title = $_POST["title"];


        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];


        $uploads_dir = '/images';


        $sql = "insert into fileup(title,image) values ('$title','$pname')";

        if (mysqli_query($conn,$sql)){
            
            echo "file succesfully uploaded ";
        }
        else {
            echo "error";
        }






    }










?>
</div>
   
</body>
</html>





