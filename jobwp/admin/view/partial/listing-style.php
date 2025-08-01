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
    <table class="jobwp-listing-style-settings-table">
        <!-- Job Item -->
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Job Item', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background Color', 'jobwp' );
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
_e( 'Border Color', 'jobwp' );
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
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Job Title', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
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
                <label><?php 
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
                <label><?php 
_e( 'Hover Font Color', 'jobwp' );
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
        <!-- Company -->
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Company', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Font Color', 'jobwp' );
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
_e( 'Font Size', 'jobwp' );
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
        <!-- Overview -->
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Job Overview', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
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
                <label><?php 
_e( 'Font Size', 'jobwp' );
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
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Job Information Label', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Font Color', 'jobwp' );
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
_e( 'Font Size', 'jobwp' );
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
        <!-- Read More Button -->
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Read More Button', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background Color', 'jobwp' );
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
_e( 'Font Color', 'jobwp' );
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
_e( 'Font Size', 'jobwp' );
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
_e( 'Border Color', 'jobwp' );
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
_e( 'Border Width', 'jobwp' );
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
_e( 'Border Radius', 'jobwp' );
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
_e( 'Padding', 'jobwp' );
?>:</label>
            </th>
            <td colspan="5">
            <?php 
?>
					<span><?php 
echo '<a href="' . job_fs()->get_upgrade_url() . '">' . __( 'Please Upgrade Now', 'jobwp' ) . '</a>';
?></span>
					<?php 
?>
            </td>
        </tr>
        <!-- Read More Button : Hover -->
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Read More Button : Hover', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background Color', 'jobwp' );
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
_e( 'Font Color', 'jobwp' );
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
_e( 'Border Color', 'jobwp' );
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
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span><?php 
_e( 'Pagination', 'jobwp' );
?></span><hr>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <label><?php 
_e( 'Background  Color', 'jobwp' );
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
_e( 'Border Color', 'jobwp' );
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
_e( 'Font Color', 'jobwp' );
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
_e( 'Font Size', 'jobwp' );
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
_e( 'Border Radius', 'jobwp' );
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
_e( 'Hover Background Color', 'jobwp' );
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
_e( 'Hover Font Color', 'jobwp' );
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
_e( 'Save Settings', 'jobwp' );
?></button></p>
</form>