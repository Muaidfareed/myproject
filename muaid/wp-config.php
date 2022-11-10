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
define( 'DB_NAME', 'muaid' );

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
define( 'AUTH_KEY',         '4`Mkx>1r**$hU{bN6,Rtw/>C-c. ?YfS;5$N81>R)UF#D},178jsc/Y&+J7hGAIK' );
define( 'SECURE_AUTH_KEY',  'y-[]>I#gP([6W,_u4Ta<n$.FwYnXpim*N7A5j!z1xzE0rJo5=x1Y8UP17S2 ICT=' );
define( 'LOGGED_IN_KEY',    '7S|aS5=)1=wa;C$n~v*fyzzyX-2xpl+!b0y6 &bMH+v{|C)zz{43$o4[IL84UxV!' );
define( 'NONCE_KEY',        '9Tc5[u`_*rD!yi|R}r:x19Fud8^iZ$vbt3a`3pA3Lt!3iJGdgM=nrFk4dZCIpKF~' );
define( 'AUTH_SALT',        'R3~&E`bh.9B?nf_5wsgSOe%T.oYrCoM$=e)H9ysaA9X_d/ykP0:)q};RiDw+:@>Y' );
define( 'SECURE_AUTH_SALT', 'F* [pM!c!|OB-tFc>%@5~[KUsX).sg}mkK3}+Pf8B5)wo>gcn*HU-=Us+)qWJK:e' );
define( 'LOGGED_IN_SALT',   'nR]-:mw!OCz%q m^];~~rk}Z2+#T.G3o>c?Jhg A(duRZvI$1k Byis>H,Ctv}=$' );
define( 'NONCE_SALT',       '%Z!gnA8C2d$fC|/2%IN%g:@KiiSz=uMWQ_dt?~yqNh+II=<E;p_pK 6HYh3SK3Vv' );

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
