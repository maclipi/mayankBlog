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
define('DB_NAME', 'mayank');

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
define('AUTH_KEY',         'gca=K8jCu{5D.|DI]MJA0;yI(L=7OWQLP%xt0ndgB`w`~#=37u4%8r~|i<6H2N0u');
define('SECURE_AUTH_KEY',  'tH5*:{TA~`=15cS+suAe/!P^C<B})<*CU=tj|ciD7t48[/pLDKm2ow+T~H6`Xy^7');
define('LOGGED_IN_KEY',    '),/K :qVz}Mb;=P1{ys(I~yU9+4[7~kuLB[/~5|`*Ob]v)s>)UE@9pA5I]~_R1 ?');
define('NONCE_KEY',        'Xk4hLj9W!xwvO=(!i!!J-<6(I4k#IoV^;DfFnG]aY?C{ZY^F)6j1)i$]QC37~(0y');
define('AUTH_SALT',        'iMP%$59@dow/JmZ-A{#:trAix&g2*db5pG#IWPm5)c4.t,uY34zuLkq+Nr>KN`U-');
define('SECURE_AUTH_SALT', '`5+Qh#20X/LR-:aib6S^^T-!7}WWQ5@<R&2Ddv7#?+2fdLY~I^-5?&<PGUhibs|-');
define('LOGGED_IN_SALT',   '=dCHV>z3yhWM:?HN^-leJGt6(`Sf5sF[<}V(ixX#SebRR7C;:uoXDJ|S!JRd7Ics');
define('NONCE_SALT',       'jYHc3  T>GjA5-CAdw)eTqZ%vS<gb43;: t!$19%?*|c+Cqy{AD*|)wh5:)92UO9');

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
