<?php

include plugin_dir_path(__FILE__) . 'utils/create-custom-post.php';
include plugin_dir_path(__FILE__) . 'utils/create-custom-taxonomy.php';

function register_custom_post()
{
  // Sobre
  create_custom_taxonomy('sobre_post_type_categories', 'Categorias', 'Categorias', 'sobre_post_type');
  create_custom_post('sobre', 'Sobre', 'Sobre Textos', 'dashicons-awards', array('title', 'editor', 'thumbnail', 'excerpt'), array('sobre_post_type_categories'));

  // Rede
  create_custom_taxonomy('rede_post_type_categories', 'Categorias', 'Categorias', 'rede_post_type');
  create_custom_post('rede', 'Rede', 'Rede Textos', 'dashicons-admin-site-alt3', array('title', 'editor', 'thumbnail', 'excerpt'), array('rede_post_type_categories'));

  // Data
  create_custom_taxonomy('data_post_type_categories', 'Categorias', 'Categorias', 'data_post_type');
  create_custom_post('data', 'Data', 'Data Textos', 'dashicons-database-add', array('title', 'editor', 'thumbnail', 'excerpt'), array('data_post_type_categories'));

  // Publicações
  create_custom_taxonomy('publicacao_post_type_categories', 'Categorias', 'Categorias', 'publicacao_post_type');
  create_custom_post('publicacao', 'Publicação', 'Publicações Textos', 'dashicons-book', array('title', 'editor', 'thumbnail', 'excerpt'), array('publicacao_post_type_categories'));

  // Pesquisas
  create_custom_taxonomy('pesquisas_post_type_categories', 'Categorias', 'Categorias', 'pesquisas_post_type');
  create_custom_post('pesquisas', 'Pesquisas', 'Pesquisas Textos', 'dashicons-search', array('title', 'editor', 'thumbnail', 'excerpt'), array('pesquisas_post_type_categories'));

  // Notícias
  create_custom_taxonomy('noticias_post_type_categories', 'Categorias', 'Categorias', 'noticias_post_type');
  create_custom_post('noticias', 'Notícias', 'Notícias Textos', 'dashicons-format-aside', array('title', 'editor', 'thumbnail', 'excerpt'), array('noticias_post_type_categories'));

  // Depoimento
  create_custom_taxonomy('testemunho_post_type_categories', 'Categorias', 'Categorias', 'testemunho_post_type');
  create_custom_post('testemunho', 'Testemunho', 'Testemunho Textos', 'dashicons-testimonial', array('title', 'editor'), array());

  // Colaboradores
  create_custom_taxonomy('colabs_post_type_categories', 'Categorias', 'Categorias', 'colabs_post_type');
  create_custom_post('colabs', 'Colaboradores', 'Colaboradores Textos', 'dashicons-universal-access-alt', array('title', 'editor'), array());
}

add_action('init', 'register_custom_post');
