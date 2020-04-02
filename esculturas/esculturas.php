<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomanArt - Esculturas</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
   </script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="esculturas.css">

    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300&display=swap" rel="stylesheet">
</head>

<body>


    <?php
    include "../menu.php";
    ?>
    <div class="intro-container">
        <h1 class="esculturas-title">Esculturas</h1>
        <div class="esculturas-cards-container">
            <div class="escult-card" style="align-self: flex-start;">
                <img src="images/sculptures_bw/facchino.jpg" width="400">
                <p>Il Facchino</p>
            </div>
            <div class="escult-card" style="align-self: flex-end;">
                <img src="images/sculptures_bw/the braschi antinous.jpg" width="540">
                <p>The Braschi Antinous</p>
            </div>
            <div class="escult-card" style="align-self: center;">
                <img src="images/sculptures_bw/marforio.jpg" width="540">
                <p>Marfório</p>
            </div>
            <div class="escult-card" style="align-self: flex-end;">
                <img src="images/sculptures_bw/augusto.jpg" width="300">
                <p>Augusto de Prima Porta</p>
            </div>
            <div class="escult-card" style="align-self: flex-start;">
                <img src="images/sculptures_bw/Il babuino.jpg" width="540">
                <p>Il Babuino</p>
            </div>
            
            <div class="escult-card"  style="align-self: center;">
                <img src="images/sculptures_bw/trajan emperor.jpg" width="540">
                <p>Imperador Trajano</p>
            </div>
            <div class="escult-card" style="align-self: flex-end;">
                <img src="images/sculptures_bw/Orestes e electra.jpg" width="300">
                <p>Orestes e Electra</p>
            </div>

        </div>

        <img  class="arrow-down" src="images/arrow-down.svg">
    </div>

    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu iaculis neque. In eget erat nulla. Curabitur pellentesque mattis erat euismod euismod. Etiam sed sagittis turpis, eget suscipit augue. Aenean placerat semper dolor, ut porta diam ornare ac. Proin ut hendrerit massa, sit amet feugiat odio. Nullam maximus venenatis felis in convallis.

        Curabitur ac tempus orci. Mauris sollicitudin venenatis leo, non sagittis sapien pharetra id. Aenean diam velit, blandit sit amet libero et, tempor volutpat dolor. Integer sollicitudin massa feugiat lorem auctor, et tincidunt magna tempor. In maximus leo ac ligula dignissim accumsan. Curabitur eu ligula vel nisl porta mollis vel sit amet lacus. Maecenas consectetur dui id pretium vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla mollis augue ac scelerisque iaculis. Phasellus feugiat non dui ac congue. Sed nec dui ultrices, mattis risus eu, rutrum arcu. Ut scelerisque lorem et orci imperdiet varius. Donec justo augue, aliquet et mollis quis, fringilla sed turpis. Nulla facilisis orci et velit fermentum, sit amet vestibulum sapien fringilla. Duis et mollis lacus.

        Aliquam lobortis interdum orci a tristique. Ut id lectus non massa interdum sagittis. Aliquam pulvinar velit sed risus commodo finibus. Donec at fringilla ante, sit amet scelerisque odio. Ut aliquet convallis lorem, vitae ullamcorper dui iaculis ac. Mauris purus est, pharetra sed diam quis, feugiat porttitor tortor. Ut bibendum quam nec magna facilisis, vitae dapibus libero vestibulum. Donec gravida eros euismod, tempus neque quis, porttitor mauris.</div>
</body>

<script>
    const slider = document.querySelector('.esculturas-cards-container');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true
        slider.classList.add('active')
        startX = e.pageX - slider.offsetLeft
        scrollLeft = slider.scrollLeft
    })
    slider.addEventListener('mouseleave', () => {
        isDown = false
        slider.classList.remove('active')
    })
    slider.addEventListener('mouseup', () => {
        isDown = false
        slider.classList.remove('active')
    })
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return
        e.preventDefault()
        const x = e.pageX - slider.offsetLeft
        const walk = (x - startX) * 1
        slider.scrollLeft = scrollLeft - walk

    })


    $(function() {
        //makes a kind of infinte scroll
        var allCards = ''
        let cards = document.querySelectorAll('.escult-card')

        cards.forEach(function(card) {
            allCards += card.outerHTML
        })

        let cardsRepetead = 4
        while (cardsRepetead != 0) {
            $('.esculturas-cards-container').last().append(allCards)
            cardsRepetead--
        }

        document.getElementsByClassName('esculturas-cards-container')[0].scroll(2400,0)
    })
</script>

</html>