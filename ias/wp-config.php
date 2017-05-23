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
define('AUTH_KEY',         'Vo$/5@s2<DTdbh4P`8jd~d)*3-JosU1olRXof_DZ-;At;Qb)}oQ,8ISWO)4br4t!');
define('SECURE_AUTH_KEY',  '=OU_(kx^z%jlaTngdR0f$p%<|@&)gNa>:iF#=GVCYG1@Ujy>!!u|get3|IDzems~');
define('LOGGED_IN_KEY',    '.5dI0gisnh:/X/c&gW:@v8h)c{iHI,<imU=%X)Y`>LQ(n85|^-V%y0|_lB[#:>X;');
define('NONCE_KEY',        'ygXahw!b9!1;LDi?%`?sla?I%Y!HXANv]Vkv(y7/7yA]N!<.?f9*{4AK>CwR91bR');
define('AUTH_SALT',        's`)RPI?Ug#:DvW.1a_>HcS;4%O{L@f/m;?oqD-/Z..Z|#WiVY4~09QKGn-,wh5,%');
define('SECURE_AUTH_SALT', 'U{E|0=<fVj#=}Yt)tpBc<a4g/L GI1O~^^S1Iu?Pme9CXgLD<BH [iV&Ggw6]={i');
define('LOGGED_IN_SALT',   '9w`<+d{KnfOFo@Zjz(VwwG@n0L;/M,RSl*s*f/G`*$ik8/og?<=kmVw7wujo3Z{?');
define('NONCE_SALT',       '0PESpPaljW(Viu2RY2Go+hrs*[|x)Y!)#:v):`L1ypo5J$.bK`yKeqR,kWm.@hgQ');

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
