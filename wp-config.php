<?php



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ooomar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':^XhR<$APh`q{Q.En-B`Ru=u:xJ^QR^~n{3w>V61^ika%>FjLc]hpSW}q(A0eCR`' );
define( 'SECURE_AUTH_KEY',  '?,}?HHr${P&7mvz>f;^QLg1 BBU3s{2`_.M-+}`=eb^av;M8hq>mL^C,e_0?1m%s' );
define( 'LOGGED_IN_KEY',    ')I&=LSL}EbV4IPnFK563FKQ=<N?Q&XpM<We`[Z !7%]NzE[&h=9y%(~Z)_{JF0_4' );
define( 'NONCE_KEY',        'G~WG>pWRu).+}BV&iXO<sOJdV*OX,icrPHxy]>Qq9IxbFwoPZym{mZI,!z~dV17o' );
define( 'AUTH_SALT',        'p!(_Prb#u`Hb!Tvc[w+25?`,_&5-|YjsG!pc}8skJ.^jSc5vb4lERy99bN2^=!?a' );
define( 'SECURE_AUTH_SALT', '/ST[W|XUd:i[5n)G9 QMwnuaZ$ZZjZvL387m2 g$J?fuPmTxNOE]sQ3p,+7s;FdR' );
define( 'LOGGED_IN_SALT',   'M~`ar5QdCUi{&747$4=|kLMZjhx|Xpk)iU[T+)>(8k}%}1QhMgl98BE[V%PIBPkq' );
define( 'NONCE_SALT',       '_8Xb?TbZx}}dN#,tRrRb62y7uQ#M{f@pmdIA-P:+eHLOP0g{[e}UAbKcZY;(y4xk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
