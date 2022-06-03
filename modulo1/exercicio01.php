<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Calculadora Simples</title>
</head>

<body>


  <div class="container mt-5 text-center">

    <h1 class="text-center">Calculadora Simples</h1>

    <form action="" method="POST">
      <input class="form-control-sm p-2" name="numero1" placeholder="Primeiro número">
      <input class="form-control-sm p-2" name="numero2" placeholder="Segundo número">
      <div>
        <button class="btn btn-primary mt-3" name="somar">Somar</button>
        <button class="btn btn-primary mt-3" name="subtrair">Subtrair</button>
        <button class="btn btn-primary mt-3" name="multiplicar">Multiplicar</button>
        <button class="btn btn-primary mt-3" name="dividir">Dividir</button>
      </div>
    </form>

    <?php
if ($_POST) {
  if (isset($_POST['somar'])) {
    $result = $_POST['numero1'] + $_POST['numero2'];
    echo "Resultado: ";
    echo "<input class='form-control-sm mt-3 fs-6 text-center' type='number' value='$result' disabled >";
 }

  if (isset($_POST['subtrair'])) {
    $result = $_POST['numero1'] - $_POST['numero2'];
    echo "Resultado: ";
    echo "<input class='form-control-sm mt-3 fs-6 text-center' type='number' value='$result' disabled >";
 }

if (isset($_POST['multiplicar'])) {
    $result = $_POST['numero1'] * $_POST['numero2'];
    echo "Resultado: ";
    echo "<input class='form-control-sm mt-3 fs-6 text-center' type='number' value='$result' disabled >";
 }

  if (isset($_POST['dividir'])) {
    $result = $_POST['numero1'] / $_POST['numero2'];
    echo "Resultado: ";
    echo "<input class='form-control-sm mt-3 fs-6 text-center' type='number' value='$result' disabled >";
  }
}

?>

  </div>



</body>

</html>