<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myno');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'bQ7b)B]ST,R*NyRm4h4mCS-(m+mrKe?*|-UGJdRGmP+<R^I,B|8f-k(Y_~5[l>C-');
define('SECURE_AUTH_KEY',  'i{,Tt$0ljd&+[Ety)LK,-l6cc53Ubdy0E1Yqr7 Gn];E43t%nNzi|Bwm(3|rJ?#4');
define('LOGGED_IN_KEY',    '^q9C7;c0{?.xXW`QB-j}s-bM!Octm@D~A/SSXZ$%^j]~=kCgXm,_1Js-]K5eG5aF');
define('NONCE_KEY',        '6_o3e&Dqi+;u3)D5JE(wrC<$5^o_<NN&.6vUm+Jq*Y8qttF#tfY*NA.o]=ySJJH_');
define('AUTH_SALT',        '<K#$h-5+Bp(avNcBFv^win#64^$F5d4n!x+V8{_+B:,+EhF-|g}*9a.X/`lID)X,');
define('SECURE_AUTH_SALT', 'EG=7.|SCsuRCDk/,vqZ/4W{ik*Ytza:,{,2Z}kxLB>P=r#+<[Lp1/7K2J|XN*+|n');
define('LOGGED_IN_SALT',   '71pgkd:U{+WUhi$wC?>!|lC!N|P!$ |jN-`LkOF><}!jsq?,Yj@?y0r3+-e-b|!p');
define('NONCE_SALT',       '?nj<n|2vv_/RH+;B:Q#j:([`jB<$JG8SiIhY+IG0lw_|h<3OvtV2,/O4x:(qct}(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'myno_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
