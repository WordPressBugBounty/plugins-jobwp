<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
//$jobwpListingStyles = [];
foreach ( $jobwpListingStyles as $option_name => $option_value ) {
    if ( isset( $jobwpListingStyles[$option_name] ) ) {
        ${"" . $option_name} = $option_value;
    }
}
?>
<form name="jobwp_listing_style_form" role="form" class="form-horizontal" method="post" action="" id="jobwp-listing-style-form">
<?php 
wp_nonce_field( 'jobwp_listing_styles_action', 'jobwp_listing_styles_nonce' );
?>
    <table class="hm-settings-table jobwp-listing-style-settings-table" cellpadding="0" cellspacing="0">
        <!-- Job Card Items -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-regular fa-rectangle-list"></i>&nbsp;<?php 
_e( 'Job Card Items', 'jobwp' );
?></td>
        </tr>
        <?php 
echo '<tr><td colspan="6" style="padding:0;"></td></tr>';
$jobwp_upgrade_arr = [
    'label'   => 'Background Color & Border Color',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Available in Professional",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
        <!-- Job Title -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-solid fa-list"></i>&nbsp;<?php 
_e( 'Job Title', 'jobwp' );
?></td>
        </tr>
        <tr>
            <th scope="row">
                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Font Color', 'jobwp' );
?>:</label>
            </th>
            <td>
                <input class="jobwp-wp-color" type="text" name="jobwp_listing_title_font_color" id="jobwp_listing_title_font_color" value="<?php 
esc_attr_e( $jobwp_listing_title_font_color );
?>">
                <div id="colorpicker"></div>
            </td>
            <th scope="row">
                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Font Size', 'jobwp' );
?>:</label>
            </th>
            <td>
                <input type="number" class="small-text" min="11" max="50" name="jobwp_listing_title_font_size" id="jobwp_listing_title_font_size" value="<?php 
esc_attr_e( $jobwp_listing_title_font_size );
?>">
                <code>px</code>
            </td>
            <th scope="row">
                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Hover Font Color', 'jobwp' );
?>:</label>
            </th>
            <td colspan="5">
                <input class="jobwp-wp-color" type="text" name="jobwp_listing_title_font_color_hvr" id="jobwp_listing_title_font_color_hvr" value="<?php 
esc_attr_e( $jobwp_listing_title_font_color_hvr );
?>">
                <div id="colorpicker"></div>
            </td>
        </tr>
        <!-- Company -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-solid fa-clipboard-list"></i>&nbsp;<?php 
_e( 'Company', 'jobwp' );
?></td>
        </tr>
        <?php 
echo '<tr><td colspan="6" style="padding:0;"></td></tr>';
$jobwp_upgrade_arr = [
    'label'   => 'Font Color & Font Size',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Available in Professional",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
        <!-- Overview -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-regular fa-rectangle-list"></i>&nbsp;<?php 
_e( 'Job Overview', 'jobwp' );
?></td>
        </tr>
        <tr>
            <th scope="row">
                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Font Color', 'jobwp' );
?>:</label>
            </th>
            <td>
                <input class="jobwp-wp-color" type="text" name="jobwp_listing_overview_font_color" id="jobwp_listing_overview_font_color" value="<?php 
esc_attr_e( $jobwp_listing_overview_font_color );
?>">
                <div id="colorpicker"></div>
            </td>
            <th scope="row">
                <label><i class="fa-solid fa-check"></i>&nbsp;<?php 
_e( 'Font Size', 'jobwp' );
?>:</label>
            </th>
            <td colspan="3">
                <input type="number" class="small-text" min="11" max="50" name="jobwp_listing_overview_font_size" id="jobwp_listing_overview_font_size" value="<?php 
esc_attr_e( $jobwp_listing_overview_font_size );
?>">
                <code>px</code>
            </td>
        </tr>
        <!-- Job Info -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-solid fa-toggle-off"></i>&nbsp;<?php 
_e( 'Job Information Label', 'jobwp' );
?></td>
        </tr>
        <?php 
echo '<tr><td colspan="6" style="padding:0;"></td></tr>';
$jobwp_upgrade_arr = [
    'label'   => 'Font Color & Font Size',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Available in Professional",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
        <!-- Read More Button -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-solid fa-angles-right"></i>&nbsp;<?php 
_e( 'Read More Button', 'jobwp' );
?></td>
        </tr>
        <?php 
echo '<tr><td colspan="6" style="padding:0;"></td></tr>';
$jobwp_upgrade_arr = [
    'label'   => 'Full control over button colors, fonts, borders, hover states, and padding',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Available in Professional",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
        <!-- Pagination -->
        <tr class="jobwp-settings-section">
            <td colspan="6" class="jobwp-settings-block-title"><i class="fa-solid fa-ellipsis"></i>&nbsp;<?php 
_e( 'Pagination', 'jobwp' );
?></td>
        </tr>
        <?php 
echo '<tr><td colspan="6" style="padding:0;"></td></tr>';
$jobwp_upgrade_arr = [
    'label'   => 'Full control over pagination colors, fonts, borders, hover states etc.',
    'icon'    => 'fa-solid fa-palette',
    'message' => "Available in Professional",
];
$this->jobwp_upgrade_to_premium_section( $jobwp_upgrade_arr );
?>
    </table>
    <hr>
    <p class="submit"><button id="updateListingStyles" name="updateListingStyles" class="button button-primary jobwp-button"><?php 
_e( 'Save Settings', 'jobwp' );
?></button></p>
</form>