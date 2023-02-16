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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-23' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`B:-@p9?HAhmBXfF5atxBW&uc*|[K,*>`?`)$k|xZM[vX8oL,AS;Z(|`)I#X4y*~' );
define( 'SECURE_AUTH_KEY',  '};^| #?F^/AwE4vl7o_6@}q 1`ilS+M9J3f(Kk7Hh7k-.3]ygX2w&o^>(.sb]YNw' );
define( 'LOGGED_IN_KEY',    'I?|FFR-t<Mw8-*H0t6=iF1|Y UhkE4=PcD>VEEy_k8Uc$~^pt)wg,y!/B|NMAfW|' );
define( 'NONCE_KEY',        'F_]9}}Y;<6{<pZML=~d~e_54%B5[h5r2BJr%bWen,^e(b)Dw[lUSm])VrQ2L/b(u' );
define( 'AUTH_SALT',        'xEtZz=C&bvZqsD~_AG35lkYy(8WfKrciYZyiMjr0NMR}Fh<]~[d;$xYZ2.$Gu5O2' );
define( 'SECURE_AUTH_SALT', 'SZI~e6%n;YuEwh!0*$W;QF]&X1qeKYK5rx7+yeppVvr!z^8aPO/d~`j`GEH_rGF-' );
define( 'LOGGED_IN_SALT',   'kXNa-cdV{ps~~Z=zCE?|Ix0EK]Lx!neTa0c=<}=%}>0X|] L~!}gzSqk!c]L8`-_' );
define( 'NONCE_SALT',       'R0b[/H|C0[)c{{G^Q}rgqv[K/h1q+Xr4iiS=yw|>wO`rne(ND6Iu}: M$p|lip2&' );

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
