<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: rgb(48, 75, 145);
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      margin: 20px;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      margin-top: 20px;
    }

    .table th,
    .table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .table th {
      background-color: rgb(0, 0, 0);
      color: white;
    }

    .tituloPagina {
      display: flex;
      justify-content: center;
      color: white;
    }

    .irPara {
      display: flex;
      justify-content: center;
      color: white;
    }
  </style>
  <title>Administração de cadastros</title>
</head>

<body>
  <h1 class="tituloPagina">Lista de usuários cadastrados</h1>
  <div class="container">
    <?php
    include_once('processaDados.php'); //Faz a conexão com o banco de dados
    $resultado = $pdo->query('SELECT * FROM clientes;');
    ?>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">CPF</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">...</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Loop através dos resultados da consulta
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<th scope="row">' . $row['id'] . '</th>';
          echo '<td>' . $row['nome'] . '</td>';
          echo '<td>' . $row['data_nascimento'] . '</td>';
          echo '<td>' . $row['cpf'] . '</td>';
          echo '<td>' . $row['email'] . '</td>';
          echo '<td>' . $row['telefone'] . '</td>';
          // Adicione mais colunas conforme necessário
          echo '<td>...</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
  <a href="index.php" class="irPara">Ir para tela de cadastro</a>
</body>

</html>