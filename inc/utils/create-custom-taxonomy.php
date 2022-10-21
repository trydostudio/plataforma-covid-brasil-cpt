<?php
// Register Custom Post Type
function create_custom_taxonomy($name, $singular, $plural, $post_type)
{
  $labels1 = array(
    'name'                       => _x($name, 'Taxonomy General Name', 'text_domain'),
    'singular_name'              => _x($singular, 'Taxonomy Singular Name', 'text_domain'),
    'plural_name'                => _x($plural, 'Taxonomy Plural Name', 'text_domain'),
    'menu_name'                  => __($singular, 'text_domain'),
    'all_items'                  => __('Todos', 'text_domain'),
    'parent_item'                => __('Pai', 'text_domain'),
    'parent_item_colon'          => __('Pai:', 'text_domain'),
    'new_item_name'              => __('Novo Nome', 'text_domain'),
    'add_new_item'               => __('Adiconar', 'text_domain'),
    'edit_item'                  => __('Editar', 'text_domain'),
    'update_item'                => __('Atualizar', 'text_domain'),
    'separate_items_with_commas' => __('Separe com virgula', 'text_domain'),
    'search_items'               => __('Buscar', 'text_domain'),
    'add_or_remove_items'        => __('Adicionar ou Remover Items', 'text_domain'),
    'choose_from_most_used'      => __('Escolha entre os itens mais usados', 'text_domain'),
    'not_found'                  => __('Não encontrado', 'text_domain'),
  );
  $args1 = array(
    'show_in_rest'               => true,
    'labels'                     => $labels1,
    'default_term'               => array('name' => 'Geral', 'slug' => 'geral'),
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy($name, $post_type, $args1);
}
