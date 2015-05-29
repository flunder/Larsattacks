<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html lang="en-GB" class="no-js"><![endif]-->
<html>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="LarsAttacks">
    <meta name="google-site-verification" content="" />

    <!-- iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="LarsAttacks">

    <!-- Icons -->
    <link rel="shortcut icon" href="http://<?php bloginfo('template_url'); ?>/icons/favicon.ico">                             <!-- Standard 32x32 --><!-- FAVICON -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-152.png" sizes="152x152"> <!-- iPad Retina iOS7 -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-144.png" sizes="144x144"> <!-- iPad Retina iOS6 -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-120.png" sizes="120x120"> <!-- iPhone Retina iOS7 -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-114.png" sizes="114x114"> <!-- iPhone Retina iOS6 -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-072.png" sizes="72x72">   <!-- 1+2 Gen iPad: -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icons/iOSicon-057.png">

    <script type="text/javascript">var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';</script>

    <?php la_wp_header(); ?>
</head>

<body>

    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <nav role="navigation">
                <?php la_navigation(); ?>
            </nav>
        </div>
    </header>