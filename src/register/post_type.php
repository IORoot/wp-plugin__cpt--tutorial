<?php

namespace andyp\cpt\tutorial\register;

class post_type
{

	public $svgdata_icon = 'data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEzLDEzSDExVjdIMTNNMTMsMTdIMTFWMTVIMTNNMTIsMkExMCwxMCAwIDAsMCAyLDEyQTEwLDEwIDAgMCwwIDEyLDIyQTEwLDEwIDAgMCwwIDIyLDEyQTEwLDEwIDAgMCwwIDEyLDJaIi8+PC9zdmc+';

	public $singular = '';

	public $plural = '';

	public $taxonomies = [];



	/**
	 * Capitalized.
	 * 
	 * Something like 'Tutorial' or 'Article'
	 */
	public function set_singular($name)
	{
		$this->singular = ucfirst($name);
		$this->plural = $this->singular . 's' ;
	}


	/**
	 * Array of taxonomies to use. 
	 * Both tags and category should be used.
	 * e.g. 
	 * [ 'tutorial_tags', 'tutorial_category' ]
	 */
	public function set_taxonomies($taxonomies)
	{
		$this->taxonomies = $taxonomies;
	}

	public function set_svgdata_icon($svgdata_icon)
	{
		$this->svgdata_icon = $svgdata_icon;
	}

	/**
	 * Register on init
	 */
	public function register_on_init()
	{
		// needs to be AFTER taxonomy is declared in init
		add_action( 'init', array($this, 'register_cpt'), 8 );
	}



	/**
	 * Callback to run.
	 * (make sure its a public method)
	 */
	public function register_cpt()
	{

		if (empty($this->singular)) { return; }
		if (empty($this->plural))   { return; }
		if (empty($this->taxonomies)) { return; }

		$post_type = register_post_type( 
			$this->singular, 
			[
				'label'                 => $this->singular,
				'description'           => 'Custom Post Type',
				'labels'                => 	[
					'name'                  => $this->plural,
					'singular_name'         => $this->singular,
					'menu_name'             => $this->singular,
					'name_admin_bar'        => $this->plural,
					'archives'              => $this->singular . ' Archives',
					'attributes'            => $this->singular . ' Attributes',
					'parent_item_colon'     => $this->plural . ' :',
					'all_items'             => 'All '.$this->singular,
					'add_new_item'          => 'Add New '.$this->singular,
					'add_new'               => 'Add New',
					'new_item'              => 'New '.$this->singular,
					'edit_item'             => 'Edit '.$this->singular,
					'update_item'           => 'Update '.$this->singular,
					'view_item'             => 'View '.$this->singular,
					'view_items'            => 'View '.$this->plural,
					'search_items'          => 'Search '.$this->plural,
					'not_found'             => 'Not found',
					'not_found_in_trash'    => 'Not found in Trash',
					'featured_image'        => 'Featured Image',
					'set_featured_image'    => 'Set featured image',
					'remove_featured_image' => 'Remove featured image',
					'use_featured_image'    => 'Use as featured image',
					'insert_into_item'      => 'Insert into '.$this->singular,
					'uploaded_to_this_item' => 'Uploaded to this '.$this->singular,
					'items_list'            => $this->plural . ' list',
					'items_list_navigation' => $this->plural . ' list navigation',
					'filter_items_list'     => 'Filter '.$this->plural.' list',
				],
				'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', 'excerpt' ),
				'taxonomies'            => $this->taxonomies,
				'hierarchical'          => true,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'show_in_rest' 			=> true,
				'menu_position'         => 5,
				'menu_icon'             => $this->svgdata_icon,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'has_archive'           => false,
				'rewrite'               => true,
			] 
		);
	}


}
