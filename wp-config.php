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
define('DB_NAME', 'freshade');

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
define('AUTH_KEY',         'VXGK>?Ea)s`VkwyqIbwd-(GP+j_X={5I$tTKCEW]U=M75SXM91mp)%^1RYB9ux%Q');
define('SECURE_AUTH_KEY',  '_ibYb28LGl;1O?T/Pi1DoN4h*$JJ=.06#k]G,r`Cgpn|.`lnB~IuZ$lAD7EbX.w)');
define('LOGGED_IN_KEY',    'p5A;<?pn[&M`+N4Y>Vsqc6rD4Q&/7L5WAOzE2goPi=LWud{CMzg%,xDD}/]pEGq;');
define('NONCE_KEY',        'm@9l#t(uh0Sn(L@)Tehqrs|}fS!a&@:c4+G,_X@:vT1dMA,9::n4BOHQtC)&[v=!');
define('AUTH_SALT',        'cw)w}h(P`t|8K>Ip FGW4kru~Nv&T]b@-6HY,)z.zr]ERjEbSXl+8/Ifb]_9B^a_');
define('SECURE_AUTH_SALT', '|{vh{v)>vL)9<d8P5<n>%kThYFTdPG5AO%@={T%j4a#y[@Y=6w^j=FA>JI=2p#HP');
define('LOGGED_IN_SALT',   '(ihCe,0Q%HfCTEmVjj.XY b-CoippRI2q[2nFVjgN,Z@>ME1G/XIL&:3WB[:OGdM');
define('NONCE_SALT',       '%m3Ieb[/mj<syQwIgoxEMRR<FM!O8*U|b%9W|b21c04zAK-l8ZnJK1EivD.>;1C0');

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
