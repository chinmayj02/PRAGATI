<?php
$username="root";
$password="";
$server='localhost';
$db='pragati';
$con=  new mysqli($server,$username,$password,$db);
if($con){

    echo "Connection Sucessfull :))";
} 
else 
{
    echo "Connection not Sucessfull";
}
 ?>