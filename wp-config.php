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
define( 'DB_NAME', 'WordPress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         '8{_.8MwDnRP@>SIj*P8hMEX~OXtt!yPNRz@049UsE59Ns5LgtXBOsB*#`6y3asnT' );
define( 'SECURE_AUTH_KEY',  'R/A[C(v%(*V.D$@E*4e7_DQ4qG6nE.j6o@&|RGyUT~[q=8J:E&HJHiRs`q,}A>Do' );
define( 'LOGGED_IN_KEY',    'ZiGZbYPiED2@X<hv;b?R6.R#1mFgf){@bxLj`VN?$Efcf<L{kjt//el|S+(i_<vD' );
define( 'NONCE_KEY',        'P1Q+&.(?+3fa{~YUS_LpTi/1/u,g){CB4Ub<i:Fn!*>>d&J`wJaiHGqh)(S%Z-%5' );
define( 'AUTH_SALT',        'Ky<!vlzxktB9j-BXN:&dTX-Y%E8nY0+Pg6l^UfYMweJ=}6sIF{->$59|n;,L1khC' );
define( 'SECURE_AUTH_SALT', '=o/=ia?U-J-c9Oh~H^feG[wv: qelAIlg2DgafM$^w+mUF.MU=b,Ot?`V[QVMbU/' );
define( 'LOGGED_IN_SALT',   '?ul{M)aEj4M~TG5lS;SZw#aVaCznLv3SseO]/aHu9Ziie[~$K>$O7*CS@?)A=`4E' );
define( 'NONCE_SALT',       'v]8MM(vDJ^#, D|jP-F5*BRMne4DqiWknqiQ]-y*C44x0,!H}eN%|e641CL6J?$Q' );

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
/*define('WP_ALLOW_MULTISITE', true);*/

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );