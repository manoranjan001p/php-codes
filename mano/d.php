<?php
SESSION_START();
?>


<?php

$db = mysqli_connect("localhost", "root", "", "mano");

if(!$db)
{
    echo "not connect";
}
else{
    echo 'noo';
    //ECHO $_SESSION['USERNAME'];

    echo $_COOKIE['name'];
}

?>