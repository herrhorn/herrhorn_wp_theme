<?php 
function register_my_menus() {
register_nav_menus(
array(
'top-menu' => __( 'Top Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );
?>