<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomanArt - Home</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include "../menu.php";
    ?>


    <div class="intro-container">
        <h1 class="intro-title">A arte romana</h1>
        <h2 class="intro-subtitle">Redesenhada</h2>

        <div class="scroll-info">
            <img src="images/scroll-icon.png" alt="">
            <small>Scroll</small>
        </div>
    </div>

    <div class="arq-esc-screen">
        <div class="arquitetura-screen">
            <img class="picture" src="images/testearquitetura.png" data-aos="fade-right" data-aos-duration="1000">

            <div class="text arquitetura" data-aos="fade-left" data-aos-duration="1000">
                <h2>Arquitetura</h2>
                <p>Com seus arcos, abóbodas, e grandes pilares, a arquitetura romana impressiona com sua imponência. Obras tão bem contruídas que foram capazes de durar milênios, hoje, são um dos pontos turísticos mais famosos do mundo. Quisque molestie orci ut arcu mattis ultricies. Vestibulum congue est tellus, congue ultricies enim facilisis nec. Nulla viverra aliquet justo sed varius. Nulla facilisi. Suspendisse vehicula et arcu in ornare. Nam quis dignissim ipsum, accumsan semper nisl.</p>
                <a href="../arquitetura/arquitetura.php"><button class="access-button"> <img class="button-img1" src="images/next.svg" alt=""><img class="button-img2" src="images/pilar.svg" alt=""></button></a>
            </div>


        </div>

        <div class="escultura-screen">

            <div class="text esculturas" data-aos="fade-right" data-aos-duration="1000">
                <h2>Esculturas</h2>
                <p>In vitae pellentesque dui. Ut ullamcorper, metus in commodo imperdiet, mauris dolor faucibus purus, facilisis suscipit urna neque quis mauris. Donec in eros id sem iaculis euismod ac vel ex. Ut porta lacinia dapibus. Donec consequat sed felis id tincidunt. Pellentesque placerat, quam in vehicula ultricies, ipsum lorem tempor metus, id tincidunt ipsum dolor molestie lacus. Mauris porttitor, justo malesuada convallis convallis, arcu tortor rhoncus neque, ut pharetra lorem ante id arcu.</p>
                <a href="../esculturas/esculturas.php"><button class="access-button"> <img class="button-img1" src="images/next.svg" alt=""><img class="button-img2" src="images/escultura.svg" alt=""></button></a>
            </div>
            <img class="picture" src="images/escultura.png" data-aos="fade-left" data-aos-duration="1000">


        </div>

    </div>

    <div class="pictures-screen">
        <h2 data-aos="fade-up" data-aos-offset="0"> Pinturas</h2>
        <p data-aos="fade-up" data-aos-offset="0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet arcu non lectus pulvinar lacinia. Mauris in risus vitae lacus consequat interdum eu nec libero. Vestibulum hendrerit sagittis tellus, varius imperdiet justo blandit id.</p>
        <div class="carousel">
            <a class="carousel-item">
                <img src="images/quadro1.jpg">


            </a>
            <a class="carousel-item"><img src="images/quadro2.jpg"></a>


            <a class="carousel-item"><img src="images/quadro3.jpg"></a>


        </div>
        <div class="acesse-rect pictures"><img src="images/brush.svg">
            <p>Acesse</p>
        </div>
    </div>


    <div class="vestibulares-screen">
        <h2>Conteúdo dos principais vestibulares</h2>
        <h3>Separado do jeito que você precisa</h3>

        <div class="icons-vestib-container">
            <img src="images/enem.png" alt="">
            <img src="images/ufsc.png" alt="">
            <img src="images/usp.png" alt="">
            <img src="images/ufrgs.png" alt="">

        </div>
        <div class="center-align">
            <a href="../vestibulares/vestibulares.php">
                <button class="acesse-rect">Acesse</button>
            </a>
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
        $('.carousel').carousel({
            dist: -60
        });

    });
</script>

</html>