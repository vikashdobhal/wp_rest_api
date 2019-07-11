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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'UwH+N^otd>D6wOy#pt6``MMKuE]s{vL-lm,gL5p<Cm]L?4Q+]USf03IF:|j*K`dN' );
define( 'SECURE_AUTH_KEY',   'pO4H$]()8]#lV@|%WKU[V#-ro_n`p`Hftia]4p;7Va!^b1AfHk%K8 q*rUY3f1}|' );
define( 'LOGGED_IN_KEY',     '55tF(H)v; %,f%/=1t:sCmup_-2e$F)bgN~rOM4[>7vV*ckf&]G1H#CwoIXP+p X' );
define( 'NONCE_KEY',         '3o&^2+:g59YPN%G:G`05c1x9QiB =0f#V};FM(W67*LQ4*wq%]sK[EVK3+8e|h.5' );
define( 'AUTH_SALT',         'HImr2RJF#8*r=L`twl%_7xn(PalpJYXD^Se]KLP_ypcz6N4Cu*QZL_GRj=X4+[sr' );
define( 'SECURE_AUTH_SALT',  'XDUctMxYe`xpvwbIE?*A#s?vy:y:-/)JCcfkZKM-5o2D=v=Wc_cj,P;||<OpVStW' );
define( 'LOGGED_IN_SALT',    'm:ycmUX[w:5_pUr>9E+`[fC/3Cd)E_/!cou5P9Js[!Q_+Kxz~~OLpapCYPiONg, ' );
define( 'NONCE_SALT',        '02a(j]>A:KE]kSHJ7a+8BL|ukY]X,[#F^v?rtu} 2<t&1byfi*2oS8[DhI#7]9eO' );
define( 'WP_CACHE_KEY_SALT', '9<B: L%ue)yc5a{B`^JxZ$9?)x.$mAVMztk.E)5-+t) /5:,z$zWNQN,6+Y<pH3/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
