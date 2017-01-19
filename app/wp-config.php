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
define('DB_NAME', getenv('MYSQL_DBNAME') );

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_URI') );

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
define('AUTH_KEY',         'eS-/+_pB2I(LzmM&:TOO.>(nTx[@2${ZoVVm6R,L/Wwr^8rDW rq-bmFWsXU!9||');
define('SECURE_AUTH_KEY',  '|%*keO)Fr+X3-&hrHh>Uo2@|.-.ClpTOg[[e5S[U&,z<EZn>R|qd_7:&~1=3myU2');
define('LOGGED_IN_KEY',    '*Nh5GkKC#7+RPyYCpid!?^$-sxXz*t&nd2CQ6{*Y>--^A~jm1`d?WZk1Fxt:%bI,');
define('NONCE_KEY',        ';^k{5m4f9C.iIT;P`=/$/r+F,Mk*CMynYHAX)r|$-#(QHqv)E8V~^0D7SR<QX8}}');
define('AUTH_SALT',        '`POIHo|v}w.[?bxOA*V K/-{hX,9R+l-V0#`?g D<TU=];Ke |y1TP|Y<nOBbc8M');
define('SECURE_AUTH_SALT', '%3yJ-GX?Gi4JU7K@6/LV#Q3dJ2YXFt6$g!5nT/plE~^=s--|rGb^1xy0D$<U/#I-');
define('LOGGED_IN_SALT',   '/RKBWVzwL=P{5{C+`q}1PHpp_K+<o8GZObjRIsF4a*8krmQ4-EY(#+B?{E?C6reb');
define('NONCE_SALT',       ':+[yP)m`6bQ3W.{v|Z|QEdXH+8+YSpFqO4Z.eSd89!t! ,qZ=iK]|&UW/2U_I_!`');

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
