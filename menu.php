<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
html, body{
    margin: 0px;
    padding: 0px;
}
    .menu-container {
        position: absolute;
        z-index: 10;
        width: 100%;
        box-sizing: border-box;
        height: 75px;
        margin: 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 30px 0px 30px;

    }

    .logo-container {
        height: 50px;
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .logo-container img {
        height: 60px;
        width: 60px;
        display: block;
        z-index: 100;
    }

    .logo-container h3 {
        font-size: 30px;
        font-weight: bold;
        color: white;
        margin: 0px;
        font-family: 'Poppins', sans-serif;
    }

    .logo-container a {
        width: 200px;
    }

    .menu-options {
        width: 600px;
        display: flex;
        justify-content: space-between;
        align-items: center;


    }

    .menu-options a {
        padding: 5px;
        text-decoration: none;
        font-size: 19px;
        font-weight: 700;
        font-family: 'Merriweather', serif;
    }

    .practice-button {
        background: #1d8cf8;
        background-image: linear-gradient(to bottom left, #1d8cf8, #3358f4, #1d8cf8);
        background-size: 210% 210%;
        background-position: 100% 0;
        background-color: #1d8cf8;
        box-shadow: none;
        color: #fff;

        padding: 5px 15px !important;
        border-radius: 6px;
    }

    .homeMenu {
        background-color: transparent;

    }


    a {
        outline: none;
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
        color: white;
    }

  
</style>

<body>


    <div class="menu-container homeMenu">
        <a href="../home/home.php">
            <div class="logo-container">

                <img src="../logo-icon-white.png" alt="">
                <h3>Artistory</h3>
            </div>
        </a>
        <div class="menu-options">
            <a href="../arquitetura/arquitetura.php">Arquitetura</a>
            <a href="../pinturas/pinturas.php">Pinturas</a>
            <a href="../esculturas/esculturas.php">Esculturas</a>
            <a href="../cultura/cultura.php">Cultura</a>
            <a class="practice-button" href="../pratique/pratique.php">Pratique</a>
        </div>
    </div>

</body>



</html>