<?php

require_once get_template_directory().'/includes/tgmpa/class-tgm-plugin-activation.php';

function mbn_register_required_plugins(){
	$plugins = array(

		array(
			'name'               => 'ACF Pro',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_template_directory().'/includes/tgmpa/plugins/advanced-custom-fields-pro.zip',
			'required'           => false,
			'version'            => '6.0.3',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'               => 'Gravity Forms',
			'slug'               => 'gravity-forms',
			'source'             => get_template_directory().'/includes/tgmpa/plugins/gravityforms_2.6.7.zip',
			'required'           => false,
			'version'            => '2.6.7',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'               => 'WP Rocket',
			'slug'               => 'wp-rocket',
			'source'             => get_template_directory().'/includes/tgmpa/plugins/wp-rocket_3.2.3.1.zip',
			'required'           => false,
			'version'            => '3.2.3.1',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'               => 'Duplicator Pro',
			'slug'               => 'duplicator-pro',
			'source'             => get_template_directory().'/includes/tgmpa/plugins/duplicator-pro-4-5-7.zip',
			'required'           => false,
			'version'            => '4-5-7',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		
		array(
			'name'               => 'SEO Rank Math Pro',
			'slug'               => 'seo-by-rank-math-pro',
			'source'             => get_template_directory().'/includes/tgmpa/plugins/seo-by-rank-math-pro.zip',
			'required'           => false,
			'version'            => '3.0.24',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),




		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
		// 	'name'         => 'TGM New Media Plugin', // The plugin name.
		// 	'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
		// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
		// 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),

		// // This is an example of how to include a plugin from a GitHub repository in your theme.
		// // This presumes that the plugin code is based in the root of the GitHub repository
		// // and not in a subdirectory ('/src') of the repository.
		// array(
		// 	'name'      => 'Adminbar Link Comments to Pending',
		// 	'slug'      => 'adminbar-link-comments-to-pending',
		// 	'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),

		// // This is an example of how to include a plugin from the WordPress Plugin Repository.
		// array(
		// 	'name'      => 'BuddyPress',
		// 	'slug'      => 'buddypress',
		// 	'required'  => false,
		// ),

		// // This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// // have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// // 'wordpress-seo-premium'.
		// // By setting 'is_callable' to either a function from that plugin or a class method
		// // `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// // recognize the plugin as being installed.
		// array(
		// 	'name'        => 'WordPress SEO by Yoast',
		// 	'slug'        => 'wordpress-seo',
		// 	'is_callable' => 'wpseo_init',
		// ),

	);
	

	$config = array(
		'id'           => 'mbn',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'mbn' ),
			'menu_title'                      => __( 'Install Plugins', 'mbn' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'mbn' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'mbn' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'mbn' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'mbn'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'mbn'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'mbn'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'mbn'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'mbn'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'mbn'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'mbn'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'mbn'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'mbn'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'mbn' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'mbn' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'mbn' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'mbn' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'mbn' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'mbn' ),
			'dismiss'                         => __( 'Dismiss this notice', 'mbn' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'mbn' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'mbn' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

add_action('tgmpa_register', 'mbn_register_required_plugins');