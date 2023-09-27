<?php
include "../../config/db.php";?>

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
            <form method="POST" action="controller/cadastro.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o nome do hotel">
                    </div>
                    <div class="form-group">
                        <label for="telefone">telefone:</label>
                        <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="Digite sua senha">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto do Hotel:</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </form>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Cadastro Quarto</h2>
            <form method="POST" action="controller/cadastro.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </form>
            </form>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>