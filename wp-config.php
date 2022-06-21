<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u593665750_FLVAf' );

/** Database username */
define( 'DB_USER', 'u593665750_2YHki' );

/** Database password */
define( 'DB_PASSWORD', 'hibuYzKCrr' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'W{$3SM4LVj]<]bGapm{_0a7SvBg|7qE:^-Zw>g#]Xl5;K(_b*J#cSjQ*69-v2tq6' );
define( 'SECURE_AUTH_KEY',   'Ba|7BaY[]S`3}/ua To_<>UET?RaANXJt[}1HB(7HO^b{|D>9HZ?48)mrewW,+9s' );
define( 'LOGGED_IN_KEY',     'NT~Vj;zIh,U:kd1|/NO*D+XVmnYeH}.PxY6VM@UcH$7WPs;,Fc>iOa?TPp`w;Y<)' );
define( 'NONCE_KEY',         '1$!4l;keZe?rP&?C<Z!p$> w%2oSkP=7xC}e>FS[?JQ}6>QGX+Ufd7]w2VH0#uua' );
define( 'AUTH_SALT',         ' [0Opf=8bv?@#m*-#rCb7HErHe2uvZU)CZe>MwjW Ao;LVuW?*sUj-5YK$TKi8T&' );
define( 'SECURE_AUTH_SALT',  'k{Hsl;G?kw$lXZhmB7_cbY?.WcD)ZjxqBiVl+6Oi:PM[kn.f%$~=AyK}e`=(`+l~' );
define( 'LOGGED_IN_SALT',    'JWrwmiTRk{Om|aQ-!p(wcs.,&3C8{)!b:K!8|/4[|=hs_:[>pb/p0Ep:QzF5dk[x' );
define( 'NONCE_SALT',        'mEB&O#!uo&(x&U5b5f4sJqhbB:psDRf]W%?yp]M1+r${+5nZsv+l8x_if5zM4]jS' );
define( 'WP_CACHE_KEY_SALT', '{&[g6!JSg{/un)!v4[{v0HN4.b_>c4]h!og%Z$+a@6I6A,%hHZ!m2x<Vcrp5T<*;' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
