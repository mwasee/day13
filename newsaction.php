<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="newpaper";

$conn= new mysqli($hostname,$username,$password,$databasename);

$title=$_POST['title'];
$name=$_POST['paper'];

$q="insert into topnews (title,papername) values ('$title','$name')";
$r=$conn->query ($q);

if($r)
    echo 'Success';
else {
echo 'Failed';    
}
?>
