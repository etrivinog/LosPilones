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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Clave1root');

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
define('AUTH_KEY',         '&+ce!e^$qIxPD_W,D}Q4`:@qvn]C b.<2mcKSYFAMF9b#Z?A.|K$F})fX{[<5^Gc');
define('SECURE_AUTH_KEY',  'a+CwTuo3!:<-v0i!bma>ZFYhW-sQ5ck7)(QO?m%q[/xzS2%}b{QQ.to)K~Y!kv`N');
define('LOGGED_IN_KEY',    ':nPDsWGd,:*>9;hxjv40l#?0*`IYDwI[QKvMkei`s4NcPOY~YsWn0ZJ:)Z@V=6d:');
define('NONCE_KEY',        'wgzyE&!a9mzk UoPWUu:Y)n.G1hv3ma92p[S+:Ei!cQ:?Dz/0ap!{/o~n`]?N{}?');
define('AUTH_SALT',        '@X8K#vM#A>>n-Y5/X>W!i]?n!sI [1@3e]fZ4Gc U] [VNXl]W-58K>n|YwD$?Ni');
define('SECURE_AUTH_SALT', 'jJ2: px(W>*KBw#aEY{B?@Qjcs7<w;gz?@emfGf:)_)L/3=x/E/TDGSV,<TLYl{{');
define('LOGGED_IN_SALT',   '{u0_6Hy<X#n.|nC?j>QS 1p|.>;H{MUZB@{-*9Nk0y`M$JJjsY.`c fQ9F~FNw(C');
define('NONCE_SALT',       '03o!@8]z>8<k!,6.6/8#`Uam2BS{f~13i)VL1?sVM>Q3_&&{8`L*j0ar(QEw <A1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
