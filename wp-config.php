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
define('DB_NAME', 'myWordPressTest');

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
define('AUTH_KEY',         ':u(-DP`#]|3@W% @j:Z+sRUqp?=tKEX!i?oiL,%3<Lox[;e~a[(Wf7O},)U!Id-Q');
define('SECURE_AUTH_KEY',  'Y<q3U[[{N$n9a!10%2wro]&|DCBhA;6+hJX)qZ6%ewqkyjNcW7isl1wA/fKZd&+t');
define('LOGGED_IN_KEY',    'W>Y#wCevm7((7v7}/u+u.N9TqFVFv^{7;r3G]`(|/K?sg9.sB,&0$oY-+N0Y0+5R');
define('NONCE_KEY',        'C/y*o,#vwlN7;{qRs[y@`McCA0:2F6&5wteJ|sR ];x4a{d,h/VmqK_gP|:azV9G');
define('AUTH_SALT',        ';I[vSLydL~~9thW:$[6TFKckRIravaNNG:62=26^c.?(-DT_5&Y2RU2kv!+S24;y');
define('SECURE_AUTH_SALT', 'm1=MPTQ>tg+2zcAE?A:T)>~E#fSGDx[|];ep//ihnK5$zk{Sv!G*x>~VQR#m1:.J');
define('LOGGED_IN_SALT',   '}+{KTLV_m@L`j412d`KAs5Qe<F<$~4@Q;H]a!w B/*[x{<[[j!Igo/(up?PuH0}j');
define('NONCE_SALT',       '#X.A?$*<luB&VZgYH.3Hj}g4?57!96vTHKUHzh|Z@EWpQ,1WA7MUZ4I2)6*<l.sv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sr_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
