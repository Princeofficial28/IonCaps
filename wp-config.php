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
define( 'DB_NAME', 'ioncaps_db' );

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
define( 'AUTH_KEY',         '1yCg@E_RiGBo<g%;wD.-5s,$RRCy~H#z7U.:,LSFtmN%l>gXr^G$|!pQZ4t/agY7' );
define( 'SECURE_AUTH_KEY',  'w53Lw2R/k]HlIjSy)uEw<-c.%-3RCj^E~sUuXiVJj5%L0]]1Q*[C,;TE@Hzt<sgO' );
define( 'LOGGED_IN_KEY',    'MERAM`/ +zB2}vnOs5uB3ya8o|jXRWhBIwdgz,85;m4JQ(mPGyyi(AjVX<d{[|?p' );
define( 'NONCE_KEY',        'A]K*<UJy-&=O1{V<md~>.[[wou`UE[HlM>@ w dPc*oXJ#gVI+2fV_!>V?laZt5 ' );
define( 'AUTH_SALT',        'GFmgqrxiaI#g@p9XGB$W^Yp-SdSQArwUaJ qxAt7*/OZ3M~?8..a9y[]VvAD9#{@' );
define( 'SECURE_AUTH_SALT', 'EQx:~}$kyCG!nz*ne_T3ph#m_Z`WcBwXg9sI=U(R7PnCKafE~PE%u$p?%CWGi!?8' );
define( 'LOGGED_IN_SALT',   '43FBt<S^eO9W%_!nf]Y@_pZXJ-_Lk69LT<hrlj= %^g!/*0&|7<R3wige6d19E w' );
define( 'NONCE_SALT',       '[xXU,4[1oY1Xu_Y0?9TR>R#+_r}E#aF9Hpua~D^]zb;4I[AX.8y,%KzelLD.trtl' );

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
