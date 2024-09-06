<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-Teste-Para-Empresa' );

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
define( 'AUTH_KEY',         '<DH7qMk[x||XsKxPgoSmeeFmE=_?7?.?fv@U)/HbMJ&`eHP~3*cLQfTr)|LlwDL5' );
define( 'SECURE_AUTH_KEY',  'Z>]2kWmz:Yvf7NZZPJe0czMD:6m$b=::nNVSMpf=uf(^MI_54w>{Wg<DlV<,nA[}' );
define( 'LOGGED_IN_KEY',    '@l/jpVF{TDKuK!Le|m]mYEl:8]Ni5Az}Ngt$,T/{Q1(Xt7N.G@9_yQkF?yvS*;3Q' );
define( 'NONCE_KEY',        ' .&j^&-/>]Z*9%1=lr,!!c@#M$=n#E|25LdoEq5H1^a}5]Ubex*<sm%qr~!:?s]{' );
define( 'AUTH_SALT',        'uN,N%mDkQBOPLBW#qWM?wyv 4FEO^9R%^jn&^`o}+tn9>7n76Myk +2^pCo(|2D?' );
define( 'SECURE_AUTH_SALT', '[]193f~q&3+Y3i-0ff}7h++h-e<4`Z6tWSHqo*m%9i[_~ZQ+5J$cA.2u8~eU7reP' );
define( 'LOGGED_IN_SALT',   'H^fzF[2IOy1#drKBZd-Z#c bK|$!z+ss22Wu$&}facR(6#@:l+%dcW-{K9ev[?],' );
define( 'NONCE_SALT',       '9d6.E7-D43s9c;j $/cdi?~zoz0Q!.K@i:wZ.6}o!2JO[C|{T4.]wme3v+61OljF' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
