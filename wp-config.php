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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'lucamisty02' );

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
define( 'AUTH_KEY',         '_d`MM]xW2u/XUvyej(!:zP3`%Ytf9oQzWwG`1:l[+,v=@*|S U.4|Pr+Lcd6YqkB' );
define( 'SECURE_AUTH_KEY',  'QLO[c0!h;[T/pnn0.LYFvGLK&SX=F|,,PYg35lN0|#0azTvusjd*-C{Sgq^!L^IQ' );
define( 'LOGGED_IN_KEY',    '#zBVuD4^.0}vo9I!#?H`)GiS&EW(Dn^AMIJ_v%TII`vS66m}hW094_em$&XxH[6*' );
define( 'NONCE_KEY',        '>A.5gjq%9db/4UMe*X`DQ%xQ-f?}Jfgl~iz_`*7mkt,rf R)$,^kV~=#V7|I(}gU' );
define( 'AUTH_SALT',        ']g8K4xXu>S.]W56kxK0baCIq*8$BLYf]S00,A1`oBfm9D4%+|.yqqE3 >m-^K-t5' );
define( 'SECURE_AUTH_SALT', 'YrWdK~<*!V.F 6<yKo+qg.i.d@3Ezl_XS!PdGQb_mV/,Yj-;5B*X5Y{_f_> F{eF' );
define( 'LOGGED_IN_SALT',   '2FoR*<RkH^H idor7M+c6aBa5&;mdbs`8>|eJjE<iRIT9m]E}8kf,jsdhh+a`@:U' );
define( 'NONCE_SALT',       '4@lYnQd91WhKog@u5VWl6?]w:8a Yv3 =9W1JC1pj^G`^$a.OiN)VfM/dk*jb;Tr' );

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
