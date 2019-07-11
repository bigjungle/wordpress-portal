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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwdpwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'KmLv`[FMRrQIkF^PP]jR}#m%d$T!,i=PINyahM4?23y6I8^<>{20C2;L[>!!i_g:' );
define( 'SECURE_AUTH_KEY',  'WXD7`<|Xl$trR!sLJ to7d+sG8ykeD RPN/+A+KHR1tjSnVbjT7Yz*xceAZly$Ms' );
define( 'LOGGED_IN_KEY',    'SS}Q@,5)UWq?^4</P[B+X94R*/{f6:f;TwPlNu_YzLy39Cusbol,15A.(+&}wxb>' );
define( 'NONCE_KEY',        '/s/ T2b965ac>l,jx_vHs(J>(}bHshA1RlD_eVgI~(lyx1eHw[c(_)CCA5fHcJ7&' );
define( 'AUTH_SALT',        '[!(O[zUg2tPyeXeC8>LspGCPdi!tZtqSxm+l,)U*@tCO-N*1g[p5)EgLht$TbJ(M' );
define( 'SECURE_AUTH_SALT', 'KY/$viopfKdqYtudb/}4a,gsk|N(2],}~l3``+Kd2}z:g_mLm)ty aE7D_*8VYUp' );
define( 'LOGGED_IN_SALT',   'UgGrCS;l@eR3@?Od~G|AzP;&3s84m<7C@AO^/>e5&HU~q$C#>)eLh9F)k+xqFBFW' );
define( 'NONCE_SALT',       'z5QmF#jhyGx5+-Bbq}ersP2VYHwems)&g}WY]0rMQ.j,[>&u!Pskg74FUOOjQY)(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
