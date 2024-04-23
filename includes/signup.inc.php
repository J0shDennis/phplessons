<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $Password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
 if(empty($username) || empty($email) || empty($Password) || empty($PasswordRepeat)){
 header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
exit();
 }
 else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("location: ../signup.php?error=emptymailuid");
    exit();
 }
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("location: ../signup.php?error=emptymail&uid=".$username);
exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
    }
    else if ($Password !== $passwordRepeat){
        header("location: ../signup.php?error=passwordcheckuid=".$username."&mail=".$email);
        exit();
    }
    else {

$sql = "SELECT uidusers FROM users WHERE uidusers=?";
$stmt = mysqlli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=sqlerror");
    exit();
}
mysqli_stmt_bind_param();
    }
}