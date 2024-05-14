<!DOCTYPE html>
<html>
<head>
    <title>Upload de PDF</title>
</head>
<body>

<?php
// Diretório onde os PDFs serão salvos
$targetDir = "pdfs/";

// Caminho completo do arquivo de destino
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

// Verifica se o arquivo PDF é válido
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
if($fileType != "pdf") {
    echo "Apenas arquivos PDF são permitidos.";
    $uploadOk = 0;
}

// Verifica se o arquivo já existe
if (file_exists($targetFile)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Verifica se ocorreu algum erro durante o upload
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.";
// Se tudo estiver correto, tenta fazer o upload
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso.";
    } else {
        echo "Desculpe, ocorreu um erro durante o envio do seu arquivo.";
    }
}
?>

</body>
</html>
