<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
      <label for="nome">Nomes:</label>
      <input type="text" name="nome" required> <br>

      <label for="email">Email:</label>
      <input type="email" name="email" required> <br>

      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" required> <br>

      <!-- Botão de envio -->
       <button type="Submit">Enviar</button>

    </form>

    <?php
        // $_SERVER variável superglobal que guarda informações 
        // do servidor e o topo de requisição feita
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        }
        ?>


    </body>
</html>