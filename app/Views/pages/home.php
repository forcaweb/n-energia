<main class="container effectPage">
<?php
include '../app/Views/pages/componets/menu.php';
include 'tableprices.php';
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' );
?>
  <section class="section-contents">
    <article>
      <div>
        <h1>Economize na energia</h1>
        <small>Reduzimos em até 95% sua conta de energia</small>
        <p>Já imaginou  uma redução de até 95% da sua conta de energia? Isso mesmo, clica no botão abaixo.</p>
        <a href="<?= Wts ?>">Ir Para o Chat</a>
      </div>
      <div>
        <img src="<?= URL ?>/img/image_equipment.png?<?= VER_WEB ?>" alt="Exemplo de um equipamento" decoding="async">
      </div>
    </article>
    <div class="seemore">
      <h2>Veja Mais</h2>
      <p><i class="bi bi-chevron-double-down"></i></p>
    </div>
  </section>

  <section class="installeptable">
    <div>
    <table>
      <thead>
        <h2>GERAÇÃO DE ENERGIA COM MICRO INVERSOR</h2>
        <p><i class="bi bi-lightning-fill"></i> Promoções de <?= $months[$monthtoday]; ?></p>
        <tr>
          <th>KITS</th>
          <th>Redução de seu consumo</th>
          <th>Projeto, materiais, instalação e homologação</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < count($table['descricao']); $i++){ ?>
        <tr>
          <td><i class="bi bi-brightness-high"></i> <?= $i ?> - Kit Solar Gerando <?= $table['descricao'][$i] ?> KWP</td>
          <td><?= $table['producao_mensal'][$i] ?> KWH</td>
          <td>R$ <?= number_format($table['valor'][$i],2,",","."); ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </section>

  <!-- <section class="installep">
    <article>
        <h2>instalação de sistemas para aquelas contas de até 150 kwh R$ 128,00/mês</h2>
        <small>kit com micro inversor por:</small>
        <p class="price">R$ 8.600.00</p>
        <a href="<?= Wtsmsg1 ?>">Ir Para o Chat</a>
    </article>
  </section> -->

  <section class="pricesep">
    <div class="desc">
      <h2>Vale apena usar nossos kits?</h2>
      <p>Veja um exemplo de economia. Um antes e depois de usar nossos kits.</p>
      <p>Veja nessas imagens as vantagens de usar nossos kits:</p>
      <a href="<?= Wts ?>">Ir Para o Chat</a>
    </div>
    <!-- Swiper -->
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <h3><i class="bi bi-emoji-neutral-fill"></i> Antes</h3>
          <img src="<?= URL ?>/img/before.png?<?= VER_WEB ?>" alt="before price" decoding="async">
        </div>
        <div class="swiper-slide">
          <h3><i class="bi bi-emoji-smile-fill"></i> Depois</h3>
          <img src="<?= URL ?>/img/after.png?<?= VER_WEB ?>" alt="after price" decoding="async">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <section class="section-contents economic">
    <article>
      <div>
        <img src="<?= URL ?>/img/casa.png?<?= VER_WEB ?>" alt="Exemplo de um equipamento" decoding="async">
      </div>
      <div>
        <h1>Sustentável & Econômico</h1>
        <p><i class="bi bi-check2-circle"></i> Gera energia sem deixar resíduos.</p>
        <p><i class="bi bi-check2-circle"></i> Com vida útil de até 25 anos.</p>
        <p><i class="bi bi-check2-circle"></i> E economize em até 95% do valor de sua energia.</p>
        <a href="<?= Wts ?>">Ir Para o Chat</a>
      </div>
    </article>
  </section>
</main>
