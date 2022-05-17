<?php

echo "<br> LAÇO FOR<br>";
for($i=0; $i<=10; $i++){
    echo "<br>";
    echo $i;
}

$i = 0;


echo "<br> LAÇO WHILE<br>";
while($i<=10){
    echo "<br>";
    echo $i;
    $i++;
}

$i = 0;

echo "<br> LAÇO DO WHILE<br>";
do{
    echo "<br>";
    echo $i;

    $i++;
}while($i<=10);
echo "<br>";
$i = 0;
if($i < 10){
    echo "Valor da variável I é " . $i . " e passou no IF";
}elseif($i == 10){
    echo "Valor da variável I é " . $i . " e passou no ELSE IF";
} else {
    echo "Valor da variável I é " . $i . " e passou no ELSE";
}

?>