<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="js-body" <?php body_class(); ?>> <!-- jsで固定するためのクラス -->
  <div class="js-fade-layer"></div> <!-- menu開いた時に左側背景黒くするクラス -->
  <div class="l-container"> <!-- 全体を囲う -->
    <article class="l-container__main ">  <!-- サイドバー以外を囲う -->
      <!-- header -->
      <header class="l-header">
        <h1 class="l-header__title">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>

        <?php get_search_form(); ?>

        <!-- spとtabの時のMenu -->
        <button href="#" class="c-button__menu">Menu</button>
      </header>
      