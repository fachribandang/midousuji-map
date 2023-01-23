<?php add_css("all-zone.scss") ?>
<div class="container mt-5 py-4 row mx-auto">
  <div class="col-12 mb-3">
    <span class="text-success border-bottom border-3 border-success fs-1 pb-2">避難場所の受入状況全体地図</span>
  </div>
  <div class="col-12 col-sm-6">
    <div id="midousuji-road" class="row p-2 m-0">
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
  <div class="col-12 col-sm-6">
    <div class="row ps-3 pt-2">
      <span class="bg-success" style="width: 25px;height:25px;border-radius:50%;"></span><span class="col">受入中</span>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">施設</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $offices = get_all_facilities_accepting_evacuation();
          foreach ($offices as &$office) {
            render_facilitie_accepting_evacuation($office);
          }
        ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>