<?php
include "../../../config/db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nomeHotel = $_POST["nomeHotel"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $estrelas = $_POST["estrelas"];

    $uploadDirectory = "../imgHotel/";
    $uploadedFile = $_FILES["fotoHotel"]["tmp_name"]; 
    $fileName = $_FILES["fotoHotel"]["name"]; 

    // Crie um nome único para o arquivo para evitar colisões
    $uniqueFileName = uniqid() . "_" . $fileName;

    // Caminho completo para o arquivo no diretório de upload
    $filePath = $uploadDirectory . $uniqueFileName;

    // Mova o arquivo para o diretório de upload
    if (move_uploaded_file($uploadedFile, $filePath)) {


        $sql = "INSERT INTO hoteis (nome, endereco, telefone, estrelas, foto) VALUES ('$nomeHotel', '$endereco', '$telefone', '$estrelas', '$filePath')";

        if ($conn->query($sql) === TRUE) {
            echo "Hotel cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar hotel: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Erro ao fazer o upload do arquivo.";
    }
} 
?>