<?php add_css("zone-3.scss") ?>
<div class="container mt-5 py-4 row mx-auto">
  <div class="col-12 mb-3">
    <span class="text-success border-bottom border-3 border-success fs-1 pb-2">避難場所の受入状況ゾーン３</span>
  </div>
  <div class="col-12 col-sm-6">
    <div id="midousuji-road-3" class="row p-2 m-0">
      <div id="west-offices-zone-3" class="col-5">
        <?php
          foreach ($west_offices_id_3 as &$office) {
            render_office($office);
          }
        ?>
      </div>
      <div class="col-2 p-0 bg- text-dark bg-opacity-10">
        <div style="min-height:400px;">
        </div>
      </div>
      <div id="east-offices-zone-3" class="col-5">
        <?php
          foreach ($east_offices_id_3 as &$office) {
            render_office($office);
          }
        ?>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6">
    <div class="row ps-3 pt-2">
      <span id="box" class="bg-success"></span><span class="col">受入中</span>
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
          $offices = filter_zone ($offices,(array_merge($east_offices_id_3,$west_offices_id_3)));
          foreach ($offices as &$office) {
            render_facilitie_accepting_evacuation($office);
          }
        ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>