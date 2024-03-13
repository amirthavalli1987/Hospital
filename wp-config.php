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
define( 'DB_NAME', 'hospital_db' );

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
define( 'AUTH_KEY',         'JAR6:P;Fi.p5!_5.Z?BLkho4FtSODx1I.L t:GBTL)+oSIA:BMu-8uS_5Ab(f20d' );
define( 'SECURE_AUTH_KEY',  's[>&_nJ=cxS@a5aUUue;I]5!lp<qT[)LU14*2lX(;7*8f;3O`=&m7-(}59or-XCs' );
define( 'LOGGED_IN_KEY',    'F$=jIw{11Z;u$W^G-;YIa3Vslibq!&g|~D8&MbO;,6iQ3Hewk}m1T~~(MPhM>}gl' );
define( 'NONCE_KEY',        '^7L/k|^8}t</f{1g%Tb5vL)(ULyKr}Vg&b|W`>^CrNF-7`d-cs4$)+^YsctBh?u^' );
define( 'AUTH_SALT',        'ZCn_g {e[t;Bpk{?W`B@I#B,,:^BPx}& 6nR;!K;qAYD,rtXzo2Q4;A*//2lGFy1' );
define( 'SECURE_AUTH_SALT', 'w]gB!8H?L`~5o%7mXK>d[Jk26:7DqD*%|gL<?(wBc&.)l=?#G[~lh4QW)a_`ouKc' );
define( 'LOGGED_IN_SALT',   's*Z)bu@:VV!.0YQ6~(lvd$HSZn_yCja4+6Olz@`m.V55*!,Pc6m6O9$;M/ow`H*J' );
define( 'NONCE_SALT',       'WDlb;|!3=zGk8K(SY8>1v.*V~!@9ad7ez%3Q1Mn`xwP)kcsRjm+s!oYlyJ`jP@y9' );

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
