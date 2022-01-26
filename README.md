Remove global-styles-inline-css in WordPress 5.9.
```
function wps_deregister_styles() {
	wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );
```
Just download the php file, drag it in your wordpress plugin folder and activate the plugin.
