<?php
$a=$_GET["Name"];
$b=$_GET["Email"];
$c=$_GET["Subject"];
$d=$_GET["Comment"];
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
    echo "Thank You for writing to us".""."<br>";
 }
 $sql="insert into `contact`(`name`,`email`,`subject`,`comment`)values('".$a."','".$b."','".$c."','".$d."')";
 if(mysqli_query($conn,$sql))
 {
    echo "We will get back to you shortly";
 }

?>