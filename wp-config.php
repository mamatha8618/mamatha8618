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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '3)fH4V8hX,SJ4 `~$Qa89(NA|t(gR(t<egQT@^@TTfcUL7jbR=Wihr.{}BYh.|Vh' );
define( 'SECURE_AUTH_KEY',  '=T|k7[b,;H_!<(4MgR<5;VZW3n1.D<OLm.p8` CYQR|t}*0x^1NV;)lb_hTlo!C ' );
define( 'LOGGED_IN_KEY',    '$+i{]Dus-hk>ktzf_@9uH+rlhcaMT^YQ+mb(J9Zb*Y|L^|L&u&c9J=%MNgiRx%c*' );
define( 'NONCE_KEY',        '69)PcMWqm,E~G473QQ{-6d^@1~@nOI&VT21k {?v.f<v*](^Y;a*n7kA!%JNp/Td' );
define( 'AUTH_SALT',        'lq#uVi@zR7N%su.MIUe5,Jc![4?Oq#AWe!m~DM*>(Y_iylesY,PyQs#r@ci(UbDx' );
define( 'SECURE_AUTH_SALT', '^Ag}|v9+`^#bWo%iKr % iT:/O;s@;0p|iee>n33syq^Z_^|(?J;DQE}Xb#zF;+6' );
define( 'LOGGED_IN_SALT',   '?k9l[nV&oS9`EqfzW;|KQ(l,JauhlX!o ipG h8]&~gdN25&`!0ZDWMP2QIA2rh,' );
define( 'NONCE_SALT',       '|GmNl.U!GYV8Fy>#6D>~mVSl[MZ&C@pxX[9Sd$v-`P6xBu2z<_IdYOrHr#QU(dFT' );

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
