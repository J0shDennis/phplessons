<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

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

</body>
</html>