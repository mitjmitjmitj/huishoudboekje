<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<table>
    <?php

    // Preparation of important functions and constants
    require_once ('getdates.php');
    define('SECONDS_INNA_DAY', 3600 * 24);
    define('TODAY', time() - time() % SECONDS_INNA_DAY);

    // Asking for current balance
    if ($_POST['submit']) {
        $saldo = $_POST['saldo'];
    } else {
        ?>
        <form action="kalendertest.php" method="post">
            <label>Huidige saldo:
                <input type="text" name="saldo">
            </label>
            <input type="submit" name="submit">
        </form>
    <?php
        exit();
    }

    $bedrag = 50;
    $periode = 2;
    $startdatum = TODAY;
    $einddatum = TODAY + SECONDS_INNA_DAY * 365;

    // Gathering of transaction dates
    $dates = array();
    switch ($periode) {
        case 1: $dates = getMonthlies(); break;
        case 2: $dates = getWeeklies(); break;
        case 3: $dates = getTrimonthlies(); break;
        case 4: $dates = getYearlies(); break;
    }

    // Printing the table with transactions
    for ($i = 0 ; $i < 1200 ; $i++) {
        $datum = TODAY + $i * SECONDS_INNA_DAY;
        $datumformat = date('D d-m',$datum);
        if (in_array($datum, $dates)) {
            echo "<tr><td>$datumformat</td>";
            echo "<td>&euro;$bedrag</td>";
            echo "<td>...</td>";
            echo "<td>...</td>";
            $saldo = $saldo - $bedrag;
            echo "<td>&euro; $saldo</td></tr>";
        } else {
            echo "<tr><td>$datumformat</td>";
            echo "<td>...</td>";
            echo "<td>...</td>";
            echo "<td>...</td>";
            echo "<td>&euro; $saldo</td></tr>";
        }
    }

    ?>
</table>

</body>
</html>
