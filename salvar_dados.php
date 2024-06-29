<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $senha = $_POST["senha"];

    // Abre ou cria o arquivo CSV para escrita (modo append)
    $file = fopen("dados.csv", "a");

    // Escreve os dados no arquivo CSV
    fputcsv($file, array($nome, $numero, $senha));

    // Fecha o arquivo CSV
    fclose($file);

    // Redireciona para a página de sucesso (opcional)
    header("Location: cadastro_sucesso.html");
    exit();
}
?>
