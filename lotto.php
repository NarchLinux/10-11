<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto</title>
</head>
<body>
    <?php
$tablica = [];

while (count($tablica) < 6) {
$liczba = rand(1, 50);

    if (!in_array($liczba, $tablica)) {
        array_push($tablica, $liczba);
    }
}

foreach ($tablica as $liczba) {
    echo $liczba . "<br>";
}
?>
</body>
</html>


<!-- losowanie liczb - lotto stworz tablice i wstaw do neiej 6 losowych liczna
  (losowanie za pomoca php) liczby nie moga sie powtarzac. na koniec wypisz 
  te liczby z tablicy -->