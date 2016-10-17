<!DOCTYPE html>
<html lang="ru" class="no-js">
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

    <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css" rel="stylesheet" />

  </head>
  <body class="error-page">
    <div class="error">
      <div class="error-wrapper">
        <div class="warning-box">
          <div class="warning-ico"><svg width="70" height="63" viewBox="0 0 70 63" xmlns="http://www.w3.org/2000/svg"><title>Something went wrong</title><path d="M69.302 55.252L38.926 2.362c-1.76-3.065-6.17-3.065-7.93 0L.618 55.252c-1.76 3.064.444 6.906 3.965 6.906h60.753c3.521 0 5.726-3.842 3.965-6.906zM35.004 18.649c1.946 0 3.521 1.626 3.464 3.582l-.573 20.086a2.907 2.907 0 0 1-2.906 2.834 2.917 2.917 0 0 1-2.906-2.834l-.558-20.086c-.043-1.956 1.517-3.582 3.479-3.582zm-.043 36.33c-1.99 0-3.608-1.626-3.608-3.626s1.618-3.626 3.608-3.626 3.607 1.626 3.607 3.626-1.618 3.625-3.607 3.625z" fill="#F62424" fill-rule="evenodd"/></svg></div>
        </div><!-- /.warning-box -->
        <div class="error__body">
          <h1>Ooops!</h1>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="Something went wrong — 404 Error">
          <p>Something went wrong.</p>
        </div><!-- /.error__body -->
        <div class="error__footer">
          <p>Let's try again.</p>
          <a href="/" class="error__footer-btn">GET FREE QUOTE</a>
        </div><!-- /.error__footer -->
      </div><!-- /.error-wrapper -->
    </div><!-- /.error -->
  </body>
</html>
