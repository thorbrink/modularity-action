<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_571dfd3c07a77',
    'title' => __('Data display', 'modularity'),
    'fields' => array(
        0 => array(
            'key' => 'field_571dfd4c0d9d9',
            'label' => __('Display as', 'modularity'),
            'name' => 'posts_display_as',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'list' => __('List', 'modularity'),
                'expandable-list' => __('Expandable List', 'modularity'),
                'items' => __('Post items', 'modularity'),
                'news' => __('News items', 'modularity'),
                'index' => __('Index', 'modularity'),
                'grid' => __('Blocks', 'modularity'),
                'features-grid' => __('Features grid', 'modularity'),
                'slider' => __('Slider', 'modularity'),
            ),
            'default_value' => __('list', 'modularity'),
            'return_format' => 'value',
            'allow_null' => 0,
            'other_choice' => 0,
            'layout' => 'horizontal',
            'save_other_choice' => 0,
        ),
        1 => array(
            'key' => 'field_628e0ffba7da4',
            'label' => __('Highlight first post', 'modularity'),
            'name' => 'posts_highlight_first',
            'type' => 'true_false',
            'instructions' => __('Makes the first post bigger', 'modularity'),
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'items',
                    ),
                ),
                1 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'index',
                    ),
                ),
                2 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
                3 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'news',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        2 => array(
            'key' => 'field_629f1b34ef9fc',
            'label' => __('Display highlighted post as', 'modularity'),
            'name' => 'posts_display_highlighted_as',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_628e0ffba7da4',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'block' => __('Block', 'modularity'),
                'card' => __('Card', 'modularity'),
            ),
            'default_value' => __('block', 'modularity'),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        3 => array(
            'key' => 'field_571dfdf50d9da',
            'label' => __('Columns', 'modularity'),
            'name' => 'posts_columns',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'items',
                    ),
                ),
                1 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'index',
                    ),
                ),
                2 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
                3 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'news',
                    ),
                ),
                4 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'features-grid',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'grid-md-12' => __('1', 'modularity'),
                'grid-md-6' => __('2', 'modularity'),
                'grid-md-4' => __('3', 'modularity'),
                'grid-md-3' => __('4', 'modularity'),
            ),
            'default_value' => __('grid-md-12', 'modularity'),
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        4 => array(
            'key' => 'field_634920ba917f9',
            'label' => __('Columns', 'modularity'),
            'name' => 'slides_per_page',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'slider',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 4,
            'min' => 2,
            'max' => 6,
            'placeholder' => '',
            'step' => '',
            'prepend' => '',
            'append' => '',
        ),
        5 => array(
            'key' => 'field_571e046536f0e',
            'label' => __('Altering grid size', 'modularity'),
            'name' => 'posts_alter_columns',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 0,
            'message' => __('Yes, alter grid size automatically', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        6 => array(
            'key' => 'field_571e01e7f246c',
            'label' => __('Fields', 'modularity'),
            'name' => 'posts_fields',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '!=',
                        'value' => 'expandable-list',
                    ),
                    1 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '!=',
                        'value' => 'slider',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'date' => __('Show date', 'modularity'),
                'excerpt' => __('Show excerpt', 'modularity'),
                'title' => __('Show title', 'modularity'),
                'image' => __('Show featured image', 'modularity'),
            ),
            'default_value' => array(
                0 => __('date', 'modularity'),
                1 => __('excerpt', 'modularity'),
                2 => __('title', 'modularity'),
                3 => __('image', 'modularity'),
            ),
            'return_format' => 'value',
            'allow_custom' => 0,
            'layout' => 'horizontal',
            'toggle' => 0,
            'save_custom' => 0,
        ),
        7 => array(
            'key' => 'field_62387e4b55b75',
            'label' => __('Date source', 'modularity'),
            'name' => 'posts_date_source',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571e01e7f246c',
                        'operator' => '==',
                        'value' => 'date',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'post_date' => __('Date published', 'modularity'),
                'post_modified' => __('Date modified', 'modularity'),
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        8 => array(
            'key' => 'field_634935203c9da',
            'label' => __('Show stepper', 'modularity'),
            'name' => 'show_stepper',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'slider',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Show slide navigation stepper', 'modularity'),
            'default_value' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'ui' => 0,
        ),
        9 => array(
            'key' => 'field_6349457f24d6e',
            'label' => __('Autoslide', 'modularity'),
            'name' => 'auto_slide',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'slider',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Autoslide', 'modularity'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        10 => array(
            'key' => 'field_634932220afc6',
            'label' => __('Wrap around', 'modularity'),
            'name' => 'additional_options',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'slider',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'wrapAround' => __('Go to first slide when last item is reached', 'modularity'),
            ),
            'default_value' => array(
                0 => __('wrapAround', 'modularity'),
            ),
            'return_format' => 'value',
            'allow_custom' => 0,
            'layout' => 'horizontal',
            'toggle' => 0,
            'save_custom' => 0,
        ),
        11 => array(
            'key' => 'field_591176fff96d6',
            'label' => __('Hide the title column', 'modularity'),
            'name' => 'posts_hide_title_column',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 0,
            'message' => __('Yes, hide the title column', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        12 => array(
            'key' => 'field_57e3bcae3826e',
            'label' => __('Title column label', 'modularity'),
            'name' => 'title_column_label',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                    1 => array(
                        'field' => 'field_591176fff96d6',
                        'operator' => '!=',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        13 => array(
            'key' => 'field_571f5776592e6',
            'label' => __('List column labels', 'modularity'),
            'name' => 'posts_list_column_titles',
            'type' => 'repeater',
            'instructions' => __('A title field will always be added as the first column. You will need to go to each post in this list to give the values for each column.', 'modularity'),
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Lägg till rad', 'modularity'),
            'collapsed' => '',
            'rows_per_page' => 20,
            'acfe_repeater_stylised_button' => 0,
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_571f5790592e7',
                    'label' => __('Column header', 'modularity'),
                    'name' => 'column_header',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                    'parent_repeater' => 'field_571f5776592e6',
                ),
            ),
        ),
        14 => array(
            'key' => 'field_59197c6dafb31',
            'label' => __('Allow freetext filtering', 'modularity'),
            'name' => 'allow_freetext_filtering',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'expandable-list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 1,
            'message' => __('Allow freetext filtering', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        15 => array(
            'key' => 'field_5be480e163246',
            'label' => __('Highlight post', 'modularity'),
            'name' => 'posts_highlight',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'horizontal',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => __('Enabled', 'modularity'),
            'ui_off_text' => __('Disabled', 'modularity'),
        ),
        16 => array(
            'key' => 'field_5bdb0d4217e91',
            'label' => __('Date format', 'modularity'),
            'name' => 'posts_date_format',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'horizontal',
                    ),
                    1 => array(
                        'field' => 'field_571e01e7f246c',
                        'operator' => '==',
                        'value' => 'date',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'default' => __('Default timestamp', 'modularity'),
                'readable' => __('Readable timestamp', 'modularity'),
            ),
            'default_value' => __('default', 'modularity'),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
        17 => array(
            'key' => 'field_5bd8575106176',
            'label' => __('Placeholder image', 'modularity'),
            'name' => 'posts_placeholder',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'horizontal',
                    ),
                    1 => array(
                        'field' => 'field_571e01e7f246c',
                        'operator' => '==',
                        'value' => 'image',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'uploader' => '',
            'acfe_thumbnail' => 0,
        ),
        18 => array(
            'key' => 'field_628e0f242aa5f',
            'label' => __('Ratio', 'modularity'),
            'name' => 'ratio',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'grid',
                    ),
                ),
                1 => array(
                    0 => array(
                        'field' => 'field_571dfd4c0d9d9',
                        'operator' => '==',
                        'value' => 'features-grid',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                '1:1' => __('1:1', 'modularity'),
                '4:3' => __('4:3', 'modularity'),
                '12:16' => __('12:16', 'modularity'),
            ),
            'default_value' => __('4:3', 'modularity'),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
            'allow_custom' => 0,
            'search_placeholder' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-posts',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/posts',
            ),
        ),
    ),
    'menu_order' => -10,
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