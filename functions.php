<?php
    add_theme_support( 'title-tag' );

    //タイトル出力
    function hamburger_title( $title ) {
      if ( is_front_page() && is_home() ) { //トップページなら
          $title = get_bloginfo( 'name', 'display' );
      } elseif ( is_singular() ) { //シングルページなら
          $title = single_post_title( '', false );
      }
      return $title;
  }
  add_filter( 'pre_get_document_title', 'hamburger_title' );

  function hamburger_script() {
    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"', array(), '4.7.0' );
      wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array() );
      wp_enqueue_style( 'M+PLUS+1', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap', array() );
      wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/scss/style.css', array(), '1.0.0' );
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );

      wp_enqueue_script('jquery' , '//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js', array(), '1.0.0' );
      wp_enqueue_script('hamburger' , get_template_directory_uri() . '/js/script.js' , array() );
      

  }
  add_action( 'wp_enqueue_scripts', 'hamburger_script' );

