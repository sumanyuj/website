<?php
define( 'WP_CACHE', true );





































/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sumaokma_wp912' );

/** Database username */
define( 'DB_USER', 'sumaokma_wp912' );

/** Database password */
define( 'DB_PASSWORD', 'W3K@7L@@h.S79p-b' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'wqhmjzfcojqg1v2z1ubkgvotiakkyntp6bwhix9rnspffhlwkwj7obyv0wlt9lv2' );
define( 'SECURE_AUTH_KEY',  'tnd4ygufxxxhfht16ixu8thfyuusjhwfs5nlxyrl5ydzeoijukshg2kl4pmbg5xm' );
define( 'LOGGED_IN_KEY',    'omc5zvk54yxphey4jet2shp7ss0we4ktkwkojrk1lin4zwzzayn9a59g2zoh9y9y' );
define( 'NONCE_KEY',        'gpdvrtafohulophfvqfapmyxtne2dfj2mr6mzviajcp7nywnxeuwtapwrxaesjwi' );
define( 'AUTH_SALT',        'a4ogigznknlzernsnisdhcii1ydgfkekndk5ug6nj2am2iiimnqakrbhyiicsoai' );
define( 'SECURE_AUTH_SALT', 'vbw8u5s87cogu5tstyvxaa6hquzrw2jnhlgvraxohtajlycvv0a6xq8cjzvzmtip' );
define( 'LOGGED_IN_SALT',   'up5e8chzcw7dfz0ayd2zekpjywjmh57ctzkqasd2ze68s5lvnkevu6ajfkmpnubw' );
define( 'NONCE_SALT',       'qrkuuzpi2cde6w2uxsf57lrl1f7p1viqjvtarxeqmnjfwhlagafqwiw9bve7okbo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpon_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
