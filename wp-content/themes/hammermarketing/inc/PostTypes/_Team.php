<?php

class Team{

    public $p = "_ham_";
    // post type
    public $post_type = "Team";
    public $pretty_name = "Team";
    public $pretty_name_plural = "Teams";

    function __construct() {
        add_action( 'init', array($this,'register_post_type') );
        add_action( 'cmb2_init', array($this, 'register_fields') );
    }

    // REGISTER
    
    function register_post_type(){
        register_post_type( $this->post_type,
            array(
                'labels'            => array(
                    'menu_name'     => $this->pretty_name_plural,
                    'name'          => $this->pretty_name,
                    'add_new_item'  => 'Add New '.$this->pretty_name,
                    'singular_name' => $this->pretty_name,
                    'search_items'  => 'Search '.$this->pretty_name_plural,
                    'edit_item'     => 'Edit '.$this->pretty_name
                ),
                'description'   => $this->pretty_name.' Content',
                'hierarchical'  => true,
                'public'        => true,
                'exclude_from_search' => false,
                'has_archive'   => true,
                // SHOWS IN GUTENBERG
                'show_in_rest'  => true,
                'menu_icon'     => 'dashicons-carrot',
                'supports'      => array('title', 'editor', 'thumbnail', 'revisions'),
            )
        );
    }

    // META BOXES
    
    function register_fields(){
        // MORE FIELD TYPES HERE - https://cmb2.io/docs/field-types
        $meta = new_cmb2_box(array(
            'id'            => $this->p.$this->post_type.'_custom_content',
            'title'         => $this->pretty_name.' Details',
            'object_types'  => array( $this->post_type ),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'closed'       => false
        ));

        // TEXT FIELD
        $meta->add_field(array(
            'name'          => 'Example',
            'id'            => $this->p.$this->post_type.'_example',
            'type'          => 'text'
        ));

        //SELECT
        $meta->add_field( array(
            'name'             => 'Test Select',
            'desc'             => 'field description (optional)',
            'id'               => $this->p.$this->post_type.'_select',
            'type'             => 'select',
            'show_option_none' => true,
            'options'          => array(
                'standard' => 'Option One',
                'custom'   => 'Option Two',
                'none'     => 'Option Three',
            ),
        ));
        
        //WISIWYG
        $meta->add_field( array(
            'name'    => 'Test wysiwyg',
            'desc'    => 'field description (optional)',
            'id'      => $this->p.$this->post_type.'_wysiwyg',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true,
                'media_buttons' => true,
                'textarea_rows' => 4,
                'teeny' => false
            ),
        ));
    }
}