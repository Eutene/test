<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<?php
$name=$_POST["name"];
$account=$_POST["account"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$valid=$_POST["valid"];

require_once ("pdo_connect.php");
//$sql="ALTER TABLE users CHANGE COLUMN account userAccount VARCHAR(30), ADD INDEX(userAccount)";

$now=date("Y-m-d H:i:s");
//echo $now;
//exit;

$sql="INSERT INTO users( name , account , email , mobile , password ,  created_at , valid) VALUES('$name','$account','$email','$valid','$now')";

if ($conn->query($sql) === TRUE) {
//    echo  "新增資料完成" ;
}else{
    echo "新增資料錯誤" .$conn ->error;
}
?>

