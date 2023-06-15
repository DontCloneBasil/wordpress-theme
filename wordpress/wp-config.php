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
define( 'DB_NAME', 'wordpress-themes' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Twingo01' );

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
define( 'AUTH_KEY',         '>].y}e>28pu#Aw~k1o!bUB^^cokCRnpJS:mpuROvHg@JI)<q5@(F*)(%PjDDy(T ' );
define( 'SECURE_AUTH_KEY',  'P|ku*g<+_XiN7.x7Y{7160O/edaN.^ wdBIdzh-yLypS8#@> +iY<h1fqk%ib&g?' );
define( 'LOGGED_IN_KEY',    'zGIR|}M# U`M0|$Oc :OVooAyFOk0i&/^L~<$6!+-}CgBIfT?!^H/p*{JvO}37L<' );
define( 'NONCE_KEY',        '%MI{E+kw%mTOKl!xTEZ;ZF[kWV[6{+pol:QM%Pii3s)2yjczz8}aZA2L*]Rr&KFX' );
define( 'AUTH_SALT',        't>>nrgwMfE8UL02(0nF^dW:^X;Xt(_x#zyN.J9Hx4)52%H{.0:?ozn[,F13HzIJ7' );
define( 'SECURE_AUTH_SALT', 'e]PSaRhwwWB/tuHLXK~-VDwfRpMSx?#n=IS>QK}MI}<-q_pPDMJ]A.|-bpJ&Ef}M' );
define( 'LOGGED_IN_SALT',   'g}/|bpq:$Lw40#m|WGar$g5RFn~C5^h^T+,,Kqz+M*]qB*H!`b+`=-8#uGE9{oaZ' );
define( 'NONCE_SALT',       'B5[]5Y9Hm;uZ1=:KLEn}JJ.v3iAmq2O%#6a{SOo2>t`S,vANrd)XE4};Q}.pwF]1' );

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
