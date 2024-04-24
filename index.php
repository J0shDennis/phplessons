<?php
require "header.php";
?>

<main>
    <?php
    if(isset($session['userid']))
    echo "<p>You are logged in!</p>"
else 
echo "<p>You are logged out!</p>"
    ?>
<p>You are logged out</p>
<p>You are logged in</p>
</main>

<?php 
require "footer.php";
?>
