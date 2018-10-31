<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="inicio"><img src="<?php echo $logo[0]; ?>" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" 
  id="navbarNavDropdown">
  
  <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
    <?php wp_nav_menu( array(
      'theme_location' => 'header-menu',
      'container_id' => 'navbarNavDropdown',
      'container_class' => 'collapse navbar-collapse justify-content-end',

      'menu_class'  => 'navbar-nav'
    ));
    ?>
  <?php } ?>
  
</div>	
</nav>