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
define( 'DB_NAME', 'PortalCases' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bJClpqkY5a<HE0=vZt5mR,@k>TGy[cLJr^5Z:Xf}/qgz4rf<z>B0AhzqY=FnFY%g' );
define( 'SECURE_AUTH_KEY',  'J_Zb]%N#kC2zXq]T8M2Qm&iNH-`m}c@)1/s&u[+RJ-,B=B&te.^`1Qm-$tK-@m|o' );
define( 'LOGGED_IN_KEY',    '!(7E*Y}Xl??l-H5?_2CeZ&g5f(,J^|Ds_(r`LNKM>|@b:7w#e^m[ikkj@?f_+)/2' );
define( 'NONCE_KEY',        '(36_0%j Ma;== 2d$2],6/h*u5o1(J64tb[W39]/I({iGeK(z1@}]glqI3J%CgR5' );
define( 'AUTH_SALT',        'JR=?P)5 GvZ{lQZ!%gt@p[66rCL*d-Xb Nf][j5jLZE8DByr=WFu@:rz;Ps`<~Dq' );
define( 'SECURE_AUTH_SALT', '/?YRo0q OM1UA}/*HD].40C{$N ?$Gr)LTFdxeRf?yvErcw| -Vi{p!Qk )bkIf3' );
define( 'LOGGED_IN_SALT',   '34niE!=ua@<duw-2fNL-(M.F47q[s=[QjRUK@>Z(wam(^_)>+ 324fduW,EBiMT4' );
define( 'NONCE_SALT',       'fN-[Pg$ ?$uB2b@c2p07Xb7cv[ag?2rDRl.zg9X I}eUH+yD{#FozK>GM]Ae|vkr' );

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
