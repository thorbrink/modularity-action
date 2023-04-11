<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_609b788ad04bb',
    'title' => __('Curator Social Media', 'modularity'),
    'fields' => array(
        0 => array(
            'key' => 'field_609b7d2ba3004',
            'label' => __('Number of posts', 'modularity'),
            'name' => 'number_of_posts',
            'aria-label' => '',
            'type' => 'number',
            'instructions' => __('Set the number items to show.', 'modularity'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 12,
            'min' => 4,
            'max' => 24,
            'placeholder' => '',
            'step' => '',
            'prepend' => '',
            'append' => '',
        ),
        1 => array(
            'key' => 'field_63edf811d3a68',
            'label' => __('Layout', 'modularity'),
            'name' => 'layout',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'card' => __('Card', 'modularity'),
                'block' => __('Block', 'modularity'),
            ),
            'default_value' => 'card',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        2 => array(
            'key' => 'field_63ee10add6ed6',
            'label' => __('Columns', 'modularity'),
            'name' => 'columns',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                3 => __('3', 'modularity'),
                4 => __('4', 'modularity'),
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        3 => array(
            'key' => 'field_63ff2bc5ce2c6',
            'label' => __('Grid gutter', 'modularity'),
            'name' => 'gutter',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_63edf811d3a68',
                        'operator' => '==',
                        'value' => 'block',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'message' => __('No space between the posts in the grid', 'modularity'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        4 => array(
            'key' => 'field_63ee0a94197d1',
            'label' => __('Ratio', 'modularity'),
            'name' => 'ratio',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_63edf811d3a68',
                        'operator' => '==',
                        'value' => 'block',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                '1:1' => __('1:1', 'modularity'),
                '4:3' => __('4:3', 'modularity'),
                '12:6' => __('12:6', 'modularity'),
            ),
            'default_value' => '1:1',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        5 => array(
            'key' => 'field_609b7894869ce',
            'label' => __('Embed Code', 'modularity'),
            'name' => 'embed_code',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => __('Add your curator embed code here. Thios should be the full javascript. Appeance settings in the javascript configurator will not apply.', 'modularity'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
            'acfe_textarea_code' => 0,
        ),
        6 => array(
            'key' => 'field_609baae15568c',
            'label' => __('Usage of the curator social media integration', 'modularity'),
            'name' => '',
            'aria-label' => '',
            'type' => 'message',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('This is an integration module for curator.io. The module requires an account at the service. 

To integrate a feed, head over to <a href="https://curator.io" target="_blank">curator.io</a> (will open in a new window) and follow the steps below. We assume that you already have an account, with a connected feed. 

1. Login to your account. 
2. Click on "style" in the sidebar navigation. 
3. Click on "publish feed" (style won\'t matter). 
4. Paste the embed code in the field above. 
5. Save. Your feed should no be displayed.', 'modularity'),
            'new_lines' => 'wpautop',
            'esc_html' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-curator',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/curator',
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
    'show_in_rest' => 0,
    'acfe_display_title' => '',
    'acfe_autosync' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
));
}