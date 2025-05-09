<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_38581428_wp362' );

/** Database username */
define( 'DB_USER', '38581428_1' );

/** Database password */
define( 'DB_PASSWORD', 'g)ku2p5S8.' );

/** Database hostname */
define( 'DB_HOST', 'sql203.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'osimnwanfmjvymgcos5fyg4yjg6w7c0u5buqpaho2l65xqurtybalbyd92f7or56' );
define( 'SECURE_AUTH_KEY',  'sdhuignfr8lhg0a06qugavmvkxbpdjjgtscuzlpfsrdbvfzec2wzqtvs4c4e4mdu' );
define( 'LOGGED_IN_KEY',    '4wzkdtgabmci9psj1m245lkkz33whgsyysn5p3eylmih13p2c6u5xwzffxzkl67w' );
define( 'NONCE_KEY',        '69uxbr5b7td3xn1clgfgqrdzvac7kpyigmdnyhhad7gyr8jgscnh5bqcjphkinmm' );
define( 'AUTH_SALT',        '3r4rxzzxbb4udxgmt5p2jg6kbsr56hcw9mzgn9rcvigutbqkaufbd8twxjzrgfdz' );
define( 'SECURE_AUTH_SALT', 'byzffjgzacz7gh4xbvitrxtd1m6e6kjnubmzsps5wn1xr4urx10pt3r6w2uze5vt' );
define( 'LOGGED_IN_SALT',   '3exlhedn8kpfrmfzqvlidhwoao7ooylpo7gqoxbloynfs2ljmp7tiaaqvjuor1wv' );
define( 'NONCE_SALT',       'qhwehszditdxb5u8djy9qljhy5uozpkeeouk8kztbdpu3zqnt9lfbpx6scmakfor' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp3s_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
