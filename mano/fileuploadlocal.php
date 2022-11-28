<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">

<label for="fileselect"> select file to upload </label>
<input type="file" name="file" >
<input type="submit" name="submit" value="click to submit">

<p> <strong> Note </strong> only pdf,doc formats.</p>

</form>

<?php 

    if(isset($_POST['submit']))
    {
        $allow=array("pdf"=>"application/pdf","doc"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        $name=$_FILES["file"]["name"];
        $ext=pathinfo($name,PATHINFO_EXTENSION);

        print_r ($_FILES["file"]);

        print_r ($name."kkkk"."<br>");

        Print_r ($ext);

        if ( ! array_key_exists($ext,$allow)) die("please select the valid format ");

        if (file_exists("fileupload/".$name))
        {
            echo "File is already exists";
        }
        else
        
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"fileupload/".$_FILES["file"]["name"]);
            echo "file is uploaded successfully";
        }
    }
?>    
</body>
</html>


