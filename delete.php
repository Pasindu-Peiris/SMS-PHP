<?php
$id = $_GET['delete'];

include ('./db/config.php');

$sql = "delete from student where id = $id";

$result = mysqli_query($con, $sql);

if($result){
    
    header("Location: ./view.php?status='done'");
    exit;
}else{
    echo "error";
}





?>