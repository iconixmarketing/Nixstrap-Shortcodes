<?php

// Add Quicktags
function custom_quicktags() {

	if ( wp_script_is( 'quicktags' ) ) {
		?>
        <script type="text/javascript">
            QTags.addButton('eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1);
            QTags.addButton('eg_hr', 'hr', '<hr />', '', 'h', 'Horizontal rule line', 100);
            QTags.addButton('eg_pre', 'pre', '<pre>', '</pre>', 'q', 'Preformatted text', 101);
            QTags.addButton('eg_nbsp', 'space', '&nbsp;', '', 'nbsp', 'Non Breaking Space', 103);
            QTags.addButton('eg_btn', 'button', '<a href="#" class="btn btn-primary">', '</a>', 'btn', 'Button', 104);
            QTags.addButton('eg_well', 'well', '<div class="well">', '</div>', 'well', 'Well', 105);
        </script>
		<?php
	}

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'custom_quicktags' );