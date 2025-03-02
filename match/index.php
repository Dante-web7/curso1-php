<?php

$name = "Dante";
$age = 3;

?>

<?php

$resultadoEdad = match(true){
    $age < 6 => "Eres  un bebé $name",
    $age < 12 => "Eres un niño $name",
    $age < 18 => "Eres un adolescente $name",
    $age == 18 => "Eres un joven $name",
    $age < 30 => "Eres un adulto joven $name",
    $age < 60 => "Eres un adulto viejo $name",
    default => "Ya estas mas cerca para la tumba, lo siento $name :(",
};

?>

<h2>
    <?= $resultadoEdad; ?>
</h2>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        font-family: cursive;
        display: grid;
        place-content: center;
    }
</style>
