<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome_do_produto">Nome do produto:</label>
        <input type="text" name="nome_do_produto" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01"><br><br>

        <button type="submit">Cadastrar produto</button><br>
    </form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados pelo formulário
    $nome_do_produto = $_POST['nome_do_produto'];
    $preco = $_POST['preco'];

    // Conecta ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Insere o registro no banco de dados
    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome_do_produto', '$preco')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Produto cadrastado com sucesso!</p>";
    } else {
        echo "<p style='color: red;'>Erro: O preço deve ser um número positivo." . $conn->error . "</p>";
    }

    // Fecha a conexão
    $conn->close();
}
?>
</body>
</html>

