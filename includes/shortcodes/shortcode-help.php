<?php
// [nix-help]
function nix_help($atts)
{
    $id = '';
    extract(shortcode_atts(
            array(
                'id' => 'extraid',
            ), $atts)
    );

    return '
<div id="' . $id . '" class="row">

<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Mosbi Theme Documentations</h2>
                <div class="section-content">
                    <p>Thanks for purchasing the Mosbi theme, this help file will guide you to install the theme and
                        customize it. Feel free to contact us using our support forum <a
                                href="https://iconixmarketing.zendesk.com/">here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="setup">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Setup Theme</h2>
                <div class="section-content">
                    <div class="well">
                        <p>How to install and setup your theme.</p>
                    </div>
                    <div class="row inner-content">
                        <div class="right-content col-md-12">
                            <div class="inner-content-col">
                                <h4 id="required">Theme Requirements</h4>
                                <ul>
                                    <li>PHP 5.3+</li>
                                    <li>WordPress 3.8+</li>
                                    <li>Mosbi Shortcodes (included with theme mosbi-shortcodes.zip)</li>
                                    <li>(Optional) Contact Form 7 Plugin</li>
                                    <li>(Optional) Slider Revolution</li>
                                    <li>(Optional) Visual Composer</li>
                                </ul>
                            </div>
                            <div class="inner-content-col">
                                <h4 id="upload-dashboard">Upload Theme Via Dashboard</h4>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/YrzrZIA77eQ" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="inner-content-col">
                                <h4 id="upload-manually">Upload Theme Manually (Via FTP Client)</h4>
                                <ol>
                                    <li>unzip the downloaded file from themeforest.</li>
                                    <li>look for theme folder (e.g /mosbi )</li>
                                    <li>you need to upload this folder to your WP installation location
                                        (/wp-content/themes/)
                                    </li>
                                </ol>
                            </div>
                            <div class="inner-content-col">
                                <h4 id="save-theme-options">Save Theme Options</h4>
                                <ol>
                                    <li>Go to dashboard > Appearance > Theme Options</li>
                                    <li>Select your options.</li>
                                    <li>Click "Save"</li>
                                </ol>
                            </div>
                            <div class="inner-content-col">
                                <h4 id="permalink-settings">Permalink Settings</h4>
                                <ol>
                                    <li>Go to dashboard > Settings > Permalink</li>
                                    <li>Select the option "Post Name".</li>
                                    <li>Click "Save Changes"</li>
                                </ol>
                            </div>
                            <div class="inner-content-col">
                                <h4 id="plugin-settings">Install Mosbi Shortcode Plugin</h4>
                                <ol>
                                    <li>Go to dashboard > Plugins </li>
                                    <li>Select the option "Add New".</li>

                                    <li>Click "Upload Plugin"</li>
                                    <li>Click "Choose File"</li>
                                    <li>Select and upload the "mosbi-plugin.zip"</li>
                                    <li>Activate plugin</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="menus">
    <div class="container">
        <div class="row">
            <h2 class="section-head">Menus</h2>
            <div class="section-content">
                <div class="well">
                    <p>How to create and use menus.</p>
                </div>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="create-menu">Create And Use Menus</h4>
                            <p>How to create menu:</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/2ohHUlg8YiQ" frameborder="0" allowfullscreen></iframe>
                            <ol>
                                <li>Go to appearance > menus.</li>
                                <li>Enter new menu name and click on create menu.</li>
                                <li>Create menu</li>
                                <li>Now click on "Manage Locations"</li>
                                <li>And select the menu you just created.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="revslider">
    <div class="container">
        <div class="row">
            <h2 class="section-head">LayerSlider</h2>
            <div class="section-content">
                <div class="well">
                    <p>Setup and use LayerSlider</p>
                </div>
                <p>Note: These instructions for LayerSlider can be used for any shortcode powered slider.</p>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="setupslider">Setup LayerSlider</h4>
                            <ol>
                                <li>Go to dashboard > Plugins > Add New</li>
                                <li>Select Upload Plugin.</li>
                                <li>Click "Activate"</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="useslider">Using LayerSlider</h4>
                            <ol>
                                <li>Create a new slider.</li>
                                <li>Get the slider shortcode.</li>
                                <li>Go to Pages > Add New</li>
                                <li>Change the page template to "Home"</li>
                                <li>Add the shortcode to the "Home Page Options" section.</li>
                            </ol>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/SHz0RCk5p8o" frameborder="0" allowfullscreen></iframe>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <h2 class="section-head">Portfolio Settings</h2>
            <div class="section-content">
                <div class="well">
                    <p>How to create portfolio items.</p>
                </div>
                <p>Note: Permalink Settings must be set to "Post Name"</p>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="create-portfolio">Create Portfolio Item</h4>
                            <p>Video Tutorial</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/k4BC_TBzS9g" frameborder="0" allowfullscreen></iframe>                            <p>You can create portfolio items from Dashbaord Menu > Portfolio > Add New</p>
                            <p>And from the right panel, You can select portfolio item category and a featured
                                image.</p>
                            <p>The featured image is used as the Portfolio image.</p>
                            <h3 class="panel-title"> Right Panel </h3>
                            <ol>
                                <li>Portfolio Categories (will be used in the filter menu)</li>
                                <li>Portfolio Tags</li>
                                <li>Portfolio Image (You can upload large images it will be resized and used in a
                                    responsive way)
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog">
    <div class="container">
        <div class="row">
            <h2 class="section-head">Blog</h2>
            <div class="section-content">
                <div class="well">
                    <p>How to create blog page and posts.</p>
                </div>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="create-blog">Create Blog Page</h4>
                            <ol>
                                <li>From Dashboard Menu > Pages > Add New.</li>
                                <li>Give the post a title and content.</li>
                                <li>Place a "More" tag where you want your except to end content.</li>
                                <li>Attach a featured image.</li>
                                <li>Now click on Publish</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="settings">
    <div class="container">
        <div class="row">
            <h2 class="section-head">Theme Settings</h2>
            <div class="section-content">
                <div class="well">
                    <p>Edit theme settings and update theme settings framework .</p>
                </div>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="general-settings">General Theme Settings</h4>
                            <p>You can access Theme Settings from <b>Dashboard Menu > Appearance > Theme Options </b>
                            </p>
                            <h3 class="panel-title"> Theme Settings </h3>
                            <ol>
                                <li>From Dashboard Menu > Pages > Add New.</li>
                                <li>Give the post a title and content.</li>
                                <li>Place a "More" tag where you want your except to end content.</li>
                                <li>Attach a featured image.</li>
                                <li>Now click on Publish</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="child-theme">
    <div class="container">
        <div class="row">
            <h2 class="section-head">Child Themes</h2>
            <div class="section-content">
                <div class="well">
                    <p>How to create a child theme .</p>
                </div>
                <div class="row inner-content">
                    <div class="right-content col-md-12">
                        <div class="inner-content-col">
                            <h4 id="create-child-theme">Create Child Theme</h4>
                            <p>Note: MAIN_THEME_NAME is your the name of your theme folder, e.g <b>mosbi</b></p>
                            <ol>
                                <li>Create a new folder in <b>wp-content/themes/</b> root.</li>
                                <li>You can name it <b>MAIN_THEME_NAME-child</b> or any other name you want .</li>
                                <li>Now copy <b>style.css</b> file from <b>MAIN_THEME_NAME</b> folder to the child theme
                                    folder.
                                </li>
                                <li>And Add <b>Template: MAIN_TEHEM_NAME</b> to the file contents, So it should be
                                    similar to this:
                                </li>
                            </ol>
                            <code><br>
                                /*<br>
                                Theme Name: Mosbi Child Theme<br>
                                Theme URI: http://themeforest.net/user/iconixmarketing<br>
                                Author: Iconix Marketing<br>
                                Author URI: http://themeforest.net/user/iconixmarketing<br>
                                Description: Mosbi Single Page Wordpress Theme<br>
                                Version: 1.0<br>
                                License: GPL/MIT<br>
                                Template: mosbi<br>
                                License URI: http://themeforest.net/licenses<br>
                                */<br>
                            </code></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="addmargin" style="padding: 60px;"></div>

</div>
';
}

add_shortcode('nix-help', 'nix_help');