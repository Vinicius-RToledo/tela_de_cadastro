<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de clientes</title>
</head>

<body>
    <form action="tabelaDados.php" method="get">

        <div class="tituloCadastro">
            <h1 class="textoIndica">
                Cadastro
            </h1>
            <p>Preencha todos os campos abaixo para realizar o cadastro</p>
        </div>
        <br>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="data">Data de nascimento: </label>
            <input type="date" id="data" name="data" required>
        </div>
        <br>
        <div>
            <label for="cpf">CPF: </label>
            <input type="number" id="cpf" name="cpf" placeholder="Digite o CPF sem os pontos" required>
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="number" id="telefone" name="telefone" required>
        </div>
        <br>
        <div class="botao">
            <button type="submit" id="submit" name="submit" required>Enviar Dados</button>
        </div>

    </form>
</body>

</html>