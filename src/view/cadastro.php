<?php include "header.php"?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Cadastro</h2>
                <form method="POST" action="../cadastro/controller/cadastro.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="Digite sua senha" required>
                    </div>
                    <div class="form-group">
                        <label for="senhaConfirm">Confirmar senha:</label>
                        <input  type="password" class="form-control" id="senhaConfirm" placeholder="Repita a senha" required>
                        <span id="senhaMismatch" class="text-danger"></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </form>
                <div  class="mt-3">
                    <a class="mt-5" href="login.php">Já possui cadastro?</a>
                </div>
            </div>
        </div>
    </div>
<script src="../cadastro/assets/script.js"></script>
<?php include "footer.php"?>