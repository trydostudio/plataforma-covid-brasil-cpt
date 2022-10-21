<?php
// Register Custom Post Type
function create_custom_post($name, $singular, $plural, $icon, $suports, $taxonomies)
{

  $labels1 = array(
    'name'                => _x($name, 'Post Type General Name', 'text_domain'),
    'singular_name'       => _x($singular, 'Post Type Singular Name', 'text_domain'),
    'plural_name'         => _x($plural, 'Post Type Plural Name', 'text_domain'),
    'menu_name'           => __($singular, 'text_domain'),
    'all_items'           => __('Todos os Textos', 'text_domain'),
    'view_item'           => __('Ver Texto', 'text_domain'),
    'add_new_item'        => __('Adicionar', 'text_domain'),
    'add_new'             => __('Adicionar', 'text_domain'),
    'edit_item'           => __('Editar', 'text_domain'),
    'update_item'         => __('Atualizar', 'text_domain'),
    'search_items'        => __('Buscar', 'text_domain'),
    'not_found'           => __('Não encontrado', 'text_domain'),
    'not_found_in_trash'  => __('Não encontrado na lixeira', 'text_domain'),
  );
  $args1 = array(
    'public'              => true,
    'show_in_rest'        => true,
    'rewrite' => array('slug' => ($name . '-posts')),
    'label'               => __($name . '_post_type', 'text_domain'),
    'description'         => __($name . 'Description', 'text_domain'),
    'labels'              => $labels1,
    'supports'            => $suports,
    'taxonomies'          => $taxonomies,
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_icon'           => $icon,
    'menu_position'       => 4,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
  );
  register_post_type($name . '_post_type', $args1);
}
