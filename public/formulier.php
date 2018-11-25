<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="kalendertest.php" method="post">
    <label for="bedrag">Bedrag
        <input type="text" name="bedrag" id="bedrag">
    </label><br>
    <label for="periode">Periode
        <select name="periode" id="periode">
            <option value="1">Maandelijks</option>
            <option value="2">Wekelijks</option>
            <option value="3">Driemaandelijks</option>
            <option value="4">Jaarlijks</option>
        </select>
    </label><br>
    <label for="startdatum">Startdatum
        <input type="date" name="startdatum"></label><br>
    <label for="einddatum">Einddatum
        <input type="date" name="einddatum"></label><br>
    <input type="submit" name="submit">
</form>

</body>
</html>