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
define('DB_NAME', 'hawaiied_ucation');


/** MySQL database username */
define('DB_USER', 'hawaiied_ucation');


/** MySQL database password */
define('DB_PASSWORD', '$hawaii$education$');


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
define('AUTH_KEY',         'o]>,X-2RPE|tcBIHE3P~`+nocG|HmxLgj;w9.z6jdi/$7FYiCA:@4$ b`:Uw|ExB');

define('SECURE_AUTH_KEY',  '5+0sT,#W cT)C^;W~@0Ey.9`#$Mt:pGq{X@Z>it){)4g?#hQYNu0,6q_#+UcmvQ/');

define('LOGGED_IN_KEY',    'Ht?2!zQa6Utdi=3|i-CQ&ZZC7y;Jto9Fab$g+^sC8JT|M[!-A$={[U^[zcoy-LBt');

define('NONCE_KEY',        'J4`ZWiLfeA0s+_)58EY~1E/LZk+hL5*J[q~56$5~@rxThWU}&5JP52)`(nI$oatc');

define('AUTH_SALT',        'yZ|}Qc/RLWC+b{6{>$j@Ve~Bv3Q_$M+9 |*Y{MTvy>agP+AVz@l~rq~gRQwWY-)5');

define('SECURE_AUTH_SALT', ' -AO**NV,O|ELLr_$*]E)ExkaY?&,/</d&5[MWL>LDD Jmb}$6Oq|68@Mx|P>nI3');

define('LOGGED_IN_SALT',   '|0D3mxC:c55M?@)SYbg&0wG)^r:QTI,w@uec#besB%qsOaKkPT--lY<+Vc}:g[Gw');

define('NONCE_SALT',       'f=M^8U@TQm$,3!t-u~UzT4 q:C-v1Hf+:E,Fe>uv0+60Yg1GFcCCzUsN=AF6R;mY');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'he_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_CACHE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
