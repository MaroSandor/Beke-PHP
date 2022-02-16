<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $primek = [3, "alma", true, 458.89];
    $asszoctomb = [
        "alma" => "piros",
        "körte" => "sárga",
        "uborka" => "zöld",
    ];

    echo '<hr>';
    print_r($primek);
    $primek[4] = "huha";
    $primek[100] = 100;

    echo "<hr>";
    $eredmeny = "";
    foreach ($asszoctomb as $value) {
        $eredmeny .= $value." - ";
    }

    $eredmeny = substr($eredmeny, 0, strlen($eredmeny) - 3);

    echo $eredmeny;

    // foreach ($asszoctomb as $key => $value) {
    //     echo '<hr>$asszoctomb['.$key.']='.$value;
    // }

    for ($i=0; $i < count($primek); $i++) {
        echo '<hr>$asszoctomb['.$i.']='.$asszoctomb[$i];
    }

    echo "<hr>";
    print_r($kulcsok = array_keys($asszoctomb));
    print_r($kulcsok2 = array_keys($primek));
    echo "<hr>";
    print_r($kulcsok = array_values($asszoctomb));
    print_r($kulcsok2 = array_values($primek));

    if (in_array(3, $kulcsok2)) {
        echo 'benne van';
    } else {
        echo 'nincs benne';
    }

    // echo "<hr>".$primek[0];
    // echo "<hr>".$primek[1];
    // echo "<hr>".$primek[2];
    // echo "<hr>".$primek[3];
    // echo "<hr>".$primek[4];
    // echo "<hr>".$primek[100];

    // echo '<hr>';
    // print_r($asszoctomb);

    // echo "<hr>".$asszoctomb['alma'];
    // echo "<hr>".$asszoctomb['körte'];
    // echo "<hr>".$asszoctomb['uborka'];

    // $asszoctomb['barack'] = "sárgás";
    // echo "<hr>".$asszoctomb['barack'];
    ?>
</body>
</html>