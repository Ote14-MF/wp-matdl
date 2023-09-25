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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'matpl' );

/** Database username */
define( 'DB_USER', 'MGtrote9714' );

/** Database password */
define( 'DB_PASSWORD', 'mg2023techbridge' );

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
define( 'AUTH_KEY',         '53ArRXMR aC62dasTbF9&R8:^k7C&9v) b%F$V6YsA1;[ Y@G_vcmo03UO1Tq)E7' );
define( 'SECURE_AUTH_KEY',  'FMWa4F!H@a!:^92nCbjB#Nx7?*[kI0O+i;^kZs[H3^+te]-#O#@s#8dNgn!Rd2}#' );
define( 'LOGGED_IN_KEY',    '0 G=wD2k3;Ia,0k3*YQ^i>/5Vw3GFqYfsff7k_PJF85)Z[sE4rRVM3I`JUlPR5aP' );
define( 'NONCE_KEY',        'EQ|W2:wq^c^G;:f`7ukE@Txm%25/D?kfXQ{p#p4*/o6!hY$]O4bLv_TPp*],Oa&w' );
define( 'AUTH_SALT',        'P7jgzR6VaQ;;Z!uo@jJfr zxEiOn]#/gB@-weo4?ZjE3@.0$PrJNaWcVhIK0.^UO' );
define( 'SECURE_AUTH_SALT', 'Xza|tzP5V8GY^rKe^f[u_,sr0;klhMY8 ?zMju1XH,U:C.D%F7O<!sPC5O&DKT,:' );
define( 'LOGGED_IN_SALT',   'Qp*|DGXlB p5UDt#@E;<81Vu-yZ_7{9r!bB.Y[e}1UI:C-=O5%6t&03OA#/gO?9 ' );
define( 'NONCE_SALT',       'z-N%,M2I==IJ*Qsg:IWf#&X_+Vr#tje}l?N;F)n}!ln`~{G=IbIYb$R]:lye1Ati' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
