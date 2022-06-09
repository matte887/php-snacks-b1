<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$games = [
    [
        "squadra_casa" => "Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 21,
        "punti_ospite" => 34,
    ],
    [
        "squadra_casa" => "Bologna",
        "squadra_ospite" => "Firenze",
        "punti_casa" => 11,
        "punti_ospite" => 2,
    ],
    [
        "squadra_casa" => "Teramo",
        "squadra_ospite" => "Arezzo",
        "punti_casa" => 24,
        "punti_ospite" => 25,
    ],
    [
        "squadra_casa" => "Prato",
        "squadra_ospite" => "Trieste",
        "punti_casa" => 65,
        "punti_ospite" => 86,
    ],
    [
        "squadra_casa" => "Palermo",
        "squadra_ospite" => "Pesaro",
        "punti_casa" => 84,
        "punti_ospite" => 35,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($games); $i++) {
        $this_match = $games[$i];
    ?>
        <h3>Partita <?php echo $i + 1 ?></h3>
        <p>
            <?php
            echo $this_match["squadra_casa"] . " - " . $this_match["squadra_ospite"] .
            " | ".
            $this_match["punti_casa"] . "-" . $this_match["punti_ospite"]; ?>
        </p>
    <?php } ?>
</body>

</html>