<?php

//Establish Connection with database

$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function

$connection= mysqli_connect($host, $username, $passwd, $dbname);

//Insert Query

$q= mysqli_query($connection, 
        
  "insert into tbl_user(user_name,user_gender,user_mobile) values('Zainab','Female','9725')")
        or die("Error". mysqli_error($connection));


//Record Inserted into Database

if($q)
{
    echo"<script>alert('Record Added');</script>";
}

?>

