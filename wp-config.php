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
define( 'DB_NAME', 'webdenj' );

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
define( 'AUTH_KEY',         'N95yx9sJ7!c,H10mY@({j`aCq2~QNWI!%Wr*CHYTRmHn.{>>Au`3nJS!BZv*h9Gr' );
define( 'SECURE_AUTH_KEY',  'VQ8;Nxb>7^~+OSf*f2%qI}FzC0I1GtR}iXd8AFajqs*MCA!R]x0HiN%MMN}!VRq6' );
define( 'LOGGED_IN_KEY',    '(h}8-K9/}$:jxMq?Wp31<y.e~%g4{`JqK2qUt;c^H/&Yc]--2hd]awDO9`{opZv*' );
define( 'NONCE_KEY',        '[%oV{,Z)Nd%/v/9.7DjDxb2R9Y8QtMva:txR{s`poHnVLAVG;hHivTj{Q&ErMnF.' );
define( 'AUTH_SALT',        ' ([^1L;Y_P{_itJ}vE$m1HRs;mp)*S./%DzqwT2jKV[.3fROk0(GRtd4yi9I>{8j' );
define( 'SECURE_AUTH_SALT', 'R#o|<$D<r8xqG.K{7h[YV!|o$gm&I[C`l$>;G;w$#ltjj);M~T hqwor&a]DJ52-' );
define( 'LOGGED_IN_SALT',   '%]B-I+pnP,Jr3S6QUY~3yM4DOAoJX;wpfV-tzzL{.J5VCzc0uO3BT9/L<.uD~6!O' );
define( 'NONCE_SALT',       'vo5u~c(3wt]wZAD+gv]uQQX8@H,G(+o2Fe0<FrSIy$.D[Iah!K0*-.uWp[gJH#d-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
