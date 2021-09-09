<?php

$con = new mysqli('localhost','root','','basicBankdata');

if(!$con){
    die("Connection failed ".mysqli_connect_error($con));
}

?>