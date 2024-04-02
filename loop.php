<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//while loop loops for vairable

$a = 1;

while($a <= 5) {
    echo "hi1<br>";
    $a++;
}

//do while loop loops once then checks for vairable

$b = 1;
do{;
    echo "hi2<br>";
    $b++;
}
while($b <= 5);
//for loop loops for specific variables

for ($c = 0; $c <= 10; $c++){
    echo "hi3<br>";
}

//foreach loop loops for each vairable

$array = array("Joshua","Jane","Jacob","Jim","Jonny","Jack");

foreach ($array as $loopdata){
    echo "my name is ".$loopdata."<br>";
}
?>

</body>
</html>