<?php 
// if(( is_mobile() )) {
  
 
  $menu_icons=get_menu_icons();

  ?> 
  <?php 
  $current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
  $lang = 'en';
  $change_to='ne';
  $language='English';
  $change_language='Nepali';
  if(strstr($current_page,'ne')){
    $lang = 'ne';

    $language='Nepali';
    $change_language='English';
    $change_to='en';
  }
  ?>
  <nav class="nav-icons mobile-nav">


    <ul class="nav-links">
     <?php foreach($menu_icons as $key=>$values){
      $pagelocation=$key;
      $icons=explode('##',$values);
      $default_icon=$icons[0];
      $hover_icons=$icons[1];
      if($key=='home'){

        $pagelocation='';
      }
      if($key=='artist'){

        $pagelocation='srijanalaya-artist';
      }
      ?>
      <li class="<?php echo $key.'-menu-icon';?> subs">
        <a style="" href="<?php echo site_url();?>/<?php echo $pagelocation;?>">
          <span>
            <?php echo $key;?>
          </span>
        </a>
      </li>
      <?php } ?>
      <li class="subs" id="donate_btn">
        <a style="" href="#!">
          <span>
            Donate
          </span>
        </a>
      </li>
      <li class="subs" id="language_btn">

        <a style="" href="javascript:void(0)" onclick="change_language('<?php echo $change_to;?>','<?php echo $current_page;?>');" >
          <span>
            <?php echo $change_language;?>
          </span>
        </a>
      </li>
    </ul>

    <ul class="nav-btn">
      <li class="plus"><a href="#!"><span>
        <span class="bb-f"></span>
        <span class="bb"></span>
        <span class="bb-l"></span>
      </span></a></li>
    </ul>
  </nav>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script>
    var fullHeight = $( window ).height();
    (function(){
      $('.nav-links').height(fullHeight);
      $('.nav-btn').on('click', function() {
        $('.nav-links').toggleClass('show-it');
        $('.nav-btn').toggleClass('show-it');
      });

    })();
  </script>
  <?php 
// }
  ?>


