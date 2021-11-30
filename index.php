<?php 

$data = [
    [
        "title" => "<h2>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>",
        "paragraph" => "<p>paragrafo</p>"
    ],
    [
        "title" => "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>",
        "paragraph" => "<p>paragrafo</p>"
    ],
    [
        "title" => "<h2>Perché il mio account è associato a un paese?</h2>",
        "paragraph" => "<p>paragrafo</p>"
    ],
    [
        "title" => "<h2>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h2>",
        "paragraph" => "<p>paragrafo</p>"
    ],
    [
        "title" => "<h2>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h2>",
        "paragraph" => "<p>paragrafo</p>"
    ]
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Mono:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Google Privacy e Termini</h1>

        <div class="navbar_items_container">
            <ul class="navbar_items">
                <li>
                    <a href="#">Domande Frequenti</a>
                </li>
                <li>
                    <a href="#">Tecnologie</a>
                </li>
                <li>
                    <a href="#">Termini di servizio</a>
                </li>
                <li>
                    <a href="#">Norme sulla privacy</a>
                </li>
                <li>
                    <a href="#">Introduzione</a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <div class="main_container">
        <?php 
            foreach ($data as $value) {
                echo $value["title"];
                echo $value["paragraph"];
            }
        ?>
        </div>
    </main>
</body>
</html>
