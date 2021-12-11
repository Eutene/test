<?php
require_once ("pdo-connect.php");

if(isset($_POST["email"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    echo $email."<br>";
    echo $password."<br>";


}else{
    exit();

//    可以留個慰留語
}
$password=md5($password);
$sql="SELECT * FROM users WHERE email=? AND password = ? AND valid=1";
$stmt=$db_host->prepare($sql);
try{
    $stmt->execute([$email, $password]);
    $userExist=$stmt->rowCount();
//    echo $userExist;
    if($userExist>0){
        $row=$stmt->fetch();
        $user=[
            "account"=>$row["account"],
            "name"=>$row["name"],
            "email"=>$row["email"]
        ];
        $_SESSION["user"]=$user;
        header("location: home.php");
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

