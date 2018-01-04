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
define('DB_NAME', 'letssafe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@4CswWr~n`I%|3(x@O@?%Op$Q&,wO,AGo`0-g/9j[.L&b^PY|Rxk)=%#?HvZERh*');
define('SECURE_AUTH_KEY',  'M>-M71BpRImRuM5&]Q}3Z_Vbt@<*FD9>U7G^O10dwj7A$E.(_ 5.ZMtVnaokh^nH');
define('LOGGED_IN_KEY',    'UDB<F?l#; r/o-2%P&N=b^oZF6*Hl7<PQ~iZzH<w!_Q6DF?G?U)*W,_yC`2joTRq');
define('NONCE_KEY',        '~(}8F?a>Y=ZW3Z-z1?GUhxVL&jpaa,#RX9U[G>8GoxZ (;-]KFRFoJzX!w:v}LxL');
define('AUTH_SALT',        'u9}#f`B7SY2JWPG^~Wev(_)i4B1;zr $r=*HSSgAkg-jnKBRMb>Xa<s<[mLr.?CA');
define('SECURE_AUTH_SALT', '%9Rbwy:*y{q`s&Y7yJVO3 r/47_cgd.c|bk-T(zzMg*{ZkW.fC9#F4oVR,xP&0/2');
define('LOGGED_IN_SALT',   '@od_CPt3:+hd$M! sPUg bfZ;#u|i`MlC~;g/css?yWm<rUynwt EXIG!&-%,DMy');
define('NONCE_SALT',       'zj>9:7v7zF]RZ9 oaQ8@{`@OPO|xN/~egYIHxrE.G9ta[`Y^={3{IPe{2]=#iaxR');

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
