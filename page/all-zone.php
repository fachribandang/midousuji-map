<?php add_css("all-zone.scss") ?>
<div class="container mt-5 py-4 row mx-auto">
  <div class="col-12 mb-3 text-center">
    <span class="text-success border-bottom border-3 border-success fs-1 pb-2">避難場所の受入状況全体地図</span>
  </div>
  <div class="col-7">
    <div id="midousuji-road" class="row p-2 ms-auto">
      <div id="all-west-offices" class="col-6">
        <?php
          foreach ($all_west_offices_id as &$office) {
            render_office($office);
          }
        ?>
      </div>
      <div id="all-east-offices" class="col-6">
        <?php
          foreach ($all_east_offices_id as &$office) {
            render_office($office);
          }
        ?>
      </div>
    </div>
  </div>
  <div id="midousuji-road-nav" class="col-5 text-start">
    <div id="road-nav-1" class="border-start border-success border-3">
      <a href="?page=zone-1">⓵</a>
    </div>
    <div id="road-nav-2" class="border-start border-success border-3">
      <a href="?page=zone-2">⓶</a>
    </div>
    <div id="road-nav-3" class="border-start border-success border-3">
      <a href="?page=zone-3">⓷</a>
    </div>
    <div id="road-nav-4" class="border-start border-success border-3">
      <a href="?page=zone-4">⓸</a>
    </div>
  </div>
  <div class="row ps-3 pt-2">
    <span class="bg-success" style="width: 25px;height:25px;border-radius:50%;"></span><span class="col">受入中</span>
  </div>
</div>