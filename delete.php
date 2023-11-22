<?php
include "config.php";

$id =$_GET['delete'];
$query="DELETE FROM tb_nota WHERE id_note ='$id'";
$sql=mysqli_query($conn,$query);
if($sql){
    header("location:index.php");
}else{
    echo $query;
}
?>