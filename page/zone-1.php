<?php add_css("zone-1.css") ?>
<div class="content-wrapper">
  <!-- title -->
  <div class="title-wrapper">
    <h1>　淀屋橋駅周辺　避難受入状況</h1> <img class="title-logo" src="./images/logo.png" alt="Logo" >
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
    <div class="building-list">
      <?php
        $offices = get_all_facilities_accepting_evacuation();
        $offices = filter_zone ($offices,(get_all_offices_by_zone(1)));
        foreach ($offices as &$office) {
          render_facilitie_item($office);
        }
        if(!$offices){
          render_no_office();
        }
      ?>
    </div>

  </div>
  <!-- note -->
  <div class="note-wrapper">
    <span class="circle green show" style="position:relative;"></span>
    <span>&nbsp;受入中  *最新情報は現地でお確かめください</span>
  </div>
</div>
  <a class="nav nav-left" href="./?page=all-zone">  &lt; ALL</a>
  <a class="nav nav-right" href="./?page=zone-2"> Z-2 ></a>