<?php

function plataformRegisterSearch()
{
  register_rest_route('plataform/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'plataformSearchResults'
  ));
}

add_action('rest_api_init', 'plataformRegisterSearch');

function plataformSearchResults($data)
{
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page', 'sobre_post_type', 'rede_post_type', 'data_post_type', 'pesquisas_post_type', 'pesquisas_post_type', 'noticias_post_type'),
    's' => sanitize_text_field($data['term'])
  ));

  $results = array();

  while ($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (
      get_post_type() == 'post'
      or get_post_type() == 'page'
      or get_post_type() == 'sobre_post_type'
      or get_post_type() == 'rede_post_type'
      or get_post_type() == 'data_post_type'
      or get_post_type() == 'publicacao_post_type'
      or get_post_type() == 'pesquisas_post_type'
      or get_post_type() == 'noticias_post_type'
    ) {
      array_push($results, array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'excerpt' => get_the_excerpt(),
        'postType' => get_post_type(),
      ));
    }
  }


  return $results;
}
