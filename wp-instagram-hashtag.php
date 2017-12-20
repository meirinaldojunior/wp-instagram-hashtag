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
    global $instagram;
	?>
	<div class="wrap">
		<h2>Configurações - WP Instagram Hashtag</h2>
			<form method="post" action="options.php">
				<?php wp_nonce_field('update-options') ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				    <strong>API Key (Client ID):</strong>
					<input type="text" name="wpih_apiKey" size="50" value="<?php echo get_option('wpih_apiKey'); ?>" /><br>

					<strong>API Secret (Client Secret)</strong>
					<input type="text" name="wpih_apiSecret" size="50" value="<?php echo get_option('wpih_apiSecret'); ?>" /><br>

                    <strong>API Callback</strong>
                    <input type="text" name="wpih_apiCallback" size="50" value="<?php echo get_option('wpih_apiCallback'); ?>" />
				</div>

				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="wpih_apiKey,wpih_apiSecret,wpih_apiCallback" />
				<p><input type="submit" name="submit" class="button button-primary" value="Salvar configurações" /></p>

			</form>

        <h2>Generate code</h2>
        <form method="post" action="options.php">
			<?php wp_nonce_field('update-options') ?>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <strong>Code:</strong>
                <input type="text" name="wpih_code" size="50" value="<?php echo get_option('wpih_code'); ?>" /><br>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php echo $instagram->getLoginUrl() ?>"><button type="button" class="button button-primary">Gerar token</button> </a>
            </div>

        </form>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

        </div>
	</div>


	<?php
}
