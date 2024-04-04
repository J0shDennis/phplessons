<?php
include 'includes/header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

$bool = true;
$a = 1;
$b = 4;


$result = match ($a) {
    1 => "variable is 1",
    2 => "variable is 2",
};


echo $result;


/*switch ($a){
    case 1: 
        echo "the first is good";
        break;
        case 3:
        echo "second is good";
        break;"
}




if ($a < $b && $bool  == false) {
echo "first is true";
}
else if($a < $b && $bool){
    echo "second is true";

}else {    echo "nothing is true";
}
*/

?>


<h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>