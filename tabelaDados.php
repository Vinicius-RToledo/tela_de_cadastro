<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(48, 75, 145);
            margin: 0;
            padding: 0;
        }

        .titulo {
            color: white;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .textoConfirma {
            display: flex;
            justify-content: center;
            color: white;
            text-align: center;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .acoes {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }
        .voltar {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['submit'])) {
            $nome = $_GET['nome'];
            $data = $_GET['data'];
            $cpf = $_GET['cpf'];
            $email = $_GET['email'];
            $telefone = $_GET['telefone'];
        ?> <!--- ATENÇÃO, AQUI FECHEI MINHA PRIMEIRA ETAPA DO SCRIPT PHP, ONDE VERIFIQUEI A EXISTENCIA DOS DADOS --->

            <h2 class="titulo">Dados do Formulário de cadastro</h2>
            <form action="enviarDados.php">
                <table class="table">
                    <tr>
                        <th>Nome:</th>
                        <td><?php echo $nome; ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento:</th>
                        <td><?php echo $data; ?></td>
                    </tr>
                    <tr>
                        <th>CPF:</th>
                        <td><?php echo $cpf; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>Telefone:</th>
                        <td><?php echo $telefone; ?></td>
                    </tr>

                </table>
                <p class="textoConfirma">Se os dados estiverem corretos, clique em "Enviar", se não clique em "Voltar" para refazer o cadastro.</p>
                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
                <div class="acoes">
                <button type="submit" id="enviarDados" name="enviarDados">Enviar</button>
                <a href="index.php" class="voltar">Voltar</a>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>