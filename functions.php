<?php

/**
 * Theme Translation
 */
load_theme_textdomain( 's-report', get_template_directory() . '/languages' );


/**
 * IFTTT Data to Object
 */
function tokenText( $str ) {
    $matches = preg_split( "/\;\s*\\$/uism", $str );
    $object = array();
    foreach ( $matches as $match) {
        preg_match( "/\\$?(\w+)\:(.*)/uism", trim( $match ), $_matches );
        if ( !empty( $_matches ) ) {
            $object[ $_matches[1] ] = rtrim( $_matches[2], ";" );
        }
    }
    return $object;
}

/**
 * Get Theme Script
 */

function page_js_files() {
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
function s_report_get_theme_option($option_name, $default = false) {
    $options = get_option('s_report_theme_options');
    if (isset($options[$option_name]) && !empty($options[$option_name])) {
        return $options[$option_name];
    }
    return $default;
}

/**
 * Header code
 */
if ( !function_exists( 'header_code' ) ) {
    function header_code() {
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
if ( !function_exists( 'footer_code' ) ) {
    function footer_code() {
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
                     src="<?php echo esc_url( $eventContent ); ?>"
                     alt="<?php echo esc_attr( $eventTitle ); ?>"
                     draggable="false"/>
                <?php
            }
            if (($eventType == "text" && $eventIconStatus == "favorite") || $eventType == "link") {
                ?>
                <h3 class="post-content_title">
                    <?php echo esc_html( $eventTitle ); ?>
                </h3>
                <?php
            }

            if ( $eventType == "text" ) {
                ?>
                <p class="post-content_summary">
                    <?php
                    if ( !empty( $eventContent ) ) {
                        echo wp_kses_post( $eventContent );
                    } else {
                        the_content();
                    }
                    ?>
                </p>
                <?php
            }
            ?>

        </div>

        <footer class="post-footer">

            <a class="post-time" href="<?php echo esc_url( $eventUrl ); ?>">
                <time><?php echo esc_html( $eventTimeStamp ); ?></time>
            </a>

            <div class="post-icons">
                <a class="post_icon post_icon--action" href="">
                    <svg class="icon icon--solid">
                        <use xlink:href="#icon-<?php echo esc_attr( $eventIconStatus ); ?>"></use>
                    </svg>
                </a>
                <a class="post_icon post_icon--source" href="">
                    <svg class="icon">
                        <use xlink:href="#icon-<?php echo esc_attr( $eventCategory ); ?>"></use>
                    </svg>
                </a>
            </div>

        </footer>


    </article>

    <?php
}


function socialcrumbs_setup_loop( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {

        $cats = array(
            get_cat_ID('codepen'),
            get_cat_ID('delicious'),
            get_cat_ID('dribbble'),
            get_cat_ID('instapaper'),
            get_cat_ID('foursquare'),
            get_cat_ID('twitter'),
            get_cat_ID('soundcloud'),
            get_cat_ID('instagram'),
            get_cat_ID('vimeo'),
            get_cat_ID('youtube'),
            get_cat_ID('lastfm'),
            get_cat_ID('github')
        );
        $query->set( 'category__in',  $cats );
    }

}
add_action( 'pre_get_posts', 'socialcrumbs_setup_loop' );


function socialcrumbs_head() {
    ?>
    <meta charset="<?php esc_attr( get_bloginfo('charset') ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php esc_html( get_bloginfo('name') ); ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php include_once("dns-prefetch.php"); ?>

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7898554/661028/css/fonts.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_html( get_bloginfo('pingback_url') ); ?>">
    <?php
}
add_action( 'wp_head', 'socialcrumbs_head' );

function socialcrumbs_analytics() {
    get_template_part( 'analyticstracking' );
}
add_action( 'wp_head', 'socialcrumbs_analytics' );


function socialcrumbs_the_content( $content ) {
    $tokens = tokenText( get_the_content() );
    if ( in_category( get_cat_ID('instagram') ) ) {
        if ( has_tag( 'share-photo' ) ) {

            // Data [Caption, Url, SourceUrl, CreatedAt, EmbedCodee]
            $content = $tokens["SourceUrl"];

        } elseif ( has_tag( 'share-video' ) ) {

            // Data [Caption, URL, VideoSourceURL, ImageThumbnailURL, CreatedAt, EmbedCode]
            $content = $tokens["ImageThumbnailURL"];

        } elseif ( has_tag( 'like-photo') ) {

            // Data [Caption, Url, SourceUrl, Username, CreatedAt, EmbedCode]
            $content = $tokens["SourceUrl"];

        } elseif ( has_tag( 'like-video') ) {

            // Data [Caption, URL, VideoSourceURL, ImageThumbnailURL, Username, CreatedAt, EmbedCode]
            $content = $tokens["ImageThumbnailURL"];

        }
    }
    return $content;
}
add_filter( 'the_content', 'socialcrumbs_the_content' );
