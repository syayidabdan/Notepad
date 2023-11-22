<?php 
$host="localhost";
$user="root";
$pass="";
$db="note";
$conn =mysqli_connect($host,$user,$pass,$db);
if($conn){
    //echo "kondisi berhasil";
}else{
    //echo "koneksi gagal";
};

mysqli_select_db($conn,$db);
?>