<?php
    $results = mysqli_query($conn, $sql_code);
    if ($results){
        if(mysqli_num_rows($results) > 0){
            while ($row = mysqli_fetch_assoc($results)){
                include "../../Components/Product/index.php";
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }
        mysqli_free_result($results); 
    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }
?>