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
define( 'DB_NAME', 'redux_db' );

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
define( 'AUTH_KEY',         'l>=]VuU>7+,FI$+{BFNdeY_EXJGfRE>%.+#k7e)k66cGLoA8v+O%G+CLUGE0OLV*' );
define( 'SECURE_AUTH_KEY',  '#TP+$Jpc;g!YyjX|`Ge$f=O0]g{/${E*Y$$%rH_cf{&RFpp]wr;|sB5#9^}d)8H#' );
define( 'LOGGED_IN_KEY',    'f#nnD4wF-k{ ^WCV4s3cVyD;W^x-gH8l,S<?-ZXsj%O[!Jw0O[8t/*cm-s+nGXD7' );
define( 'NONCE_KEY',        'avQktZQR1x?cM,ExL!rs#4i|=6G7?Bta8+Qlj|RNE2M;l1*qbcqvsn]j]!O$9Pka' );
define( 'AUTH_SALT',        'wR,CAJsZaN,wD`0CjsUb$#[!~o/SDS*^yo_S[w^qL@!C0cje=&C1j[0BL#]Dsf`v' );
define( 'SECURE_AUTH_SALT', 'oc4G0P!wx!)1) B(.9gUjzZ v&iqhf,#+kA,R1J];P~mF:12/vSE54t3lqlkDWgN' );
define( 'LOGGED_IN_SALT',   '92[1$qzQ#RNpYG8<Kyt<*PcQUFZ4anee B nvGzxT7H0^<;:XDt;lZp X~EFuE5I' );
define( 'NONCE_SALT',       '?:tbtIXGQ`|50%5OkXv55&j857)8g9)o/T_,@/kUX%U{@dJN1DG7IAG3Bh4e?le?' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
