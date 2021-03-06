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


// Live Server Database Settings

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'krma_wordpress');

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


define('AUTH_KEY',         '8|jO* I+j^54(N|?3YhDtmX/[j]h:pzCe((QjJ;B$I.4`G ?=TWejE)t_nE|D<p}');
define('SECURE_AUTH_KEY',  '<vSTaIg59QPw|wpD+@2k1:SAv6K_qE`2, *nWX@b(*G@o6TvpL2sHx6(>$4,9400');
define('LOGGED_IN_KEY',    's~.c6M2`G$>Rg>O+NZ;/ k_>C(slh]5+Nz:Q=o;< 6];^W1KkpA3]=+/FC4<r0Y7');
define('NONCE_KEY',        'U*TSI{[YXRb#X9|)N+>K`5`pDI V-]8vu%6LYp+5@J^Gm56-+)8bq<BUqf>Yx]>2');
define('AUTH_SALT',        'fRE6OVr[YHzN#3V7tqj/-+^B)r+xSG6-]-ppC|yM]WxMc$1lV8YI^_+`=jZcB_!?');
define('SECURE_AUTH_SALT', '!BXr.>-BJNCDUL6EgQ[yUO(|++;j`ixR{C^<L7(4_q_-&ah(8vgK&dRQ-t0T]dY+');
define('LOGGED_IN_SALT',   'wk @S~-t#Y#tV;8Ljg=bA+od9}X<xU3_+ `LS_2_x>Qh|G59R*A#^E,%jiWkG=Pq');
define('NONCE_SALT',       '!rZ]m_`5)(JyX|en:!+k1?@Ce3eTM]2GVMiBvc$xh9/tuPY;^+hP+y;Z_H>i=&@l');


// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://localhost:8888/KRMA/htdocs/wordpress');
define('WP_SITEURL','http://localhost:8888/KRMA/htdocs/wordpress');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'krma_';

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
