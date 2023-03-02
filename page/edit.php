<?php add_css("edit.css");?>
<div class="editor">
  <div class="page-title">
    <span class="">受入状況編集</span>
  </div>
  <div class="table-wrapper">
    <table class="table">
      <caption><h1>Zone-1</h1></caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>施設</th>
          <th>受入状況</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $offices = get_all_facilities_offices_by_zone(1);
          foreach ($offices as &$office) {
            render_facilitie_accepting_editor ($office);
          }
        ?>
        </tr>
      </tbody>
    </table>
    <table class="table">
      <caption><h1>Zone-2</h1></caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>施設</th>
          <th>受入状況</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $offices = get_all_facilities_offices_by_zone(2);
          foreach ($offices as &$office) {
            render_facilitie_accepting_editor ($office);
          }
        ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>