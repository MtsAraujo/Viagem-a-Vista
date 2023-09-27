<?php
include "../../config/db.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajem a vista</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Cadastro Hotel</h2>
                <form method="POST" action="../admin/controller/cadastroHotel.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeHotel">Nome:</label>
                        <input name="nomeHotel" type="text" class="form-control" id="nomeHotel"
                            placeholder="Digite o nome do hotel">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input name="endereco" type="text" class="form-control" id="endereco"
                            placeholder="Digite o telefone do hotel">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input name="telefone" type="text" class="form-control" id="telefone"
                            placeholder="Digite o telefone do hotel">
                    </div>
                    <div class="form-group">
                        <label for="estrelas">Estrelas:</label>
                        <input min="0" max="5" name="estrelas" type="number" class="form-control" id="estrelas"
                            placeholder="Digite o numero de estrelas do hotel">
                    </div>
                    <div class="form-group">
                        <label for="FotoHotel" class="form-label">Foto do Hotel:</label>
                        <input class="form-control p-5" name="fotoHotel" type="file" id="FotoHotel">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Cadastro Quarto</h2>
                <form method="POST" action="../admin/controller/cadastroQuarto.php"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ListaHoteis">Selecione o Hotel</label>
                        <select class="w-100 form-control" name="ListaHoteis" id="ListaHoteis">
                            <?php
                            $sql = "SELECT id,nome FROM hoteis";

                            // Execute a consulta
                            $result = $conn->query($sql);
                            
                            // Verifique se a consulta foi bem-sucedida
                            if ($result) {
                                // Loop para exibir os nomes dos hotéis
                                while ($row = $result->fetch_assoc()) {
                                    $nomeHotel = $row["nome"];
                                    $idHotel = $row["id"];
                                    echo  "<option value='$idHotel'>$nomeHotel</option>";
                                }
                            } else {
                                echo "Erro na consulta: " . $conn->error;
                            }
                            
                            // Feche a conexão com o banco de dados
                            $conn->close();                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TipoQuarto">Tipo do Quarto</label>
                        <select class="w-100 form-control" name="TipoQuarto" id="TipoQuarto">
                            <option value="Quarto solteiro">Quarto solteiro</option>
                            <option value="Quarto duplo solteiro">Quarto duplo solteiro</option>
                            <option value="Quarto casal">Quarto casal</option>
                            <option value="Quarto dormitório">Quarto dormitório</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço:</label>
                        <input  name="preco" type="number" class="form-control" id="preco"
                            placeholder="Digite o valor do Quarto">
                    </div>
                    <div class="form-group">
                        <label for="capacidade">Capacidade:</label>
                        <input name="capacidade" type="number" class="form-control" id="capacidade"
                            placeholder="Digite o valor do Quarto">
                    </div>
                    <div class="form-group">
                        <label for="FotoQuarto" class="form-label">Foto do Quarto:</label>
                        <input class="form-control p-5" name="fotoQuarto" type="file" id="FotoQuarto">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>