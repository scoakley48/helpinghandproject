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
define('DB_NAME', 'helpinghandproject_dev');

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
define('AUTH_KEY',         'teRJx;853p&JJYo79(dxy56rP0KDdDT=!eOj%Vqzf9Fy)=ve0Db+4w@5ZY&sZkHp');
define('SECURE_AUTH_KEY',  '>4a7;v_7&p18qEX+KVLBBQm@O6||Cc[WL%?}H!94pfU>3_ Gg]8[CaB[,wO6+Qfg');
define('LOGGED_IN_KEY',    '6g#$~d$lS@A4C+GE7!]p?=3 =/`@qz07U7Bz91pXlHr!V@:-383irU4l}#/iw1 {');
define('NONCE_KEY',        'dr<paQvP~**3PujIB.@hPk^UC%H!!3Mikdd#1|K*%IZae>6_L#<hbtSJK_YA.c}I');
define('AUTH_SALT',        'U^%{t}51uW7hS8yKAxE|08{%1l@PG*Q]6{Wav$R8CjrrE?!}*ZDg6TrzOXYkPu[1');
define('SECURE_AUTH_SALT', 'J_@<1PZsj_90+bh2bKqO(uKcz<~}Pj-:k[7aO+ztz.N=MIaGZ]Zk7w[ OgKlTADj');
define('LOGGED_IN_SALT',   'uldT@pTud:;*z[2|eqQqs~R9olZx3(L{pZj?j]OWkNP1te+m.;k]k*?Tp>qdeW8-');
define('NONCE_SALT',       '0tjX`s89-R _1nt8RnLvqYWy$i|[9+8UB_yU#VyLw6[IpBAdoVo(Dm]_%e,MWT[B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
