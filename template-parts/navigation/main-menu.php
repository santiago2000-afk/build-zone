<button 
class="navbar-toggler" 
type="button" 
data-bs-toggle="collapse" 
data-bs-target="#bs-example-navbar-collapse-1" 
aria-controls="bs-example-navbar-collapse-1" 
aria-expanded="false" 
aria-label="<?php esc_attr_e( 'Toggle navigation', '' ); ?>">
    <i class="fa-solid fa-bars"></i>
</button>
<?php
    wp_nav_menu( array(
        'theme_location'    => 'menu-1',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'menu_class'        => 'main-menu d-none',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => 'WP_Bootstrap_Navwalker',
    ));
?>