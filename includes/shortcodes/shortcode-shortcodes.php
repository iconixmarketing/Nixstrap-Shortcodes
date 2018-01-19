<?php

// shorts [nix-shorts]
function nix_shorts($atts)
{
    $id = '';
    extract(shortcode_atts(
            array(
                'id' => '',
            ), $atts)
    );

    return '
<div id="' . $id . '" class="row">
	<div class="col-md-12">
		<p><strong>Bootstrap Container</strong></p>
		<p>&#91;nix-container&#93;&#91;/nix-container&#93;</p>
		<p><strong>Bootstrap Fluid Container</strong></p>
		<p>&#91;nix-container-fluid&#93;&#91;/nix-container-fluid&#93;</p>
		<p><strong>Bootstrap Row</strong></p>
		<p>&#91;nix-row&#93;&#91;/nix-row&#93;</p>
		<p><strong>Bootstrap Columns (All Sizes)</strong></p>
		<p>&#91;nix-col xs=&quot;6&quot; sm=&quot;6&quot; md=&quot;6&quot; lg=&quot;6&quot; class=&quot;extraclass&quot;&#93;&#91;/nix-col&#93;</p>
		<p><strong>Bootstrap 1 Medium Column</strong></p>
		<p>&#91;nix-col-1&#93;&#91;/nix-col-1&#93;</p>
		<p><strong>Bootstrap 2 Medium Columns</strong></p>
		<p>&#91;nix-col-2&#93;&#91;/nix-col-2&#93;</p>
		<p><strong>Bootstrap 3 Medium Columns</strong></p>
		<p>&#91;nix-col-3&#93;&#91;/nix-col-3&#93;</p>
		<p><strong>Bootstrap 4 Medium Columns</strong></p>
		<p>&#91;nix-col-4&#93;&#91;/nix-col-4&#93;</p>
		<p><strong>Bootstrap 5 Medium Columns</strong></p>
		<p>&#91;nix-col-5&#93;&#91;/nix-col-5&#93;</p>
		<p><strong>Bootstrap 6 Medium Columns</strong></p>
		<p>&#91;nix-col-6&#93;&#91;/nix-col-6&#93;</p>
		<p><strong>Bootstrap 7 Medium Columns</strong></p>
		<p>&#91;nix-col-7&#93;&#91;/nix-col-7&#93;</p>
		<p><strong>Bootstrap 8 Medium Columns</strong></p>
		<p>&#91;nix-col-8&#93;&#91;/nix-col-8&#93;</p>
		<p><strong>Bootstrap 9 Medium Columns</strong></p>
		<p>&#91;nix-col-9&#93;&#91;/nix-col-9&#93;</p>
		<p><strong>Bootstrap 10 Medium Columns</strong></p>
		<p>&#91;nix-col-10&#93;&#91;/nix-col-10&#93;</p>
		<p><strong>Bootstrap 11 Medium Columns</strong></p>
		<p>&#91;nix-col-11&#93;&#91;/nix-col-11&#93;</p>
		<p><strong>Bootstrap 12 Medium Columns</strong></p>
		<p>&#91;nix-col-12&#93;&#91;/nix-col-12&#93;</p>
		<p><strong>Bootstrap Clearfix</strong></p>
		<p>&#91;nix-clearfix&#93;</p>
		<p><strong>Bootstrap Button</strong></p>
		<p>&#91;nix-btn   title="Link Title" target="_blank" type="warning" size="lg"   block="btn-block" class="extraclass"   link="http://www.google.com"&#93;&#91;/nix-btn&#93;</p>
		<p><strong>Bootstrap Well</strong></p>
		<p>&#91;nix-well size="lg" class="extraclass"&#93;&#91;/nix-well&#93;</p>
		<p><strong>Glyphicon Icon</strong></p>
		<p>&#91;nix-glyphicon type=&quot;ok&quot;&#93;</p>
		<p><strong>FontAwesome Icon</strong></p>
		<p>&#91;nix-fontawesome type=&quot;star&quot;&#93;</p>
		<p><strong>Social Icons</strong></p>
		<p>&#91;nix-social-icon url="#" social="google"&#93;</p>
		<p><strong>Bootstrap Images</strong></p>
		<p>&#91;nix-image width="150" height="150" src="#" alt="" type="thumbnail" align="alignleft" res="img-responsive"&#93;</p>
		<p><strong>Bootstrap Alerts</strong></p>
		<p>&#91;nix-alert type="info"&#93;&#91;/nix-alert&#93;</p>
		<p><strong>Bootstrap Unsorted Lists</strong></p>
		<p>&#91;nix-ul&#93;<br>
			&#91;nix-li type="active"&#93; ... &#91;/nix-li&#93;<br>
			&#91;nix-li link="#" target="_blank"&#93; ... &#91;/nix-li&#93;<br>
			&#91;nix-li&#93; ... &#91;/nix-li&#93;<br>
			&#91;nix-li&#93; ... &#91;/nix-li&#93;<br>
			&#91;/nix-ul&#93;</p>
		<p><strong>Spacer</strong></p>
		<p>&#91;nix-spacer space="20" class="extraclass"&#93;</p>
		<p><strong>Bootstrap Accordion</strong></p>
		<p>&#91;nix-accordion&#93;<br>
			&#91;nix-accordion-panel title="Test Title" number="1" open="in"&#93; Text Block 1 &#91;/nix-accordion-panel&#93;<br>
			&#91;nix-accordion-panel title="Test Title" number="2" open=""&#93; Text Block 2 &#91;/nix-accordion-panel&#93;<br>
			&#91;nix-accordion-panel title="Test Title" number="3" open=""&#93; Text Block 3 &#91;/nix-accordion-panel&#93;<br>
			&#91;/nix-accordion&#93;</p>
		<p><strong>Bootstrap Tabs</strong></p>
		<p>&#91;nix-tabs&#93;<br>
			&#91;nix-tab-title number="1" class="active"&#93; Tab l &#91;/nix-tab-title&#93;<br>
			&#91;nix-tab-title number="2"&#93; Tab 2 &#91;/nix-tab-title&#93;<br>
			&#91;nix-tab-title number="3"&#93; Tab 3 &#91;/nix-tab-title&#93;<br>
			&#91;/nix-tabs&#93;&#91;nix-tab-content&#93;<br>
			&#91;nix-tab-text number="1" class="active"&#93; Text Block 1 &#91;/nix-tab-text&#93;<br>
			&#91;nix-tab-text number="2"&#93; Text Block 2 &#91;/nix-tab-text&#93;<br>
			&#91;nix-tab-text number="3"&#93; Text Block 3 &#91;/nix-tab-text&#93;<br>
			&#91;/nix-tab-content&#93;</p>
		<p><strong>Anchor</strong></p>
		<p>&#91;nix-anchor id=""&#93;</p>
		<p><strong>Parallax Section (js)</strong></p>
		<p>&#91;nix-parallax   id="parallax-section-1" speedx="50" speedy="0.2" start="0" image="#"   height="100px" class="extraclass"&#93;&#91;/nix-parallax&#93;</p>
		<p><strong>Parallax Section (Fixed Background)</strong></p>
		<p>&#91;nix-parallax-fixed id="parallax-section-fixed-1" image="#" height="450px" class="extraclass"&#93;&#91;/nix-parallax-fixed&#93;</p>
		<p><strong>Absolute Center</strong></p>
		<p>&#91;nix-center&#93;&#91;/nix-center&#93;</p>
		<p><strong>Recent Posts</strong></p>
		<p>&#91;nix-recent-posts posts="3"&#93;</p>
		<p><strong>User Content Only</strong></p>
		<p>&#91;nix-user-only&#93;&#91;/nix-user-only&#93;</p>
		<p><strong>Display Featured Image</strong></p>
		<p>&#91;nix-thumb class="extraclass"&#93;</p>
		<p><strong>Rotation CSS Animation </strong></p>
		<p>&#91;nix-rotate class="extraclass" bgcolor="#ffffff" speed="1" transition="2" width="300px" height="300px" img=""&#93;&#91;/nix-rotate&#93;</p>
		<p><strong>Transform CSS Animation</strong></p>
		<p>&#91;nix-transform   class="extraclass" bgcolor="#ffffff" stopx="300" stopy="1100"   stopz="300" speedx="1" speedy="1" speedz="1" transition="2"   width="300px" height="300px" img=""&#93;&#91;/nix-transform&#93;</p>
		<p><strong>Color Swatches</strong></p>
		<p>&#91;nix-color-swatches&#93;</p>
		<p><strong>Bootstrap Sample</strong></p>
		<p>&#91;nix-bootstrap&#93;</p>
		<p><strong>Display Help Files</strong></p>
		<p>&#91;nix-help&#93;</p>
	</div>
</div>
	';
}

add_shortcode('nix-shorts', 'nix_shorts');