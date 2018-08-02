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
define('DB_NAME', 'test2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2t_p+D5aQxXN~qQQ*X <jcl)wQEW#&j!xk[gD{cfoxSipmJCa9!bSNf#.f2B=y.M');
define('SECURE_AUTH_KEY',  'TUac=:i~-3,UmHV9twG#@oUi_NqWVqmQ(z);Zxhx_9U<I,NH&`sN[z5a4H0uP@9]');
define('LOGGED_IN_KEY',    ')85/hlB=;1cy^#g~lJcxFHttKM{=qBRI3U_cVNaV$h?9*vi=}/3iP|p^!y[>>3v2');
define('NONCE_KEY',        'RX_1U9_4fg/`=k(>Ddr5B3xa4>[ZYKfsqC}5?hHMX2boqtqK++|O)]pf`>@h<e%;');
define('AUTH_SALT',        'r}T?|KA<LKJa(O $[z.@=-NV*/RV!kPR(ei~$Yg^R(EGc3+AC4|(yXwhN~sh:+NF');
define('SECURE_AUTH_SALT', 'rY4U]R80)?PJc{d^M]d*#.:z]<<PRSG96h}&Pp|].7{lqBuhRa]C<t3l^|M3~.YS');
define('LOGGED_IN_SALT',   '*sBp~o4iP(#VHTE<iYtO)myo*~_A~VMN$a@@^[K},n)a{1tm$Siv:p>u.B%LVZqx');
define('NONCE_SALT',       'x1 J[6PWi9D@l<3[wpX#w;Iog<332M C`}H_ G/WaNsD{ID(+R_C-@8>FTY5qKE-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
