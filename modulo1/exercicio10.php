<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tabela cadastro alunos</title>
</head>

<body>

  <?php

$aluno1 = ["nome" => "João Gomes",
    "email" => "joaogomes@yahoo.com.br",
    "telefone" => "71 98099-9959",
    ];

$aluno2 = ["nome" => "Euclides de Alexandria",
    "email" => "euclidesalexandria@msn.com",
    "telefone" => "71 99944-9898",
     ];

$aluno3 = ["nome" => "Juscelino Kubitschek",
    "email" => "jukubitschek@globo.com",
    "telefone" => "71 99955-7474",
    ];

$aluno4 = ["nome" => "Luiza Helena Trajano",
    "email" => "lutrajano@live.com",
    "telefone" => "71 99988-7778"
    ];


$alunos = [$aluno1, $aluno2, $aluno3, $aluno4];
?>
  <div class="container">
    <table class="table table-striped table-hover mt-5">
      <h1 class="text-center fs-2 mt-5">Tabela cadastro de Alunos</h1>
      <thead class="table-dark">
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        <?php

        foreach ($alunos as $cadaAluno) {         
       
            echo "<tr>

             <td>{$cadaAluno['nome']}</td>
             <td>{$cadaAluno['email']}</td>
             <td>{$cadaAluno['telefone']}</td>
             </tr>"; 
            }      
        ?>
        </tr>
      </tbody>
    </table>
  </div>


</body>

</html>