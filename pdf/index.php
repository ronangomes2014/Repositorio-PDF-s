<!DOCTYPE html>
<html>
<head>
    <title>Repositório PHP</title>
    <style>
        body {
            text-align: center;
        }
        #content {
            display: inline-block;
            text-align: left;
            margin-top: 50px;
        }
        footer {
            margin-top: 700px;
        }
        #logo {
            display: inline-block;
            vertical-align: middle;
        }
        #repo-title {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px; /* Adiciona um espaçamento entre a logo e o título */
        }
    </style>
</head>
<body>

<div id="content">
    <!-- Logo -->
    <img id="logo" src="logo.png" alt="Logo" width="100">

    <!-- Título do Repositório -->
    <h2 id="repo-title">Repositório de PDF Deltech Solutions</h2>

    <!-- Formulário de Upload de PDF -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione um arquivo PDF para fazer o upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload PDF" name="submit">
    </form>

    <br>

    <?php
    // Diretório onde estão os PDFs
    $dir = "./pdfs/";

    // Verifica se o diretório existe
    if (is_dir($dir)) {
        // Abre o diretório
        if ($dh = opendir($dir)) {
            // Loop pelos arquivos no diretório
            while (($file = readdir($dh)) !== false) {
                // Verifica se é um arquivo PDF
                if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                    // Exibe o link para o PDF
                    echo "<a href='view_pdf.php?file=" . urlencode($file) . "'>" . $file . "</a><br>";
                }
            }
            // Fecha o manipulador de diretório
            closedir($dh);
        }
    }
    ?>
</div>

<!-- Footer -->
<footer>
    <p>Desenvolvido e Mantido por Ronan Gomes - Deltech Solutions</p>
</footer>

</body>
</html>
