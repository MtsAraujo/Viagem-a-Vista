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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Viajem a Vista</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../src/principal/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../src/login/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../src/cadastro/cadastro.php">Cadastre-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Login</h2>
                <form method="POST" action="controller/login.php">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <a class="mt-5" href="../../src/cadastro/cadastro.php">Ainda não possui cadastro?</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>