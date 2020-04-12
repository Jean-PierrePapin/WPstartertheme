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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codingtheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lq$+:QE/I>C<7G.w-m?<(D#~tEioIQ}f$/|~g^}mK$S&lB{B*8@}*gV oozG@^OD' );
define( 'SECURE_AUTH_KEY',  '{}=i/uJ0w/:Vn}2@DIZ}/f^31{ww:S{n6{Jk+},dvX>YE}xBXZNFl[H9J-321Xa{' );
define( 'LOGGED_IN_KEY',    '(Gu2+[xqcfgf0R*4U]aOqnNZ)HyDjB QU^r=&t^Uo^Tuo;HD:?l2:d<0elW}mU9%' );
define( 'NONCE_KEY',        '/@`EdA7eTR_boKY+NryTw~jbW,(rMm1Du;<W+PXFMl>`.H,|dx2 G,OR]VR;,XSp' );
define( 'AUTH_SALT',        'X/]xt{1 MAj(=x9nF}aF^z+vMW]0G@l!G:3XW(3SB_gGIM*/*`YL:=;(k07@XS)?' );
define( 'SECURE_AUTH_SALT', 'N$(B#Ki.Qk9{Z9202M+^BJy?PzEQe1 VwO.F_2/pA3i9PV1Jv^@[sl]N%EF6HaWa' );
define( 'LOGGED_IN_SALT',   '`gQ/8Jmv80S*@fdVBk=WH9kV==cnj?i4tEv-KGyC-*Te=RR`T-[DCkrkCHzpl+6V' );
define( 'NONCE_SALT',       'S~YGF[0@|S%U;2J3xSiBK}0RF9Vm0u}XGgwT/;4kx.go5{:3TK=U%eS9NAv-3g&?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_codingtheme_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
