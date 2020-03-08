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
define( 'DB_NAME', 'choigame' );

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
define( 'AUTH_KEY',         'vaw*yE)Z9(NyO8T=U]:T14X%=Zhb5ozTLe,Jh!-2yl5gj{hNK sveV[15/ULGgz>' );
define( 'SECURE_AUTH_KEY',  '[?K7Gex&^h[IV&+ HIx1RszS8-endj-m8~utf3<w6uY]FP``uo02QQ5}a5So0<gg' );
define( 'LOGGED_IN_KEY',    '4Op(y|~25x AK/x,m3Pn9Ie+ux2<-6^U]H&DpWA;IF@F1w]CJ R86k%d?,e1kKD^' );
define( 'NONCE_KEY',        'wK /=3FFZ;sLL!UJ[FoAHKa @TY>yD[?$i_M?i|8IFz(xBp-,/s2w${<Y>q$N*6f' );
define( 'AUTH_SALT',        'v)0L]_vn|r- On[K+ !2mLos?=S+rA0:-M,k#iNn[v~y_X5_$VP[zQo9Cw]>*3T3' );
define( 'SECURE_AUTH_SALT', '>ij5Z0b,zEwZ}qf;ShRC|@Fv@@ar{j~jO]<u<(^K-T-5,r:l?}HwVj0aK|AW;.`@' );
define( 'LOGGED_IN_SALT',   '@_gGo?4M0#ZCt(*gB2@#L9+#5c7V}FQ>x>n,?p~=+EKWbOjE%iPbeE>,lYf6riUF' );
define( 'NONCE_SALT',       '0H:oI8k2&t6n%J{Nxj#n<~B#gBU=CR.:2$k@Db4],&5K6]^] ry[>VJyU3g`nM!g' );

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
