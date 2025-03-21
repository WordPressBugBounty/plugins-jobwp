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
    <table class="jobwp-listing-style-settings-table">
        <!-- Job Item -->
        <tr>
            <th scope="row" colspan="6">
                <hr><span><?php 
_e( 'Job Item', JOBWP_TXT_DOMAIN );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Border Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
        <!-- Title -->
        <tr>
            <th scope="row" colspan="6">
                <hr><span><?php 
_e( 'Job Title', JOBWP_TXT_DOMAIN );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Font Color', JOBWP_TXT_DOMAIN );
?>:</label>
            </th>
            <td>
                <input class="jobwp-wp-color" type="text" name="jobwp_listing_title_font_color" id="jobwp_listing_title_font_color" value="<?php 
esc_attr_e( $jobwp_listing_title_font_color );
?>">
                <div id="colorpicker"></div>
            </td>
            <th scope="row">
                <label><?php 
_e( 'Font Size', JOBWP_TXT_DOMAIN );
?>:</label>
            </th>
            <td>
                <input type="number" class="small-text" min="11" max="50" name="jobwp_listing_title_font_size" id="jobwp_listing_title_font_size" value="<?php 
esc_attr_e( $jobwp_listing_title_font_size );
?>">
                <code>px</code>
            </td>
        </tr>
        <!-- Overview -->
        <tr>
            <th scope="row" colspan="6">
                <hr><span><?php 
_e( 'Job Overview', JOBWP_TXT_DOMAIN );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Font Color', JOBWP_TXT_DOMAIN );
?>:</label>
            </th>
            <td>
                <input class="jobwp-wp-color" type="text" name="jobwp_listing_overview_font_color" id="jobwp_listing_overview_font_color" value="<?php 
esc_attr_e( $jobwp_listing_overview_font_color );
?>">
                <div id="colorpicker"></div>
            </td>
            <th scope="row">
                <label><?php 
_e( 'Font Size', JOBWP_TXT_DOMAIN );
?>:</label>
            </th>
            <td>
                <input type="number" class="small-text" min="11" max="50" name="jobwp_listing_overview_font_size" id="jobwp_listing_overview_font_size" value="<?php 
esc_attr_e( $jobwp_listing_overview_font_size );
?>">
                <code>px</code>
            </td>
        </tr>
        <!-- Job Info -->
        <tr>
            <th scope="row" colspan="6">
                <hr><span><?php 
_e( 'Job Information Label', JOBWP_TXT_DOMAIN );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Font Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Font Size', JOBWP_TXT_DOMAIN );
?>:</label>
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
        <!-- Pagination -->
        <tr>
            <th scope="row" colspan="6">
                <hr><span><?php 
_e( 'Pagination', JOBWP_TXT_DOMAIN );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background  Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Border Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Font Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Font Size', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Border Radius', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Hover Background Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
_e( 'Hover Font Color', JOBWP_TXT_DOMAIN );
?>:</label>
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
    </table>
    <hr>
    <p class="submit"><button id="updateListingStyles" name="updateListingStyles" class="button button-primary jobwp-button"><?php 
_e( 'Save Settings', JOBWP_TXT_DOMAIN );
?></button></p>
</form>