<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js is-ie lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>   <html class="no-js is-ie lt-ie9 lt-ie8">       <![endif]-->
<!--[if IE 8]>   <html class="no-js is-ie lt-ie9">              <![endif]-->
<!--[if gt IE 8]><html lang="en-GB" class="is-ie">              <![endif]-->
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

    <!-- Meta: Icons -->
    <link rel="shortcut icon" href="http://<?php bloginfo('template_url'); ?>/icons/favicon.ico">

    <!-- Wordpress Ajax Endpoint -->
    <script type="text/javascript">var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';</script>

    <!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->

    <!-- Theme -->
    <?php la_wp_header(); ?>


</head>

<body>

    <header>

        <div class="container">

            <h1 class="marginless paddingless">
                <a href="<?php echo home_url(); ?>" class="la-logo">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            <nav role="navigation">
                <?php la_navigation(); ?>
            </nav>

            <div class="welcome col-sm-8 paddingless">

                <h2 class="h1 white welcome-hl">
                    Hello
                </h2>

                <p class="h6 white welcome-p">
                    I’m Lars Bortfeldt, a developer specializing in front-end coding based in London / Uk.
                </p>

                <a href="#work" class="welcome-a btn bg-black rounded white">
                    View my work
                </a>
            </div>

        </div>

    </header>