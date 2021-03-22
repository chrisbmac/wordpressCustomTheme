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
define( 'DB_NAME', 'wpdev' );

/** MySQL database username */
define( 'DB_USER', 'chris' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'sAiN@P-ZzE+XgrV`ra.m%>~t(/$T+]X.w8|frmpQ&4U<c}5uHjS^T%d}6][hNI^R' );
define( 'SECURE_AUTH_KEY',   'Y#^XmSv,h,aghFGcfdflohBeeHJqgtzk*?LCp b/W7K8i38#<6|kvKc,>c5+Cqs}' );
define( 'LOGGED_IN_KEY',     'EeN@*lo86dHr[#}./h}usV:A7g8^FBMuHHs&iO7s0eG?&R5x^A6lHVI&C^7w<aZI' );
define( 'NONCE_KEY',         'e!Fkktl19mq)*^m_7MMw r9/H-9;=@jVqEJq;&9q$`})eBHg{ F| D.42k+906p~' );
define( 'AUTH_SALT',         'dU{XuN!33lb~R:v;x}JMn <:Cwg!crtO$HmeH8iZS0O8T9*+?RsKP7&z=ZKG?+@P' );
define( 'SECURE_AUTH_SALT',  'C;eRvyp{wU(cd;)W=+W3F=$ZqU yen6v_vu/]^2T]IQW%u?.97N)o2|5Yi6pE$h(' );
define( 'LOGGED_IN_SALT',    '4>S~rJ *mJLEVA+&!7V1Ejh0DJRKdm:g^ e|?/)a1RH#|:VXX57*w8Zmb?PVX`M[' );
define( 'NONCE_SALT',        'o3WewTtdT]ele)zdu9lE|Mm5Cu^/pw5cm[+WL6a==1#kTH9:T`$6Z$%e.+/2J[(b' );
define( 'WP_CACHE_KEY_SALT', 'I:sGK@LjoF#FJFcu}75/LV,L~`- oRti5TG1hE.JN0`]8H92tPGmjrFT,Y}ls7Sr' );

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
