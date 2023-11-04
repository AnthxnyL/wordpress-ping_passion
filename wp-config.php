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
define( 'DB_NAME', 'ping_passion' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WFEua6X*A^~;:u[/psc<lg%icz%uCm;a|MD(SnE@nAr,&u!CUwPG}P3ZI6(_XPu*' );
define( 'SECURE_AUTH_KEY',  '6(r<XKKx~>T%N?vn.Ujd,YN>Upk/},co-wG5nj0LHi&6C:DIKL0h>LE$n_3EDSV)' );
define( 'LOGGED_IN_KEY',    '8&K]-A6.HzcZ6Dj<@eqnbM*V;b`dT=ANde%H5OL)gDJwZ%OMe: YXOvmqFx<4g{m' );
define( 'NONCE_KEY',        'XDDkc0B=%<`##?hlc+pC*]&,JrE=CtcPN4jvv%Ex?:}L|&m&1o.~jPU1]VoH:iKD' );
define( 'AUTH_SALT',        ';K.1#Dq.w3KIf_fc4:N<-8_arp?`2q&GuSl$0%4hU6HIjc=BJa,FO{9abllgwf2:' );
define( 'SECURE_AUTH_SALT', ':}!TZ_NXf]& ZV):,h]>HQOL;,_=m`Q/F>$]<NI(K#TW2C8#4$#wlH1Sj8?%u0o-' );
define( 'LOGGED_IN_SALT',   '4;1SxK6]Pv @`Z$Lv[fU-q4a}:/;gz<iPTYIvVZ?]b9+6OJHBae4rqpRi=gi+of8' );
define( 'NONCE_SALT',       '@h!0?A8Ox, ;SZu%FONp(Z(*hqvZB/{^HL!rJE8k,H2<db>r^~7$gzs1a_nDKU6$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hdhte';

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
