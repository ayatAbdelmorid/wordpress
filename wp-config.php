<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'U:;TjMH:I;|vdBm]!*UZJmv%Da|?ROtmu >/.:WX{aJM;4+5R6l1quI+QzT{RhAU' );
define( 'SECURE_AUTH_KEY',  '$SDMZaDZF^((_(ItW>Zb%cA7G*x .TR|_OOE7i!g`#c+@*4v< `gf]2QEq([$W^H' );
define( 'LOGGED_IN_KEY',    'E-WN[20pxyI_c8!%|M|AyM*YmhU<}^xyG]=>cZU9W@&S]u(-T1qw30.F{`(X~a}{' );
define( 'NONCE_KEY',        '1&e}?-Q)eb{0HY%M!Yg*gdf`B=/sBuv-.!aB;nu<AK`r&M4A-{4=b; {cWP7,lQZ' );
define( 'AUTH_SALT',        '=D@K`rdP((6{8C]P9Emb@Tp-N7<@Zd,[R;L? SIMUbZJLxn+{OWt<hozP-Q(`[KC' );
define( 'SECURE_AUTH_SALT', 'Uw#3>`%/-v4emYM0dk`]I.hMCc]brcVF]yoe:sw/xf-xV@4bF6fCqK8b{>&][_TE' );
define( 'LOGGED_IN_SALT',   '4GN}/hb$ @ KJ5kLQE_d3(*D(0y(x2pj:P`6|2p/?1BG1T0}c)YQVUc|I:Mc]lr)' );
define( 'NONCE_SALT',       '`Q*C<A*]X22-pX,gn(V[P7A*(XK$SCeo-e)w=ye0x<?64Vs7c}N!at!&EU5PD2Y5' );
define('JWT_AUTH_SECRET_KEY', 'oZfnEb^r`MF-pYk|&2qJ?_7.gEr~!JSau,`Pqxe7`johSuc8U)D~4S-wY+l_u+');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
