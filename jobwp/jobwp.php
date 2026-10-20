<?php

/**
 * Plugin Name:         JobWP
 * Plugin URI:		    https://wordpress.org/plugins/jobwp/
 * Description: 	    Display job listings in a career page and allow users to apply directly to your site.
 * Version:             2.5.1
 * Author:		        HM Plugin
 * Author URI:	        https://hmplugin.com
 * Requires at least:   5.8
 * Requires PHP:        7.4
 * Text Domain:         jobwp
 * Domain Path:         /languages/
 * License:             GPLv2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
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
        define( 'JOBWP_VERSION', '2.5.1' );
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

        // Loading extra fields in job location taxonomy
        // Specially for Google structure data
        include 'location-extra-field.php';
        //===============================================
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
            wp_nonce_field( 'jobwp_cpt_slug_permalink_action', 'jobwp_cpt_slug_permalink_nonce' );
            ?>
            <input type="text" name="jobwp_cpt_slug" value="<?php 
            esc_attr_e( get_option( 'jobwp_cpt_slug' ) );
            ?>" placeholder="<?php 
            echo 'jobs';
            ?>" class="regular-text code" />
            <?php 
        }

        // Save setting
        add_action( 'admin_init', function () {
            if ( isset( $_POST['permalink_structure'] ) && current_user_can( 'manage_options' ) ) {
                if ( isset( $_POST['_wp_http_referer'] ) && strpos( $_POST['_wp_http_referer'], 'options-permalink.php' ) !== false ) {
                    // Checking the nonce exists and is valid
                    if ( !isset( $_POST['jobwp_cpt_slug_permalink_nonce'] ) || !wp_verify_nonce( $_POST['jobwp_cpt_slug_permalink_nonce'], 'jobwp_cpt_slug_permalink_action' ) ) {
                        wp_die( 'Security check failed' );
                    } else {
                        update_option( 'jobwp_cpt_slug', trim( sanitize_text_field( $_POST['jobwp_cpt_slug'] ) ) );
                    }
                }
            }
        } );
        /**
         * Loading single template from plugin
         */
        function jobwp_single_template(  $template  ) {
            global $post;
            if ( $post && 'jobs' === $post->post_type ) {
                return JOBWP_PATH . 'front/view/single.php';
            }
            return $template;
        }

        add_filter( 'single_template', 'jobwp_single_template', 10 );
        /*
         * Loading single template from theme
         */
        function jobwp_single_template_only_content(  $content  ) {
            if ( is_singular( 'jobs' ) && in_the_loop() && is_main_query() ) {
                ob_start();
                include JOBWP_PATH . 'front/view/job-details-content.php';
                return ob_get_clean();
            }
            return $content;
        }

    }
}