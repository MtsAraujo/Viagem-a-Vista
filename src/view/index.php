<?php include "header.php";
include "../../config/db.php";
?>
<div class="container mt-5">
    <div class="row">
            <?php
            $sql = "SELECT * FROM hoteis";

            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $idHotel = $row["id"];
                    $nomeHotel = $row["nome"];
                    $endereco = $row["endereco"];
                    $estrelas = $row["estrelas"];
                    $foto = $row["foto"];
                    echo  "<div class='card mx-2' style='width: 18rem;'>
                                <img class='card-img-top' src='$foto' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$nomeHotel</h5>
                                    <p>$endereco</p>
                                    <p class='card-text'> Descrição</p>
                                    <a href='#' class='btn btn-primary'>Go somewhere</a>
                                </div>
                            </div>";
                }
            } else {
                echo "Erro na consulta: " . $conn->error;
            }

            $conn->close();                            
            ?>
    </div>           
</div>
<?php include "footer.php"?>