<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisätään varaaja</title>
</head>
<body>
    <?php
        if (isset($_POST['nimi'])) {
            $nimi = $_POST['nimi'];
        } else {
            header('Location: varaajat.php');
        }

        $sql = "INSERT INTO varaajat (nimi) VALUES (:nimi);";

        try {
            include("yhteys.php");
            $query = $conn->prepare($sql);
            $query->execute(['nimi'=>$nimi]);
            header('Location: varaajat.php');
        } catch (PDOException $e) {
            die('Virhe: ' . $e->getMessage());
        }
        ?>
</body>
</html>