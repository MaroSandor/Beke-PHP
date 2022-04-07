<?php
class Select
{
    private $name;
    private $value;

    public function setNane($name)
    {
        $this->nev = $name;
    }

    public function get_ertek()
    {
        return $this->nev;
    }

    public function setValue($value)
    {
        $this->ertek = $value;
    }

    public function get_nev()
    {
        return $this->ertek;
    }

    public function makeOptions($value)
    {
        foreach ($value as $key => $ertek) {
            echo "<option>" . $ertek . "</option>";
        }
    }

    public function makeSelect()
    {
        $browsers = ["Válassz böngészőt!", "Edge", "Firefox", "Chrome", "Safari", "Opera"];

        echo "<select name='bongeszo'>";
        $options = new Select();
        $options->makeOptions($browsers);
        echo "</select>";
    }
}

// print_r($_POST);
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>2022.04.27. - Feladat1</title>
</head>

<body>
    <h2 style="text-align: center">2022.04.07. - Feladat</h2>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $bongeszo = $_POST['bongeszo'];

        echo "<div class='form-control'>Név: " . $name . "<br>Felhasználónév: " . $username . "<br>E-mail cím: " . $email . "<br> Böngésző: " . $bongeszo . "</div>";

        echo "<div class='container-fluid'><a class='btn btn-success' href='feladat.php'>Vissza</a></div>";
    } else {
        echo "<form class='form-control' method='post' action='feladat.php'>";
        echo "<input type='text' name='name' placeholder='Név'><br>";
        echo "<input type='text' name='username' placeholder='Felhasználónév'><br>";
        echo "<input type='email' name='email' placeholder='Email-cím'><br>";

        $menu = new Select();
        $menu->makeSelect();

        echo "<input id='submit' name='submit' type='submit'>";
        echo "</form>";        
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>