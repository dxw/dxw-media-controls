jQuery(function() {

    // block editor: on change check if media block opened and add user guidance if not already added
    wp.data.subscribe( () => {
        let mediaBlock = jQuery('.wp-block-image').first();
        let dxwMediaUserGuidanceDiv = jQuery('.dxw-media-user-guidance').first();
        let dxwMediaUserGuidance = dxwMediaUserGuidanceDiv.length > 0;
        if (mediaBlock && !dxwMediaUserGuidance) {
            let instructionsDiv = jQuery('.components-placeholder__instructions').first();
            if (instructionsDiv) {
                let html = '<div class="dxw-media-user-guidance">' + dxwMediaControls.dxwMediaGuidance +'</div>';
                jQuery(instructionsDiv).append(html);
            }
        }
    });

});