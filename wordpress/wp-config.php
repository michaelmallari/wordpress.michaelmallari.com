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
define('DB_NAME', getenv('MYSQL_DBNAME'););

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER'););

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'););

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_URI'););

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
define('AUTH_KEY',         '7xO{EufD|V+n-G#?)[2^0rSFKJNM{y+od04#^y&|jArj9)U=D6aj,6RG;~I6T;=M');
define('SECURE_AUTH_KEY',  'J-EXf|P}mxf@,wi[3?(cfBF>R&<RC&.}T$jx9AL=oKf6kz9>nt-zY9$ApdcgdE1%');
define('LOGGED_IN_KEY',    '^Y0Pl.|a4aGQVP{wtn)I FR=km7`?R6ve qv{]pZsfd[Ex[-^.uX2t+uf&Y50cf5');
define('NONCE_KEY',        '~TZ0MTCvZ4b7%oUBVuLfqQ-Bf.P@Q~o-9((uf%:JTsEzXS&xnAgPFNn7.%a|^&= ');
define('AUTH_SALT',        '~@jdlG{[0V/C=qMT?Nmbzsm}?pw&o*?N9Uz 13n&Nr 2*;/p=R]~br^(Wc@W-8zq');
define('SECURE_AUTH_SALT', 'YHPeyl9U&#Frw1IlW~c bmWPqjdeh<+jb-Mb` 6~r4eLK 0zp9A{R?FOY)]?^D80');
define('LOGGED_IN_SALT',   'V_5?zQey!GpkTnW3+j=6:)JJP|k41Udvl$/DRcV-sq`J#H|ZUD^EH9:/ceG-{qVw');
define('NONCE_SALT',       '(.Q #}%-A&6#4I{:?&=++O%W;5$|HXc0IdFB|o2-_Hf@1|aUk}B?=!-}m}GVo{ei');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
