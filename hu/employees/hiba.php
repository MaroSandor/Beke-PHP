<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Törlési hiba: Ezt a recordot nem lehet törölni!" . $_GET['hiba'];
    ?>
    <a href="../employees/index.php" type="button" class="btn btn-outline-danger">Vissza</a>
    <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>