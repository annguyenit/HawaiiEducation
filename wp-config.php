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
define('DB_NAME', 'anhnguhawaii');

/** MySQL database username */
define('DB_USER', 'anhnguhawaii');

/** MySQL database password */
define('DB_PASSWORD', 'anhnguhawaii');

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
define('AUTH_KEY',         ')(N>*S<]n)87>^2|OKq{;]-yV@84uWa?KxOA*~ ,e{t3-*bNo|77OIvnz%`f_l?2');
define('SECURE_AUTH_KEY',  '|3KO=_M}Z4>4Lpi%J;x2|eiFym(?vy8%@~>J|RV+Hl<+tT_{^zOz-#/Rvm`=hbY%');
define('LOGGED_IN_KEY',    'Hb=[53iG,:)ih^&d9v6.I0~Z/7JgP@L&&ASzCs*;ft>n@,H;670/GJ2g-A |J{k7');
define('NONCE_KEY',        '~fhu[vt|vPB7|wIJ.VI(<tp7a6`rCa7IDURKz$|d%v`Oc>RS:G2Hnz&L,{Z&,m|k');
define('AUTH_SALT',        'i{.u~X<WjX~6P&;}tFj_(,vw//JC~%3Zx+L46(F|-x+Q1lYUvA<]dtHj`+8R((CH');
define('SECURE_AUTH_SALT', 'ujck;3UqD~$zbCFRU8(,&MYoeUx_y[AT@B{}i<M}?zz$TeScHm[3?+~}_~<^=z+r');
define('LOGGED_IN_SALT',   '&^-/$`CE {BIxx-L$NVUt?!1m,GJ;+$_/g{@9[9|5e:Gw.W3N0LIoZHD0KPNWb}=');
define('NONCE_SALT',       '{)0@F[+-4J{,qye O55Z*p>+@s6,Q_t~o4S|iK^owZ|{(bp6S+%Lx{oeaw4b%=W|');

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
