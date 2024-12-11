<?php

namespace dxwMediaControls;

class Guidance implements \Dxw\Iguana\Registerable
{
	public function register(): void
	{
		if (get_field('dxw_media_show_guidance', 'option') && get_field('dxw_media_controls_guidance', 'option')) {
			add_action('pre-upload-ui', [$this, 'media_guidance']);
			add_action('enqueue_block_editor_assets', function () {
				wp_register_script(
					'dxw-media-controls-script',
					plugins_url('assets/js/script.js', __FILE__)
				);
				wp_localize_script(
					'dxw-media-controls-script',
					'dxwMediaControls',
					[
						'dxwMediaGuidance' => get_field('dxw_media_controls_guidance', 'option')
					]
				);
				wp_enqueue_script('dxw-media-controls-script');
			});
		}
	}

	public function media_guidance(): void
	{
		echo '<h4>';
		echo get_field('dxw_media_controls_guidance', 'option');
		echo '</h4>';
	}
}
