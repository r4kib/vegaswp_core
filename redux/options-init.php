<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "vegaswp";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'dev_mode' => 'false',
        'opt_name' => 'vegaswp_options',
        'use_cdn' => TRUE,
        'display_name' => 'VegasWP Core Options',
        'display_version' => '1.0.0',
        'page_title' => 'VegasWP Core Options',
        'menu_icon' => 'dashicons-awards',
        'page_slug'=> 'vegaswp_options',
        'update_notice' => false,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'VegasWP',
        'allow_sub_menu' => false,
        'templates_path' => dirname(__FILE__).'/../templates/panel',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => false,
        'show_options_object' => false,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/vegaswp',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/vegaswp',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/vegaswp',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/vegaswp',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Settings', 'vegaswp-core' ),
        'id'     => 'settings',
        'desc'   => __( 'Basic field with no subsections.', 'vegaswp-core' ),
        'icon'   => '',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'vegaswp-core' ),
                'desc'     => __( 'Example description.', 'vegaswp-core' ),
                'subtitle' => __( 'Example subtitle.', 'vegaswp-core' ),
            )
        )
    ) );
Redux::setSection( $opt_name, array(
    'title'  => __( 'Support', 'vegaswp-core' ),
    'id'     => 'support-subsection',
    'desc'   => __( "<iframe src='http://vegaswp.com/support/' width='100%' height='800px' ></iframe>", 'vegaswp-core' ),
    'icon'   => '',

) );

Redux::setSection( $opt_name, array(
    'title'  => __( 'Documentation', 'vegaswp-core' ),
    'id'     => 'documentation',
    'desc'   => __( "<iframe src='http://vegaswp.com/docs/plugin-1/' width='100%' height='800px' ></iframe>", 'vegaswp-core' ),
    'icon'   => '',

) );

Redux::setSection( $opt_name, array(
    'title'  => __( 'Our Plugins', 'vegaswp-core' ),
    'id'     => 'our-plugins',
    'desc'   => __( "HTML code goes here will come from plugin licensing and distribution API ", 'vegaswp-core' ),
    'icon'   => '',

) );

//    Redux::setSection( $opt_name, array(
//        'title' => __( 'Basic Fields', 'vegaswp-core' ),
//        'id'    => 'basic',
//        'desc'  => __( 'Basic fields as subsections.', 'vegaswp-core' ),
//        'icon'  => 'el el-home'
//    ) );

//    Redux::setSection( $opt_name, array(
//        'title'      => __( 'Text', 'vegaswp-core' ),
//        'desc'       => __( 'For full documentation on this field, visit: ', 'vegaswp-core' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
//        'id'         => 'opt-text-subsection',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'text-example',
//                'type'     => 'text',
//                'title'    => __( 'Text Field', 'vegaswp-core' ),
//                'subtitle' => __( 'Subtitle', 'vegaswp-core' ),
//                'desc'     => __( 'Field Description', 'vegaswp-core' ),
//                'default'  => 'Default Text',
//            ),
//        )
//    ) );
//
//    Redux::setSection( $opt_name, array(
//        'title'      => __( 'Text Area', 'vegaswp-core' ),
//        'desc'       => __( 'For full documentation on this field, visit: ', 'vegaswp-core' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
//        'id'         => 'opt-textarea-subsection',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'textarea-example',
//                'type'     => 'textarea',
//                'title'    => __( 'Text Area Field', 'vegaswp-core' ),
//                'subtitle' => __( 'Subtitle', 'vegaswp-core' ),
//                'desc'     => __( 'Field Description', 'vegaswp-core' ),
//                'default'  => 'Default Text',
//            ),
//        )
//    ) );

    /*
     * <--- END SECTIONS
     */
