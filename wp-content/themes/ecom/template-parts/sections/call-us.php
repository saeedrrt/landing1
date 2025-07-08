<?php
$contact_sec = get_field('contact_us', 30);
?>

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1-section-area sp6" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="contact-header-area text-center heading2">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/star2.png" alt="" class="star2 keyframe5">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/star2.png" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3"><?= $contact_sec['title_section']; ?></h2>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
        <div class="contact-info-area">
          <h3><?= $contact_sec['title_section']; ?></h3>

          <?php
          if ($contact_sec['contact_info']):
            foreach ($contact_sec['contact_info'] as $item): ?>
              <div class="space32"></div>
              <div class="contact-auhtor-box">
                <div class="icons">
                  <img src="<?= $item['icon']; ?>" alt="">
                </div>
                <div class="content">
                  <h4><?= $item['name']; ?></h4>
                  <a href="<?= $item['link']; ?>"><?= $item['txt']; ?></a>
                </div>
              </div>
              <div class="space40"></div>
            <?php endforeach; endif; ?>

        </div>
      </div>
      <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
        <div class="contact-boxarea">
          <h3><?= $contact_sec['form_title']; ?></h3>

          <?php
          if (function_exists('pll_current_language')) {
            $lang = pll_current_language();

            if ($lang === 'ar') {
              echo do_shortcode('[contact-form-7 id="16b93cb" title="Contact form Ar"]');
            } else {
              echo do_shortcode('[contact-form-7 id="b6b3d75" title="Contact form 1"]');
            }
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CONTACT AREA ENDS =======-->
</div>