<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gemtek</title>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/dist/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css">
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/modernizr.js"></script>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-clear">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/logo.png" alt="" class="d-none d-md-inline-block">
          <img src="<?php bloginfo('template_url'); ?>/dist/images/gemtek.png" alt="" class="d-md-none">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php 
            wp_nav_menu(array(
              'name'  => 'menu-top',
              'container_class' => 'ms-auto mb-2 mb-md-0',
              'menu_class'      => 'navbar-nav ',
              'add_a_class'     => 'nav-link',
          ));
          ?>
          <form class="d-flex justify-content-center ms-md-2" role="search">
            <div class="search-box search-box--nav collapsed">
              <img class="search-box-icon SearchNavToggle" src="<?php bloginfo('template_url'); ?>/dist/images/icon-search.png" alt="">
              <input type="seach" class="form-control search-box-input" placeholder="Search">            
            </div>
          </form>
        </div>
      </div>
    </nav>
