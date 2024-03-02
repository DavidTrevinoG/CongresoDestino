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
define( 'DB_NAME', 'destino' );

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
define( 'AUTH_KEY',         'C=n6i`4k;pmG9.WAHP)^><p$%<fafwBU{:LksM-umWbiHi(G]t@>[IWD)a4T3(@x' );
define( 'SECURE_AUTH_KEY',  'shna:??hm?7G8x6;a_G1a(Qapw@)<W3MA}%4-l.2xqPA#KE$m#*8q-&1yK9u*Rbg' );
define( 'LOGGED_IN_KEY',    'g,]`0+S7V6/-)q=i#zLm4cDM;IaWfSSme=jg&|p9iwuLKN3-lam.nwm_={pE42k5' );
define( 'NONCE_KEY',        'NV/RkPt,pJRIad{LeYEsFQqy=@gZHUH7>SX1O929woRzJt7qY-PZAV*v9yEv,5uv' );
define( 'AUTH_SALT',        'b1-Kl:Q0cTnj;:3#Ruq^^&:Rq[ IEW]%oINscGdclCio0?JSPP>fX~L{?JbRn=`[' );
define( 'SECURE_AUTH_SALT', 'C{i:}.[IP;w-UR?<O&2$j5B}A}C(DQ:-{X]Iz!{9;l-}Yg%j#uS.I&He8{=[Bk}g' );
define( 'LOGGED_IN_SALT',   '<uhYIKOffK%eO|JA{-31|T@Lfzn~TzbjfglOS{gi]v1ZPA+~p8Y8Pa(~4}G.CP.6' );
define( 'NONCE_SALT',       '60EUF?1d0r._|wp>%^2-c=(]QZj!Uw9l(VF>2:RC`b7#4AXmU,TL09gm0N`J+k#H' );

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
