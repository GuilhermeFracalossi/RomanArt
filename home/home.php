<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomanArt - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include "../menu.php";
    ?>
    <!--div class="background-colosseum"></div-->
    <div class="intro-container">
        <h1 class="intro-title">A arte romana</h1>
        <h2 class="intro-subtitle">Redesenhada</h2>

        <div class="scroll-info">
            <img src="images/scroll-icon.png" alt="">
            <small>Scroll</small>
        </div>
    </div>

    <!-- <div class="second-screen">
        <h3 class="sec-screen-title">Lorem <span class="text-color-white">Ipsum</span></h3>
        <div class="text-flex">

            <p class="sec-screen-paragraph">
                Donec accumsan libero tellus, eget maximus est auctor ac. Vestibulum fermentum, elit vel imperdiet dignissim, sem orci condimentum leo, eu ultrices leo tellus tristique ante.
            </p>
            <p class="sec-screen-paragraph">
                Curabitur commodo fringilla felis at auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
        </div>

    </div> -->

    <div class="arq-esc-screen">
        <div class="arquitetura-screen">
            <img class="picture" src="images/testearquitetura.png" alt="">

            <div class="text arquitetura">
                <h2>Arquitetura</h2>
                <p></p>
                <a href="../arquitetura/arquitetura.php"><button class="access-button"> <img class="button-img1" src="images/next.svg" alt=""><img class="button-img2" src="images/pilar.svg" alt=""></button></a>
            </div>


        </div>

        <div class="escultura-screen">

            <div class="text esculturas">
                <h2>Esculturas</h2>
                <p></p>
                <a href="../esculturas/esculturas.php"><button class="access-button"> <img class="button-img1" src="images/next.svg" alt=""><img class="button-img2" src="images/escultura.svg" alt=""></button></a>
            </div>
            <img class="picture" src="images/escultura.png" alt="">


        </div>

    </div>
    <div class="pinturas-screen">
        <div class="quadros-carrosel"></div>
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

        <div class="text-center"><button class="button-vestibular">Acesse</button></div>


    </div>

    <div class="famous-pictures-container">
        <!-- tres quadro em um carrosel, semelhante ao modelo do egito, informacoes aparecem com um slide-up vindo de baixo no quadro selecionado-->
        <div class="carousel-container">
            <div class="slide" data-slide='1'>
                <img src="images/quadro1.jpg">
            </div>
            <div class="slide active-card" data-slide='2'>
                <img src="images/quadro2.jpg">
            </div>
            <div class="slide">
                <img src="images/quadro3.jpg" data-slide='3'>
            </div>

        </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
    $.ajax({
        url: "text.json",
        type: "POST"
    }).done(function(response) {
        fillTexts(response)

    })

    function fillTexts(textos) {
        var textoArquitetura = textos['home']['paragrafoArquitetura']
        $('.text.arquitetura p').html(textoArquitetura)

        var textoEsculturas = textos['home']['paragrafoEsculturas']
        $('.text.esculturas p').html(textoEsculturas)

    }
    // var activeSlide = 2

    // function carousel() {
    //     $('.next').click(function() {

    //         $(`.slide[data-slide=${activeSlide}]`).addClass('out-right').removeClass('active-card')

    //         activeSlide - 1 == 0 ? activeSlide = 3 : activeSlide--
    //         console.log(activeSlide)
    //         $(`.slide[data-slide=${activeSlide}]`).addClass('active-card in-right')

    //     })
    // }
    // $(function() {
    //     carousel()
    // })
</script>

</html>