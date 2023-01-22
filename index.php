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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="?page=edit">受入状況編集</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="?page=zone-1">ゾーン⓵</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="?page=zone-2">ゾーン⓶</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="?page=zone-3">ゾーン⓷</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active border-start" aria-current="page" href="?page=zone-4">ゾーン⓸</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <?php
    $page = (isset($_GET['page'])) ? $_GET['page'] : "zone-1";
    switch ($page) {
      case "zone-1":
        include 'page/zone-1.php';
        break;
      case "zone-2":
        include 'page/zone-2.php';
        break;
      case "zone-3":
        include 'page/zone-3.php';
        break;
      case "zone-4":
        include 'page/zone-4.php';
        break;
      case "edit":
        include 'page/edit.php';
        break;
      default:
        include 'page/error.php';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>