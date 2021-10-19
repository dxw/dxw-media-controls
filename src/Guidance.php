<?php
namespace dxwMediaControls;

class Guidance implements \Dxw\Iguana\Registerable
{
    public function register() : void
    {
        if (get_field('dxw_media_show_guidance', 'option') && get_field('dxw_media_controls_guidance', 'option')) {
            add_action('pre-upload-ui', [$this, 'media_guidance']);
        }
    }

    public function media_guidance() : void
    {
        echo '<h4>';
        echo get_field('dxw_media_controls_guidance', 'option');
        echo '</h4>';
    }
}
