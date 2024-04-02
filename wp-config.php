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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'd-J4@%L@8D*sk^p(?{-:EnvaHcbH0)/4/ATi_29~t$$GI0}QFPRZSe8C@ QJ<:}t' );
define( 'SECURE_AUTH_KEY',   'k%4iBURY}iDuI),kp~#$1kkmpUIyZ;e{mjZvxA^wmTvEzBh`xHz&-L+oC AZ>q|v' );
define( 'LOGGED_IN_KEY',     'a,j^Mn|Hpm:!k1:wTS}7,&k<(A>d#%4aK2BL<UHWqV)HkAmDxPtsVVGvQnr?Z 63' );
define( 'NONCE_KEY',         'JX&[I?l=2~_<X# c[AA2:O|t^|z%JJ.7P/Zj@g4ZuA,A`?7SuJ|i=GqdRP,z*d o' );
define( 'AUTH_SALT',         'd(1/7,se7juUw*))_[S]#Tqdzt~#xI],O:]Y0o4cAQh Nk3mb6OK#6L(8Nf<zI+c' );
define( 'SECURE_AUTH_SALT',  'jU^T@+I7~W:ju%Kd =EQmG_n_s1%0hb-0F%a#!w?0A,>gh{afhC4XQytIe@-T-|~' );
define( 'LOGGED_IN_SALT',    'r:;^rv@nCNH:@wBv<0w$3(fe#_,%JS!KnGV1R]Wo*}.Ks;:)F3pM(:j>P.|^;ams' );
define( 'NONCE_SALT',        '4*A&q(*~=b1]k4 Mb<[4t[W[|oYg&Y_M3ry?qTuV47qQ9XyWds%Gk:im&Hmm!J<q' );
define( 'WP_CACHE_KEY_SALT', 'g_7:E+Bv{+eIYaR8H+ i6dfQTy@:C}r%%WJ74Jl^#}#@c:R@CCWa(s@oiQU&1ys*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'wp1.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
