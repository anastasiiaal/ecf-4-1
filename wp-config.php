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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '*4Z4a}X/r`X{!#GUbBZn)(WJ@~2{9dR7(:CR]-M_LdXfcK[e?SG.v<$r$xlOi//?' );
define( 'SECURE_AUTH_KEY',  ']N^ZgZ9dokG(2-7,Js<Wg)yIcGkf2vzeXd)f?(mO^=r<s:04c9=g wP.BLbiR*0)' );
define( 'LOGGED_IN_KEY',    'ppgSB)^qSr1=cE;f]HTOoWZIiPv#(e|3oHD>Z6U?F^,#*Cf^o|Yu[9#8_(S57(d>' );
define( 'NONCE_KEY',        'E+8yu YTn4`utE~EtC4Z-d&Wh(GKt/r< UN}?=hBc1Rw^GkdK!Rp]6~c*`pM*iWe' );
define( 'AUTH_SALT',        'A7gGrw7U1]0q:98os`oZ^Q?sc:kve1axLm1n*dm$T0,CBLYi).Vw9JYL2qw4Kjmf' );
define( 'SECURE_AUTH_SALT', 'R>>~lLr@.OX[ZC$1Fj,U<v.|qr$+|Y1tSfvj~DRDRID:I=.BV){?5|`?=lDr589G' );
define( 'LOGGED_IN_SALT',   '-!:eo(qNgigesZzMAl6z.9Y%ZyA$</Qza)?S[=xbh!5{z8hq(OoO-m 2V?8^z-;<' );
define( 'NONCE_SALT',       '#U%U]2kypjF1Dn3+IZAt:BSJB)`WcM~>1HW);#5os_L$._A@E94_Kf8#CZ*sfzA%' );

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
define( 'WP_DEBUG', false );  // ♻️♻️♻️♻️♻️ was FALSE made TRUE to get information concerning the debugging ..... better keep as false

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {     // ♻️♻️♻️♻️♻️ chemin absolue vers le WP
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
