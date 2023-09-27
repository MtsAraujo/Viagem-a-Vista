<?php
include "../../../config/db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $ListaHoteis = $_POST["ListaHoteis"];
    $tipoQuarto = $_POST["TipoQuarto"];
    $preco = $_POST["preco"];
    $capacidade = $_POST["capacidade"];

    $uploadDirectory = "../imgQuartos/";
    $uploadedFile = $_FILES["fotoQuarto"]["tmp_name"]; 
    $fileName = $_FILES["fotoQuarto"]["name"]; 

    // Crie um nome único para o arquivo para evitar colisões
    $uniqueFileName = uniqid() . "_" . $fileName;

    // Caminho completo para o arquivo no diretório de upload
    $filePath = $uploadDirectory . $uniqueFileName;

    // Mova o arquivo para o diretório de upload
    if (move_uploaded_file($uploadedFile, $filePath)) {


        $sql = "INSERT INTO quartos (HotelID, tipoQuarto, preco, capacidade, foto) VALUES ('$ListaHoteis', '$tipoQuarto', '$preco', '$capacidade', '$filePath')";

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