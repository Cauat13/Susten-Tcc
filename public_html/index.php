<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imgs/LogoSusten.png" type="image/png">

    
    <!--Linkando o css-->
    <link rel="stylesheet" href="Css/Header/Header-Home.css">
    <link rel="stylesheet" href="Css/Home/Home.css">
    <link rel="stylesheet" href="Css/Popup/Popup.css">
    <link rel="stylesheet" href="Css/ajax/ajax.css">

    <!--linkando a font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Susten lanches e bebidas do 3 T.A</title>
</head>
<body>

    <?php include "Components/Header-Home/index.php";?>

    <div class="banner">
        <img src="Imgs/Banner.png" alt="banner de sustentabilidade">
    </div>

    <form action="Pages/Results" method="get" class="search">
        <input type="text" name="pesquisa" id="search" placeholder="Encontre o seu favorito" autocomplete="off">
        <img src="Imgs/icons/search.svg" alt="busca">
    </form>

    <div class="ajax">
        <ul id="search-results">
        </ul>
    </div>
    <nav>
        <div class="title" id="Category">
            <h1>Categorias</h1>
        </div>
        <div class="menu">
            <div class="item">
                <a href="Pages/Results/index.php?Category=1"><button><img src="Imgs/icons/cake.svg" alt="bolo"></button></a>
                <p>Doces</p>
            </div>
            <div class="item">
                <a href="Pages/Results/index.php?Category=2"><button><img src="Imgs/icons/bakery_dining.svg" alt="salgados"></button></a>
                <p>Salgados</p>
            </div>
            <div class="item">
                <a href="Pages/Results/index.php?Category=3"><button><img src="Imgs/icons/coffee.svg" alt="bebidas"></button></a>
                <p>Bebidas</p>
            </div>
            <div class="item">
                <a href="Pages/Results/index.php?Category=4"><button><img src="Imgs/icons/add.svg" alt="outros"></button></a>
                <p>outros</p>
            </div>
        </div>
    </nav>
    <main>
        <div class="titulo">
            <h1>Disponiveis</h1>
        </div>
        <img src="imgs/Products/BoloBanana.png" alt="" id="disponiveis">
    </main>
    <?php
        include "Components/Notify/index.php"
    ?>
    <script src="js/popup.js"></script>
    <script src="js/search.js"></script>

</body>
</html>