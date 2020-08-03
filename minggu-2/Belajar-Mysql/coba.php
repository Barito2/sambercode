<?php
// function hitung($data)
// {
//     return $data;
// }
// echo hitung("102*2");

$string = "Contoh PHP Explode.";
$PecahStr = explode(" ", $string);

for ($i = 0; $i < count($PecahStr); $i++) {
    echo $PecahStr[$i] . "<br />";
}
