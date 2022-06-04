<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Data de nascimento</title>
</head>

<body>
  <div class="container mt-5 text-center">

    <h1>Data de Nascimento</h1>
    <form method='POST'>
      <select>
        <option selected>Selecione o dia</option>
        <?php
        for($dia = 1; $dia <= 31; $dia++) {
          echo "<option>{$dia}</option>";
        }
      ?>
      </select>

      <select>
        <option selected>Selecione o mês</option>
        <?php
       for($mes = 1; $mes <= 12; $mes++) {
         echo "<option>{$mes}</option>";
       }
      ?>
      </select>

      <select>
        <option selected>Selecione o ano</option>
        <?php
       for($ano = 2022; $ano >= 1910; $ano--) {
         echo "<option>{$ano}</option>";
       }
      ?>
      </select>

    </form>
  </div>
</body>

</html>