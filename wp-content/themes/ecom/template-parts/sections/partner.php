<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider-section-area sp6" id="work">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2">
        <div class="sldier-head d-none">
          <p>Trusted by <br class="d-lg-block d-none"> Top Companies</p>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="slider-images-area owl-carousel">

          <?php 
            if (have_rows('partners', 30)):
            while (have_rows('partners', 30)):
              the_row(); ?>
              <div class="img1">
                <img src="<?= get_sub_field('logo'); ?>" alt="">
              </div>
            <?php endwhile;endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->