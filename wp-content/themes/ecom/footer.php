<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecom
 */

?>
<?php
$about_sec = get_field('about_section', 30);
$contact_sec = get_field('contact_us', 30);
?>
<!--===== FOOTER AREA STARTS =======-->
<div class="footer1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="<?php the_field('logo', 'option'); ?>" alt="">
          <p>
            <?= $about_sec['title']; ?>
          </p>
          <ul>

            <?php
            if (have_rows('social_links', 'option')):
              while (have_rows('social_links', 'option')):
                the_row(); ?>
                <li><a href="<?= get_sub_field('link'); ?>"><img src="<?= get_sub_field('icon'); ?>" alt=""></a></li>
              <?php endwhile; endif; ?>

          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3><?= pll_current_language() == 'ar' ? 'روابط تهمك' : 'Important links';?></h3>
          <ul>
            <?php
            if (have_rows('menu_links', 'option')):
              while (have_rows('menu_links', 'option')):
                the_row(); ?>
                <li class="nav-item">
                  <a href="#<?= get_sub_field('tragger'); ?>" class="nav-link active">
                    <span>
                      <?= pll_current_language() == 'ar' ? get_sub_field('ar_name') : get_sub_field('en_name'); ?>
                    </span>
                  </a>
                </li>
              <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area2">
          <h3><?= $contact_sec['title_section']; ?></h3>
          <ul>

            <?php
            if ($contact_sec['contact_info']):
              foreach ($contact_sec['contact_info'] as $item): ?>

                <li><a href="<?= $item['link']; ?>"><img src="<?= $item['icon']; ?>" class="bg-dark"
                      style="width:20px;border-radius: 5px;" alt=""><span><?= $item['txt']; ?></span></a></li>

              <?php endforeach; endif; ?>

          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="footer-logo-area3">
          <h3><?= pll_current_language() == 'ar' ? 'النشرة الاخبارية' : 'Subscribe Our Newsletter';?></h3>
          <form action="#">
            <input type="text" placeholder="<?= pll_current_language() == 'ar' ? 'ادخل بريدك' : 'Enter Your email';?>">
            <button class="header-btn1"> <?= pll_current_language() == 'ar' ? 'اشترك' : 'Subscribe';?> <span><i class="fa-solid fa-arrow-right"></i></span></button>
          </form>
        </div>
      </div>
    </div>
    <div class="space80 d-lg-block d-none"></div>
    <div class="space40 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright-area">
          <div class="pera">
            <p><?= pll_current_language() == 'ar' ? 'ⓒحقوق النشر © 2024 SEOC. جميع الحقوق محفوظة.' : 'ⓒCopyright 2024 SEOC . All rights reserved';?></p>
          </div>
          <ul>
            <li><a href="#"><?= pll_current_language() == 'ar' ? 'الشروط & الأحكام' : 'Terms & Conditions';?></a></li>
            <li><a href="#" class="m-0"><?= pll_current_language() == 'ar' ? 'سياسة الخصوصية' : 'Privacy Policy';?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->
</div>

<!--===== JS SCRIPT LINK =======-->
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/fontawesome.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/aos.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/counter.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/gsap.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/Splitetext.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/sidebar.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/magnific-popup.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/mobilemenu.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/owlcarousel.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/gsap-animation.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/nice-select.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/waypoints.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/slick-slider.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/circle-progress.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>