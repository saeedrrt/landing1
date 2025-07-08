<?php
$client_sec = get_field('our_clients', 30);
?>

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp1" id="client" data-aos="zoom-in"
  data-aos-delay="200"
  data-aos-duration="800">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="testimonial-sliders">
          <div class="row align-items-center">

            <div class="col-lg-6">
              <div class="testimonial-content-slider slider-nav1">

                <?php
                if ($client_sec['slider_text']):
                  foreach ($client_sec['slider_text'] as $item): ?>
                    <div class="testimonial-slider-boxarea" data-aos="zoom-in">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/quito3.svg" alt="">
                      <div class="space24"></div>
                      <div class="testimonial5-all-content">
                        <p>
                          <?= $item['txt']; ?>
                        </p>
                      </div>
                      <div class="space32"></div>
                      <div class="content">
                        <a href="team.html"><?= $item['name']; ?></a>
                        <p><?= $item['jop']; ?></p>
                      </div>
                    </div>
                  <?php endforeach; endif; ?>

              </div>
              <div class="testimonial-arrows">
                <div class="testimonial-prev-arrow">
                  <button><i class="fa-solid fa-arrow-left"></i></button>
                </div>
                <div class="testimonial-next-arrow">
                  <button><i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="teimonial-slider-nav-area foter-carousel">

                <?php
                if ($client_sec['slider_image']):
                  foreach ($client_sec['slider_image'] as $e_item): ?>
                    <div class="testimonial-slider-img">
                      <img src="<?= $e_item['image']; ?>" alt="">
                    </div>
                  <?php endforeach; endif; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->