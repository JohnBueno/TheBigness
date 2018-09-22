<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header col-sm-6">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <div class="col-sm-6">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/site-logo@2x.png" alt="<?php bloginfo('name'); ?>" />
        </a>
      </div>
      
    </div>
    <div class="social col-sm-6">
      <ul>
        <li><a href="https://itunes.apple.com/us/artist/the-bigness/id462831219"><i class="fa fa-apple"></i></a></li>
        <li><a href="https://www.facebook.com/thebignessband"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UC6X9-_9g4O_E2pRXE1sxuVA"><i class="fa fa-youtube-square"></i></a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact"><i class="fa fa-envelope-o"></i></a></li>
        <li><a href="https://play.spotify.com/artist/1E0jxX5iNbjjjlafkf4ChE?play=true&utm_source=open.spotify.com&utm_medium=open"><i class="fa fa-spotify"></i></a></li>
        <li><a href="http://thebigness.bandcamp.com/"><img class="bandcamp" src="<?php bloginfo('template_url'); ?>/assets/img/bclogo-orange.png"></a></li>
      </ul>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
