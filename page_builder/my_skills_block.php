<?php
$skills_home_title = get_sub_field('skills_home_title');
$skills_home_subtitle = get_sub_field('skills_home_subtitle');
$skills_home_text = get_sub_field('skills_home_text');
$skills_home_button = get_sub_field('skills_home_button');
$skills_home_image1 = get_sub_field('skills_home_image1');
$skills_home_image2 = get_sub_field('skills_home_image2');
$skills_home_image3 = get_sub_field('skills_home_image3');
$skills_home_image4 = get_sub_field('skills_home_image4');
?>

<!-- START THE SKILLS -->
<div class="container-fluid s_container" id="skills">
  <div class="row a-bar">
    <div class="col-md-5 grad_left"></div>
    <div class="col-md-2">
      <h2 class="featurette-heading text-center"><?= $skills_home_title; ?></h2>
    </div>
    <div class="col-md-5 grad_rigth"></div>
  </div>
  <div class="row">
    <div class="col-md-6 s_text">
      <div class="row">
        <h3 class="py-5"><?= $skills_home_subtitle ?></h3>
        <p><?= $skills_home_text ?></p>        
      </div>
      <div class="row">
        <a class="btn btn-primary btn-lg" href="#contact" role="button">Hire Me</a>
      </div>
    </div>
    <div class="container-fluid col-md-6">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <img src="<?= $skills_home_image1 ?>" alt="html.png">
              <h2>HTML/CSS</h2>
              <p>Create user interface design with clean & modern ideas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">  
            <div class="card-body">
              <img src="<?= $skills_home_image2 ?>" alt="css.png">
              <h2>Bootstrap</h2>
              <p>Create advance mobile features.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <img src="<?= $skills_home_image2 ?>" alt="javascript.png">
              <h2>Javascript</h2>
              <p>Create high level and dinamic structures.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="<?= $skills_home_image3 ?>" alt="php.png">
              <h2>PHP</h2>
              <p>Create dinamic user products with update ideas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /END THE SKILLS -->