



<script src="<?php echo get_template_directory_uri()?>/dist/vendor/jquery.bxslider.min.js"></script>
<link href="<?php echo get_template_directory_uri()?>/dist/vendor/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript">
  jQuery(document).ready(function(){
    console.log('Ss')
    jQuery('.bxslider').bxSlider({
      auto: true,
    });
  });
</script>


<script>
  if (window.matchMedia('screen and (min-width:1060px)').matches) {
    jQuery(document).ready(function () {
      jQuery('.menu__second-level').css("top", 45 + "px");
    });
  }else{
    jQuery(document).ready(function () {
      hsize = jQuery('.global_nav').height();
      jQuery('.menu__second-level').css("top", hsize + "px");
    });
    jQuery(window).resize(function () {
      hsize = jQuery('.global_nav').height();
      jQuery(".menu__second-level").css("top", hsize + "px");
    });
  }

</script>



<div id="container">
  <div id="wrapper">
    <div id="hero">

      <ul class="bxslider">
        <li><img src="<?php echo get_template_directory_uri()?>/dist/images/top1.jpg" alt="" style="max-width:100%;"></li>
        <li><img src="<?php echo get_template_directory_uri()?>/dist/images/top_img-02.png" alt="" style="max-width:100%;"></li>
      </ul>

      <!-- <img src="images/main_img.jpg" width="" height="" alt="" />-->
    </div>

    <div id="content">
      <div id="main">

        <div class="collection">
          <ul class="visual_menu">
            <li><a class="visula_menu-Link" href="<?php echo get_post_type_archive_link( 'forever' ); ?>"><img src="<?php echo get_template_directory_uri()?>/dist/images/forever.jpg" width="" height="" alt="ペンダント" /><span class="visula_menu-LinkText">FOREVERコレクションを見る</span></a></li>
            <li><a class="visula_menu-Link" href="choker.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/dearest.jpg" width="" height="" alt="チョーカー" /><span class="visula_menu-LinkText-D">DEARESTコレクションを見る</span></a></li>
          </ul>
          <ul class="visual_menu2">
            <li><a class="visula_menu-Link" href="other.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/othercollection.jpg" width="" height="" alt="その他のコレクション" /><span class="visula_menu-LinkText-O">ほかのコレクションを見る</span></a></a></li>
          </ul>
        </div>

        <div class="style_mainimg-center">
          <a href="all.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/all.jpg" alt="すべてのプロダクト"><span class="style_mainimg-Text">マックイーンのすべてのコレクションを見る</span></a>
        </div>

        <div class="style_mainimg">
          <a class="visula_menu-Link" href="maqueen_styles.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/style.jpg" alt="Maqeenスタイル"><span class="visula_menu-LinkText-M">マックイーンスタイルを見る</span></a>
        </div>

        <div class="visual-Box">
          <ul class="visual_menu-3">
            <li><a class="visula_menu-Link" href="mens.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/mens.jpg" width="" height="" alt="メンズコレクション" /><span class="visula_menu-LinkText-Me">Men'sコレクションを見る</span></a></li>
          </ul>
          <ul class="visual_menu-3">
            <li><a class="visula_menu-Link" href="pet.html"><img src="<?php echo get_template_directory_uri()?>/dist/images/pet.jpg" width="" height="" alt="ペットコレクション" /><span class="visula_menu-LinkText-P">Pet'sコレクションを見る</span></a></li>
          </ul>
          <ul class="visual_menu-3">
            <li><a class="visula_menu-Link" href="concept.html"><img  class="visual_menu-Logo" src="<?php echo get_template_directory_uri()?>/dist/images/logored.svg" width="" height="" alt="Maqueeについて" /><span class="visula_menu-LinkText-Ma">マックイーンについて</span></a></li>
          </ul>
        </div>

      </div><!-- end#content-->
