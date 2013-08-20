<?php

// Do not edit this file.
// If you need to override this template you can use the 'shoestrap_header_top_navbar_override' hook.
?>
<header class="banner navbar navbar-default topnavbar <?php echo shoestrap_navbar_class(); ?>" role="banner">
  <div class="<?php echo shoestrap_container_class(); ?>">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php
      if ( get_theme_mod( 'navbar_brand' ) != 0 ) :
        echo '<a class="navbar-brand ' . shoestrap_branding_class( false ) . '" href="' . home_url() . '/">';

        if ( get_theme_mod( 'navbar_logo' ) == 1 )
          shoestrap_logo();
        else
          bloginfo( 'name' );
        echo '</a>';
      endif;
      ?>
    </div>
    <?php do_action( 'shoestrap_pre_main_nav' ); ?>
    <nav class="nav-main nav-collapse collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => shoestrap_nav_class_pull() ) );
        endif;
      ?>
    </nav>
    <?php do_action( 'shoestrap_post_main_nav' ); ?>
  </div>
</header>