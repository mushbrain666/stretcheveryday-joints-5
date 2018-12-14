<?php

function pose_func() {

	register_post_type( 'pose',

		array('labels' => array(
			'name' => __('Poses', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Pose', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Poses', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Pose', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Pose', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit Pose', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Pose', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Pose', 'jointswp'), /* New Display Title */
			'view_item' => __('View Poses', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Poses', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Individual yoga poses', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'poses', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'poses', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title',
													 'editor',
													 //'author',
													 'thumbnail',
													 //'excerpt',
													 //'trackbacks',
													 //'custom-fields',
													 //'comments',
													 'revisions',
													 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'pose');
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'pose');

	register_taxonomy_for_object_type('level', 'pose');
	register_taxonomy_for_object_type('position', 'pose');
	register_taxonomy_for_object_type('focus', 'pose');

}

// adding the function to the Wordpress init
add_action( 'init', 'pose_func');


function sequence_func() {

	register_post_type( 'sequence',

		array('labels' => array(
			'name' => __('Sequences', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Sequence', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Sequences', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Sequence', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Sequence', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit Sequence', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Sequence', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Sequence', 'jointswp'), /* New Display Title */
			'view_item' => __('View Sequences', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Sequences', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Yoga sequences', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'yoga-sequences', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'yoga-sequences', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title',
													 'editor',
													 //'author',
													 'thumbnail',
													 //'excerpt',
													 //'trackbacks',
													 //'custom-fields',
													 //'comments',
													 'revisions',
													 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'sequence');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'sequence');

	register_taxonomy_for_object_type('level', 'sequence');

}

// adding the function to the Wordpress init
add_action( 'init', 'sequence_func');



function classes_func() {

	register_post_type( 'class',

		array('labels' => array(
			'name' => __('Classes', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Class', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Classes', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Class', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Class', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit Class', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Class', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Class', 'jointswp'), /* New Display Title */
			'view_item' => __('View Classes', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Classes', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Online Yoga classes', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'yoga-classes', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'yoga-classes', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title',
													 'editor',
													 //'author',
													 'thumbnail',
													 //'excerpt',
													 //'trackbacks',
													 //'custom-fields',
													 //'comments',
													 'revisions',
													 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'class');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'class');

	register_taxonomy_for_object_type('level', 'class');

}

// adding the function to the Wordpress init
add_action( 'init', 'classes_func');




function article_func() {

	register_post_type( 'article',

		array('labels' => array(
			'name' => __('Articles', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Article', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Articles', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Article', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Article', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit Article', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Article', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Article', 'jointswp'), /* New Display Title */
			'view_item' => __('View Articles', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Articles', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Yoga Articles', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'yoga-articles', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'yoga-articles', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title',
													 'editor',
													 //'author',
													 'thumbnail',
													 //'excerpt',
													 //'trackbacks',
													 //'custom-fields',
													 //'comments',
													 'revisions',
													 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'article');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'article');

}

// adding the function to the Wordpress init
add_action( 'init', 'article_func');




function event_init() {

	register_post_type( 'event',

		array('labels' => array(
			'name' => __('Events', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Events', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Event', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit Event', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Event', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointswp'), /* New Display Title */
			'view_item' => __('View Events', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Events', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Yoga Events', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'events', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title',
													 'editor',
													 //'author',
													 'thumbnail',
													 'excerpt',
													 //'trackbacks',
													 //'custom-fields',
													 //'comments',
													 'revisions',
													 'sticky')
	 	) /* end of options */
	); /* end of register post type */
}

// adding the function to the Wordpress init
add_action( 'init', 'event_init');




register_taxonomy( 'level',
    	array('pose'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Levels', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Level', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Levels', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Levels', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Level', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Level:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Level', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Level', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Level', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Level Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'level' ),
    	)
);


	register_taxonomy( 'position',
	    	array('pose'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	    	array('hierarchical' => true,     /* if this is true, it acts like categories */
	    		'labels' => array(
	    			'name' => __( 'Positions', 'jointswp' ), /* name of the custom taxonomy */
	    			'singular_name' => __( 'Position', 'jointswp' ), /* single taxonomy name */
	    			'search_items' =>  __( 'Search Positions', 'jointswp' ), /* search title for taxomony */
	    			'all_items' => __( 'All Positions', 'jointswp' ), /* all title for taxonomies */
	    			'parent_item' => __( 'Parent Position', 'jointswp' ), /* parent title for taxonomy */
	    			'parent_item_colon' => __( 'Parent Position:', 'jointswp' ), /* parent taxonomy title */
	    			'edit_item' => __( 'Edit Position', 'jointswp' ), /* edit custom taxonomy title */
	    			'update_item' => __( 'Update Position', 'jointswp' ), /* update title for taxonomy */
	    			'add_new_item' => __( 'Add New Position', 'jointswp' ), /* add new title for taxonomy */
	    			'new_item_name' => __( 'New Position Name', 'jointswp' ) /* name title for taxonomy */
	    		),
	    		'show_admin_column' => true,
	    		'show_ui' => true,
	    		'query_var' => true,
	    		'rewrite' => array( 'slug' => 'position' ),
	    	)
	);

	register_taxonomy( 'focus',
	    	array('pose'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	    	array('hierarchical' => true,     /* if this is true, it acts like categories */
	    		'labels' => array(
	    			'name' => __( 'Focus', 'jointswp' ), /* name of the custom taxonomy */
	    			'singular_name' => __( 'Focus', 'jointswp' ), /* single taxonomy name */
	    			'search_items' =>  __( 'Search Focus', 'jointswp' ), /* search title for taxomony */
	    			'all_items' => __( 'All Focuses', 'jointswp' ), /* all title for taxonomies */
	    			'parent_item' => __( 'Parent Focus', 'jointswp' ), /* parent title for taxonomy */
	    			'parent_item_colon' => __( 'Parent Focus:', 'jointswp' ), /* parent taxonomy title */
	    			'edit_item' => __( 'Edit Focus', 'jointswp' ), /* edit custom taxonomy title */
	    			'update_item' => __( 'Update Focus', 'jointswp' ), /* update title for taxonomy */
	    			'add_new_item' => __( 'Add New Focus', 'jointswp' ), /* add new title for taxonomy */
	    			'new_item_name' => __( 'New Focus Name', 'jointswp' ) /* name title for taxonomy */
	    		),
	    		'show_admin_column' => true,
	    		'show_ui' => true,
	    		'query_var' => true,
	    		'rewrite' => array( 'slug' => 'focus' ),
	    	)
	);
