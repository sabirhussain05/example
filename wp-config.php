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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         '*^9axI<Ru@NMt`J}?|GH_l8^?qK|D74o!-~(Z>0f=G>?bQWLrC4nnNw?km<bx(<1' );
define( 'SECURE_AUTH_KEY',  '6QkZX^vA{M.uj9m;FYTNf)Sp@>Ew_:9Bt*Z4(X|De*E)Km^5yw?zcl~@ggl{1G)k' );
define( 'LOGGED_IN_KEY',    'u6_kRW=y?@(7*-)&WdD&dc}=TYJ7|Wjd{b0lC#kn*e<%>kwkgW].h|F1,!@m~c&-' );
define( 'NONCE_KEY',        '<W8/j7Jipj^QQj([8R&_]o9(q{I%y0/Gb3X}C46-IPCl2)%&wRY NN7x^`pms59j' );
define( 'AUTH_SALT',        'x<{uot~1yHmHA1Jg(yp{4fgN5Arz9YM[@K+<J5o<;c[+D/)/[vIk^A$+>G[ZN8MF' );
define( 'SECURE_AUTH_SALT', '$9P:owbF]gnX=D:3R)L_qV luS3#.t1bolp$MM6$l.Gu2Vkbu|<pk;YLeT;vCX[1' );
define( 'LOGGED_IN_SALT',   'wNeO4eMO~pf{@KUK4GR0lZ}QY{3iQA6^gS(s#()TktIb;7!{,725a}R~}FM&)m|d' );
define( 'NONCE_SALT',       'WqwO#g]gEwJeG aIAZm{!594hTPL{}`*dX9>$`=Ao{S_D;:n7_Te/)ux,0m{usyr' );

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
