<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
//$jobwpApplyFormStyle = [];
//print_r($jobwpApplyFormStyle);
foreach ( $jobwpApplyFormStyle as $fs_name => $fs_value ) {
    if ( isset( $jobwpApplyFormStyle[$fs_name] ) ) {
        ${"" . $fs_name} = $fs_value;
    }
}
?>
<form name="jobwp_apply_form_style_form" role="form" class="form-horizontal" method="post" action="" id="jobwp-apply-form-style-form">
<?php 
wp_nonce_field( 'jobwp_apply_form_style_action', 'jobwp_apply_form_style_nonce' );
?>
    <table class="hm-settings-table jobwp-single-style-settings-table" cellpadding="0" cellspacing="0">
        <?php 
$jobwp_upgrade_arr = [
    'label'   => 'Apply Form Styling Settings',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Customise every visual aspect of your application form — background colour, field styles, label fonts, button colours, hover states, and border radius — to match your brand perfectly.",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
    </table>
    <hr>
    <p class="submit"><button id="updateApplyFormStyle" name="updateApplyFormStyle" class="button button-primary jobwp-button"><?php 
_e( 'Save Settings', 'jobwp' );
?></button></p>
</form>