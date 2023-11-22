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
define( 'DB_NAME', 'brand' );

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
define( 'AUTH_KEY',         '`7Z2(e}$INYe_>$,5z=Z5-ThJ4YM+{BUo$Qe&(&kKi$S#%arWl3/uE.Q.=>y_pl|' );
define( 'SECURE_AUTH_KEY',  '[tWwhW%wE@3Gl^ovO%Saw`]c7,hc%Una)rVGHsy6+k[CW)K1N@YWFjWBhskUXHr)' );
define( 'LOGGED_IN_KEY',    'AxLJs1qQ^P4<SoJ]o^-l,wY@12uG/u6H%2Nlx!%tw{ZgYcwIVjR0h:1Io<tWGxN6' );
define( 'NONCE_KEY',        'clb1{@x zz]f7v8Tn2pSfuS%[[~u<!BCQne}wU%_LmY5%&6CE$0@{4-z/HNNd@ c' );
define( 'AUTH_SALT',        ')6,*R&0,W6.?lE}o?oG^+w!s/_6k7O#=[@,l}{0HIaBc^5c!dgc$a`chSCm3mY08' );
define( 'SECURE_AUTH_SALT', 'P3a3&.S!mg?;wKcz4Z%lSAqVL0~I^>Bxb`~3aTo[|mxP3%m##TwZMZcdytomW5S]' );
define( 'LOGGED_IN_SALT',   '9hktpftC%zFr([.:x3^kG69h]s$uKO(1(m^-hw9]ox#|0Y!Bi=W4%:R}$D1%8PHf' );
define( 'NONCE_SALT',       './&#EH?B=u@AeepgRf,}utd(ioGq##YC$^-1sMXr;1t TuV0TBpV(tXJI_U.Y#{>' );

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
