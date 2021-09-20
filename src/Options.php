<?php
namespace dxwMediaControls;

class Options implements \Dxw\Iguana\Registerable
{
    public function register() : void
    {
        add_action('acf/init', [$this, 'acfInit']);
    }

    public function acfInit() : void
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
