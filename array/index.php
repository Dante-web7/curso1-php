<?php

$bestLenguages = ["PHP", "JavaScript", "Python", "Java"];
$bestLenguages[2] = "C#";
//va a poner el array al final
$bestLenguages[] = "Ruby";
/*va a poner el array al principio
array_unshift($bestLenguages, "C++"); */

?>

<ul>
    <?php foreach ($bestLenguages as $lenguage) : ?>
        <li> <?= $lenguage; ?> </li>
    <?php endforeach; ?>
</ul>


<!-- ESTILO -->
<link href="../style..css" rel="stylesheet">