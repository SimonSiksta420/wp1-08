<?php
$guessnumber = 55;
$yournumber = 0;
define ('MAX_NUMBER', 100);
define ('MIN_NUMBER', 0);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> Hádej číslo mezi <?= MIN_NUMBER ?> - <?= MAX_NUMBER ?> </p>
<!--<p> Hádám, že je číslo: <?= $yournumber ?> </p>-->

<?php

while ($guessnumber != $yournumber) { ?>

<?php
if ($yournumber >= $guessnumber) { ?>
 Tvoje číslo je větší 

<?php   
$yournumber = rand(MIN_NUMBER, MAX_NUMBER);
}
?>

<p> Gratulujeme, uhádl jsi číslo <?= $guessnumber ?> tvým hádaným číslem <?= $yournumber ?>

</body>
</html>