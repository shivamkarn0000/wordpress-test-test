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
define( 'AUTH_KEY',         '/Ek4IB9!!|;i/;CrwTu>:=boX~?OUfO(*ns+ay#qY>w.76o[=FR%5`MbylIa.Eq-' );
define( 'SECURE_AUTH_KEY',  'nfrzm,q$F7BtxLt!+`e)D(sgdi0sS6,S-#DiIUqKiK&^8T&$!Aq9x;i?z:HHLOT~' );
define( 'LOGGED_IN_KEY',    'DFaB/JM4_:~N~u2.lu*P]My?;T[!]u72##F{1pXitI~rKWNeB,{qV.Bx`D%p>}9t' );
define( 'NONCE_KEY',        '!QZ)@I0n>HO)AHS7PM R,Q<Bc0-7gHB]oDC(U3s3L=9SJ`Kb.[li*ieSx8m$7cvs' );
define( 'AUTH_SALT',        'OAa[V[%#~TMv*@L6l+,~W}Gcr?vA_HcmT#QBtldu(#NXSkuei,5%)SqKHi]4Fb7X' );
define( 'SECURE_AUTH_SALT', 'B8g9md!.ra}v$!`K-QUYda@t^~l8B=Qk(Y!_wn%x.pd,pgd:vgaE7Za/wC5ybdrk' );
define( 'LOGGED_IN_SALT',   'bpXks]7:o_YOq#7t=ZKj~puo.gBMAKKFBmO:XC a3y2-ARi^(}UF_BjQ`lh,S38f' );
define( 'NONCE_SALT',       'I8JXE?6N^;QX3jTk(V!8mEu|RT>Jv2%F?4:oKe_WdDpmB,$m6Lf*;hlJs0|r:Qr1' );

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
