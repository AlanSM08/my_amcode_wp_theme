<?php
$banner_image = get_sub_field('minha_imagem') ? get_sub_field('minha_imagem') : get_theme_file_uri() . '/src/images/eu_2.png';
$banner_title = get_sub_field('titulo');
$banner_subtitle = get_sub_field('subtitulo');
$banner_text = get_sub_field('text_description');
$banner_button = get_sub_field('button_url');
$b_icon1 = get_sub_field('b_icon1') ? get_sub_field('b_icon1') : get_theme_file_uri() . '/src/images/icone1-banner2.png';
$b_icon2 = get_sub_field('b_icon2') ? get_sub_field('b_icon2') : get_theme_file_uri() . '/src/images/icone2-banner2.png';
$b_icon3 = get_sub_field('b_icon3') ? get_sub_field('b_icon3') : get_theme_file_uri() . '/src/images/icone3-banner2.png';
?>
<!-- START THE BANNER -->
<div class="container-fluid b-container">
  <div class="b-prim row pt-5 pt-5">
    <div class="col-md-6 pb-5">
      <div class="row">
        <h2 class="featurette-heading"><?= $banner_title; ?></h2>
        <h3><?= $banner_subtitle; ?></h3>
        <p class="lead pt-4"><?= $banner_text; ?></p>
        <a class="btn btn-primary btn-lg p-3" href="#about_me" role="button">About Me</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <img class="featurette-image img-fluid mx-auto" alt="500x500" src="<?= $banner_image; ?>" data-holder-rendered="true">
      </div>
    </div>
  </div>
  <div class="bot_tab">
    <div class="row shadow-lg p-3 mb-5 bg-white rounded ">
      <div class="col-md-4">
        <div class="card c-1 bg-transparent">
          <div class="card-body row">
            <div class="col-md-3">
              <img src="<?= $b_icon1 ?>" alt="html.png">
            </div>
            <div class="col-md-9 pt-3">
              <h2>Compromise</h2>
              <p>With My Projects</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card c-2 bg-transparent container-fluid">  
          <div class="card-body row">
            <div class="col-md-3">
              <img src="<?= $b_icon2 ?>" alt="css.png">
            </div>
            <div class="col-md-9 pt-3">
              <h2>Attentive to </h2>
              <p>Every Details</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card c-3 bg-transparent container-fluid">
          <div class="card-body row">
            <div class="col-md-3">
              <img src="<?= $b_icon3 ?>" alt="javascript.png">
            </div>
            <div class="col-md-9 pt-3">
              <h2>Comunicative</h2>
              <p>Support</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /END THE BANNER -->