<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5f0147457a82e',
    'title' => 'Block: NC FAQs',
    'fields' => array(
      array(
        'key' => 'field_5f014745ae299',
        'label' => 'Main',
        'name' => '',
        'type' => 'accordion',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'open' => 0,
        'multi_expand' => 0,
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5f014745aeb45',
        'label' => 'Select questions',
        'name' => 'select_links',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'nc_faqs',
        ),
        'taxonomy' => '',
        'filters' => array(
          0 => 'search',
          1 => 'taxonomy',
        ),
        'elements' => '',
        'min' => '',
        'max' => '',
        'return_format' => 'object',
      ),
      array(
        'key' => 'field_5f0151fb69ac4',
        'label' => 'Display full answer',
        'name' => 'display_content',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'full' => 'Display full content',
          'truncate' => 'Display truncated content',
        ),
        'default_value' => 'truncate',
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5f014745afed8',
        'label' => 'Truncate character limit',
        'name' => 'tuncate_char_limit',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5f0151fb69ac4',
              'operator' => '==',
              'value' => 'truncate',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 100,
        'placeholder' => 100,
        'prepend' => '',
        'append' => '',
        'min' => 50,
        'max' => 300,
        'step' => 50,
      ),
      array(
        'key' => 'field_5f01de8020610',
        'label' => 'Heading type',
        'name' => 'heading',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
        ),
        'default_value' => 'h3',
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5f01f006aeff3',
        'label' => 'Fill screen on mobile',
        'name' => 'mobile',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 600,
        'placeholder' => 600,
        'prepend' => '',
        'append' => 'px',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_5f014745b4ceb',
        'label' => 'Box Settings',
        'name' => '',
        'type' => 'accordion',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'open' => 0,
        'multi_expand' => 0,
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5f014745b50b4',
        'label' => 'Max Contain Width',
        'name' => 'max_contain_width',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 1400,
        'placeholder' => 1400,
        'prepend' => '',
        'append' => 'px',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_5f014745b54c2',
        'label' => 'Background Color',
        'name' => 'bg_color',
        'type' => 'color_picker',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '#ffffff',
      ),
      array(
        'key' => 'field_5f014745b587d',
        'label' => 'Text Color',
        'name' => 'text_color',
        'type' => 'color_picker',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '#000000',
      ),
      array(
        'key' => 'field_5f014745b5c70',
        'label' => 'Box Padding',
        'name' => 'padding',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '3rem 0',
        'placeholder' => '3rem 0',
        'prepend' => 'padding:',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5f014745b6415',
        'label' => 'Custom Code',
        'name' => 'custom_code',
        'type' => 'clone',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'clone' => array(
          0 => 'group_5e221e7d71f1d',
        ),
        'display' => 'seamless',
        'layout' => 'block',
        'prefix_label' => 0,
        'prefix_name' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/nc-faqs',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;