<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poista timezone_location_get</title>
</head>
<body>
    <?php
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            header('Location: varaajat.php');
        }

        $sql = "DELETE FROM varaajat WHERE id = :id;";
        try {
            include("yhteys.php");
            $query = $conn->prepare($sql);
            $query->execute(['id'=>$id]);
            header('Location: varaajat.php');
        } catch (PDOException $e) {
            die('Virhe: ' . $e->getMessage());
        }
    ?>
</body>
</html>