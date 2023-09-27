<?php
include "../../../config/db.php";

// Verificação das informações de login
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND admin = '1'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: ../../admin/admin.php");
        echo "Login bem-sucedido!";
    } else {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            header("Location: ../../principal/index.php");
            echo "Login bem-sucedido!";
        } else {
            echo"senha ou e-mail incorreta";
        }
    }

    mysqli_close($conn);
    
}