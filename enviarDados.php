    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-color: rgb(48, 75, 145);
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 90vh;
            }
        </style>
        <title>Verificador</title>
    </head>

    <body>
        <?php
        if (isset($_GET['enviarDados'])) {
            $nome = $_GET['nome'];
            $data = $_GET['data'];
            $cpf = $_GET['cpf'];
            $email = $_GET['email'];
            $telefone = $_GET['telefone'];
            include_once('processaDados.php');
            $resultado = $pdo->query("INSERT INTO clientes(nome, data_nascimento, cpf, email, telefone) 
    VALUES ('$nome', '$data', '$cpf', '$email', '$telefone')");
            if ($resultado != null) {
                echo "Dados cadastrados no banco de dados com sucesso!";
            } else {
                echo "Falha ao cadastrar cliente no dados ao banco.";
            }
        }
        ?>
    </body>

    </html>