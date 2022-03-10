<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";

$adatok = readOne($dbc, 'employees', $_GET['id']);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <table class="table table-success table-striped my-3" >
                <tr>
                    <?php foreach ($adatok[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>

                </tr>

                <?php foreach ($adatok as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="index.php" type="button" class="btn btn-outline-danger">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>