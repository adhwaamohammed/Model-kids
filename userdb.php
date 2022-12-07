<?php 
// Create connection 
$con= mysqli_connect('localhost','root','') 
or die('Error connecting to MySQL server.'); 
// Create database 
$q1= "CREATE DATABASE Info"; 
if (mysqli_query($con,$q1)
echo "Database created successfully"."<br>"; 
if ($con= mysqli_connect('localhost','root','','Info')) 
{ echo "Database is already created and it is selected"."<br>";
} else { echo "Error creating or selecting database"; } 
$q2= "CREATE TABLE users_info (id INT(8) PRIMARY KEY,name VARCHAR(30) NOT NULL,password VARCHAR(50));"; 
if (mysqli_query($con,$q2)) 
{echo "Table created successfully"."<br>"; } 
else { echo "Error creating Table"; } 
$ID=$_POST['id']; 
$name=$_POST['username']; 
$Password=$_POST['password']; 
$q3 = "INSERT INTO users_info VALUES ('$ID','$name','$Pasword');"; 
if (mysqli_query($con, $q3)) 
{ echo "New record created successfully"; } 
else { echo "Error creating record! " ; } 
?>
