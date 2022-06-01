<?php
$p=$_GET["name"];
$q=$_GET["email"];
$r=$_GET["pwd"];
$s=$_GET["repwd"];
 $usrname="root";
 $hostname="localhost";
 $password="";
 $db="db_test";
 $conn=mysqli_connect($hostname,$usrname,$password,$db);
 if(!$conn)
 {
    echo mysqli_error_connect(); 
 }
 else
 {
    echo "Welcome to the world of interconnections".""."<br>";
 }
 $sql="insert into `register`(`usrname`,`email`,`pwd`,`repwd`)values('".$p."','".$q."','".$r."','".$s."')";
 if(mysqli_query($conn,$sql))
 {
    echo "We will get back to you shortly";
 }

?>