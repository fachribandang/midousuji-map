<div class="container mt-5 py-4 row mx-auto">
  <div class="col-12 mb-3">
    <span class="text-success border-bottom border-3 border-success fs-1 pb-2">受入状況編集</span>
  </div>
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">施設</th>
          <th scope="col">受入状況</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $offices = get_all_facilities_offices();
          foreach ($offices as &$office) {
            render_facilitie_accepting_editor ($office);
          }
        ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>