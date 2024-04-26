

<?php
session_start();
?>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="desctiption" content="This is an example of a meta description. This will often show up in search results.">
            <meta name=viewport content=" width=device-width, initial-scale=1">
            <tiele></title>
            <link rel="stylesheet" href="signup/style.css">
</head>
<body>
    <header>
<nav calss="nav-header-main">
<a href="header-logo" href="index.php">
<img src="img/logo.png" alt="mmtus logo">
</a>

<ul>
    <li><a href="index.php"></a>index</li>
    <li><a href="#">index2</a></li>
    <li><a href="#">index3</a></li>
    <li><a href="#">index4</a></li>
    <li><a href="#">index5</a></li>
</ul>
<div>



<?php
    if(isset($session['userid'])){
    echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>';
}
else {
echo '<form action="includes/login.inc.php" method="post">
<input type="text" name="mailuid" placeholder="Username/E-mail...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="login-submit">Login</button>
</form>
<a href="signup.php" calss="header-signup">Signup</a>';
}
    ?>


</div>
</nav>
</header>


