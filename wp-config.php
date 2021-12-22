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
define( 'DB_NAME', 'customshortcode_db' );

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
define( 'AUTH_KEY',         'nWUWcp{TrQpzt-STN?qmdBHnuhS/m<wgQ].ZsL^=F3Av2ON:2~R2,rbl2?HL{]t-' );
define( 'SECURE_AUTH_KEY',  '+dHEtXO?Z6Bb+Tw!i?P)b*[[2{c}jBp^w>2|P$:v_jD^ONQ90Rk:o#u;k*!}8>%D' );
define( 'LOGGED_IN_KEY',    'k~<MZrzd32ajsBv_cImNlxdY!S(M^/_{cki*WClxm:el#W;3GYJV=_o>bdy%.[y(' );
define( 'NONCE_KEY',        '@W?[}HT&V@;@BzsY%]c.RtQRxfga,LZL%O)je.HhYlW(D4+fHwM<)&g.Qns.~%V ' );
define( 'AUTH_SALT',        '1~`.r,79JPPiRP/n>PH@)jtlF >Ozdf8[~@[0j9{ Zo|wn${yYK.9e`&,0Kgf0SZ' );
define( 'SECURE_AUTH_SALT', 'Qe%v|ehZu;*w0`R<S~SZM{F4eYZ<7#`2mN[`3Zwa5s*bx;}&4@-9y_ dL4+Ujm;W' );
define( 'LOGGED_IN_SALT',   '.2RK}mVz29+!n*&zS}(t[W%vYd.@z3d$$PH/+qlw=hzs!>uko!bs7Sc4D3^Q.S n' );
define( 'NONCE_SALT',       'NetHJ7vD-F-b&$nUJICZ%TqNsV#gw=!`<)3Xy .$+_w}7rf-93-5IY=l,90d[NOC' );

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
