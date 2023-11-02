<?php
$about_me_image = get_sub_field('about_me_home_image') ? get_sub_field('about_me_home_image') : get_theme_file_uri() . '/src/images/about-mod2.png';
$about_me_titulo = get_sub_field('titulo_about_me');
$about_me_subtitulo = get_sub_field('subtitulo_about_me');
$about_me_icon = get_sub_field('about_me_icon') ? get_sub_field('about_me_icon') : get_theme_file_uri() . '/src/images/v-icon1.png'; //fazer isso para todas as imagens.
$about_me_button = get_sub_field('about_me_button');

?>  

<!-- START THE ABOUT-ME -->
<div class="container-fluid a-container" id="about_me">
  <div class="row blue-bar a-bar">
    <div class="col-md-5 grad_left"></div>
      <div class="col-md-2">
        <h2 class="featurette-heading "><?= $about_me_titulo; ?></h2>
      </div>
    <div class="col-md-5 grad_rigth"></div>
  </div>
  <div class="row a-bg">    
    <div class="col-md-6 pt-5">
      <div class="row">
        <h3><?= $about_me_subtitulo; ?></h3>
      </div>
      <div class="row i_text py-4">
        <div class="col-md-6">
          <div class="row">
            <img src="<?= $about_me_icon ?>" alt="">
            <p>Front-end Developer</p>
          </div>
          <div class="row">
            <img src="<?= $about_me_icon ?>" alt="">
            <p>Bootstrap</p>
          </div>
          <div class="row">
            <img src="<?= $about_me_icon ?>" alt="">
            <p>JavaScript</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <img src="<?= $about_me_icon ?>" alt="">
            <p>HTML, CSS</p>
          </div>
          <div class="row">
            <img src="<?= $about_me_icon ?>" alt="">
            <p>PHP</p>
          </div>
        </div>
        <a class="b1 btn btn-primary btn-lg p-4 my-5" href="#skills" role="button">My Skills</a>
        <!-- <a class="b2 btn btn-primary btn-lg p-4 ml-4 my-5" href="#" role="button">Reade More</a> -->
      </div>
    </div>
    <div class="col-md-6 c-img">
      <img class="featurette-image img-fluid mx-auto" alt="500x500" src="<?= $about_me_image; ?>" data-holder-rendered="true">
    </div>
  </div>
</div>
<!-- /END THE ABOUT-ME -->