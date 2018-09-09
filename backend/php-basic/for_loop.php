<?php
    $character = ['Jahhirul Islam Razu','Abdul Ahad', 'Golam Kribria', 'Shojon','Refat'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Main Characters</h1>
    <ul>
        <?php
            $numItem = count($character);
            for($i = 0; $i<$numItem; $i++){
                echo "<li>$character[$i]</li>";
            }
        ?>
    </ul>
</body>
</html>