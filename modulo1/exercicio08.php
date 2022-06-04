<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tabela com dados do PHP</title>
</head>

<body>

  <table class="table table-striped table-hover mt-5 table-light">
    <thead>
      <th>Nome</th>
      <th>Idade</th>
      <th>Altura</th>
      <th>Peso</th>
      <th>Filme Favorito</th>
      <th>Bebida favorita</th>
    </thead>
    <tbody>
      <tr>
        <?php

        $nome = "Elias";
        $idade = 23; 
        $altura = 1.62;
        $peso = 62;
        $filmeFavorito = "Vingadores: Ultimato";
        $bebidaFavorita = "Capuccino"; 

        var_dump($nome);

            echo "<td> {$nome} </td>";
            echo "<td> {$idade} </td>";
            echo "<td> {$altura} </td>";
            echo "<td> {$peso}kg </td>";
            echo "<td> {$filmeFavorito} </td>";
            echo "<td> {$bebidaFavorita} </td>";
        ?>
      </tr>
    </tbody>
  </table>

</body>

</html>