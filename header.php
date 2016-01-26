<?php
/**
 * The header for WFE Education.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package w4e-education
 */
global $woocommerce;
?>
<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?></title>
  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <!--[if IE]>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>
  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
  <meta name="theme-color" content="#121212">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php // wordpress head functions ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head ?>
  <?php // drop Google Analytics Here ?>
  <?php // end analytics ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  <div id="container">
    <header class="row row-full row-debug header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
      <div id="base-header" class="base">
        
          <div class="row">
            <div class="col s1"><div class="language">ITALIANO</div></div>
            <div class="col s1 push-s6"><div class="language"><a href="">Accedi</a>/<a href="">Registrati</a></div></div>
            <div class="col s3 offset-s7 carrello">
                <?php if ( is_user_logged_in() ) { ?>
                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','oceanic'); ?>"><?php _e('My Account','oceanic'); ?></a></div>
                <?php } else { ?>
                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login','oceanic'); ?>"><?php _e('Sign In / Register','oceanic'); ?></a></div>
                <?php } ?>
                <div class="header-cart">
                    <a class="header-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'oceanic'); ?>">
                        <span class="header-cart-amount">
                            <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'oceanic'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
                        </span>
                        <span class="header-cart-checkout<?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? ' cart-has-items' : ''; ?>">
                            <span><?php _e('Checkout', 'oceanic'); ?></span> <i class="fa fa-shopping-cart"></i>
                        </span>
                    </a>
                </div>
            </div>
          </div>
        
      </div> <!-- base header -->
      <div id="inner-header">
        <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
       
          <div class="row">
            <div class="col s1"><i class="small material-icons">view_headline</i></div>
            <div class="col s2 push-s4">
              <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
                <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
                <span class="description"><?php  bloginfo('description'); ?></span>
              </p>

              <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                'menu_class' => 'nav top-nav cf',               // adding custom nav class
                'theme_location' => 'main-nav',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => ''                             // fallback function (if there is one)
                )); ?>
              </nav>
          </div>
          <div class="col s1 offset-s8"><i class="small material-icons">search</i></div>
          </div><!--row-->
        
        </div><!--inner-->
      </header>
      
