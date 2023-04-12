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
define( 'DB_NAME', 'becarabiawp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'hQ[$&TZ*!`({L?k_CdB^osI3$t-D]Jh`qt{N q7gS^o-,M}Mw0[~AWovAq33=Gxl' );
define( 'SECURE_AUTH_KEY',  'jxs)cN$;6lM#bzcJP+ulGE@LEmmb?hjIoN8 `1N(x#%<Ix~a(tji+%uzV)}vMB~9' );
define( 'LOGGED_IN_KEY',    '..r=el-K.j/,<{f?A?SP#<)FlbJcyv1W ~+HOrz<DH?/Y0ug6,cz%>Dlh{nq;me@' );
define( 'NONCE_KEY',        '/Y@#?W3.L~RA h`hc))(j~eA_$xjsO~gR(Qjn{KrQMBKj/0%v2t_U/)@&m}pvmS%' );
define( 'AUTH_SALT',        '`k{ccj[{IVn03j`j)ZqpefBa*l`Lvd~UV24-aIA&7;z|TU4{AbJnl23U5/+YPENE' );
define( 'SECURE_AUTH_SALT', ';Y1[-UX8rgwV.S9Sse+7.:d ;R~{TlGmRpKnH`:z^T`mKJ@f),|L(G)QXxf][yov' );
define( 'LOGGED_IN_SALT',   'Z/(`q~Pf>n:3I_.z+a5?@8m+J!0%LZQHUDec1`g`e(1%mDnBQp>SD1^$erYptIiE' );
define( 'NONCE_SALT',       'm8m?2=wo0zI)p/r2)O(()#t:x,WSyM$6fR)*D^#tLf@_3no!qHH(X{AYny_ORWYE' );

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
