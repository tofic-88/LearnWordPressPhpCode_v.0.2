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
define( 'DB_NAME', 'ndnocv51_learnwordpressphpcode_v2' );

/** MySQL database username */
define( 'DB_USER', 'ndnocv51_tofic-88' );

/** MySQL database password */
define( 'DB_PASSWORD', '$xP8*CASBg?{' );

/** MySQL hostname */
define( 'DB_HOST', 'ndnocv51.mywhc' );

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
define( 'AUTH_KEY',         '(+;J{H5W!K:84ohf.&@e|g=1aJ4fW|CV7kcU!H]!`V8m5!P7v`C!5:v.ZC>0#CWB' );
define( 'SECURE_AUTH_KEY',  'Y#TB`2Bcps)I((;zj@z9dr?+Qp?4@IPSJHl)3K17V3k*t#6Hd&w=tR*b0H<:DW~^' );
define( 'LOGGED_IN_KEY',    'uUCn/~j8(o{pN/.^;1b;MGPr+tD;)QRaziaMkhOViJ)5,Pmu`BN[O+M[fc2Ee;vC' );
define( 'NONCE_KEY',        'O5.g+Zsdky`|R*X|*fv[G6%&C!.cyC`NWDrZRT~bsSyq9m?d[q%qnH_x|=za;].E' );
define( 'AUTH_SALT',        'F(Wn[Mviey4yo/UuoJ.nIrufQm-0lN  2XB>e8]t~=(T`9+}9k2`lvG)Aw?Zwmvi' );
define( 'SECURE_AUTH_SALT', ';;X5Ca]}^N=b}<cyut?#:p;}PRY=FmuC5~Q==vKJj4:@]Ql R cPzPJj>HP44:hE' );
define( 'LOGGED_IN_SALT',   'c*h#*.q_Iuv&j(}.`[D.60~(FE>7~h{~SAJqxAx+or6w_uIpUkzDSBD#_>l%W1HF' );
define( 'NONCE_SALT',       '2ER(6)N4FXlUl1t?pBzm_QrYOrHS<OtqAc_q^#zV9S,/wq%T+q]?;<O23:U;rcl(' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
