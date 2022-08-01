<?php
include 'config.php';
$con=mysql_connect("$host","$name","$email","$message") or die("Server Error");
mysql_select_db("$userdata") or die("Database error");

if($con==true)
{
    echo "Success";
}
else
{
    mysql_close($con);
}



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>