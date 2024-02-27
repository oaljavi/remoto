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
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'Tn.0%&J5Yjl`AaR*@3{H3MpJ+WYV*Y%A>J^O]+kjcRxz{qG/cre}dWGDK_I-WO@u' );
define( 'SECURE_AUTH_KEY',  'ge;8BFgeW)=ThgMHY`L]WtOR|}u]HC%:-+*Dg3)Vhp9o~k4yg-rg9bCkO2Qe }E+' );
define( 'LOGGED_IN_KEY',    'gR/a!Qvpvr:`RU6+i?6vm4[N;Y9L+-%lh]WG8m GjM*=6t$`Y9biNN4iQo!f)#u#' );
define( 'NONCE_KEY',        'L!&NOK2 LQnc>imh|R)6?Qe%$8I-Mac!;iRZ;vMYN+&R$B-@-$i]>K/;Mn`z(iG%' );
define( 'AUTH_SALT',        '$YNp^m4E/i?M%%HbC4 `_J>Z,-{m5p6!1 ;VG 0o`@f;t&jw0uT(1@83Qk0A(tWu' );
define( 'SECURE_AUTH_SALT', '^Pd&o-Eh6t0I_8/Ofmhv9J;`jA?G2&)4W/AUmzvmc|baAYI1,`_zD^m>bG6 gi]T' );
define( 'LOGGED_IN_SALT',   '5ED<zJGs>A((^v7Ew+d*wcR|$EeFCVxw]]F(ng^mBButXh]L_j0u)Ym-_G4,TZIq' );
define( 'NONCE_SALT',       'DK,PaqgrT]}|@l-T?Z+TfH4V^95dCJ>jo@m4pq3-1xBJL*;aLb|!jXYHf{Ra[V%U' );

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
