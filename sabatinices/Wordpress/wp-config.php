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
define('DB_NAME', 'jsrocha_wordpress');

/** MySQL database username */
define('DB_USER', 'jsroc_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '3KP5J7qgc!');

/** MySQL hostname */
define('DB_HOST', 'robb0509.publiccloud.com.br:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zD&QdLsF)vywCE%Vygacfj!G8JIdkX83am4c)I)j1iQpR^m01dDjn8H8tpIS2d4Q');
define('SECURE_AUTH_KEY',  'V^oXMuqE2Dp218xKuX)qtz)mho87#ftKtYsn)B(FSpJH09zaT!6@27p7QjXbfarw');
define('LOGGED_IN_KEY',    '@VBfJ6ZvCOqjHk8Od@ZzTQg@j^jC4ha^HjTu0^BCvmsguI0AA4@JBx0e(0V6j(^#');
define('NONCE_KEY',        'rXI*sMqaqs(ecveEgnto0^B3Y2PHpARK1^jyH8yqYupx%whHk7NMG7Nw7KPLCB#e');
define('AUTH_SALT',        'r^BsE#*Xom&DdvjS@b@lT8BWfu6xtGevacG3wjnwWajlYAzIpjIQ!nMwAZN*4npu');
define('SECURE_AUTH_SALT', 'GQQ!YPK^5cOTCJDTvWaWAmTs5UP#451%3X&JqfL*wqwnP!7Mx%b^(HoDP)uS08UK');
define('LOGGED_IN_SALT',   'Ru#8Ru5Q*x5ViJY&RE05vykfuZGUh3DT0dUd7%ev6H66@)Tbu095GDw!sFfNxTfR');
define('NONCE_SALT',       'YB00AwY)%wCyBn4ZI0lSMD6CG6CndqLOC%uFtqa8r&yi2(^EfizLO7qliWlfmT9N');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nCF12N4_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
