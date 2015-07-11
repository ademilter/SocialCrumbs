<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php esc_attr( get_bloginfo('charset') ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php esc_html( get_bloginfo('name') ); ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php include_once("dns-prefetch.php"); ?>

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7898554/661028/css/fonts.css"/>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_html( get_bloginfo('pingback_url') ); ?>">
    <?php wp_head(); ?>

    <?php include_once("analyticstracking.php"); ?>

</head>
<body <?php body_class(); ?>>

<?php include 'icons.php'; ?>