<?php
// Pasta onde os vídeos serão salvos
$uploadDir = "Videos/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Arquivo JSON
$jsonFile = "recriorise.json";

// Recebe dados do formulário
$data = $_POST;

// Trata upload de vídeo
if (isset($_FILES['video']) && $_FILES['video']['error'] === 0) {
    $videoName = time() . "_" . basename($_FILES['video']['name']);
    $targetFile = $uploadDir . $videoName;

    if (move_uploaded_file($_FILES['video']['tmp_name'], $targetFile)) {
        $data['video'] = $targetFile;
    } else {
        echo json_encode(["status" => "erro", "mensagem" => "Falha ao enviar vídeo"]);
        exit;
    }
} else {
    $data['video'] = null; // caso não tenha enviado
}

// Se o arquivo JSON não existir, criar
if (!file_exists($jsonFile)) {
    file_put_contents($jsonFile, json_encode([], JSON_PRETTY_PRINT));
}

// Lê dados existentes
$currentData = json_decode(file_get_contents($jsonFile), true);

// Adiciona data/hora do registro
$data['data_registro'] = date("d/m/Y H:i:s");

// Adiciona ao array
$currentData[] = $data;

// Salva de volta no JSON
file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(["status" => "sucesso", "mensagem" => "Cadastro e vídeo enviados com sucesso"]);
?>
