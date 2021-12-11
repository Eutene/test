<?php
require_once ("pdo-connect.php");
$name=$_POST["name"];
$account=$_POST["account"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$valid=$_POST["valid"];



if($password!==$repassword){
    echo "密碼不一致";
    exit();
}
$crPassword=md5($password);
//echo "$crPassword<br>";
$sqlCheck="SELECT * FROM users WHERE account='$account'";
$checkResult=$conn->query($sqlCheck);
$emailExist=$checkResult->num_rows;
//echo $userExist;
if($emailExist>0){
    echo "已有相同信箱進行註冊";
    exit();

}
$now=date("Y-m-d H:i:s");
$sql="INSERT INTO users(name,account , email, mobile, password ,valid , created_at) VALUES('$name','$account', '$email','$mobile', '$crPassword', '$valid','$now')";


if ($conn->query($sql) === TRUE) {
    echo "新增資料完成<br>";
    echo '<div class="alert alert-warning" role="alert">
        註冊成功！期待與您一起書寫毛毛日記！</div>';
    $id=$conn->insert_id;
    header("location: sign-in.php");


} else {
    echo "新增資料錯誤: " . $conn->error;
}

?>