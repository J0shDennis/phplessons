<?php
include_once'includes/connection.php';
?>
<?php

$sql = "SELECT * FROM users;";
$results = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row['user_uid'];
}
}



?>