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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b,g~Fg_,`&9?CvROf+|P E$0w:x(3BKIxe& D-comljRjUy{e[?+P#VC$-Loh cM');
define('SECURE_AUTH_KEY',  'ioxEt!#A3.+W#g;)>(5.*hZ }CqAa=-,e--!V}{@5x~pZOrry&7W5{vIRbA%)~l>');
define('LOGGED_IN_KEY',    'Fk(`%uQ0&>3{|}[PecOY3$`y4Wl^kUQeT)eZZ+dPm{z5V^f1(_> (o|D5EyoEa}@');
define('NONCE_KEY',        'CAAX/Ef1`E<@qJ^O0a~*c+5-lC4=v#u=Nsrpuy~/Vn-d:]/h&[7gS/5r-er*H|~9');
define('AUTH_SALT',        '9:I$*m4nlvO|D``WAJ;k!rC+HOCe7w4x{si1CmIw|`y}4YMikf6J;xDL*QVWqu@D');
define('SECURE_AUTH_SALT', '*dVdY5WJ4^I9FrKU-/[M:+W5zc,5}ng!f$uZ-PI`0|G*aA?uDXD1bh5r3K(_ vC<');
define('LOGGED_IN_SALT',   '#qksu(-<-Nf?c9m-f}uqEG[4_F0[A+.Qb<=+y6g6(gV!F cG]D`?9+9ikaU:[7+Q');
define('NONCE_SALT',       'o|N#l`|du[NO_J8b-%WkFEa4DQdpCoN~v)/9O0E>4mYk-#IPFON$ONnWXWi@@@kA');

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
