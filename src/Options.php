<?php

namespace dxwMediaControls;

class Options implements \Dxw\Iguana\Registerable
{
	public function register(): void
	{
		add_action('acf/init', [$this, 'acfInit']);
	}

	public function acfInit(): void
	{
		acf_add_options_sub_page([
			'page_title' => 'Additional media settings',
			'menu_slug' => 'additional-media-settings',
			'parent_slug' => 'options-general.php',
		]);

		acf_add_local_field_group([
			'key' => 'group_6f986aaed3444',
			'title' => 'Additional media settings',
			'fields' => [
				[
					'key' => 'field_4f986ab76a808',
					'label' => 'Show user guidance',
					'name' => 'dxw_media_show_guidance',
					'type' => 'true_false',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => __('Yes', 'txtdomain'),
					'ui_off_text' => __('No', 'txtdomain'),
				],
				[
					'key' => 'field_5f986ab76a819',
					'label' => 'User guidance',
					'name' => 'dxw_media_controls_guidance',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '',
						'class' => '',
						'id' => '',
					],
					'default_value' => 'It is recommended to use <strong>JPG</strong> or <strong>GIF</strong> filetypes for most images and to keep the file size as small as possible, for example between <strong>100-200 KB</strong>. Use <strong>medium</strong> rather than large versions in posts.',
					'media_upload' => 0,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => 1024,
				]
			],
			'location' => [
				[
					[
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'additional-media-settings',
					],
				],
			],
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		]);
	}
}
