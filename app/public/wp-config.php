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
define('AUTH_KEY',         'xtGY3E+LZeHVuKRZW3hxkpWTtVgkyptiso7AcDAfz7Ms0ac5aL1luzrlqRb3ctHTcDEUg0Dhpw/Xx2mGNlt41Q==');
define('SECURE_AUTH_KEY',  'zWKhnA8/NhbgOVn9hse+x9uBnCXB7k9l/3Oomw2caIKUz8de0BSIty8cLPxT5cBPHjsvJIMZQ6bAbfm/yVBKJg==');
define('LOGGED_IN_KEY',    'RhilcrybF1csKgkLIoVTOlTh+Og/cv8bYutq5UqSFURzDkD9rRMbr8Bky13K+Ula/20pl8fM8ascE29PGX02ww==');
define('NONCE_KEY',        'NsiiXFMfQV1Zit4s5sCLg3nNNrK6FhPV10aXiVU/3QPIGcwowuno2XOwTu4i5FHGCiFgeEZELq+NKkjWFEnHnw==');
define('AUTH_SALT',        'r+8b1XTN0gDqafyZgEilxtzY5P7s+gN7yvTE/Nx8nnt10bhfHUNY4VDYoRhTWcyav/47DVkYk257WEkF6xmHHA==');
define('SECURE_AUTH_SALT', '72IMgv89/NkSoplUC2cwd9ETc6cdRYRVPHmRmog7Qlq/OVei7hm6LOY5qHxQOte2+sH+Eh2TrQ3XTGmtr7F8jg==');
define('LOGGED_IN_SALT',   'tH6YY6RKJjbw7OD+V6PRCsX6b998xugFpoU0EUHqd/Bs8B5qe9mNdc4LfIuClQfDkxdun/ngaMlx9bSoF9Ebkw==');
define('NONCE_SALT',       'l6PV6WHbir3TXK9bxDLz+ruaZxQAfdheUYN0OH4vmy3HqWFBX4HOpliujAS/4j8ITmL72mFPtkn5Tt/nwgbjrA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
