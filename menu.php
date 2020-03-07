<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
</head>

<style>
    .menu-container{
        position: absolute;
        width: 100%;
        height: 70px;
        margin: 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 30px 0px 30px;

    }

    .menu-options{
        width: 500px;
        display: flex;
        justify-content: space-between;
        align-items: center;

        
    }
    .menu-options a{
        padding: 5px;
        text-decoration: none;
        font-size: 19px;
        font-weight: 700;
        font-family: 'Merriweather', serif;
    }
    .homeMenu{
        background-color: transparent;

    }
    
    .homeMenu .menu-options a{
        color: white;
        

    }

    .defaultMenu{

    }
    
    


</style>
<body>

    
<div class="menu-container homeMenu">
    <div class="logo-container">
        <img src="logo.png" alt="">
    </div>
    <div class="menu-options">
        <a href="arquitetura/arquitetura.php">Arquitetura</a>
        <a href="pinturas/pinturas.php">Pinturas</a>
        <a href="esculturas/esculturas.php">Esculturas</a>

        <a class="practice-button" href="pratique/pratique.php">Pratique</a>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




</html>