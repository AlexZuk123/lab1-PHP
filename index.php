<?php
$cols = rand(1,10);
$rows = rand(1,10);
$num1 = 0;
$num2 = 0;

$cars = array("BMW" => array("model" => "x5", "price" => "10000", "year" => "2015"), "Toyota" => array("model" => "Rav4", "price" => "33000", "year" => "2020"), "Skoda" => array("model" => "Fabia", "price" => "8000", "year" => "2012"));
echo "<table border=\"1\">";

/*for ($r = 0; $r < $rows; $r++){

    echo('<tr>');
    if($r == 0){
        for($i = 0; $i < $cols; $i++){
            echo('<td>' .$num2++.'</td>');
        }
    }
    else{
    for ($c = 0; $c < $cols; $c++){
        if  ($c == 0){
            echo('<td>' .++$num1.'</td>');
        } else if($c != 0){
            echo('<td>' .$c*$r. '</td>');
        }
    }}
    echo('</tr>');
}

echo("</table>");*/

foreach($cars as list($m, $p, $y)){
    echo "model: " .$m. "price: " .$p. "year: " .$y. "<br/>";
}
?>