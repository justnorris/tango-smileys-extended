<?php
/*
# This file uninstalls TSE and removes all settings.
# Please do not edit this file.
*/
if( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}
delete_option( 'tango_smileys_extended' );
delete_option( 'tse_error' );
?>