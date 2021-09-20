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
define( 'DB_NAME', 'daotao' );

/** MySQL database username */
define( 'DB_USER', 'daotao' );

/** MySQL database password */
define( 'DB_PASSWORD', '@admin' );

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
define( 'AUTH_KEY',         'QJ*g!IW&^WU89er-UP_p(Jaf?7J044=xtJNm(H,/0_j 5v.c~<vy!&nAUbu4nokI' );
define( 'SECURE_AUTH_KEY',  '/SBS%/X]AY/lJ%EM8%C9,kA|-pOb)1@M7lzN3!YBDB>=d$oL<6?,F`&t.BPI+1a9' );
define( 'LOGGED_IN_KEY',    'D4&I1P%eHw^T;?%g=T:Gm%q,+g?xTi*d4ar?|fBdcG[)#|eqMt*gua*kr{7*u ym' );
define( 'NONCE_KEY',        'X3@eU?GSQ%J})MuTx9U`%f!OS=}&<j? U%2hfQ$y9|`A/j*0=T([wr(!bDC`+8:+' );
define( 'AUTH_SALT',        '/pv~p`kA;]@0LQ>jzbc$&4wSm55G$!jak];b%{=-j06hq.dh56Pgu2^EnC@(b^nV' );
define( 'SECURE_AUTH_SALT', 'Rnt,_>p=j.OkB2t1qk)oiQ*cS_sg<OihGV5@-!kVnnpq:jAa/~l/..T8fTzJ.qts' );
define( 'LOGGED_IN_SALT',   'E1kxG!&7|<6CTpI:#IODY+O;=~^qL{8)(xtq|MS&oON_eMncJBt4np<BXGG6R|_i' );
define( 'NONCE_SALT',       '^2miP13)_:<zM2cG+c?^nvYh0%E_/EFA0~cp,`UJ7O|R-m=syHj^EoXqiU;zE-4<' );

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
