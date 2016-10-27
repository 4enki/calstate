<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>

    <title><?php wp_title('', true, 'right'); ?></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="imagetoolbar" content="no"/>
    <meta name="msthemecompatible" content="no"/>
    <meta name="cleartype" content="on"/>
    <meta name="HandheldFriendly" content="True"/>


    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>

    <meta name="google" value="notranslate"/>

    <meta name="theme-color" content="#ffffff"/>

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

    <link sizes="57x57"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-57x57.png"   rel="apple-touch-icon"/>
    <link sizes="60x60"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-60x60.png"   rel="apple-touch-icon"/>
    <link sizes="72x72"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-72x72.png"   rel="apple-touch-icon"/>
    <link sizes="76x76"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-76x76.png"   rel="apple-touch-icon"/>
    <link sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-120x120.png" rel="apple-touch-icon"/>
    <link sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-114x114.png" rel="apple-touch-icon"/>
    <link sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-144x144.png" rel="apple-touch-icon"/>
    <link sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-152x152.png" rel="apple-touch-icon"/>
    <link sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/apple-touch-icon-180x180.png" rel="apple-touch-icon"/>

    <link sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon-192x192.png" rel="icon" type="image/png"/>
    <link sizes="160x160" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon-160x160.png" rel="icon" type="image/png"/>
    <link sizes="96x96"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon-96x96.png"   rel="icon" type="image/png"/>
    <link sizes="32x32"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon-32x32.png"   rel="icon" type="image/png"/>
    <link sizes="16x16"   href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon-16x16.png"   rel="icon" type="image/png"/>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/i/favicon.ico" type="image/x-icon"/>

    <meta name="application-name" content="@@title"/>
    <meta name="msapplication-tooltip" content=""/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/i/mstile-large.png"/>
    <meta name="msapplication-starturl" content="/"/>
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/assets/images/i/mstile-small.png"/>
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/images/i/mstile-medium.png"/>
    <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/images/i/mstile-wide.png"/>
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/assets/images/i/mstile-large.png"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.min.css" rel="stylesheet" />

    <?php if ( is_page_template('page-templates/faq-page.php') ) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scripts/magnific-popup/magnific-popup.css">
    <?php } ?>

    <?php if ( is_page_template('page-templates/about-page.php') ) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scripts/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scripts/owl-carousel/owl.theme.css">
    <?php } ?>

    <?php if ( is_page_template('page-templates/contacts-page.php') ) { ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
      google.maps.event.addDomListener(window, 'load', init);
      function init() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(34.087099, -118.181621),
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(34.087099, -118.301621),
            map: map,
            title: 'CalState!',
            icon: '<?php echo get_template_directory_uri(); ?>/assets/images/map-marker.png'
        });
      }
    </script>
    <?php } ?>

    <?php wp_head(); ?>

  </head>
  <body>
    <div class="statusbar">
      <div class="box">
        <div class="statusbar-box">
          <div class="statusbar__menu">
            <ul class="statusbar-menu">
              <li class="statusbar-menu__item"><a href="" class="statusbar-menu__link">ABOUT CALSTATE</a></li>
              <li class="statusbar-menu__item"><a href="" class="statusbar-menu__link">BLOG</a></li>
              <li class="statusbar-menu__item"><a href="" class="statusbar-menu__link">FAQ</a></li>
            </ul>
          </div><!-- /.statusbar__menu -->
          <div class="statusbar__geo">
            <div class="location">
              <div class="location__text">Your Location</div><!-- /.location__text -->
              <div class="location__select">
                <select>
                  <option data-display="Los Angeles">Los Angeles</option>
                  <option value="1">New York</option>
                  <option value="2">Chicago</option>
                </select>
              </div><!-- /.location__select -->
            </div><!-- /.location -->
          </div><!-- /.statusbar__geo -->
        </div><!-- /.statusbar-box -->
      </div><!-- /.box -->
    </div><!-- /.statusbar -->

    <header class="header">
      <div class="box">
        <div class="header-box">
          <div class="header__logo">
          <?php if( is_home() || is_front_page() ) { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="CalState — #1 Los Angeles Moving Service" width="162" height="57">
          <?php } else { ?>
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="CalState — #1 Los Angeles Moving Service" width="162" height="57"></a>
          <?php } ?>
          </div>
          <nav class="header__nav">
            <ul class="header-menu">
              <li class="header-menu__item header-menu__item-active"><a href="" class="header-menu__link">Moving Services</a></li>
              <li class="header-menu__item"><a href="" class="header-menu__link">Storage Services</a></li>
              <li class="header-menu__item"><a href="" class="header-menu__link">Buy Supplies</a></li>
              <li class="header-menu__item"><a href="" class="header-menu__link">Special Offers</a></li>
              <li class="header-menu__item"><a href="" class="header-menu__link">Contact Us</a></li>
            </ul>
          </nav>
          <div class="header__tel">
            <div class="tel-box">
              <span class="tel-box__ico"></span>
              <a href="tel:+18008881508" class="tel-box__link">800&nbsp;888&nbsp;1508</a>
            </div>
          </div>
        </div><!-- /.header__box -->
      </div><!-- /.box -->
    </header><!-- /.header -->
