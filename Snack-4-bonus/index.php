<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$digits_array = [];
while (count($digits_array) < 15) { 
    $rnd_digit = rand($min = 1, $max = 20);
    if (!in_array($rnd_digit, $digits_array)) {
        $digits_array[] = $rnd_digit;
    }
}

var_dump($digits_array);
?>