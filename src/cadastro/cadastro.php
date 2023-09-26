<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Cadastro</h2>
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
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </form>
            <a class="mt-5" href="../../src/login/login.php">Já possui cadastro?</a>
        </div>
    </div>
</div>

<!-- Inclua os arquivos JavaScript do Bootstrap e jQuery (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
