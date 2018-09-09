<?php
    $character= [
        'Jahirul Islam Razu' => 'a webdeveloper.',
        'PHP' => 'a Programming Language.',
        'It'  => 'using for making dynamic website.'
    ];
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
    <h1>Foreah loop using $key and $value</h1>
    <?php
        foreach($character as $key => $value) {
            echo "<p>$key is $value</p>";
        }
    ?>
</body>
</html>