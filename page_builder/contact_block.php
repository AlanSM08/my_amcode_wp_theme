<?php
$contact_title = get_sub_field('contact_title');
$contact_subtitle = get_sub_field('contact_subtitle');
$contact_text = get_sub_field('contact_text');
$c_phone = get_sub_field('c_phone') ? get_sub_field('c_phone') : get_theme_file_uri() . '/src/images/c-phone3.png';
$c_mail = get_sub_field('c_mail') ? get_sub_field('c_mail') : get_theme_file_uri() . '/src/images/c-mail3.png';
$c_address = get_sub_field('c_address') ? get_sub_field('c_address') : get_theme_file_uri() . '/src/images/c-address3.png';
?>

<!-- START THE CONTACT -->
<div class="c_container" id="contact">
  <div class="row a-bar">
    <div class="col-md-5 grad_left"></div>
    <div class="col-md-2">
      <h2 class="featurette-heading text-center"><?= $contact_title; ?></h2>
    </div>
    <div class="col-md-5 grad_rigth"></div>
  </div>
  <div class="row">
    <div class="c_subtitle d-flex-column justify-content-center text-center">
      <h3 class="pb-4"><?= $contact_subtitle ?></h3>
      <p><?= $contact_text ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="row call p-4 mb-4">
        <a href="https://wa.me//5548999699056?text=Let's%20Discuss%20Your%20Project!">
          <img src="<?= $c_phone ?>" alt="">
        </a>
        <div class="c_info pl-4">
          <h3>Call me</h3>
          <h3>+55(48)99699056</h3>
        </div>
      </div>
      <div class="row email p-4 mb-4">
        <img src="<?= $c_mail ?>" alt="">
        <div class="c_info pl-4">
          <h3>Email me</h3>
          <h3>eng_alansm@outlook.com</h3>
        </div>
      </div>
      <div class="row address p-4">
        <img src="<?= $c_address ?>" alt="">
        <div class="c_info pl-4">
          <h3>Address</h3>
          <h3>Forquilhinha - SC - Brasil.</h3>
        </div>
      </div>
    </div>
    <div class="col-md-8 pl-5" id="form">
      <form action="https://formsubmit.co/eng_alansm@outlook.com" method="POST">
        <div class="row d-flex">
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <input type="text" name="name" size="20" id="InputName" placeholder="Full name" required>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <input type="text" name="email" size="20" id="InputEmail" placeholder="Your email" required>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <input type="text" name="phone" size="20" id="InputNumber" placeholder="Phone number" required>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <input type="text" name="budget" size="20" id="InputBudget" placeholder="Budget" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="card c-message mt-5">
              <div class="card-body">
                <textarea name="message" id="InputMessage" placeholder="Message" required rows="6" cols="25"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <button class="btn btn-primary btn-lg c-button mt-5" href="#cbutton" role="button">Submit Message</button>
        </div>
        <input type="hidden" name="_subject" value="New Contact!">
        <input type="text" name="_honey" style="display: none">
        <input type="hidden" name="_captcha" value="false">
      </form>
    </div>
  </div>
<!--  <div class="row">
    <a class="btn btn-primary btn-lg c-button" href="#cbutton" role="button">Submit Message</a>
  </div> -->
</div>
<!-- START THE CONTACT -->

