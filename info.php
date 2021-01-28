<?php

$tab = include "tab.php";

if(isset($_GET["index"])){
    $index = intval(htmlentities($_GET["index"]));
}
else{
    $index = 0;
}


if($index <0){
    $index = 0;
}
elseif($index > 1000){
    $index = 1000;
}

if(isset($tab[$index]["info"])){
    $info = $tab[$index]["info"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style_info.css">
</head>
<body>
    <div id="info">
        <img id="img" src="https://lh3.googleusercontent.com/proxy/eI1Y6n9UnVcEZ6yB4uh4YfxDlmSSrZKHbO3XJdsVCU_cajxf9YVFS_wxelUKGYQkLnuwxiJ2vpInGHmCP1KS_7Thkqb6ad5OeTAYrUkA_nPLoUE" alt="">
        <?php
        foreach($info as $item => $value){
            echo "<p id='$item'>$value</p>";
        }
        ?>
        <a href='index.php'>Index</a>
    </div>
    <script src="script.js"></script>
</body>
</html>
