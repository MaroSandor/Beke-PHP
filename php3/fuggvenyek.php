<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Menü</title>
</head>
<body>
    <?php
    $menu = [
        "home" => "Nyitó oldal",
        "contact" => "Kapcsolat",
        "gallery" => "Galéria",
        "about" => "Rólunk",
    ];

    echo "<nav>";
    
    function MenuMaker($items) {
            foreach ($items as $key => $value) { 
                echo "<li>$value</li>";
            }
        }

        MenuMaker($menu);
        
    echo "</nav>";
    ?>
</body>
</html>