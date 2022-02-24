<?php
include 'urlap.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatlap</title>
</head>
<body>
    <form class="lap" name="adatok" method="POST">
        <legend>Adatok bekérése</legend>
        <fieldset>
            <div>
                <label for="nev">Név:</label>
                <input type="text" name="nev" id="nev" value="">
            </div>            
            <div>
                <label for="age">Kor:</label>
                <input type="number" name="age" id="age" value="">
            </div> 
            <div>
                <label for="nem">Neme:</label>
                <select name="nem" id="nem">
                    <option value="F">Férfi</option>
                    <option value="N">Nő</option>
                </select>
            </div>           
        <input type="submit" name="Elküld" value="Elküld">
        </fieldset>
    </form>    
</body>
</html>