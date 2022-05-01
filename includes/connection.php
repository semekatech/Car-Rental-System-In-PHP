

<?php
$servername='localhost';
$username='root';
$password='';
$dbname='carrental';
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("error occured".$conn->connect_error);
}
?>