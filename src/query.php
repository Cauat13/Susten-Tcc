<?php
    session_start();

    include "conn.php";
    
    if(isset($_GET['pesquisa']) || isset($_GET['Category']) || isset($_GET['product'])){
        $value = current($_GET);
        $query = mysqli_real_escape_string($conn, $value);

        //Definindo codigo sql
        if(isset($_GET['pesquisa'])){
            $sql_code = "SELECT * FROM produtos WHERE nome LIKE '%$query%'";
        }

        elseif(isset($_GET['Category'])){
            $sql_code = "SELECT * FROM produtos WHERE categoria = '$query'";
        }

        elseif(isset($_GET['product'])){
            $sql_code = "SELECT * FROM produtos WHERE id = '$query'";
        }

        $results = mysqli_query($conn, $sql_code);

        if ($results){
            if(mysqli_num_rows($results) > 0){
                while ($row = mysqli_fetch_assoc($results)){
                    $_SESSION['Category'] = $row['categoria'];
                }
            }
            else{
                $_SESSION['Category'] = 5;
            }
        }
    }

?>