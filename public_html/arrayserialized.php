<?php
    if(isset($_POST['Receita'])){
        $lista = $_POST['Receita'];
        $itens =$itens = preg_split('/\r\n|\r|\n/', $lista);
        $itens = array_map('trim', $itens);
        $itens = array_filter($itens);
        $itens = serialize($itens);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
            body{
                font-family: 'Inter', sans-serif;
                
                width: 100vw;
                display:flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 30px;
            }
            form{
                width: 300px;
                display:flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;

                padding: 20px;
                background: rgba(255, 255, 255, 0.95);
                box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.25);
                border-radius: 15px;
            }
            input{
                width: 100%;
                border: solid 1px gray;
                background: rgba(255, 255, 255, 0.95);
            }
            input[type='submit']{
                width: 80px;
                padding: 10px;
                background-color: darkgreen;
                color: white;
                border: none;
            }
            .resultado{
                max-width: 400px;
            }
            img{
                height: 125px;
                border-radius: 15px;
                aspect-ratio: 6 / 4;
            }

        </style>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome">
        <br>
        <label for="lista">Lista de Itens:</label>
        <textarea id="Receita" name="Receita" rows="15" cols="40"></textarea>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="any" min="0.1">
        <br>
        <label for="categoria">categoria:</label>
        <select name="categoria">
            <option value="1">Bolo</option>
            <option value="2">Salgado</option>
            <option value="3">Bebida</option>
            <option value="4">Outro</option>
        </select>
        <br>
        <input type="submit" value="Finalizar">
    </form>    

    <div class="resultado">
        <div class="array">
            <h2>String para o banco de dados: </h2>
            <?php if(isset($_POST['Receita'])){ print_r($itens); }?>
        </div>
        <div class="afterserialized">
            <h2>Resultado depois da unserialize: </h2>
            <?php if(isset($_POST['Receita'])){ print_r(unserialize($itens)); }?>
        </div>
        <div class="codsql">
            <h2>Codigo SQL:</h2>
            <?php if(isset($_POST['Receita'])){ 
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];
            print_r("INSERT INTO produtos (`url`, `Nome`, `ingredientes`, `preco`, `disponivel`, `categoria`) VALUES ('a/aa/bbb', '$nome', '$itens', $preco, false, $categoria)");
            }?>
        </div>
    </div>
    <div class="imgs">
            <img src="imgs/produtos/BoloBanana.png" alt="">
            <img src="imgs/produtos/BoloCenoura.png" alt="">
            <img src="imgs/produtos/BoloChocolate.png" alt="">

            <img src="imgs/produtos/BoloLaranja.png" alt="">
            <img src="imgs/produtos/BoloSalgado.png" alt="">
            <img src="imgs/produtos/Kibe.png" alt="">

            <img src="imgs/produtos/SanduichePate.png" alt="">
            <img src="imgs/produtos/sucodeuva.jpg" alt="">
            <img src="imgs/produtos/SucoLaranja.png" alt="">
                
            <img src="imgs/produtos/SucoLimao.png" alt="">
            <img src="imgs/produtos/SucoMaracuja.png" alt="">
            <img src="imgs/produtos/TortaFrango.png" alt="">


        </div>

</body>
</html>
