<?php
include_once'includes/connection.php';

?>


</head>
<body>
    <form action="includes/signup.inc.php" methos="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="username">
    <br>
    <input type="password" name="pwd" placeholder="password">
    <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    <?php




 


?>

  </body>
</html>