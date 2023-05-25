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
define( 'DB_NAME', 'ticketing-system' );

/** Database username */
define( 'DB_USER', 'tickets' );

/** Database password */
define( 'DB_PASSWORD', 'tickets' );

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
define( 'AUTH_KEY',         'i{&ugXgdmZkw%T..kmDW$r,?z%EkBNO@{cr@{ETZMb#R8|/(rre_s}HPR;e7FGMC' );
define( 'SECURE_AUTH_KEY',  'avMfVW``${btl{Yfw (MQ}<pC4atQ8TX<tPa4~v.^|8K%qA.w&VcA<t8(C$AlN}[' );
define( 'LOGGED_IN_KEY',    '%/(.U1jqUoH-0eT9n%`~xGQ8kR`~R$5J`zsNw&1pzeJ>:CC4Cr$M;bE(ZZv>) jQ' );
define( 'NONCE_KEY',        ':$4-;a`;/a%o$EFH$@@(Lv+$yT!6qmT|J^va7@ccUC38R22^n.}SXdrgcSk?BJ B' );
define( 'AUTH_SALT',        'qTb>>bw<1al[Wn:SXmh+1yn<~p4&vm/>7`CrT?K3o<%W67m(9;)/*[)C{M2b*JvZ' );
define( 'SECURE_AUTH_SALT', ';4%>>ERf|Z>euI$9)8SLEbn_[oHyY}{{<@R/Y{ucoot?Zc2vPDavLc+C>S@o+ruB' );
define( 'LOGGED_IN_SALT',   'A1/JR,}+#FTcH82*7U%k-Ee3|F{p^n-UTnV?@j2:Gz1?;d`vN5EkxlM}FBv$T-s[' );
define( 'NONCE_SALT',       'JH`BkM_yn{p.7CIh^uPZx6zb@{uUZ>zhD<Q R1dyA_:P46)hp_w9i^)[[[U@8Tf%' );

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


define('JWT_AUTH_SECRET_KEY', 'home254');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
