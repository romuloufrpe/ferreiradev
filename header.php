<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name'); ?> </title>
    <!--Import Google Icon Font-->
      <link href="<?php bloginfo('template_url'); ?>/http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style ?>.css">

  </head>
  <body>

    <header>

      <nav role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">FerreiraDev!</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Início</a></li>
            <li><a href="portifolio.php">Portfólio</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>



          <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
            <li><a href="index.php">Início</a></li>
            <li><a href="portifolio.php">Portfólio</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="sobre.php">Sobre</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
      </nav>

      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
              <br>
              <br>
              <h1 class="header center white-text text-lighten-2"><?php echo $chamada ?></h1>

              <div class="row center">
                <h5 class="header col s12 light white-text">Front End Developer // Web Developer // WordPress</h5>
              </div>
            </div>
        </div>
        <div class="parallax">
          <img src="<?php bloginfo('template_url');?>/imagens/header-parallax.jpg">
        </div>
      </div>
    </header>

    <main>
