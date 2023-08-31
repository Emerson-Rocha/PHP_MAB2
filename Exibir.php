<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // pegar os arquivo na pasta

    $pasta = "arq/";

    $arq =  glob("$pasta{*.jpg,*.png,*.jpeg}", GLOB_BRACE);

    //print_r($arq);
    // for; while, do while  foreach
    foreach ($arq  as  $pos) {

        echo "<img src='" . $pos . "'>";
    }
    ?>
</body>

</html>