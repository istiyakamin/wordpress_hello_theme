<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    <title>Home page</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>

  <?php 
if(cs_get_option('field_7')){
  ?>


    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->

    <?php }
   ?>

    <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">

                   <?php wp_nav_menu( array(
                       'theme_location'  => 'header_menu',
                       'menu'            => '',
                       'container'       => 'div',
                       'container_class' => 'navbar-collapse collapse align-left',
                       'menu_class'      => 'nav navbar-nav',
                       'echo'            => true,
                       'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                       'before'          => '',
                       'after'           => '',
                       'link_before'     => '',
                       'link_after'      => '',
                       'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                       'depth'           => 2,
                       'walker'          => new WP_Bootstrap_Navwalker(),
                   ) ); ?>

                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri() ?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->
