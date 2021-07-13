<?php

require get_theme_file_path('/inc/search-route.php');
require get_theme_file_path('/inc/like-route.php');

function siema_custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {
      return get_the_author();
    }
  ));
}

add_action('rest_api_init', 'siema_custom_rest');

function siema_files() {
  // CSS
  wp_enqueue_style( 'university_main_styles', get_theme_file_uri('/style.css') );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
  wp_enqueue_style( 'font-awesome-icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  

  if (strstr($_SERVER['SERVER_NAME'], 'udemywordpress.local')) {
    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.a57a5ae094066fb1ced1.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.a57a5ae094066fb1ced1.css'));
  }

  wp_localize_script('main-university-js', 'siemaData', array(
    'root_url' => get_site_url('/'),
    'nonce' => wp_create_nonce('wp_rest'),
  ));
}

add_action('wp_enqueue_scripts', 'siema_files');

function siema_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professor-small', 400, 260, true);
  add_image_size('professor-portrait', 480, 650, true);
  add_image_size('page-banner', 1500, 350, true);
}

add_action( 'after_setup_theme', 'siema_features' );

function siema_adjust_queries( $q ) {
  if ( !is_admin() AND is_post_type_archive('events') && is_main_query()) {
    $q->set('posts_per_page', 10);
    $q->set('meta_key', 'event_date');
    $q->set('orderby', 'meta_value_num');
    $q->set('order', 'ASC');
    $q->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => date('Ymd'),
        'type' => 'numeric',
      )
    ));

  }

  if ( !is_admin() AND is_post_type_archive('program') && is_main_query()) {
    $q->set('posts_per_page', -1);
    $q->set('orderby', 'title');
    $q->set('order', 'ASC');

  }

}

add_action( 'pre_get_posts', 'siema_adjust_queries' );

function pageBanner( array $data = array() ) {
  $title = isset($data['title']) ? $data['title'] : get_the_title();
  $sub = isset($data['sub']) ? $data['sub'] : get_field('page_banner_subtitle');
  $bg = $data['bg'];
  if( !$bg ) {
    if ( get_field('page_banner_background') AND !is_archive() AND !is_home() ) {
      $bg = get_field('page_banner_background')['sizes']['page-banner'];
    } else {
      $bg = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $bg;?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $title ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $sub?></p>
      </div>
    </div>  
  </div>
  <?php
}

// Redirect subsriber accounts out of admin and onto hompage

add_action( 'admin_init', 'redirectSubsToFrontEnd' );

function redirectSubsToFrontEnd() {
  $ourCurrentUser = wp_get_current_user();
  
  if ( count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber' ) {
    wp_redirect( site_url('/') );
    exit;
  }
}

// Turn off the admin bar for subscribers

add_action( 'wp_loaded', 'noSubsAdminBar' );

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();
  
  if ( count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber' ) {
    show_admin_bar(false);
  }
}

// Customize login screen

add_filter( 'login_headerurl', 'ourHeaderUrl' );

function ourHeaderUrl() {
  return esc_url( site_url('/') );
}

add_action( 'login_enqueue_scripts', 'ourLoginCSS' );

function ourLoginCSS() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
  wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.a57a5ae094066fb1ced1.css'));
}

add_filter( 'login_headertitle', 'ourLoginTitle' );

function ourLoginTitle() {
  return get_bloginfo('name');
}

// Force note posts to be private

add_filter('wp_insert_post_data', 'makeNotePrivate');

function makeNotePrivate($data) {
  if ( $data['post_type'] === 'note' && $data['post_status'] !== 'trash' ) {
    if ( count_user_posts(get_current_user_id(), 'note') > 4 ) {
      die('You have reached your note limit.');
    }

    $data['post_content'] = sanitize_textarea_field($data['post_content']);
    $data['post_title'] = sanitize_text_field($data['post_title']);
  }

  if ( $data['post_type'] === 'note' && $data['post_status'] !== 'trash' ) {
    $data['post_status'] = 'private';
  }
  
  return $data;
}