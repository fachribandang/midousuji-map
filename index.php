<?php 
include "db.php"; 
include "server.php"; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>My Digital Signage Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
  <body>
    <div class="content">
      <?php
        $page = (isset($_GET['page'])) ? $_GET['page'] : "zone-1";
        switch ($page) {
          case "all-zone":
            include 'page/all-zone.php';
            break;
          case "zone-1":
            include 'page/zone-1.php';
            break;
          case "zone-2":
            include 'page/zone-2.php';
            break;
          case "edit":
            include 'page/edit.php';
            break;
          default:
            include 'page/error.php';
        }
      ?>
    </div>
    <script>
      function sleep(ms) {
          return new Promise(resolve => setTimeout(resolve, ms));
      }
      async function show() {
        await sleep(100);
        document.getElementsByClassName('map-wrapper')[0].style.opacity=1;
      }
      async function go_next() {
        await sleep(10000);
        document.getElementsByClassName('nav-right')[0].click();
      }
      show()
      go_next()
    </script>
  </body>
</html>
