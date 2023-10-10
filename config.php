<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

$username ="root";
$password ="";
// Try connecting to the Database
$conn = new PDO("mysql:host=localhost; dbname=project_tanggies",$username,$password);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
