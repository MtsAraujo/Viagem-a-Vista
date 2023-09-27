<?php
include "../../../config/db.php";

// Conecte-se ao banco de dados (substitua as informações de conexão pelo seu próprio)


if(isset($_POST['nome']) && isset($_POST['email'])  && isset($_POST['senha'])){
    // Receba os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dataAtual = date("Y-m-d H:i:s");
    
    // Insira os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha','$dataAtual')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../view/index.php");
        echo 'cadastrado com sucesso' ;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}else{
    echo "vazio";
}