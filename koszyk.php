<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header("Location: koszyk.php");
    exit;
}

if (isset($_GET['id'])) {
    $produkt = $_GET['id'];

    $_SESSION['koszyk'] = ($_SESSION['koszyk'] ?? '') . $produkt . " ";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosz</title>
</head>
<body>

<a href="koszyk.php?id=chleb">Chleb</a><br>
<a href="koszyk.php?id=maslo">Masło</a><br>
<a href="koszyk.php?id=smietana">Śmietana</a><br>

<hr>

<?php
echo $_SESSION['koszyk'] ?? '';
?>

<br>
<a href="koszyk.php?logout=1">Wyloguj się</a>

</body>
</html>