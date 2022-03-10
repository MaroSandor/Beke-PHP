<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";

$adatok = readAll($dbc, 'employees');
// print_r($alkalmazottak);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <a class="btn btn-outline-success" href="../index.php">Hozzáadás</a>
            <table class="table table-success table-striped my-3" >
                <tr>
                    <?php foreach ($adatok[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                    <!-- Műveletek oszlop létrehozása -->
                        <th colspan="3" style="text-align: center">Műveletek</th>
                </tr>

                <?php foreach ($adatok as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                        <!-- Műveletek létrehozása id oszlopra -->
                            <td class="btn btn-outline-danger"><a href="view.php?id=<?= $sor['id']; ?>">Megtekint</a></td>
                            <td class="btn btn-outline-danger"><a href="update.php?id=<?= $sor['id']; ?>">Szerkeszt</a></td>
                            <td class="btn btn-outline-danger"><a href="delete.php?id=<?= $sor['id']; ?>">Töröl</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="../index.php" type="button" class="btn btn-outline-danger">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>