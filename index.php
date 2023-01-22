<!doctype html>
<?php 
include "db.php"; 
include "server.php"; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.scss">
    <title>midousuji-map</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <h1 class="navbar-brand py-0 my-0">避難場所の受入状況</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="#">全体</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle border-start" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ゾーン
                </a>
                <ul class="dropdown-menu text-center">
                  <li><a class="dropdown-item" href="#">⓵</a></li>
                  <li><a class="dropdown-item" href="#">⓶</a></li>
                  <li><a class="dropdown-item" href="#">⓷</a></li>
                  <li><a class="dropdown-item" href="#">⓸</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container mt-5 py-4 row mx-auto">
      <div class="col-12 mb-3">
        <span class="text-success border-bottom border-3 border-success fs-1 pb-2">避難場所の受入状況</span>
      </div>
      <div class="col-12 col-sm-6">
        <div id="midousuji-road" class="border row p-2 m-0">
          <div id="west-offices-zone-1" class="col-5">
            <?php
            foreach ($west_offices_id_1 as &$office) {
              render_offices($office);
            }
            ?>
          </div> 
          <div class="col-2 p-0 bg- text-dark bg-opacity-10">
            <div style="min-height:400px;">
            </div>
          </div>
          <div id="east-offices-zone-1" class="col-5">
            <?php
            foreach ($east_offices_id_1 as &$office) {
              render_offices($office);
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
                  // Fetech user data based on id
                  $offices = get_all_facilities_accepting_evacuation();
                  foreach ($offices as &$office) {
                    render_facilities_accepting_evacuation($office);
                  }
              ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>