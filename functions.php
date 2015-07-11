<?php

/**
 * Theme Translation
 */

load_theme_textdomain('s-report', get_template_directory() . '/languages');


/**
 * IFTTT Data to Object
 */


function tokenText($str)
{
    $matches = preg_split("/\;\s*\\$/uism", $str);
    $object = array();
    foreach ($matches as $match) {
        preg_match("/\\$?(\w+)\:(.*)/uism", trim($match), $_matches);
        $object[$_matches[1]] = rtrim($_matches[2], ";");
    }
    return $object;
}

/**
 * Get Theme Script
 */

function page_js_files()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-masonry');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js');
    wp_enqueue_script('plugin_js', get_template_directory_uri() . '/js/plugin.min.js', array('jquery-masonry'));
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.min.js', array('plugin_js'));
}

add_action('wp_enqueue_scripts', 'page_js_files');


/**
 * Get Theme options
 */
function s_report_get_theme_option($option_name, $default = false)
{
    $options = get_option('s_report_theme_options');
    if (isset($options[$option_name]) && !empty($options[$option_name])) {
        return $options[$option_name];
    }
    return $default;
}

/**
 * Header code
 */
if (!function_exists('header_code')) {
    function header_code()
    {
        $header_code = s_report_get_theme_option('header_code');
        if ($header_code) {
            echo $header_code;
        }
    }

    add_action('wp_head', 'header_code');
}

/**
 * Footer code
 */
if (!function_exists('footer_code')) {
    function footer_code()
    {
        $footer_code = s_report_get_theme_option('footer_code');
        if ($footer_code) {
            echo $footer_code;
        }
    }

    add_action('wp_footer', 'footer_code');
}

function eventTemplateSidebar( $eventType, $eventTitle, $eventContent, $eventUrl, $eventTimeStamp, $eventIconStatus, $eventCategory, $eventTag ) {
    ?>
    <article <?php post_class( 'post-' . $eventType . ' ' . 'post-' . $eventIconStatus ); ?>>

        <div class="post-content">

            <?php
            if ( $eventType == "photo" ) {
                ?>
                <img class="post-content_photo"
                     src="<?php echo $eventContent ?>"
                     alt="<?php echo $eventTitle ?>"
                     draggable="false"/>
                <?php
            }
            if (($eventType == "text" && $eventIconStatus == "favorite") || $eventType == "link") {
                ?>
                <h3 class="post-content_title">
                    <?php echo $eventTitle; ?>
                </h3>
                <?php
            }

            if ($eventType == "text") {
                ?>
                <p class="post-content_summary">
                    <?php echo $eventContent; ?>
                </p>
                <?php
            }
            ?>

        </div>

        <footer class="post-footer">

            <a class="post-time" href="<?php echo $eventUrl; ?>">
                <time><?php echo $eventTimeStamp; ?></time>
            </a>

            <div class="post-icons">
                <a class="post_icon post_icon--action" href="">
                    <svg class="icon icon--solid">
                        <use xlink:href="#icon-<?php echo $eventIconStatus; ?>"></use>
                    </svg>
                </a>
                <a class="post_icon post_icon--source" href="">
                    <svg class="icon">
                        <use xlink:href="#icon-<?php echo $eventCategory; ?>"></use>
                    </svg>
                </a>
            </div>

        </footer>


    </article>

    <?php
}
