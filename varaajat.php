<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varaajat</title>
</head>
<body>
    <h1>Varaajat</h1>
    <ul>
    <?php
        include("yhteys.php");
        $sql = "SELECT * FROM varaajat";
        $query = $conn->prepare($sql);
        $query->execute();
        $varaajat = $query->fetchAll();

        foreach($varaajat as $varaaja) {
            echo "<li>";
            echo $varaaja['nimi'];
            echo "<form action='poistavaraaja.php' method='post'>";
            echo "<input name='id' value='" . $varaaja['id'] . "' hidden/>";
            echo "<button type='submit'>Poista</button>";
            echo "</form>";
            echo "</li>";
        } ?>
    </ul>
    <form action="lisaavaraajat.php" method="post">
        <input name="nimi"/>
        <button type="submit">Lisää varaaja</button>
    </form>
</body>
</html>