<?php
/**
 * Plugin Name:       Block Pattern Creater
 * Plugin URI:        https://github.com/ryoraspp/block-pattern-creater
 * Description:       Allows users to create custom block patterns from the WordPress admin. 
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      5.6
 * Author:            Ryo Uozumi
 * Author URI:        https://ryo.nagoya
 * Text Domain:       block-pattern-creater
 *
 * @package    BlockPatternCreater
 * @author     Ryo Uozumi <ryoraspp@gmail.com>
 * @link       https://github.com/justintadlock/block-pattern-builder
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace BlockPatternCreater;

# Don't execute code if file is file is accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Registers the plugin activation callback.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
register_activation_hook( __FILE__, function() {
	require_once 'src/Activator.php';
	Activator::activate();
} );

# Bootstrap plugin.
require_once 'src/functions-post-types.php';
require_once 'src/functions-patterns.php';
