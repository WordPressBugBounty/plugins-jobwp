<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
$jobwp_upgrade_msg = '';
$jobwpGeneralSettings = $this->jobwp_get_general_settings();
//print_r( $jobwpGeneralSettings );
foreach ( $jobwpGeneralSettings as $option_name => $option_value ) {
    if ( isset( $jobwpGeneralSettings[$option_name] ) ) {
        ${"" . $option_name} = $option_value;
    }
}
?>
<div id="wph-wrap-all" class="wrap jobwp-single-settings-page">

    <div class="settings-banner">
        <h2><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;<?php 
_e( 'General Settings', 'jobwp' );
?></h2>
    </div>

    <?php 
if ( $jobwpGeneralMessage ) {
    $this->jobwp_display_notification( 'success', 'Your information updated successfully.' );
    echo '<br>';
}
?>

    <div class="jobwp-wrap">

        <div class="jobwp_personal_wrap jobwp_personal_help" style="width: 76%; float: left;">
            
            <div class="tab-content">
                <form name="jobwp_general_settings_form" role="form" class="form-horizontal" method="post" action="" id="jobwp-general-settings-form">
                <?php 
wp_nonce_field( 'jobwp_general_action_filed', 'jobwp_general_nonce_field' );
?>
                    <table class="hm-settings-table jobwp-single-settings-table" cellpadding="0" cellspacing="0">
                        <!-- Notifications -->
                        <tr class="jobwp-settings-section">
                            <td colspan="2" class="jobwp-settings-block-title"><i class="fa-regular fa-bell"></i>&nbsp;<?php 
_e( 'Notifications', 'jobwp' );
?></td>
                        </tr>
                        <tr class="jobwp_admin_noti_email">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Admin notification email', 'jobwp' );
?></label>
                            </th>
                            <td>
                                <input type="text" name="jobwp_admin_noti_email" id="jobwp_admin_noti_email" class="regular-text" value="<?php 
esc_attr_e( $jobwp_admin_noti_email );
?>" />
                                <span><?php 
_e( 'An email is sent here when a candidate submits an application.', 'jobwp' );
?></span>
                            </td>
                        </tr>
                        <?php 
