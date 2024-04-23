<?php
require "header.php";
?>

<main>
<h1>signup</h1>
<form action="signup/signup.php" method="post">
    <input type="text" name="uid" plactholder="username" >
    <input type="text" name="mail" plactholder="E-mail">
    <input type="password" name="pwd" plactholder="password">
    <input type="password" name="pwd-repeat" plactholder="repeat password">
<button type="submit" name="signup-submit">signup</button>
</main>

<?php 
require "footer.php";
?>