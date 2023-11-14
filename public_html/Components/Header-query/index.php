<?php
if(isset($_SESSION['Category'])){
        switch ($_SESSION['Category']) {
            case 1:
                $title = "Doces";
                $path = "../../Imgs/icons/cake.svg";
                break;

            case 2:
                $title = "Salgados";
                $path = "../../Imgs/icons/bakery_dining.svg";

                break;

            case 3:
                $title = "Bebidas";
                $path = "../../Imgs/icons/coffee.svg";

                break;

            case 4:
                $title = "Outros";
                $path = "../../Imgs/icons/add.svg";

                break;

            case 5:
                $title = "Susten";
                $path = "";
                break;
        }
        session_destroy();
    }
?>
<header>
    <a href="../../index.php" id="return"><img src="../../Imgs/icons/seta.svg" id="ReturnImg"></a>
    <div class="name">
        <img src="<?php echo $path?>">
        <h1><?php echo $title ?></h1>
    </div>
    <img src="../../Imgs/icons/Novidades.svg" alt="novidades" id="notify">
</header>
<?php
        include "../../Components/Notify/index.php"
    ?>