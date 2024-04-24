<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];
 if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat)){
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
    else if ($password !== $passwordrepeat){
        header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {

$sql = "SELECT uidusers FROM users WHERE uidusers=?";
$stmt = mysqlli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=sqlerror");
    exit();
}
else {
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt); 
mysqli_stmt_store_result($stmt);
$resultCheck = mysqli_stmt_num_rows($stmt);

if ($resultcheck > 0) {
    header("location: ../signup.php?error=usertaken&mail=.$email");
    exit();
}
else {

    $sql = "INSERT INTO users (uidusers, emailusers, pwdusers) VALUES (?, ?, ?)";
    $stmt = mysqlli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=sqlerror");
    exit();
}
else {
$hashedPwd = password_hash($password, Password_default);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
mysqli_stmt_execute($stmt); 
header("location: ../signup.php?signup=sucess");
exit();

}

}
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
    header("location: ../signup.php");
exit();
}