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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'o~-3y+Upu!65hY-/L>JdqMMRdTJ}.1bm8[,hM|1hc+gnUJM2Sw|- -r6$p?KQVT(');
define('SECURE_AUTH_KEY',  ');6aW&/C@[+DKHqYA2D?Q{Ianj;ZjP5O]-J--U&&UJzH}0?Wx1YU7VUs-Ik=C2dX');
define('LOGGED_IN_KEY',    '81kJA 2I=m@P@G<?MT>D5pjt|8yInQaZ:[D4zYdVX)t8~VwNqPSa- 8A.GP7$O3z');
define('NONCE_KEY',        'N*O|b#L0HPXU~(hAG{%Necm]+ObKb!+$H{p_(CCA_evP$MmXGaRYgJddUbs:Cf|b');
define('AUTH_SALT',        '3UIe~&!tXOFb(c}yt5e`)%0k[QZI.wd+m-]@gmofe@Bjb3<p5P8|>GR&>vD_u2M|');
define('SECURE_AUTH_SALT', 'r^-1N|FnZhz>Cn!GMK9 1Rkn<icUc7)@qf4qC]G[d{!kX)-F~dJrC#/)y)0KIWzE');
define('LOGGED_IN_SALT',   'oQM{$ns,d|Sy=(b;|k>RDgSXrd@e@+y((8r#JkNo*~8X+2+F6Rk|#6-m|wyR%@-+');
define('NONCE_SALT',       'b~[2FlcSvttU<7Oen>-! |lR>L[z3,ym$28J+pd9>+qgbbZX+IW#hAX.<t9W8jVG');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
