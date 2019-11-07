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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'haslo123' );

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
define( 'AUTH_KEY',         'aIo-,f/q+m,uy(;TAQLBf$K9B$U2bGq%TGkY0Az95V)I*e0WzXYQGwJ:O(0FA1|f' );
define( 'SECURE_AUTH_KEY',  'f4pJ9Sg;+bU~18Y>br,cbBEB{>?oi,W;7g]*}cayqBdaJ#k*IDG X83 Uo^9U1TG' );
define( 'LOGGED_IN_KEY',    '<)VsKbr^]!m.aF*MU1fZ0(UcbTP0.rXnI(KYhCxl6naHit<,FRIy?s_**~}Tx{;[' );
define( 'NONCE_KEY',        'U { iht3/TT1gXQzgV~i{9J}[$<e-b[1Uaf=u Z6xX$4Ncw1]oUXJ{J}=pmFJ!@E' );
define( 'AUTH_SALT',        '{QUq[ASm:blf|1y<(N}/_:kC%j[#AF#i+El_QHJ ?mijQ]RgtP3PBh28xB6Vn/!R' );
define( 'SECURE_AUTH_SALT', 'HTs(Sn%)SwKBF[.Fgji1Yv)(rc98Ud_Iq`Ml_evu$CL5H4jp.4SZ;?I>}SX[.bmz' );
define( 'LOGGED_IN_SALT',   'c|jxj|C^R3;9lhm.#n}<?u(q*u!6Y!K%>*`uT(&eO,wp$C!Q=7Z$XUA,Hv.gZ/P?' );
define( 'NONCE_SALT',       ';BcnyPWwY#oN8s7a-(3Rx>J0qj HPSp/HC}ydKzT.$Q&K<vQUN5FM{2o,xYsOO<#' );

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
