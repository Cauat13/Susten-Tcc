<div class="card">
    <img src="<?= $data['url']; ?>">
    <div class="details">
        <div class="title">
            <h1><?= $data['Nome']; ?></h1>
        </div>
        <div class="ingredients">
            <ul>
                <?php
                    $lista = unserialize($data['ingredientes']);
                    
                    foreach ($lista as $ingrediente){
                        echo "<li>$ingrediente</li>";
                    }

                    $Produto = $data['Nome'];
                    $numeroWhatsApp = "5513997551890";
                    $mensagem = "Olá! Estou interessado no produto: $Produto";
                    $whatsappLink = "https://wa.me/$numeroWhatsApp/?text=" . rawurlencode($mensagem);

                ?>                
            </ul>

        </div>
        <div class="price">
            <h2><?='R$ ' . number_format($data['preco'], 2); ?></h2>
            <a href="<?=$whatsappLink?>" id="BuyButton">Comprar</a>
        </div>
    </div>
</div>  