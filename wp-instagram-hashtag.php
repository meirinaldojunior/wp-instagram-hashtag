<?php
/*
Plugin Name: WP-Instagram-Hashtag
Author: Meirinaldo Júnior
Description: Plugin que organiza e exibe as hashtags utilizando a API do instagram.
Version: 0.1.0 beta
Plugin URI: https://github.com/meirinaldojunior/wp-instagram-hashtag
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Add menu de configuração do plugin (token)
function add_menu_conf()
{
	add_menu_page(
		'WP - Instagram - Hashtag', // Title of the page
		'WP - Instagram - Hashtag', // Text to show on the menu link
		'manage_options', // Capability requirement to see the link
		'wpih_conf_token_plugin',
		'options_wp_instagram_hashtag' // The 'slug' - file to display when clicking the link
	);
}
add_action('admin_menu', 'add_menu_conf');

function options_wp_instagram_hashtag()
{
	?>
	<div class="wrap">
		<h2>Configurações - WP Instagram Hashtag</h2>
			<form method="post" action="options.php">
				<?php wp_nonce_field('update-options') ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<strong>ID Client Instagram:</strong>
						<input type="text" name="wpih_instagram_id" size="45" value="<?php echo get_option('wpih_instagram_id'); ?>" /><br>

					<strong>ID Client Instagram:</strong>
					<input type="text" name="wpih_instagram_id" size="45" value="<?php echo $_GET['code']; ?>" disabled/>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<button type="button" class="button button-primary">Gerar token</button>
				</div>

				<p><input type="submit" name="submit" class="button button-primary" value="Salvar configurações" /></p>
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="wpih_instagram_id" />
			</form>
	</div>
	<?php
}



function get_hashtags(){
	return 'teste';
}
add_shortcode('wpih_get_hashtags', 'get_hashtags');