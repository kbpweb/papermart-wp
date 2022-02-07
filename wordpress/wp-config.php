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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tx}w8:f.]|p<o%&QCy!_N8P]HI.Yjw}sokqK!WY=/Wa`BhXt)<ty9(q=(B#_t3&{' );
define( 'SECURE_AUTH_KEY',  'L$gL&~b<ZY}oscKCP &FCes]<`N1Nlhw/!~e/@)yHiFB<09z^#/Q<vB5oUDd6~:g' );
define( 'LOGGED_IN_KEY',    '>OPgY@x|YC^_z@.zhcRDz/hhZVON,h9.Sc3)rK(_<yGm7Gy(r0VJ9~{U3=+2)Y|w' );
define( 'NONCE_KEY',        '!9$L+w#dsss<H=xmf:fHY?VZl)z),rC1=;C_r>>`X|?.-3}ORPXiP#I^D.ix1:%?' );
define( 'AUTH_SALT',        '8*PGgO~hre/p_dX/$`Zpz5YTL^Sqw,%_q+m6CE9*z~vA*d]w=s|ZLA3]Z50uG7fc' );
define( 'SECURE_AUTH_SALT', 'I6[/WbD16-*iq<14 U[tdA$>-{6c7Lpof)j1v`eC,YQx98&BumZdR^eY<[9(Zpmm' );
define( 'LOGGED_IN_SALT',   '#^g|0t.]<6:N{B_P0h]9:Uh[|~}3Yi(WAQZXyg]==*JfUL%c]qnTG8QSCW2KM7Bv' );
define( 'NONCE_SALT',       '$IzK#Tubp2M6:,W<843*N:~C6W99#5-DFhnxOu =PqRo$7^5*IYGf$k X<6!o=*2' );

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
