<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
//print_r( $jobwpEmailSettings );
foreach ( $jobwpEmailSettings as $option_name => $option_value ) {
    if ( isset( $jobwpEmailSettings[$option_name] ) ) {
        ${"" . $option_name} = $option_value;
    }
}
?>
<div id="wph-wrap-all" class="wrap jobwp-single-settings-page">

    <div class="settings-banner">
        <h2><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;<?php 
_e( 'Email Settings', 'jobwp' );
?></h2>
    </div>

    <?php 
if ( $jobwpEmailMessage ) {
    $this->jobwp_display_notification( 'success', 'Your information updated successfully.' );
    echo '<br>';
}
?>
    <div class="jobwp-wrap">

        <div class="jobwp_personal_wrap jobwp_personal_help" style="width: 76%; float: left;">
            
            <div class="tab-content">

                <?php 
?>
                    <table class="hm-settings-table jobwp-single-settings-table" cellpadding="0" cellspacing="0">
                    <?php 
$jobwp_upgrade_arr = [
    'label'   => 'Candidate Email Settings',
    'icon'    => 'fa-solid fa-envelope-circle-check',
    'message' => "Customise candidate confirmation emails — set your own from name, from email, subject line, and email body. Or disable candidate emails entirely.",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
                    </table>
                    <?php 
?>
            </div>
            
        </div>

        <?php 
$jobwp_pro_features_local = [[
    'icon'        => 'fa-solid fa-envelope-circle-check',
    'heading'     => 'Control candidate email alerts',
    'sub-heading' => "Applicants receive an instant acknowledgement email so they know their application was received",
]];
$jobwp_pro_features_global = [
    'Featured jobs slider',
    'Post-submission redirect',
    'CSV & Excel export',
    'DOC & DOCX resume uploads',
    'Embed search panel on any page via shortcode',
    'Job level filtering by shortcode'
];
$this->jobwp_load_admin_sidebar( $jobwp_pro_features_local, $jobwp_pro_features_global );
?>
    </div>
</div>