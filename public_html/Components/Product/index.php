<div class="Product">
    <div class="img">
        <img src=" <?=$row['url'];?> " alt="">
    </div>
    <div class="details">
        <h1><?= $row['Nome']; ?></h1>
        <h2> R$ <?= number_format($row['preco'], 2); ?></h2>
        <a href="../Details/index.php?product=<?= $row['id']; ?>">Ver...</a>
    </div>
</div>