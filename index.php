<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $tabEleves = include "tab.php";
        $i =0;
        foreach($tabEleves as $eleve){
            echo "<div class='tab'>" . $eleve["nom"] . " " . $eleve["prenom"] . " <a class='lien' href='info.php?index=$i' >Info</a></div>";
            $i++;
        }
    ?>
</body>
</html>


