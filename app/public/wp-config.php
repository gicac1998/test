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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         '1g6V7TVbKaBzw+acnQjGy9IqQwRuMzqVrgAk1x9N+BqomasNKTdj0p19ZV0zNWYh0MGbM5d1FDMwvflwMSw0zw==');
define('SECURE_AUTH_KEY',  'iaJlKcniJ1iMrwSy+OHGMwGcyMFygIRuy1syBgrVCacSDt06BntK7HMrlKv5+IufFkwhj9xNsGwUmMmKYUHB9w==');
define('LOGGED_IN_KEY',    'IJP7DtV3bkfuq54F5Nru6CPKIodykHtuUns0AKhuoIj3OobjKDMz2zneWCgufBGXNhkgVcf1cWbn8TvxNbfhnA==');
define('NONCE_KEY',        'bOc1er/VwOGRKWPkRM835O9v8KivUF3clmvbnBkvz45R3WLzaDITNYtJS5J7mOXFoxM/OeYr3UirB6ecryvs1w==');
define('AUTH_SALT',        '+/4Z+vxUzQUu12f5S5y1UtTbBRkg1IR4vtVree77KKcxaVLFUy9I7MaJffiqgMiaCl+LO79CN1aBW+x4HX7bRg==');
define('SECURE_AUTH_SALT', 'vTTFsVtPE0ONXNszsGf7Z6pdpPVChhtVFkZvtyYbA0h4DVFgyhNxOG6oz+mCnLomXsziIUou6ddsIwXgmMd6AQ==');
define('LOGGED_IN_SALT',   '3Wzm1MeWLcHzqUsArNrLmKvUL+P1yqrh9AAp6I8Z5D9YjnRSXWzUyF5n4rpdTQ6RW3BG8yOxts9vOWBRjPNrRg==');
define('NONCE_SALT',       'tjlko0Xi6HI1kRy8oMPCcCu1dbhWO8P0JYx0VE/oz9aGWlb+GIvhJ55yIVsD/EfByzyIh9+Kh4e1iYuoSkZI8A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'interview_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
