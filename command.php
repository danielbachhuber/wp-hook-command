<?php

if ( class_exists( 'WP_CLI' ) ) {
	require_once dirname( __FILE__ ) . '/inc/class-hook-command.php';
	WP_CLI::add_command( 'hook', 'runcommand\Hook_Command' );
}
