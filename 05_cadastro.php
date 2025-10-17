<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form action="" method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="senha">Senha:</label>
    <input type="passworld" name="senha" required>

    <button type="submit">Cadastrar</button>

    </form>

    <?php
    if($_SERVER['RESQUET_METHOD'] = 'POST') {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
    }

    // Abre/cria arquivo (usuarios.txt) para  guardar os dados. O "a" vem de append (acrescentar)
    $arquivo =fopen('usuarios.txt','a');

 
    // Cria uma linha com nome e senha separados por ;
    $linha = $nome . ';' . $senha . "\n";

    // Insere a linha criada no arquivo (usuarios.txt)
    fwrite($arquivo, $linha);

    // Fecha o arquivo
    fclose($arquivo);

     // Mensagem de confirmação (Cadastro)
    echo "<p>Usuário cadastrado com sucesso!!</p>";
 ?>

</body>
</html>
