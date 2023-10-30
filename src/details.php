<?php
    include "conn.php";

    if(isset($_GET['product'])){
        $query = mysqli_real_escape_string($conn, $_GET['product']);

        $sql_code = "SELECT * FROM produtos WHERE id = $query";

        $results = mysqli_query($conn, $sql_code);
        if ($results){
            if(mysqli_num_rows($results) > 0){
                $data = mysqli_fetch_assoc($results);
                include "../../Components/Card-Details/index.php";
            }else{
                echo "algo deu errado!";
            }
        }
        else{
            echo "algo deu errado!";
        }  
    }
?>