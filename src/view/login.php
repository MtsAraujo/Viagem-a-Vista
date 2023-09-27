<?php include "header.php"?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Login</h2>
                <form method="POST" action="../login/controller/login.php">
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
                <div  class="mt-3">
                    <a href="cadastro.php">Ainda não possui cadastro?</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>