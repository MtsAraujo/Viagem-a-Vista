<?php
include "../../../config/db.php";

// Verificação das informações de login
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Usuário autenticado com sucesso
        echo "Login bem-sucedido!";
    } else {
        // Usuário não encontrado ou senha incorreta
        echo "Login falhou. Verifique seu email e senha.";
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conn);
    header("Location: ../../principal/index.php");
}else{
    echo"nao enviado";
}
