<?php
$name = 'ESTE ES EL NÚMERO: ';
$num = 2;

?>

<h1>
    <?= $name; ?>
</h1>

<p>
    <?= $num; ?>
</p>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        font-family: cursive;
        display: grid;
        place-content: center;
    }

    h1 {
        color: red;
    }

    p {
        color: blue;
        text-align: center;
    }
</style>