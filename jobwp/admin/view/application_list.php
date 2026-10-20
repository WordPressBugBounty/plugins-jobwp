<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
$showMessage = '';
// Delete Single Application
if ( isset( $_GET['delID'] ) ) {
    if ( !isset( $_GET['application_list_nonce'] ) || !wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['application_list_nonce'] ) ), 'application_list_action' ) ) {
        $showMessage = __( 'Sorry, your nonce did not verify.', 'jobwp' );
    } else {
        $showMessage = $this->jobwp_delete_single_application( absint( $_GET['delID'] ) );
    }
}
$jobwpDir = wp_upload_dir();
$jobwpDir = $jobwpDir['baseurl'] . '/jobwp-resume';
$per_page = 11;
$current_page = ( isset( $_GET['paged'] ) ? max( 1, absint( $_GET['paged'] ) ) : 1 );
$total_applications = $this->jobwp_get_applications_count();
$total_pages = (int) ceil( $total_applications / $per_page );
// Prevent requesting a page beyond the available results.
$current_page = max( 1, min( $current_page, max( 1, $total_pages ) ) );
$offset = ($current_page - 1) * $per_page;
$applications = $this->jobwp_get_all_applications( $per_page, $offset );
?>
<div class="settings-banner">
    <h2><i class="fa-solid fa-list-check"></i>&nbsp;<?php 
_e( 'Application Lists', 'jobwp' );
?></h2>
</div>
<?php 
if ( '' !== $showMessage ) {
    $this->jobwp_display_notification( 'info', $showMessage );
}
?>
<div id="jobwp-wrap-all" class="wrap">
    <form id="posts-filter" class="submitterRequest" method="post" action="?post_type=jobs&page=jobwp-application-list">
        <?php 
?>

        <div class="jobwp-donation-list_tbl" style="width: 100%; display: block; clear: both; margin: 10px 0;">
            <table class="wp-list-table widefat fixed striped posts" cellspacing="0" id="wpc_data_table">
            <thead>
                <tr>
                    <?php 
print_column_headers( 'jobwp-allication-table-column' );
?>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php 
$jL = 1;
if ( count( $applications ) > 0 ) {
    foreach ( $applications as $application ) {
        $jobwp_cv_file_name = basename( $application->resume_name );
        $jobwp_cv_display_name = preg_replace( '/^[a-f0-9]+-/i', '', $jobwp_cv_file_name );
        ?>
                        <tr>
                            <td><input type="checkbox" class="jobwp_bulk_selection" name="jobwp_bulk_selection[]" value="<?php 
        echo esc_attr( $application->job_id );
        ?>"></td>
                            <td><?php 
        echo esc_html( $application->applied_for );
        ?></td>
                            <td><?php 
        echo esc_html( $application->applicant_name );
        ?></td>
                            <td><?php 
        echo esc_html( $application->applicant_email );
        ?></td>
                            <td><?php 
        echo esc_html( $application->applicant_message );
        ?></td>
                            <td>
                                <a href="<?php 
        echo esc_url( $jobwpDir . '/' . $application->resume_name );
        ?>">
                                    <?php 
        echo esc_html( $jobwp_cv_display_name );
        ?>
                                </a>
                            </td>
                            <td><?php 
        printf( '%s', wp_date( 'D d M Y - h:i A', strtotime( $application->applied_on ) ) );
        ?>
                            </td>
                            <?php 
        ?>
                            <td>
                                <span class="delReq">
                                    <a href="<?php 
        echo esc_url( wp_nonce_url( '?post_type=jobs&page=jobwp-application-list&delID=' . absint( $application->job_id ), 'application_list_action', 'application_list_nonce' ) );
        ?>" class="reqDel">
                                        <?php 
        esc_html_e( 'DELETE', 'jobwp' );
        ?>
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <?php 
        $jL++;
    }
} else {
    ?>
                    <tr>
                        <td colspan="11">
                            <?php 
    esc_html_e( 'No applications found.', 'jobwp' );
    ?>
                        </td>
                    </tr>
                    <?php 
}
?>
            </tbody>
            <tfoot>
                <tr>
                    <?php 
print_column_headers( 'jobwp-allication-table-column', false );
?>
                </tr>
            </tfoot>
            </table>
        </div>

        <?php 
if ( $total_pages > 1 ) {
    ?>
            <div class="tablenav bottom">
                <div class="tablenav-pages">
                    <?php 
    echo wp_kses_post( paginate_links( array(
        'base'      => add_query_arg( 'paged', '%#%' ),
        'format'    => '',
        'current'   => $current_page,
        'total'     => $total_pages,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
    ) ) );
    ?>
                </div>
            </div>
            <?php 
}
?>
    </form>
</div>
<?php 
?>
    <a href="<?php 
echo job_fs()->get_upgrade_url();
?>" class="button button-primary jobwp-button"><?php 
_e( 'Export to CSV, Excel Available in Professional', 'jobwp' );
?></a>
    