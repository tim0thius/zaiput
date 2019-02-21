<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'whdfBpJG1nRCEw9EwOV0OKqEE8u4j97WJKSqKvrd8YfqR17j2WzZe0hexvH2ydw+I8HoHDbj0C93G/X3vrF3MQ==');
define('SECURE_AUTH_KEY',  'uMEsfzFI6fQhltv8mXO0Pk0KehuRHitKff1xp4Wm1Dmg4wr+1Au5IaxcSAEFb76fuH0Ut+Fn6rolPzQq6geeFA==');
define('LOGGED_IN_KEY',    'JUn6FFD9sIRW8qUCP5wVNLd6Cc7MrpJYl2o51g7D7rIEn3AdDJwgyfgcHM3FEvK2S5RDlfn2Hu/SPZ9xeVIaiA==');
define('NONCE_KEY',        'o/eeloWbBbsqtc7DXJNrgei88I3T4rNt8AQEOxBJT/dznl5wbLG3R1w2iduI0Y4Ae+mGJYp8nxty/NHQ4mym+w==');
define('AUTH_SALT',        'SF/cW7AvAMeH2UXWoWudXNUS1hPUoyQ4iyFT3cpN1tjvBiyXMBykO80qlEPFxFfLGYuNTjRiKouA0HnMmeteQg==');
define('SECURE_AUTH_SALT', '6GBiIrC8hcjitBD0n+YalUiOiGGZJN2xa/pOz6r29t/0VRZdAYYFVL0O5fA9AhJTpM99a8d2DRYCF7uth15ftw==');
define('LOGGED_IN_SALT',   'LDY6wZK1YPTVcWNwul8ArATjLEVjlZ5yV663bRcU90S793LP8h2i6WowrdYIiwtfCL8f8ggwiboHgDK8E3M6/A==');
define('NONCE_SALT',       'Sn0d721MdGhAbL1ka/R/hPmUQMyruHzZgLWwCVn6Z1rb5wyrpzdeiXsiVuqBF1zs1Hqee1LiAGMHkvp4AAvhLg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG_LOG', true);
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* -------------------------------------------------- /
/* CUSTOM SETTINGS FOR WP-CONFIG.PHP */
/* INCREASE PHP MEMORY TO 256 MB */
define( ‘WP_MEMORY_LIMIT’, ‘256M’ );
/* -------------------------------------------------- */