jQuery(document).ready(function () {
    tinymce.create('tinymce.plugins.nix', {
        init: function (ed, url) {
            ed.addButton('nix_button', {
                title: 'Button',
                cmd: 'nix_button',
                image: url + '/images/tiny-button.png'
            });
            ed.addButton('nix_column', {
                title: 'Columns',
                cmd: 'nix_column',
                image: url + '/images/tiny-column.png'
            });
            ed.addButton('nix_icon', {
                title: 'Icon',
                cmd: 'nix_icon',
                image: url + '/images/tiny-icon.png'
            });
            ed.addButton('nix_clearfix', {
                title: 'Clearfix',
                cmd: 'nix_clearfix',
                image: url + '/images/tiny-clearfix.png'
            });
            ed.addButton('nix_images', {
                title: 'Images',
                cmd: 'nix_images',
                image: url + '/images/tiny-images.png'
            });
            ed.addButton('nix_row', {
                title: 'Row',
                cmd: 'nix_row',
                image: url + '/images/tiny-row.png'
            });
            ed.addButton('nix_alert', {
                title: 'Alert',
                cmd: 'nix_alert',
                image: url + '/images/tiny-alert.png'
            });
            ed.addButton('nix_list', {
                title: 'List',
                cmd: 'nix_list',
                image: url + '/images/tiny-list.png'
            });
            ed.addButton('nix_well', {
                title: 'Well',
                cmd: 'nix_well',
                image: url + '/images/tiny-well.png'
            });
            ed.addButton('nix_accordion', {
                title: 'Accordion',
                cmd: 'nix_accordion',
                image: url + '/images/tiny-accordion.png'
            });
            ed.addButton('nix_tabs', {
                title: 'Tabs',
                cmd: 'nix_tabs',
                image: url + '/images/tiny-tabs.png'
            });
            ed.addButton('nix_anchor', {
                title: 'Anchor',
                cmd: 'nix_anchor',
                image: url + '/images/tiny-anchor.png'
            });
            ed.addButton('nix_parallax', {
                title: 'Parallax',
                cmd: 'nix_parallax',
                image: url + '/images/tiny-parallax.png'
            });
            ed.addButton('nix_parallax_fixed', {
                title: 'Parallax Fixed',
                cmd: 'nix_parallax_fixed',
                image: url + '/images/tiny-parallax.png'
            });
            ed.addButton('nix_container', {
                title: 'Container',
                cmd: 'nix_container',
                image: url + '/images/tiny-container.png'
            });
            ed.addButton('nix_fluidcontainer', {
                title: 'Fluid Container',
                cmd: 'nix_fluidcontainer',
                image: url + '/images/tiny-fluid-container.png'
            });
            ed.addButton('nix_center', {
                title: 'Absolute Center',
                cmd: 'nix_center',
                image: url + '/images/tiny-center.png'
            });
            ed.addButton('nix_recent_posts', {
                title: 'Recent Posts',
                cmd: 'nix_recent_posts',
                image: url + '/images/tiny-recent-posts.png'
            });
            ed.addButton('nix_user_only', {
                title: 'User Only Content',
                cmd: 'nix_user_only',
                image: url + '/images/tiny-user-content.png'
            });
            ed.addButton('nix_featured_image', {
                title: 'Get Featured Image',
                cmd: 'nix_featured_image',
                image: url + '/images/tiny-images.png'
            });
            ed.addButton('nix_spacer', {
                title: 'Spacer',
                cmd: 'nix_spacer',
                image: url + '/images/tiny-spacer.png'
            });
            ed.addButton('nix_rotate', {
                title: 'Rotate',
                cmd: 'nix_rotate',
                image: url + '/images/tiny-rotate.png'
            });
            ed.addButton('nix_transform', {
                title: 'Transform',
                cmd: 'nix_transform',
                image: url + '/images/tiny-transform.png'
            });
            ed.addCommand('nix_transform', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-transform class="extraclass" bgcolor="#ffffff" stopx="300" stopy="1100" stopz="300" speedx="1" speedy="1" speedz="1" transition="2" width="300px" height="300px" img=""]' + selected_text + '[/nix-transform]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_rotate', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-rotate class="extraclass" bgcolor="#ffffff" speed="1" transition="2" width="300px" height="300px" img=""]' + selected_text + '[/nix-rotate]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_spacer', function () {
                var return_text;
                return_text = '[nix-spacer space="20" class="extraclass"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_featured_image', function () {
                var return_text;
                return_text = '[nix-thumb class="extraclass"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_user_only', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-user-only]' + selected_text + '[/nix-user-only]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_recent_posts', function () {
                var return_text;
                return_text = '[nix-recent-posts posts="3"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_center', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-center]' + selected_text + '[/nix-center]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_fluidcontainer', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-container-fluid]' + selected_text + '[/nix-container-fluid]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_container', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-container]' + selected_text + '[/nix-container]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_parallax', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-parallax id="parallax-section-1" speedx="50" speedy="0.2" start="0" image="#" height="100px" class="extraclass"]' + selected_text + '[/nix-parallax]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_parallax_fixed', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-parallax-fixed id="parallax-section-fixed-1" image="#" height="450px" class="extraclass"]' + selected_text + '[/nix-parallax-fixed]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_anchor', function () {
                var return_text;
                return_text = '[nix-anchor id=""]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_button', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-btn title="Link Title" target="_blank" type="warning" size="lg" block="btn-block" class="extraclass" link="http://www.google.com"]' + selected_text + '[/nix-btn]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_column', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-row][nix-col-6] Text Content [/nix-col-6][nix-col-6]' + selected_text + '[/nix-col-6][/nix-row]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_icon', function () {
                var return_text;
                return_text = '[nix-fontawesome type="star"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_clearfix', function () {
                var return_text;
                return_text = '[nix-clearfix]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_images', function () {
                var return_text;
                return_text = '[nix-image width="150" height="150" src="#" alt="" type="thumbnail" align="alignleft" res="img-responsive"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_row', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-row]' + selected_text + '[/nix-row]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_alert', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-alert type="info"]' + selected_text + '[/nix-alert]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_list', function () {
                var return_text;
                return_text = '[nix-ul]<br>[nix-li type="active"] ... [/nix-li]<br>[nix-li link="#" target="_blank"] ... [/nix-li]<br>[nix-li] ... [/nix-li]<br>[nix-li] ... [/nix-li]<br>[/nix-ul]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_well', function () {
                var selected_text = ed.selection.getContent();
                var return_text;
                return_text = '[nix-well size="lg" class="extraclass"]' + selected_text + '[/nix-well]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_accordion', function () {
                var return_text;
                return_text = '[nix-accordion]<br>[nix-accordion-panel title="Test Title" number="1" open="in"] Text Block 1 [/nix-accordion-panel]<br>[nix-accordion-panel title="Test Title" number="2" open=""] Text Block 2 [/nix-accordion-panel]<br>[nix-accordion-panel title="Test Title" number="3" open=""] Text Block 3 [/nix-accordion-panel]<br>[/nix-accordion]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            ed.addCommand('nix_tabs', function () {
                var return_text;
                return_text = '[nix-tabs]<br>[nix-tab-title number="1" class="active"] Tab l [/nix-tab-title]<br>[nix-tab-title number="2"] Tab 2 [/nix-tab-title]<br>[nix-tab-title number="3"] Tab 3 [/nix-tab-title]<br>[/nix-tabs][nix-tab-content]<br>[nix-tab-text number="1" class="active"] Text Block 1 [/nix-tab-text]<br>[nix-tab-text number="2"] Text Block 2 [/nix-tab-text]<br>[nix-tab-text number="3"] Text Block 3 [/nix-tab-text]<br>[/nix-tab-content]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
        }
    });
    // Register plugin
    tinymce.PluginManager.add('nix', tinymce.plugins.nix);
})();