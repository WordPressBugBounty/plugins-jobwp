<?php

/**
 * Plugin Name:         JobWP
 * Plugin URI:		    https://wordpress.org/plugins/jobwp/
 * Description: 	    Display job listings in a career page and allow users to apply directly to your site.
 * Version:             2.4.8
 * Author:		        HM Plugin
 * Author URI:	        https://hmplugin.com
 * Tested up to:        6.9.4
 * Requires at least:   5.8
 * Requires PHP:        7.4
 * Text Domain:         jobwp
 * Domain Path:         /languages/
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( function_exists( 'job_fs' ) ) {
    job_fs()->set_basename( false, __FILE__ );
} else {
    if ( !class_exists( 'JobWp_Master' ) ) {
        define( 'JOBWP_PATH', plugin_dir_path( __FILE__ ) );
        define( 'JOBWP_ASSETS', plugins_url( '/assets/', __FILE__ ) );
        define( 'JOBWP_SLUG', plugin_basename( __FILE__ ) );
        define( 'JOBWP_PRFX', 'jobwp_' );
        define( 'JOBWP_CLS_PRFX', 'cls-jobwp-' );
        define( 'JOBWP_TXT_DOMAIN', 'jobwp' );
        define( 'JOBWP_VERSION', '2.4.8' );
        require_once JOBWP_PATH . '/lib/freemius-integrator.php';
        require_once JOBWP_PATH . 'inc/' . JOBWP_CLS_PRFX . 'master.php';
        $jobwp = new JobWp_Master();
        register_activation_hook( __FILE__, array($jobwp, JOBWP_PRFX . 'create_tables') );
        $jobwp->jobwp_run();
        // rewrite_rules upon plugin activation
        register_activation_hook( __FILE__, 'jobwp_myplugin_activate' );
        function jobwp_myplugin_activate() {
            if ( !get_option( 'jobwp_flush_rewrite_rules_flag' ) ) {
                add_option( 'jobwp_flush_rewrite_rules_flag', true );
            }
        }

        add_action( 'init', 'jobwp_flush_rewrite_rules_maybe', 10 );
        function jobwp_flush_rewrite_rules_maybe() {
            if ( get_option( 'jobwp_flush_rewrite_rules_flag' ) ) {
                flush_rewrite_rules();
                delete_option( 'jobwp_flush_rewrite_rules_flag' );
            }
        }

        // Add a books gallery slug option in permalink setting
        add_action( 'admin_init', function () {
            add_settings_field(
                'jobwp_cpt_slug',
                __( 'JobWP Slug', 'jobwp' ),
                'jobwp_cpt_slug_output',
                'permalink',
                'optional'
            );
        } );
        // Setting output
        function jobwp_cpt_slug_output() {
            ?>
            <input name="jobwp_cpt_slug" type="text" class="regular-text code" value="<?php 
            esc_attr_e( get_option( 'jobwp_cpt_slug' ) );
            ?>" placeholder="<?php 
            echo 'jobs';
            ?>" />
            <?php 
        }

        // Save setting
        add_action( 'admin_init', function () {
            if ( isset( $_POST['permalink_structure'] ) ) {
                update_option( 'jobwp_cpt_slug', trim( sanitize_text_field( $_POST['jobwp_cpt_slug'] ) ) );
            }
        } );
        /*
         * Loading text domain at end so that no init error
         */
        function jobwp_load_plugin_textdomain_test() {
            load_plugin_textdomain( 'jobwp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
        }

        add_action( 'plugins_loaded', 'jobwp_load_plugin_textdomain_test' );
    }
}