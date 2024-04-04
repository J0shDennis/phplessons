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
    <link rel='stylesheet' href="style.css">
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


<h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>