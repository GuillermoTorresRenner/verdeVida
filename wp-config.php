<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1aB.%OIINGJl`Pr JO=SlPf/Uki5Fx!}Jm=OD4dmQh*zAZtC%0<+tlyW)O4*jX/2' );
define( 'SECURE_AUTH_KEY',  'ZG,Ex^9FA4)(/P=,:-ijJL)EvrWzZ((j$PP~:Xb%6heAw^UQ~5/?/0l9(^+t8b$=' );
define( 'LOGGED_IN_KEY',    'mG+W=k}L+*Z$AA$P1w&&m5hkZQ__lZk|$_=Vf0l*iub{hqUPm;N_!lF:t< w67g%' );
define( 'NONCE_KEY',        'P@cRXYQ}GjL;@C)hq2AdZ<WqvUz4:Aung?s<ba`mBNUMjn0}#~D*VM<h@-Y[0rX]' );
define( 'AUTH_SALT',        'eg,1&ZN%GKE`yQ%[4IpT#qm@}j}6jKoP_*moVz_59Md Y:-O{[KJiaBN80Z*< `9' );
define( 'SECURE_AUTH_SALT', 'dh_6b^{4dBZZ>-=KPT*rj=$2L4r6?P4JO|I&!iTOd>5tCLM<=y5^~<P[~z}H[fai' );
define( 'LOGGED_IN_SALT',   'WPt@t#a 6jhXd9 Z1DuU^77(q_pvH[vndOE<QHC]@w%9pKeT#f,{KrE,^{K8Dl0Z' );
define( 'NONCE_SALT',       '5wmJEV_UptVx>&Kcy(vD#+*n AI7r(|_`(lo`|@WL,rtsDUn`Y`=-X9Mgz%U!-^z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
