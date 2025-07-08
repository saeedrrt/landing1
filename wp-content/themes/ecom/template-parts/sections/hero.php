<?php 
$hero_sec = get_field('hero_section', 30);
?>
<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area" id="hero" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/bg/header-bg1.png);">
  <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements1.png" alt="" class="d-none elements1 aniamtion-key-1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="header-main-content heading1">
          <h5>
            <?= $hero_sec['sub_title'];?>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/logo-icons.svg" class="d-none" alt="">
          </h5>
          <h1 class="text-anime-style-3"><?= $hero_sec['title'];?></h1>
          <p data-aos="fade-left" data-aos-duration="1000">
            <?= $hero_sec['txt'];?>
          </p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <!-- <a href="contact.html" class="header-btn1">Start Ranking Now <span><i class="fa-solid fa-arrow-right"></i></span></a> -->
            <a href="#contact" class="header-btn2"><?= $hero_sec['button_name'];?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="header-images-area">
          <div class="main-images-area">
            <div class="img1">
              <img src="<?= $hero_sec['photo'];?>" alt="" data-aos="zoom-in" data-aos-duration="1000">
            </div>
            <div class="img2">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/bg/header-imgbg.png" alt="">
            </div>
            <div class="icons-area">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/sound-icons1.svg" alt="" class="sound-icons1 aniamtion-key-1">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/lite-icons1.svg" alt="" class="lite-icons1 aniamtion-key-1">
            </div>
            <div class="auhtor-icons">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements2.png" alt="" class="elements2">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements3.png" alt="" class="elements3">
            </div>
            <div class="auhtor-images d-none">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/all-images/header-author-img1.png" alt="" class="header-author-img1 aniamtion-key-2">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/all-images/header-author-img2.png" alt="" class="header-author-img2 aniamtion-key-2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->