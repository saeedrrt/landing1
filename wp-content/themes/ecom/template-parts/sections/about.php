<div class="all-section-bg" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/bg/pages-bg1.png); background-repeat: no-repeat; background-size: cover;">

<?php 
$about_sec = get_field('about_section', 30);
?>
<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp1" id="about">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-4">
                <div class="works-header-area heading2 specing2">
                    <h5><?= $about_sec['sub_title'];?></h5>
                    <h2><?= $about_sec['title'];?></h2>
                    <p>
                      <?= $about_sec['txt'];?>
                    </p>
                    <!-- <div class="space16"></div> -->
                </div>
            </div>

            <div class="col-lg-1"></div>
            
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements14.png" alt="" class="elements12 keyframe5">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements15.png" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 ">
                            <div class="space100"></div>
                          <img src="<?= $about_sec['photo_1'];?>" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 ">
                          <img src="<?= $about_sec['photo_2'];?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            
            <div class="col-lg-1"></div>
        </div>
    </div>

<!--===== WORK AREA ENDS =======-->