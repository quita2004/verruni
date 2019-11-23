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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'verruni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qui0904436284' );

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
define( 'AUTH_KEY',         'Ar3}!3BSb?^B)@*i%8]U>n;tU*{AhSvZp_A/eZgoAEct9G0Dti,14XMK(#i{u=L1' );
define( 'SECURE_AUTH_KEY',  'vl??6U8&AIJ$IRL+9lyJWT2po%w,$7({iz+autF7<ISjt3:WvH[iD3r8A 8sKSUk' );
define( 'LOGGED_IN_KEY',    ')4])k-nX80c$OF45]vYyEC82;7(.#30K`HH|z0OjGGl7GR6Auz9WeH|3u*Po9#Wx' );
define( 'NONCE_KEY',        '@I]O7$P(*E)]nk58BhK5Eu[5?#+G!l|f$4%#(@z/%)V&}cZcBgmlqk^Dbt>ZM3s[' );
define( 'AUTH_SALT',        ')/1AlE;2P$#D2!x/%7D80ZO3t#(C#A+&vPU`hvmEeRX3~FFHkF2u(TYj^!Zu(0[T' );
define( 'SECURE_AUTH_SALT', 'ZubSP%o2@1Ay&qj15P9T#0e5#GH[;L[1OLohBzL 1I5O[#$AziQ&20V*xzO5{x#&' );
define( 'LOGGED_IN_SALT',   'oXT% L[lVq6kIc:]9p&Z_QW?8o0G/9(Y1sn,& UU^{o{E` s,TG$ttb+ZDV8c,KS' );
define( 'NONCE_SALT',       '-p(G#L>`8:Z0=Oq:2$7i* +B6_!NLg]$sH(f(t``-%|h@Q+dIV?KlK@ySXFIj[C0' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/*** FTP login settings ***/
define("FTP_HOST", "verruni.vn");
define("FTP_USER", "quita");
define("FTP_PASS", "qui09");
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
