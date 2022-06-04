<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tipos de variáveis</title>
</head>

<body>

  <table class="table table-striped table-hover mt-5 table-light">
    <thead>
      <th>Nome</th>
      <th>Idade</th>
      <th>Altura</th>
      <th>Profissão</th>
      <th>Gosta de programar</th>
      <th>Bebida favorita</th>
    </thead>
    <tbody>
      <tr>
        <?php

        $nome = "Thiago"; //string
        $idade = 30; //integer
        $altura = 1.71; //float
        $profissao = "Analista de sistemas"; //string
        $gostaDeProgramar = true ? "Sim" : "Não"; //boolean
        $bebidaFavorita = "Café com leite"; //string

            echo "<td> {$nome} </td>";
            echo "<td> {$idade} </td>";
            echo "<td> {$altura} </td>";
            echo "<td> {$profissao} </td>";
            echo "<td> {$gostaDeProgramar} </td>";
            echo "<td> {$bebidaFavorita} </td>";
        ?>
      </tr>
    </tbody>
  </table>

</body>

</html>