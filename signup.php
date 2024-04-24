<?php
require "header.php";
?>

<main>
<h1>signup</h1>
<?php
if (isset($_GET['error'])){
    if ($_GET['error'] == "emptyfirlds"){
        echo '<p class="signuperror"> FILL in all fieldsd!</p>';
    }
    else if($_GET['error'] == "invaliduidmail"){
        echo '<p class="signuperror"> Invalid username and e-mail!</p>';
    }
    else if($_GET['error'] == "invaliduidmail"){
        echo '<p class="signuperror"> Invalid username!</p>';
    }
    else if($_GET['error'] == "invaliduidmail"){
        echo '<p class="signuperror"> Invalid e-mail!</p>';
    }
    else if($_GET['error'] == "invaliduidmail"){
        echo '<p class="signuperror"> Your passwords do not match!</p>';
    }
    else if($_GET['error'] == "invaliduidmail"){
        echo '<p class="signuperror"> username is already taken!</p>';
    }
}
else if ($_GET["signup"] == "sucess"){
    echo '<p class="signupsucess"> Signup Sucessfull!</p>';
}
?>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" plactholder="username" >
    <input type="text" name="mail" plactholder="E-mail">
    <input type="password" name="pwd" plactholder="password">
    <input type="password" name="pwd-repeat" plactholder="repeat password">
<button type="submit" name="signup-submit">signup</button>
</form>
</main>

<?php 
require "footer.php";
?>