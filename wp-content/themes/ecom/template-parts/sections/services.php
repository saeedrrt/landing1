<?php
$service_sec = get_field('services_section', 30);
?>

<div class="works4-section-area sp9 mb-3" id="service">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-12 m-auto">
        <div class="case-header-area heading2 text-center">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/star2.png" alt="" class="star2 keyframe5">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/star2.png" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3"><?= $service_sec['section_title']; ?></h2>
          <p data-aos="fade-up" data-aos-duration="1000">
            <?= $service_sec['section_txt']; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      if ($service_sec['service_box']):
        foreach ($service_sec['service_box'] as $item): ?>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">
            <div class="works-author-boxarea">
              <div class="icons-photo">
                <img src="<?= $item['photo']; ?>" alt="">
              </div>
              <div class="space24"></div>
              <div class="content-area">
                <a href="#"><?= $item['name']; ?></a>
                <p>
                  <?= $item['description']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; endif; ?>


    </div>
  </div>
</div>