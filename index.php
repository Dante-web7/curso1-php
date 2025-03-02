<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

//ejecutar la petición y guardamos el resultado
$resultado = curl_exec($ch);

// Otra alternativa seria utilizar file_get_contents
// $resultado = file_get_contents(API_URL); // si solo se quiere hacer un GET de una API

$datos = json_decode($resultado, true);

curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima Película de Marvel</title>
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

    <style>
        :root {
            color-scheme: light dark;
        }

        main {
            display: grid;
            place-content: center;
            height: 100vh;
        }

        section {
            text-align: center;
        }

        hgroup {
            text-align: center;
        }


    </style>
</head>
<body>
    <main>
        <section>
            <img src="<?= $datos["poster_url"] ?>" width="300" alt="Poster de <?= $datos["title"]?>"
            style="border-radius: 16px;">
        </section>

        <hgroup>
            <h3><?= $datos["title"]; ?> se estrena en <?= $datos["days_until"]; ?> días </h3>
            <p>Fecha de estreno: <?=$datos["release_date"]; ?> </p>
            <p>La siguiente Película será <?= $datos["following_production"]["title"] ?></p>
        </hgroup>
    </main>
</body>

</html>