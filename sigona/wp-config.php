<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sigona');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'x<GMsDk4duNp1-#-^VpR+rd7O0ndou#7uyj=_rQ<bF4|;yM9{ |KSGW`6fuROp-x');
define('SECURE_AUTH_KEY',  '&3a-e-nm/ur,_%NK9E(@LY&U0*JK<7w5jpx!>e6+ZO,Cw>={oRIAC{<~Or/JI+u%');
define('LOGGED_IN_KEY',    'B-%(fs=YX;$nl.zF1VP`U|+ewLL6{~Q~;I.x+OX#dX?s.+l3cV0+%/vY0+wuDYJV');
define('NONCE_KEY',        'yEyc|+0h(6s+HjZt?Im}O8+# wO+[>E# y>Zf4=6~vr$J00YR)80pUJ?fkhV}-8*');
define('AUTH_SALT',        '+mo]8Hxr>gmVZnH+HPKP#+^-+l(]WpYmB]LMB`Sa|nDEJ>^%M;rENY7yHQGk.__u');
define('SECURE_AUTH_SALT', 'h*@lU-&|_wt;dG^U!`zY|EIte~anJG#V9Hcrv#)#Qz{i)Ltg,x~#K~:/7A^oZJ!K');
define('LOGGED_IN_SALT',   'ChZu@>MU5]A#l#iGEC/V@/RLz#m6.3K%278P-vU:_6k?kYc<cw.Te,C:W0uU1|^t');
define('NONCE_SALT',       '?Q$$9?1 Qyt6}z+LvBfQ#B{XqCd#N}H7|+PDy&WywyDsXscS&Po|X/-hJucWF0<E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
