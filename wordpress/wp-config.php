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
define('DB_NAME', getenv('MYSQL_DBNAME'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_URI'));

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
define('AUTH_KEY',         'Y+%T?M44-|It}+5kv_t(hVJveZb{z^kU[],@1zl,HsXHCZxLLLZ@{T&eZBBwxv6>');
define('SECURE_AUTH_KEY',  'RO}U,_{2KCT%X`.cF2tJ-C5QI&?J@Vg6h4=jr1Gj94#Ph+DB(3@NU|X7xFi7i]z#');
define('LOGGED_IN_KEY',    '3kX^rS|Y3=KG8#Os(JN;`1Y:b),y6*FiX`mO3u7~c2MV3U=rN|SZ r$T>ZWkY/U$');
define('NONCE_KEY',        'h]~bv%6G|xFSJ} Y+gy{+w|Bf2L[fI)s;^4tgFNvZ CN|_R`2nDqEiGbQz1g<%}|');
define('AUTH_SALT',        'CxE+aO&}p1cx`6G;h?XzHC$1d-nPZgcUQ!HN*=-66+|uMU_S49=sj_lseL[lOJW%');
define('SECURE_AUTH_SALT', ' {$l(>[^}J|p0$*BKCto6ihmm-^I3LK<lr.$f%?_B^zGIyX9Nxo+5}2SfavT!G%M');
define('LOGGED_IN_SALT',   'p`V//ArR8JHwB vfoWb^t]}TW-~kk^C#c@ZI%K 0i7s$+A|Jt|qFygz|]y#qec/E');
define('NONCE_SALT',       '$4c!CmegGY%PUJOAHLG-g=iV)#96s1RZx]_$C{]UH:0|Z!-`Km6vj:>bfVaKer68');

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
