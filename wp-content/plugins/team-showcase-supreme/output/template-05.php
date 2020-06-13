<?php
$styleTemplate = 5;
if ($allSlider[0]) {
   echo "<div class='wpm-6310-carousel'>
            <div id='wpm-6310-slider-{$ids}' class='wpm-6310-owl-carousel'>";
   if ($members) {
      foreach ($members as $value) {
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
         }
?>
         <div class="wpm-6310-item-<?php echo $ids; ?>">
            <div <?php echo $link_type ?>>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
                  <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>">
               </div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo $value['name'] ?></div>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo $value['designation'] ?></div>
                  <?php
                  if($value['iconids']) {
                  $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
                  if ($icons) {
                     $iconUrl = explode("||||", $value['iconurl']);
                     $iconIds = explode(",", $value['iconids']);
                     $iconStyles = "";
                     $c = 0;
                     foreach ($icons as $li) {
                        $index = array_search($li['id'], $iconIds);
                        if ($c == 0) {
                           echo "<ul class='wpm_6310_team_style_{$ids}_social'>";
                        }
                        $c++;
                        echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . " class='open_in_new_tab_class wpm-6310-default-css' title='{$li['name']}' id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                        $iconStyles .= "<style>#wpm-social-link-{$ids}-{$value['id']}-{$li['id']}{border: {$allStyle[28]}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};}#wpm-social-link-{$ids}-{$value['id']}-{$li['id']} .fab{color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover .fab{color: {$li['bgcolor']};}</style>";
                        if ($c == 4) {
                           break;
                        }
                     }

                     if ($c > 0) {
                        echo "</ul>";
                        echo $iconStyles;
                     }
                  }
               }
                  ?>
               </div>
            </div>
         </div>
      <?php
      }
   }
   echo "</div>
        </div>";
} else {
   $col = 0;
   if ($members) {
      foreach ($members as $value) {
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='wpm_6310_team_style_{$ids} wpm_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
         }
         $col++;
         if ($allStyle[0] == 1) {
            echo "<div class='wpm-6310-row'>";
         } else if ($col % $allStyle[0] == 1) {
            echo "<div class='wpm-6310-row'>";
         }
      ?>
         <div class="wpm-6310-col-<?php echo $allStyle[0] ?>">
            <div<?php echo $link_type ?>>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
                  <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>">
               </div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo $value['name'] ?></div>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo $value['designation'] ?></div>
                  <?php
                  if($value['iconids']) {
                  $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
                  if ($icons) {
                     $iconUrl = explode("||||", $value['iconurl']);
                     $iconIds = explode(",", $value['iconids']);
                     $iconStyles = "";
                     $c = 0;
                     foreach ($icons as $li) {
                        $index = array_search($li['id'], $iconIds);
                        if ($c == 0) {
                           echo "<ul class='wpm_6310_team_style_{$ids}_social'>";
                        }
                        $c++;
                        echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . " class='open_in_new_tab_class wpm-6310-default-css' title='{$li['name']}' id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                        $iconStyles .= "<style>#wpm-social-link-{$ids}-{$value['id']}-{$li['id']}{border: {$allStyle[28]}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};}#wpm-social-link-{$ids}-{$value['id']}-{$li['id']} .fab{color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover .fab{color: {$li['bgcolor']};}</style>";
                        if ($c == 4) {
                           break;
                        }
                     }

                     if ($c > 0) {
                        echo "</ul>";
                        echo $iconStyles;
                     }
                  }
               }
                  ?>
               </div>
         </div>
         </div>
<?php
         if ($allStyle[0] == 1) {
            echo "</div>";
         } else if ($col % $allStyle[0] == 0) {
            echo "</div>";
         }
      }
      if (($allStyle[0] > 1) && $col % $allStyle[0] != 0) {
         echo "</div>";
      }
   }
}
?>

<style type="text/css">
   .wpm_6310_team_style_<?php echo $ids ?> {
      text-align: center;
      overflow: hidden;
      position: relative;
      z-index: 1;
      letter-spacing: .04em;
      -webkit-border-radius: <?php echo $allStyle[2] ?>%;
      -o-border-radius: <?php echo $allStyle[2] ?>%;
      -moz-border-radius: <?php echo $allStyle[2] ?>%;
      -ms-border-radius: <?php echo $allStyle[2] ?>%;
      border-radius: <?php echo $allStyle[2] ?>%;
      border-style: solid;
      border-width: <?php echo $allStyle[3] ?>px;
      border-color: <?php echo $allStyle[4] ?>;
      box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      -moz-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      -o-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      -webkit-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      -ms-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      width: calc(100% - <?php echo ($allStyle[3] * 2) ?>px);
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic {
      margin: 0;
      position: relative;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s;
      overflow: hidden;
      width: 100%;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_pic img {
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover {
      border-color: <?php echo $allStyle[7] ?>
   }

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      content: "";
      background: <?php echo $allStyle[7] ?>;
      width: 100%;
      height: 0;
      position: absolute;
      left: 0;
      opacity: 0;
      top: 60%;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      height: 60%;
      opacity: 0.85;
      top: 20%
   }

   .wpm_6310_team_style_<?php echo $ids ?> img {
      width: 100%;
      height: auto;
      padding: 0 !important;
      margin: 0 !important;
      float: left;
      border-radius: 0;
   }

   .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
      top: <?php echo $allStyle[1] ?>;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_team_content {
      width: 100%;
      position: absolute;
      left: 0;
      opacity: 0;
      -webkit-transition: all 0.5s ease 0.2s;
      -moz-transition: all 0.5s ease 0.2s;
      -ms-transition: all 0.5s ease 0.2s;
      -o-transition: all 0.5s ease 0.2s;
      transition: all 0.5s ease 0.2s;
      top: 32%;
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_team_content {
      opacity: 1
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title {
      margin: 0 0 5px 0;
      font-size: <?php echo $allStyle[11] ?>px;
      color: <?php echo $allStyle[12] ?>;
      font-weight: <?php echo $allStyle[15] ?>;
      text-transform: <?php echo $allStyle[16]; ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
      line-height: <?php echo $allStyle[18] ?>px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_designation {
      font-size: <?php echo $allStyle[19] ?>px;
      color: <?php echo $allStyle[20] ?>;
      font-weight: <?php echo $allStyle[21] ?>;
      text-transform: <?php echo $allStyle[22] ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
      line-height: <?php echo $allStyle[24] ?>px;
      padding-bottom: <?php echo $allStyle[25] ?>px;
      display: block;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title:hover {
      color: <?php echo $allStyle[13]; ?>
   }

   .wpm_6310_team_style_<?php echo $ids ?>_designation:hover {
      color: <?php echo $allStyle[25]; ?>
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      margin: 15px 0 0 !important;
      padding: 0 !important;
      list-style: none;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
      display: inline-block;
      margin: 0 8px 8px 0 !important;
      padding: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
      margin-right: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:before,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:after {
      display: none !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
      display: inline-block;
      font-size: 18px;
      color: #fff;
      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s;
      border-radius: <?php echo $allStyle[30] ?>%;
      -moz-border-radius: <?php echo $allStyle[30] ?>%;
      -webkit-border-radius: <?php echo $allStyle[30] ?>%;
      -o-border-radius: <?php echo $allStyle[30] ?>%;
      -ms-border-radius: <?php echo $allStyle[30] ?>%;
      box-shadow: none;
      text-decoration: none;
      margin: 0 !important;
      padding: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
      box-shadow: none;
   }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>