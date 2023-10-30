<?php
    include "../../../src/query.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/details/">

    <!--linkando a css-->
    <link rel="stylesheet" href="../../Css/Header/Header-Query.css">
    <link rel="stylesheet" href="../../Css/Details/Details.css">


    <!--linkando a font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        @media (min-width: 500px) {
            html{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100%;
            }
            body{
                font-family: 'Inter', sans-serif;
                max-width: 500px;
                box-shadow: 0px 0px 38px 0px rgba(0, 0, 0, 0.30);
                padding-bottom: 20px;
            }
        }
    </style>

    <title>Detalhes</title>
</head>
<body>
    <?php

        include "../../Components/Header-query/index.php";
    ?>
    <main>
        <?php
            include "../../../src/details.php";
        ?>           
    </main>
 
</body>
</html>