<?php

class Mezo {

    private $nev;
    private $ertek;

    public function __construct($nev, $ertek) {
        echo '<br>létrejött<hr>';
        $this->nev = $nev;
        $this->ertek = $ertek;
    }

    public function set_ertek($ertek) {
        $this->ertek = $ertek;
    }

    public function get_ertek() {
        return $this->ertek;
    }

    public function set_nev($nev) {
        $this->nev = $nev;
    }

    public function get_nev() {
        return $this->nev;
    }

    public function __destruct() {
        echo "<hr>megszünt $this->ertek <br>";
    }

    public function kiir() {
        echo "<br>" . $this->get_nev() . ":" . $this->get_ertek();
    }

}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mezo1 = new Mezo("név", "Kati");
//        $mezo1->set_ertek("Kati");
//        echo "<br>" . $mezo1->get_nev() . ":" . $mezo1->get_ertek();
        $mezo1->kiir();

        $mezo2 = new Mezo("Név", "Teri");
//        $mezo2->set_ertek("Teri");
//        echo "<br>" . $mezo2->get_nev() . ":" . $mezo2->get_ertek();

        $mezo2->kiir();
        ?>
    </body>
</html>
