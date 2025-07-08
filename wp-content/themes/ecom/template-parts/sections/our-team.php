<?php
$team_sec = get_field('our_team', 30);
?>

<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp2 bg1" id="our-team">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="team2-header-area heading2">
          <h2><?= $team_sec['section_title']; ?></h2>
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      if ($team_sec['team_box']):
        foreach ($team_sec['team_box'] as $item): ?>
          <div class="col-lg-3 col-md-6">
            <div class="team-boxarea">
              <div class="img1">
                <img src="<?= $item['photo']; ?>" alt="">
              </div>
              <ul>
                <?php
                if ($item['social']):
                  foreach ($item['social'] as $sub_item): ?>

                    <li><a href="<?= $sub_item['link']; ?>"><img src="<?= $sub_item['icon']; ?>" alt=""></a></li>
                  <?php endforeach; endif; ?>
              </ul>
              <div class="content">
                <a href="team.html"><?= $item['name']; ?></a>
                <p><?= $item['jop']; ?></p>
              </div>
            </div>
          </div>
     
      <?php endforeach; endif; ?>

  </div>
</div>
</div>
<!--===== TEAM AREA ENDS =======-->