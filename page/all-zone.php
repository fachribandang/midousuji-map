<?php add_css("zone-1.css");add_css("zone-2.css");add_css("all-zone.css");?>
<div class="content-wrapper">
  <!-- title -->
  <div class="title-wrapper">
    <h1>　一時避難　受入施設状況</h1> <img class="title-logo" src="./images/logo.png" alt="Logo" >
  </div>
  <div class="map-title-wrapper">
    <span class="map-title">▼淀屋橋駅周辺</span>   
    <span class="map-title">▼本町橋駅周辺</span>
  </div>
  <div class="map-wrapper">
    <!-- map -->
    <div class="map-container">
      <div class="map map_z1">
        <?php
          $offices = get_all_offices_by_zone(1);
          foreach ($offices as &$office) {
            render_office($office);
          }
        ?>
        <img class="north-point" title="north ^" src='./images/cardinal-point.png'/>
      </div>
    </div>
    <!-- building list -->
    <div class="map-container">
      <div class="map map_z2">
        <?php
          $offices = get_all_offices_by_zone(2);
          foreach ($offices as &$office) {
            render_office($office);
          }
        ?>
      </div>
    </div>

  </div>
  <!-- note -->
  <div class="note-wrapper">
    <span class="circle green show" style="position:relative;"></span>
    <span>&nbsp;受入中  *最新情報は現地でお確かめください</span>
  </div>

</div>
    <a class="nav nav-left" href="./?page=zone-2">  &lt; Z-2</a>
    <a class="nav nav-right" href="./?page=zone-1"> Z-1 ></a>
