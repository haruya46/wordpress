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
define( 'DB_NAME', 'wp001' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Seiya0128' );

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
define( 'AUTH_KEY',         '0(}KnwxwIB.`.A]oAKbd^@7E_;r~JPpp_=D<}9LmbZ6Rr}M}*C&Zbe>2r`6kYGg1' );
define( 'SECURE_AUTH_KEY',  'wB!(bY+s;Et^>Cn{78U?=!Rt8k(NiX4rtWvL57}{e1Eyl9(F-wA-4m=Fo;,4W5,c' );
define( 'LOGGED_IN_KEY',    'E)YgP2yXnAZ[1/BmQY:yf;pH&XS#%f5YU4jVhhGAvSk=t&@pUt@|UeyQjr[690Zs' );
define( 'NONCE_KEY',        '*1V1h-;F#87vOz*ST298LTqwU[rq/XOGtlD%]Porx3<Hn,:d<C7JEet`,~mgL<w`' );
define( 'AUTH_SALT',        'JP/6_g>-y}T^<Y6N15G6a>$R:2J6bTS^y-w]$U2%S}6X+/=T|!`-7I{q!05R ebM' );
define( 'SECURE_AUTH_SALT', 'h~E_N_9=m<2Wnt32%J4_t{r)ebNvq?Fm-:|G!mubj f(I,&zB>oV)F |OrDD,Kw.' );
define( 'LOGGED_IN_SALT',   '<l/FYp2Z.af/6g%XjP;PCHyaah1(cnO.tQTbj6k2om+e!Kwkb]OA% 1Tihszt^/G' );
define( 'NONCE_SALT',       'P8-b:7JwK9Kq9t#|[qRPn.gWoWke]Gr3Uss#E2 NrIqV%x1-u93G8_#;d~x# m?W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp001';

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
