<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!--removing title tag and add it in functions file-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <div class="top-bar">
                <div class="container">
                    <ul class="social-icons pull-left  unstyled">
                        <?php if(get_option('facebook_url')):?>
                            <li><a href="<?php echo esc_attr( get_option('facebook_url') ); ?>" class="Facebook"></a></li>
                        <?php endif ?>
                        <li><a href="<?php echo esc_attr( get_option('twitter_url') ); ?>" class="Twitter"></a></li>
                    </ul>

                </div>
            </div><!--top-bar-->

            <div class="menu-box">
                <div class="container">
                    <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" width="193" height="151"></a>
                    <span class="slogan">blog el blog</span>

<!--                    <ul class="main-menu pull-left">
                        <li class="active"><a href=""><?php wp_nav_menu( array( 'iti' => 'header-menu' ) ); ?></a></li>
                        <li><a href=""><?php wp_nav_menu( array( 'iti' => 'header-menu' ) ); ?></a></li>
                        <li><a href="">خدماتنا</a></li>
                        <li><a href="">شركاء النجاح</a></li>
                        <li><a href="">مدونة</a></li>
                        <li><a href="">اتصل بنا</a></li>
                    </ul>-->
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu' ,
                            'container' => '',
                            'menu_class' => 'main-menu pull-right'
                            ) ); 
                    ?>
                </div>
            </div><!--main-menu-->

        </header>