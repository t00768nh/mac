<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/dist/vendor/jquery.hoverIntent.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    function megaHoverOver(){
      jQuery(this).find(".sub").stop().fadeTo('fast', 1).show();

      //Calculate width of all ul's
      (function($) {
        jQuery.fn.calcSubWidth = function() {
          rowWidth = 0;
          //Calculate row
          $(this).find("ul").each(function() {
            rowWidth += $(this).width();
          });
        };
      })(jQuery);

      if ( jQuery(this).find(".row").length > 0 ) { //If row exists...
        var biggestRow = 0;
        //Calculate each row
        jQuery(this).find(".row").each(function() {
          jQuery(this).calcSubWidth();
          //Find biggest row
          if(rowWidth > biggestRow) {
            biggestRow = rowWidth;
          }
        });
        //Set width
        jQuery(this).find(".sub").css({'width' :biggestRow});
        jQuery(this).find(".row:last").css({'margin':'0'});

      } else { //If row does not exist...

        jQuery(this).calcSubWidth();
        //Set Width
        jQuery(this).find(".sub").css({'width' : rowWidth});

      }
    }

    function megaHoverOut(){
      jQuery(this).find(".sub").stop().fadeTo('fast', 0, function() {
        jQuery(this).hide();
      });
    }


    var config = {
      sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)
      interval: 100, // number = milliseconds for onMouseOver polling interval
      over: megaHoverOver, // function = onMouseOver callback (REQUIRED)
      timeout: 500, // number = milliseconds delay before onMouseOut
      out: megaHoverOut // function = onMouseOut callback (REQUIRED)
    };

    jQuery("ul#topnav li .sub").css({'opacity':'0'});
    jQuery("ul#topnav li").hoverIntent(config);



  });
</script>

<header id="header">
  <div id="logo">
    <a href="./"><img src="<?php echo get_template_directory_uri()?>/dist/images/logo.png" width="" height="" alt="maqeen" /></a>
  </div>
  <nav class="global_nav">
    <ul class="menu">
      <li class="menu__mega">
        <span href="#" class="init-bottom"><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav01.png"></span>
        <ul class="menu__second-level">
          <li>

            <div class="sub_left">
              <ul>
                <li><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav_collections.png" class="li_tit"></li>
                <li><a class="g-Nav_Link" href="choker.html">チョーカーコレクション</a></li>
                <li><a class="g-Nav_Link" href="pendant.html">ペンダントコレクション</a></li>
                <li><a class="g-Nav_Link" href="other.html">ほかのコレクション</a></li>
                <li><a class="g-Nav_Link" href="crystal.html">Maqueen Made with SWAROVSKIRCRYSTALS コレクション</a></li>
                <li><a class="g-Nav_Link" href="mens.html">メンズコレクション</a></li>
              </ul>
            </div>

            <div class="sub_li">
              <img src="<?php echo get_template_directory_uri()?>/dist/images/nav_collections_img.png">
            </div>
          </li>
        </ul>
      </li>
      <!-- 他グローバルナビメニュー省略 -->
      <li class="menu__mega">
        <span href="#" class="init-bottom"><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav02.png"></span>
        <ul class="menu__second-level">
          <li>

            <div class="sub_left">
              <ul>
                <li><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav_styles.png" class="li_tit"></li>
                <li class="li_top"><a href="#"><a class="g-Nav_Link" href="maqueen_styles.html">Maqueen スタイル</a></li>
              </ul>
            </div>

            <div class="sub_li">
              <img src="<?php echo get_template_directory_uri()?>/dist/images/nav_styles_img.png">
            </div>
          </li>

        </ul>
      </li>
      <!-- 他グローバルナビメニュー省略 -->
      <li class="menu__mega">
        <span href="#" class="init-bottom"><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav03.png"></span>
        <ul class="menu__second-level">
          <li>

            <div class="sub_left">
              <ul>
                <li><img src="<?php echo get_template_directory_uri()?>/dist/images/g_nav_brand.png" class="li_tit"></li>
                <li><a class="g-Nav_Link" href="concept.html">Maqueen コンセプト</a></li>
                <li><a class="g-Nav_Link" href="showroom.html">ショールーム</a></li>
                <li><a class="g-Nav_Link" href="https://www.facebook.com/maqueen.net" target="_blank"><img src="<?php echo get_template_directory_uri()?>/dist/images/fc_icon.png">&nbsp;Facebook</a></li>
                <li><a class="g-Nav_Link" href="http://instagram.com/maqueentokyo" target="_blank"><img src="<?php echo get_template_directory_uri()?>/dist/images/in_icon.png">&nbsp;Instagram</a></li>
              </ul>
            </div>

            <div class="sub_li">
              <img src="<?php echo get_template_directory_uri()?>/dist/images/nav_brand_img.png">
            </div>
          </li>

        </ul>
      </li>


    </ul><!--メニューEND-->
  </nav>
</header>





<!--  brand info -->





















