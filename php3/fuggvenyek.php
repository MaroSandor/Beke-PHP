<?php
    $menu = [
        "home.php" => "Nyitó oldal",
        "contact.php" => "Kapcsolat",
        "gallery.php" => "Galéria",
        "about.php" => "Rólunk",
    ];

    // echo "<nav>";
    
    // function MenuMaker($items) {
    //         foreach ($items as $key => $value) { 
    //             echo "<li><a href='$key'>$value</a></li>";
    //         }
    //     }

    //     MenuMaker($menu);
        
    // echo "</nav>";

    // function MenuMaker2($items) {
    //     $nav = "<nav>";
    //     foreach ($items as $key => $value) { 
    //         $nav .= "<li>$value</li>";
    //     }
    //     $nav .= "</nav>";

    //     return $nav;
    // }

    function MenuMaker3($items, $active = NULL) {
        echo "<nav>";
        foreach ($items as $key => $value) { 
            echo '<li';
            if ($active == $key) {
                echo 'class="active">';
            } else {
                echo '>';
            }
            echo '<a href="?page =' . $key . '">' . $value . '</a>';
            echo '</li>';
            }
        echo "</nav>";
        }
?>