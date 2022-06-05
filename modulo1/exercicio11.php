<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tabela de monitores</title>
</head>

<body>
  <?php
    $produto1 = ["id" => 1,
            "nome" => "Monitor LG 19.5' LED, HD",
            "preco" => "R$ 699,90",
            "descricao" => "O monitor ideal para você
            Com uma tela de 19,5 o monitor LG LED é completo, com resolução de HD (1366x768) com uma taxa de resposta de 2ms(GtG). Além de ter uma taxa de atualização 60Hz com um tratamento de tela com antireflexivo",
            "imagem" => "https://images.kabum.com.br/produtos/fotos/111939/monitor-lg-led-19-5-hdmi-vga-2ms-ajuste-de-inclinacao-20mk400h-b_1585745761_gg.jpg"
        ];

    $produto2 = ["id" => 2,
            "nome" => "Monitor Gamer Acer Nitro QG241Y S 23.8' LED Full HD, 165Hz, 1ms",
            "preco" => "R$ 1.199,90",
            "descricao" => "Monitor Gamer Acer Nitro QG241Y S 23.8 LED Full HD, 165Hz, 1ms, HDMI/DisplayPort, FreeSync Premium, Preto
            Com uma tela de 23,8 FHD, o Nitro QG241Y entrega imagens mais nítidas, levando sua experiência visual e seu foco no jogo para um novo nível.",
            "imagem" => "https://images.kabum.com.br/produtos/fotos/307704/monitor-gamer-acer-nitro-qg241y-p-23-8-led-full-hd-165hz-1ms-hdmi-displayport-freesync-premium-preto-um-qq1aa-s03_1643815428_gg.jpg"
            ];

    $produto3 = ["id" => 3,
            "nome" => "Monitor LG 29' IPS, Ultra Wide, Full HD, HDMI, VESA, Ajuste de Ângulo, HDR 10, 99% sRGB, FreeSync",
            "preco" => "R$ 1.299,90",
            "descricao" => "Eleve o equipamento do seu Home Office O monitor LG UltraWide 29 tem resolução Full HD (2560x1080) e oferece 33% mais espaço de tela comparado a monitores convencionais, permite que você gerencie textos, palestras, conversas e pesquisas em uma única vista e transforme a tela ampla em sua sala de aula on-line favorita. ",
            "imagem" => "https://images.kabum.com.br/produtos/fotos/157553/monitor-lg-led-29-ultrawide-ips-hdmi-displayport-hdr-com-vesa-e-alto-falante-amd-radeon-freesync-29wl500_1620660433_gg.jpg"
            ];

    $produto4 = ["id" => 4,
            "nome" => "Monitor Gamer LG 34' IPS, Curvo Ultra Wide, 144 Hz, Full HD, 1ms, FreeSync, HDR 10, 99% sRGB",
            "preco" => "R$ 2.799,90",
            "descricao" => "Evolua o jogo antes do seu rival O Monitor LG Gamer é um poderoso equipamento de exibição de jogos integrado às funções de alto desempenho que podem responder a qualquer jogo de grande sucesso.",
            "imagem" => "https://images.kabum.com.br/produtos/fotos/107267/monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_1572618373_gg.jpg"
            ];

    $produto5 = ["id" => 5,
            "nome" => "Monitor Gamer Samsung Odyssey G9 49' Curvo, 240 Hz, DQHD, 1ms, FreeSync Premium, HDR 1000",
            "preco" => "R$ 9.899,90",
            "descricao" => "Odyssey G9 com HDR1000: imagens impressionantes e brilho consistente para explorar os jogos com os melhores gráficos. Uma experiência de gameplay perfeita e suave com até quatro vezes mais frames por segundo que uma tela tradicional. Velocidade que faz a diferença entre a sua destruição ou a do seu inimigo no jogo. Design futurista e iluminação Infinity Core com mais de 50 combinações de cores.Tudo pra deixar seu setup no maior estilo.",
            "imagem" => "https://images.kabum.com.br/produtos/fotos/129919/monitor-gamer-samsung-odyssey-led-49-curvo-dqhd-hdmi-displayport-usb-g-sync-freesync-240hz-1ms-altura-ajustavel-lc49g95tsslxzd_1603130064_gg.jpg"
            ];

    $produtos = [$produto1, $produto2, $produto3, $produto4, $produto5];
?>
  <div class="container">
    <table class="table table-hover table-striped mt-5">
      <h1 class="text-center fs-1 mt-5">Tabela de Monitores</h1>
      <hr>
      <thead class="table-dark">
        <tr>
          <th>Produto</th>
          <th>Preço</th>
          <th>Descrição</th>
          <th>imagem</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($produtos as $produto){
                echo"
              <tr>
              <td>{$produto['nome']}</td>
              <td style='width:100px';>{$produto['preco']}</td>
              <td>{$produto['descricao']}</td>
              <td><img src={$produto['imagem']} style='width:100px;'></td>
              </tr>";
                  }
            ?>
      </tbody>
    </table>
  </div>

</body>

</html>