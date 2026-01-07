<?php
require_once "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);

    if($username==""||$password==""){
        echo "All fields required";
        exit;
    }

    $hash=password_hash($password,PASSWORD_DEFAULT);

    $stmt=$conn->prepare("INSERT INTO legal_support(username,password) VALUES(?,?)");
    $stmt->bind_param("ss",$username,$hash);

    if($stmt->execute()){
        header("Location: login.html");
        exit;
    }else{
        echo "Username already exists";
    }

    $stmt->close();
}
$conn->close();
?>
