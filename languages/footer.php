<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="agendar">
  <div class="container">
    <h2 class="title" data-animar>AGENDE A SUA AVALIAÇÃO NA DENSITÁ</h2>
    <? echo do_shortcode('[contact-form-7 id="5" title="Form Footer"]'); ?>
  </div>
</div>

<footer class="footer" id="contato">
  <div class="container">
    <div class="footer-logo">
      <img src="<?=get_template_directory_URI()?>/img/rsc/logo.svg" alt="Logotipo Densitá" />
    </div>

    <div class="footer-dados">
      <h2 class="title">Contato</h2>

      <ul>
        <li>
          <a href="tel:3333333333" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#tel"></use>
            </svg>
            <span>33 3333-3333</span>
          </a>
        </li>

        <li>
          <a href="mailto:contato@densita.com.br" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#mail"></use>
            </svg>
            <span>contato@densita.com.br</span>
          </a>
        </li>

        <li>
          <a href="https://wa.me/+553199999999" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#whatsapp"></use>
            </svg>
            <span>33 3333-3333</span>
          </a>
        </li>

        <li>
          <a href="https://goo.gl/maps/hmR4CFd7o2JbkH16A" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#pin"></use>
            </svg>
            <span>Av. Engenheiro Carlos Stevenson, 989,
              Nova Campinas, Campinas,
              CEP 13092-132
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="instagram">
      <?php
      $userid = "350695077";
      $accessToken = "350695077.1677ed0.9889e952e42b408c84dc0c103754140b";
  
      function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 
        return $result;
      }
  
      $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
      $result = json_decode($result);
      
      $xx = "1"; foreach ($result->data as $post): if ($xx < 5) { ?>
      <a href="https://www.instagram.com/densita" target="_blank" class="insta-box insta<?=$xx?>">
        <img src="<?= $post->images->standard_resolution->url ?>" alt="Instagram Densitá" />
      </a>
      <? $xx++; } endforeach ?>

      <a href="https://www.instagram.com/densita" target="_blank" class="insta-box insta-icon">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>
    </div>
  </div>
</footer>

<div class="rodape">
  <p>Todos os direitos reservados a Dentista. Desenvolvido na <a href="https://agenciasalt.com/" target="_blank">Agência
      Salt</a>.</p>
  <a href="https://sevengestao.com" target="_blank">
    <img src="<?=get_template_directory_URI()?>/img/rsc/seven.png" alt="Seven Gestão" />
  </a>

  <button class="to-top">
    <svg width="32" height="32" viewBox="0 0 32 32">
      <use xlink:href="#arrow"></use>
    </svg>
  </button>
</div>

<div class="popup-especialista"></div>

<div style="display: none;">
  <? include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>

<?php wp_footer(); ?>

</body>

</html>