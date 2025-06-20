<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
/**
* Trait: Job Application
*/
trait Jobwp_Applicaiton
{
    function jobwp_upload_resume( $post, $file, $admin_email ) {
        if ( !empty( $file['jobwp_upload_resume']['name'] ) && !empty( $post['jobwp_full_name'] ) && !empty( $post['jobwp_email'] ) ) {
            if ( !$file['jobwp_upload_resume']['error'] ) {
                $ext = pathinfo( $file['jobwp_upload_resume']['name'], PATHINFO_EXTENSION );
                $allowedfiletype = array("pdf");
                $allowedfiletypemsg = __( 'Only Pdf file is permitted', JOBWP_TXT_DOMAIN );
                if ( !in_array( $ext, $allowedfiletype ) ) {
                    return __( $allowedfiletypemsg );
                } else {
                    if ( $file['jobwp_upload_resume']['size'] > 2000000 ) {
                        return __( 'Your file size is to large', JOBWP_TXT_DOMAIN );
                    } else {
                        $jobwpDir = wp_upload_dir();
                        $jobwpDir = $jobwpDir['basedir'];
                        $uniqueFile = uniqid() . '-' . $_FILES['jobwp_upload_resume']['name'];
                        $fileName = $jobwpDir . '/jobwp-resume/' . $uniqueFile;
                        if ( !is_writable( $jobwpDir . '/jobwp-resume' ) ) {
                            return 'The folder ' . __( $jobwpDir . '/jobwp-resume' ) . ' cannot be created or is not writable. Ask for support to your hosting provider.';
                        } else {
                            if ( is_uploaded_file( $_FILES['jobwp_upload_resume']['tmp_name'] ) ) {
                                if ( file_exists( $fileName ) ) {
                                    unlink( $fileName );
                                }
                                $r = move_uploaded_file( $_FILES['jobwp_upload_resume']['tmp_name'], $fileName );
                                if ( $r === false ) {
                                    return __( 'The file cannot be copied in the folder ' . $jobwpDir . '/jobwp-resume. Check if it exists and is writeable. You can also ask for support to your hosting provider.', JOBWP_TXT_DOMAIN );
                                } else {
                                    global $wpdb;
                                    $table_name = $wpdb->base_prefix . 'jobwp_applied';
                                    $fullName = ( isset( $post['jobwp_full_name'] ) ? sanitize_text_field( $post['jobwp_full_name'] ) : null );
                                    $applyFor = ( isset( $post['jobwp_apply_for'] ) ? sanitize_text_field( $post['jobwp_apply_for'] ) : null );
                                    $email = ( isset( $post['jobwp_email'] ) ? sanitize_email( $post['jobwp_email'] ) : null );
                                    $phoneNumber = ( isset( $post['phoneNumber'] ) ? sanitize_text_field( $post['phoneNumber'] ) : null );
                                    $message = ( isset( $post['jobwp_cover_letter'] ) ? sanitize_textarea_field( $post['jobwp_cover_letter'] ) : '' );
                                    $jobwp_user_consent = ( isset( $post['jobwp_user_consent'] ) ? sanitize_text_field( $post['jobwp_user_consent'] ) : null );
                                    $intl_tel_dial_code = ( isset( $post['jobwp_tel_country_code'] ) ? sanitize_text_field( $post['jobwp_tel_country_code'] ) : '' );
                                    $intl_tel = ( isset( $post['jobwp_tel_1'] ) ? sanitize_text_field( $post['jobwp_tel_1'] ) : '' );
                                    $intlPhone = ( '' !== $intl_tel ? $intl_tel_dial_code . $intl_tel : '' );
                                    $wpdb->query( $wpdb->prepare( "INSERT INTO {$table_name}\r\n                                        ( job_post_id,\r\n                                        applied_for,\r\n                                        applicant_name,\r\n                                        applicant_email,\r\n                                        applicant_phone,\r\n                                        applicant_message,\r\n                                        resume_name,\r\n                                        applied_on,\r\n                                        user_consent,\r\n                                        intl_tel )\r\n                                        VALUES ( %d, %s, %s, %s, %s, %s, %s, %s, %s, %s )", array(
                                        get_the_ID(),
                                        $applyFor,
                                        $fullName,
                                        $email,
                                        $phoneNumber,
                                        $message,
                                        $uniqueFile,
                                        date( 'Y-m-d h:i:s' ),
                                        $jobwp_user_consent,
                                        $intlPhone
                                    ) ) );
                                    // Admin Notification Email
                                    $attachments = array($fileName);
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    //$headers .= 'From: Career' . "\r\n";
                                    $subject = __( 'Career - New Application', 'jobwp' );
                                    $emailMessage = __( 'Applicant: ', 'jobwp' ) . $fullName;
                                    $emailMessage .= '<br>' . __( 'Applied For: ', 'jobwp' ) . $applyFor;
                                    $emailMessage .= '<br>' . __( 'Email: ', 'jobwp' ) . $email;
                                    if ( '' != $intl_tel ) {
                                        $emailMessage .= '<br>' . __( 'Phone: ' ) . $intlPhone;
                                    }
                                    if ( '' != $message ) {
                                        $emailMessage .= '<br>' . __( 'Cover Letter: ', 'jobwp' ) . $message;
                                    }
                                    wp_mail(
                                        $admin_email,
                                        $subject,
                                        $emailMessage,
                                        $headers,
                                        $attachments
                                    );
                                    return __( 'Thank you for your application', 'jobwp' );
                                }
                            }
                        }
                    }
                }
            }
        } else {
            return $file['jobwp_upload_resume']['error'];
        }
    }

}