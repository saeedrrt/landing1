<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="<?php the_field('logo', 'option'); ?>" type="image/x-icon">

  <!--===== CSS LINK =======-->
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/fontawesome.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/mobile.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/owlcarousel.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/sidebar.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/slick-slider.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/plugins/nice-select.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">

  <!--=====  JS SCRIPT LINK =======-->
  <script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/jquery-3-6-0.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!--===== PRELOADER STARTS =======-->
  <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/logo_no.png" alt=""></div>
    </div>
  </div>
  <!--===== PRELOADER ENDS =======-->

  <!--===== PROGRESS STARTS=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
  <!--===== PROGRESS ENDS=======-->

  <!--=====HEADER START=======-->
  <header>


    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index.html"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/logo_no.png"
                    alt=""></a>
              </div>

              <div class="main-menu">
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
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn d-none">
                  <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/icons/search-icons1.svg"
                      alt=""></a>
                </div>
                <!-- <a href="contact.html" class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a> -->

                <div class="header-actions" style="display: flex; gap: 10px; align-items: center;">
                  <!-- زر اللغة -->
                  <?php if (function_exists('pll_the_languages')): ?>
                    <div class="lang-switcher">
                      <?php
                      $languages = pll_the_languages(array(
                        'dropdown' => 0,
                        'show_names' => 1,
                        'show_flags' => 1,
                        'hide_current' => 1, // إخفاء اللغة الحالية
                        'raw' => 1, // الحصول على البيانات كـ array
                      ));

                      if ($languages) {
                        $first_lang = reset($languages); // الحصول على أول لغة (اللغة الأخرى)
                        echo '<a href="' . esc_url($first_lang['url']) . '" class="header-btn1" title="Switch to ' . esc_attr($first_lang['name']) . '">';
                        echo $first_lang['flag'] . ' ' . esc_html($first_lang['name']);
                        echo ' <span><i class="fa-solid fa-arrow-right"></i></span>';
                        echo '</a>';
                      }
                      ?>
                    </div>
                  <?php endif; ?>
                </div>

              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                  <form role="search" class="search-form">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img
                        src="<?= get_template_directory_uri(); ?>/assets/img/icons/search-icons1.svg" alt=""></button>
                  </form>
                </div>
              </div>
              <div class="body-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
  <div class="mobile-header mobile-haeder1 d-block d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="index.html"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/logo_no.png" alt=""></a>
          </div>
          <div class="mobile-nav-icon dots-menu">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar mobile-sidebar1">
    <div class="logosicon-area">
      <div class="logos">
        <img src="assets/img/logo/logo_no.png" alt="">
      </div>
      <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
      </div>
    </div>
    <div class="mobile-nav mobile-nav1">
      <ul class="mobile-nav-list nav-list1">
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
  <!--===== MOBILE HEADER STARTS =======-->