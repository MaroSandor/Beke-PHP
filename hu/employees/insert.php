<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";
// print_r($alkalmazottak);
print_r($_POST);
$szamlalo = 0;
$adatok = [];

if (isset ($_POST['insert'])) {
    foreach ($_POST as $key => $value) {
        if ($key != 'insert') {
            $adatok[$szamlalo] = $value;
            $szamlalo++;
        }
    }
    isset($dbc, $table, $adatok);
    header("location: index.php");
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container w-50">
            <form name="uj" method="POST">
                <div>
                    <label for="nev" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div>
                    <label for="nev" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div>
                    <label for="nev" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary">
                </div>
                <input type="submit" name="insert" value="Beszúrás">
            </form>
            <a href="../employees/index.php" type="button" class="btn btn-outline-danger">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>