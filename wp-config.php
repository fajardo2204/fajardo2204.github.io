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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'renergy' );

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
define( 'AUTH_KEY',         ')}5c`mNnY>gYc;>?;`v$v1kISJwqAGSG{OIB1=C,f&Y0:0_@hk1%b.ytv>v.$8P.' );
define( 'SECURE_AUTH_KEY',  'XeDo*0C7G>9%=MMA[RBMYM)gY%aaOD~zHQe*i!FuybZer1m?w?-Z@@+B4Zn%q;}H' );
define( 'LOGGED_IN_KEY',    'cX`S{ vs]MY9M6pR]?jQK0!.(dfBqq;S:.E;bHr@/Yl.lA!Gz`5kM|zs$vrxI~go' );
define( 'NONCE_KEY',        'f%Pq/+?J<RLpD:phpr|pqxCfTxg|[HR5~[)cqXK77z3!P6 3.*HjyQf)`i=-*fTO' );
define( 'AUTH_SALT',        'BCNg?|)kSqT.|[DBz4^CquXq)~~xo$0{ZN+HK/BCmax>uK`@)r1+oPZk_MJ^(5sY' );
define( 'SECURE_AUTH_SALT', 'D?z3-Jsdp[vcl`K{]+0sug4C:D?>kg{y*$?9kvG`x^N}*FstoR.(Qm`[]rL:Gb6s' );
define( 'LOGGED_IN_SALT',   'nEpCL2upL+@eM+Gm|^/Lq~-1_j 0JD[A>M:l6{i>3Kb%I6t!:*~/pwwwr2K#mqbk' );
define( 'NONCE_SALT',       'VO-V?t!+rfQzS-h/2zu^DAXVt;yJ%2mb)63jp.pP5rUgbydS^Qs3zgF1O$n,zB5)' );

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
