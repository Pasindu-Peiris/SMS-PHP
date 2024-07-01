<?php

$con = mysqli_connect("localhost","root","","sms");


if(!$con){
    echo "error". mysqli_connect_error()."";
}else{
    // echo "Connected";
}



?>