$jobwp_upgrade_arr = [
    'label'   => 'Notification email to user role',
    'icon'    => 'fa-regular fa-envelope',
    'message' => 'Route applications to the right team member automatically.',
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
                        <!-- Layout -->
                        <tr class="jobwp-settings-section">
                            <td colspan="2" class="jobwp-settings-block-title"><i class="fa-solid fa-table-cells-large"></i>&nbsp;<?php 
_e( 'Layout', 'jobwp' );
?></td>
                        </tr>
                        <tr class="jobwp_list_layout">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Job listing page layout', 'jobwp' );
?></label>
                            </th>
                            <td>
                                <input type="radio" name="jobwp_list_layout" id="jobwp_list_layout_list" value="list" <?php 
echo ( 'list' === $jobwp_list_layout ? 'checked' : '' );
?> >
                                <label for="jobwp_list_layout_list"><?php 
_e( 'List', 'jobwp' );
?></label>
                                &nbsp;&nbsp;
                                <input type="radio" name="jobwp_list_layout" id="jobwp_list_layout_grid" value="grid" <?php 
echo ( 'grid' === $jobwp_list_layout ? 'checked' : '' );
?> >
                                <label for="jobwp_list_layout_grid"><?php 
_e( 'Grid', 'jobwp' );
?></label>
                            </td>
                        </tr>
                        <!-- Application form -->
                        <tr class="jobwp-settings-section">
                            <td colspan="2" class="jobwp-settings-block-title"><i class="fa-brands fa-wpforms"></i>&nbsp;<?php 
_e( 'Application form', 'jobwp' );
?></td>
                        </tr>
                        <tr class="jobwp_ext_application_form">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Use external application form', 'jobwp' );
?>?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="jobwp_ext_application_form" class="jobwp_ext_application_form" id="jobwp_ext_application_form"
                                    <?php 
echo ( $jobwp_ext_application_form ? 'checked' : '' );
?>>
                                <label for="jobwp_ext_application_form"><?php 
_e( 'Enable', 'jobwp' );
?></label>
                                <span><?php 
_e( 'Use WPForms, Contact Form 7, or any shortcode-based form instead of the built-in form.', 'jobwp' );
?></span>
                                <br>
                                <input type="text" name="jobwp_ext_application_form_shortcode" id="jobwp_ext_application_form_shortcode" class="regular-text" value="<?php 
esc_attr_e( stripslashes( $jobwp_ext_application_form_shortcode ) );
?>" />
                            </td>
                        </tr>
                        <?php 
$jobwp_upgrade_arr = [
    'label'   => 'Allow external application URL?',
    'icon'    => 'fa-solid fa-arrow-up-right-from-square',
    'message' => 'Link jobs directly to LinkedIn, Indeed, or any external URL. Perfect for affiliate job boards and agency clients.',
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
$jobwp_upgrade_arr = [
    'label'   => 'Should candidate login before apply?',
    'icon'    => 'fa-regular fa-user',
    'message' => 'Require candidates to be logged in before they can apply — ideal for membership and community job boards.',
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
                        <tr class="jobwp_hide_jobs_deadline_over">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Hide jobs when deadline is over', 'jobwp' );
?>?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="jobwp_hide_jobs_deadline_over" class="jobwp_hide_jobs_deadline_over" id="jobwp_hide_jobs_deadline_over" <?php 
echo ( $jobwp_hide_jobs_deadline_over ? 'checked' : '' );
?>>  
                                <label for="jobwp_hide_jobs_deadline_over"><?php 
_e( 'Enable', 'jobwp' );
?></label>
                            </td>
                        </tr>
                        <!-- Redirect After Apply -->
                        <?php 
$jobwp_upgrade_arr = [
    'label'   => 'Redirect after application?',
    'icon'    => 'fa-solid fa-arrow-right',
    'message' => 'Send candidates to a custom thank-you page, tracking URL, or next-step page after they submit. Useful for measuring conversion.',
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
                        <!-- Captcha -->
                        <tr class="jobwp-settings-section">
                            <td colspan="2" class="jobwp-settings-block-title"><i class="fa-solid fa-robot"></i>&nbsp;<?php 
_e( 'reCAPTCHA', 'jobwp' );
?></td>
                        </tr>
                        <tr class="jobwp_recaptcha_site_key">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Site key', 'jobwp' );
?></label>
                            </th>
                            <td>
                                <input type="text" name="jobwp_recaptcha_site_key" id="jobwp_recaptcha_site_key" class="regular-text" value="<?php 
esc_attr_e( stripslashes( $jobwp_recaptcha_site_key ) );
?>" />
                            </td>
                        </tr>
                        <tr class="jobwp_recaptcha_secret_key">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Secret key', 'jobwp' );
?></label>
                            </th>
                            <td>
                                <input type="password" name="jobwp_recaptcha_secret_key" id="jobwp_recaptcha_secret_key" class="regular-text" value="<?php 
esc_attr_e( stripslashes( $jobwp_recaptcha_secret_key ) );
?>" />
                            </td>
                        </tr>
                        <tr class="jobwp_captcha_on_apply_form">
                            <th scope="row">
                                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Enable on apply form', 'jobwp' );
?>?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="jobwp_captcha_on_apply_form" class="jobwp_captcha_on_apply_form" id="jobwp_captcha_on_apply_form" <?php 
echo ( $jobwp_captcha_on_apply_form ? 'checked' : '' );
?>>  
                                <label for="jobwp_captcha_on_apply_form"><?php 
_e( 'Enable', 'jobwp' );
?></label>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <p class="submit">
                        <button id="updateGeneralSettings" name="updateGeneralSettings" class="button button-primary jobwp-button">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php 
_e( 'Save Settings', 'jobwp' );
?>
                        </button>
                    </p>
                </form>
            </div>
        </div>

        <?php 
$jobwp_pro_features_local = [
    [
        'icon'        => 'fa-solid fa-arrow-up-right-from-square',
        'heading'     => 'External application URL',
        'sub-heading' => 'Post jobs linking to LinkedIn, Indeed, or any platform',
    ],
    [
        'icon'        => 'fa-solid fa-arrow-right',
        'heading'     => 'Post-submission redirect',
        'sub-heading' => 'Send applicants to a branded thank-you page',
    ],
    [
        'icon'        => 'fa-regular fa-user',
        'heading'     => 'Role-based notifications',
        'sub-heading' => 'Route applications to the right team member',
    ],
    [
        'icon'        => 'fa-solid fa-unlock-keyhole',
        'heading'     => 'Login-required applications',
        'sub-heading' => 'Allow only logged-in users to apply for a job',
    ]
];
$jobwp_pro_features_global = [
    'CSV & Excel export',
    'Custom email templates',
    'Company profiles & logos',
    'Featured jobs slider',
    'DOC & DOCX resume uploads',
    'GDPR consent checkbox'
];
$this->jobwp_load_admin_sidebar( $jobwp_pro_features_local, $jobwp_pro_features_global );
?>

    </div>

</div>