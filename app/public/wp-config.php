<?php
define('WP_CACHE', false ); // Added by AirLift

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.G*L[;l(KA|,]<wZ3[@,-:Y,-znD#@@~fAS@Bd|?PHv6AbPXbZs,l5zMbWIG>N#&' );
define( 'SECURE_AUTH_KEY',   't~pp&d%_Et}x[IviZ?Hc_#1T<9$7;Lq{9- I{Pt8y1T;/}r-Xt]iTqj1[+<dd|>=' );
define( 'LOGGED_IN_KEY',     'JRE0gh$/n7_* ~5$HMqbSe]Y5h$|6le0DQ**3#po4>`<z&g_4@=8a(U]8q&/~0SH' );
define( 'NONCE_KEY',         'mnI_= Uy<RP23LzzV/UW25VlQ-vx`Kav%3:sS22WYc8DK6&;?l2cx|@MqcZ%oR|m' );
define( 'AUTH_SALT',         '|53SnSN=*a<:/E$@Ld0YETSdj>eS!,{[>>[{G8WH-i{}=@k%`3=u5_o]/jTUU]pz' );
define( 'SECURE_AUTH_SALT',  'x/0Q0eqsC9-IC3RSps}1sR&9kDv{XH[<^P)f[d:P99[E-C|/gCaWJ[Ms(v.ce;cv' );
define( 'LOGGED_IN_SALT',    'wzoMn-{dOA}(gXIm :m0.N1)Y[WU yh&SlVLZzcNcAw`_<{*}/$kp]SYZ= h=_Pg' );
define( 'NONCE_SALT',        'A6$Wzwq9[yvbcW7sowS85z<wRk/d%mDl!:vm;0`F`U6%!(!,kqymr<Coh` P)x8h' );
define( 'WP_CACHE_KEY_SALT', 'vqZ:Gyl6gnC>?.-OL:1,bkj1tP(C&G!;ZeQ1:6ncTW>/Dz<75aKY, OzPXy$T>=w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
