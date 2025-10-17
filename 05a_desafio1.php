<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Maioridade</title>
</head>
<body>
    <h1>Verificador de Maioridade</h1>

    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Ano de nascimento: <input type="number" name="ano" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $ano = (int) $_POST["ano"];
        $anoAtual = date("Y");
        $idade = $anoAtual - $ano;

        if ($idade >= 18) {
            echo "<p>Acesso permitido, $nome! Você tem $idade anos.</p>";

            // Salva nome e idade no arquivo
            $arquivo = fopen("log_acessos.txt", "a");
            fwrite($arquivo, "Nome: $nome | Idade: $idade anos\n");
            fclose($arquivo);
        } else {
            echo "<p>Acesso negado, $nome! Você tem apenas $idade anos.</p>";
        }
    }
    ?>
</body>
</html>