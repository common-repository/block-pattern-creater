<?php
/**
 * Plugin uninstall file.
 *
 * @package    BlockPatternCreater
 * @author     Ryo Uozumi <ryoraspp@gmail.com>
 * @link       https://github.com/ryoraspp/block-pattern-creater
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Make sure we're actually uninstalling the plugin.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	wp_die( sprintf( __( '%s should only be called when uninstalling the plugin.', 'block-pattern-builder' ), '<code>' . __FILE__ . '</code>' ) );
}

/* === Remove capabilities added by the plugin. === */

// Get the administrator role.
$role = get_role( 'administrator' );

// If the administrator role exists, remove added capabilities for the plugin.
if ( ! is_null( $role ) ) {

	// Post type caps.
	$role->remove_cap( 'bpb_create_patterns'           );
	$role->remove_cap( 'bpb_publish_patterns'          );
	$role->remove_cap( 'bpb_read_private_patterns'     );
	$role->remove_cap( 'bpb_edit_patterns'             );
	$role->remove_cap( 'bpb_edit_others_patterns'      );
	$role->remove_cap( 'bpb_edit_private_patterns'     );
	$role->remove_cap( 'bpb_edit_published_patterns'   );
	$role->remove_cap( 'bpb_delete_patterns'           );
	$role->remove_cap( 'bpb_delete_private_patterns'   );
	$role->remove_cap( 'bpb_delete_published_patterns' );
	$role->remove_cap( 'bpb_delete_others_patterns'    );
}
