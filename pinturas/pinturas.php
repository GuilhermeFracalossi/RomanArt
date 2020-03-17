<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomanArt - Pinturas</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="pinturas.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include "../menu.php";
    ?>

    <div class="intro-container">
        <h1>Pinturas</h1>


    </div>

    <div class="main-container">


        <div class="text-container">
            <h2>Origem</h2>
            <p class="plain-text">
                O que se possui de obras e conhecimento sobre as pinturas romanas, infelizmente, se restringe à duas cidades: Pompeia e Herculano, que foram soterradas pela explosão do vulcão Vesúvio, em 79 d.C.
                As cinzas e o magma, apesar de terem arrasado boa parte da cidade, permitiu a preservação de algumas edificações, mantendo em boa qualidade a arte em seu interior.
            </p>

            <img src="images/pompeia.jpg" class="text-photo">
            <p class="image-description">
                Cidade de Pompeia atualmente, com o vulcão Vesúvio ao fundo

            </p>
        </div>

        <div class="text-container">
            <h2>Estilos</h2>
            <h3>Segundo estilo</h3>
            <p class="plain-text">
                Também chamado de arquitetônico, se desenvolveu a partir de 80 a.C. É marcado por uma união da pintura com a arquitetura: as obras adotavam perspectiva, passavam ilusão de movimento, sendo planejadas juntamente com o cômodo para dar uma impressão de janela, 
                de vista do mundo exterior. Ocupavam muitas vezes toda uma sala, utilizando de cenários complexos para disposição e harmonia das cenas.
            </p>
        </div>


    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
</script>


<script>
    AOS.init();
    $(document).ready(function() {
        // $('.carousel').carousel({
        //     dist: -60
        // });

    });
</script>

</html>