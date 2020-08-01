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
define('WP_CACHE', false);
define( 'WPCACHEHOME', '/srv/disk4/3527530/www/jartesfigueres.mywebcommunity.org/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '3nbhzfH7+MYSQL' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'N>,N+(JPQs/wr:eQDU-4>XWILSHskF)hHZWc/$42(*fztstpu!xoz&O1^n$ Gr4(' );
define( 'SECURE_AUTH_KEY',  '>S6UzJCl8ikGcra+4`YtPa>dwZPhTqGme^@92Jeko!0-aM[B;@sO/gUP(sN^6-#q' );
define( 'LOGGED_IN_KEY',    ' snf3SJVH2m?Yafc`~{&k%8?nP[7I!&+T[7R]%$QT/||xlV#?a=/.O=<G[]D8-h.' );
define( 'NONCE_KEY',        'Ig-;_%I]<rlr]P9@Q*]dAS`i<Jr&NHN=-Oys^sxerq^d96sJ5j3m^%^H;L#xL|p|' );
define( 'AUTH_SALT',        'P(t&YTz[1==crqg*9H(IdhH9slsT]MV9x4LM$&>#XvZobAo>^BkbeN3%l0of>vp@' );
define( 'SECURE_AUTH_SALT', 'j1J8)pNNA$&cvCzpWHp~CJvNx-)rL#O&4rCo~Oo3S4wF.9/xHjI3^*BINNa~>F|(' );
define( 'LOGGED_IN_SALT',   'l_OqF!,:ecK8e3!B9EW33m0:GMzwSO4]#F|z9<FaM57$:I{a]P9g^bQq{[WrCOn}' );
define( 'NONCE_SALT',       'P#x`+p5kl`NYkjn1+N}xI*xf0C8D{~|ZKBPpV%0Xs,A=Z0hqp)HhD]jWA66$3`u1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'reports';

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
