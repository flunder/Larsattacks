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

    <!-- Meta: SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="LarsAttacks">
    <meta name="google-site-verification" content="" />

    <!-- Meta: iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="LarsAttacks">

    <!-- Meta: Icons -->
    <link rel="shortcut icon" href="http://<?php bloginfo('template_url'); ?>/icons/favicon.ico">

    <!-- Wordpress Ajax Endpoint -->
    <script type="text/javascript">var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';</script>

    <!-- Theme -->
    <?php la_wp_header(); ?>

</head>

<body>

    <header>

        <div class="container">

            <h1 class="marginless paddingless">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>

            <nav role="navigation">
                <?php la_navigation(); ?>
            </nav>

            <div>
                <h2>Hello</h2>
                <p>
                    I’m Lars Bortfeldt, a web developer specializing in front-end coding based in London / Uk.
                </p>
                <a href="#work">View my work</a>
            </div>

        </div>

    </header>