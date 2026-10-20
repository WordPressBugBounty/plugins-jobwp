<?php

# Silence is golden.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div class="circulr-details-top">
    <div class="single-top-left">
        <<?php 
esc_attr_e( $jobwp_single_title_tag );
?> class="jobwp-job-title"><?php 
esc_html_e( $job_title );
?></<?php 
esc_attr_e( $jobwp_single_title_tag );
?>>
        <?php 
// Display Category
if ( $jobwp_single_display_category ) {
    if ( !empty( $jobs_category ) ) {
        $jobs_category_arr = [];
        ?>
                <div class="jobwp-single-category">
                    <?php 
        foreach ( $jobs_category as $cat ) {
            $jobs_category_arr[] = $cat->name;
        }
        echo esc_html( implode( ', ', $jobs_category_arr ) );
        ?>
                </div>
                <?php 
    }
}
?>
    </div>
    <?php 
?>
</div>
<?php 
if ( null !== $resumeUploadMsg ) {
    ?>
    <div class="jobwp-application-message"><?php 
    esc_html_e( $resumeUploadMsg );
    ?></div>
    <?php 
}