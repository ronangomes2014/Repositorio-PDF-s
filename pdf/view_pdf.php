<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de PDF</title>
</head>
<body>

<?php
// Verifica se o parâmetro file foi passado na URL
if(isset($_GET['file'])) {
    // Obtém o nome do arquivo PDF
    $file = $_GET['file'];
    // Verifica se o arquivo existe no diretório
    if(file_exists("pdfs/" . $file)) {
        // Exibe o PDF
        echo "<embed src='pdfs/" . $file . "' width='1920' height='1080' type='application/pdf'>";
    } else {
        echo "Arquivo não encontrado.";
    }
} else {
    echo "Parâmetro 'file' não encontrado na URL.";
}
?>

</body>
</html>
