<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
//print_r( $jobwpApplyFormContent );
foreach ( $jobwpApplyFormContent as $option_name => $option_value ) {
    if ( isset( $jobwpApplyFormContent[$option_name] ) ) {
        ${"" . $option_name} = $option_value;
    }
}
?>
<form name="jobwp_apply_form_content_settings_form" role="form" class="form-horizontal" method="post" action="" id="jobwp-apply-form-content-settings-form">
    <table class="jobwp-listing-content-settings-table">
        <tr>
            <th scope="row">
                <label for="jobwp_hide_apply_form_title"><?php 
_e( 'Hide Form Title', JOBWP_TXT_DOMAIN );
?>?</label>
            </th>
            <td>
                <input type="checkbox" name="jobwp_hide_apply_form_title" id="jobwp_hide_apply_form_title" <?php 
echo ( $jobwp_hide_apply_form_title ? 'checked' : '' );
?>>
            </td>
            <th scope="row">
                <label><?php 
_e( 'Title Text', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td>
                <input type="text" name="jobwp_apply_form_title" id="jobwp_apply_form_title" class="regular-text" value="<?php 
esc_attr_e( $jobwp_apply_form_title );
?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Name Label', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td colspan="3">
                <input type="text" name="jobwp_apply_form_name_label" id="jobwp_apply_form_name_label" class="regular-text" value="<?php 
esc_attr_e( $jobwp_apply_form_name_label );
?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Email Label', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td colspan="3">
                <input type="text" name="jobwp_apply_form_email_label" id="jobwp_apply_form_email_label" class="regular-text" value="<?php 
esc_attr_e( $jobwp_apply_form_email_label );
?>" />
            </td>
        </tr>
        <!-- Cover Letter -->
        <tr>
            <th scope="row">
                <label for="jobwp_hide_apply_form_cover"><?php 
_e( 'Hide Cover Letter', JOBWP_TXT_DOMAIN );
?>?</label>
            </th>
            <td>
                <input type="checkbox" name="jobwp_hide_apply_form_cover" id="jobwp_hide_apply_form_cover" <?php 
echo ( $jobwp_hide_apply_form_cover ? 'checked' : '' );
?>>
            </td>
            <th scope="row">
                <label><?php 
_e( 'Cover Letter Label', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td>
                <input type="text" name="jobwp_apply_form_cover_letter_label" id="jobwp_apply_form_cover_letter_label" class="regular-text" value="<?php 
esc_attr_e( $jobwp_apply_form_cover_letter_label );
?>" />
            </td>
        </tr>
        <!-- Phone -->
        <tr>
            <th scope="row">
                <label for="jobwp_display_apply_form_phone"><?php 
_e( 'Display Phone', JOBWP_TXT_DOMAIN );
?>?</label>
            </th>
            <td>
                <?php 
?>
                    <span><?php 
echo '<a href="' . job_fs()->get_upgrade_url() . '">' . __( 'Please Upgrade Now', 'jobwp' ) . '</a>';
?></span>
                    <?php 
?>
            </td>
            <th scope="row">
                <label><?php 
_e( 'Phone Label', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td>
                <?php 
?>
                    <span><?php 
echo '<a href="' . job_fs()->get_upgrade_url() . '">' . __( 'Please Upgrade Now', 'jobwp' ) . '</a>';
?></span>
                    <?php 
?>
            </td>
        </tr>
        <tr><td colspan="4"><hr></td></tr>
        <!-- User Consent -->
        <tr>
            <th scope="row">
                <label for="jobwp_apply_form_user_consent"><?php 
_e( 'Hide User Consent', JOBWP_TXT_DOMAIN );
?>?</label>
            </th>
            <td>
                <?php 
?>
                    <span><?php 
echo '<a href="' . job_fs()->get_upgrade_url() . '">' . __( 'Please Upgrade Now', 'jobwp' ) . '</a>';
?></span>
                    <?php 
?>
            </td>
            <th scope="row">
                <label><?php 
_e( 'User Consent Text', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td>
                <?php 
?>
                    <span><?php 
echo '<a href="' . job_fs()->get_upgrade_url() . '">' . __( 'Please Upgrade Now', 'jobwp' ) . '</a>';
?></span>
                    <?php 
?>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Submit Button Text', JOBWP_TXT_DOMAIN );
?></label>
            </th>
            <td colspan="3">
                <input type="text" name="jobwp_apply_form_submit_btn_txt" id="jobwp_apply_form_submit_btn_txt" class="medium-text" value="<?php 
esc_attr_e( $jobwp_apply_form_submit_btn_txt );
?>" />
            </td>
        </tr>
    </table>
    <hr>
    <p class="submit">
        <button id="updateApplyFormContent" name="updateApplyFormContent" class="button button-primary jobwp-button">
            <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php 
_e( 'Save Settings', JOBWP_TXT_DOMAIN );
?>
        </button>
    </p>

</form>