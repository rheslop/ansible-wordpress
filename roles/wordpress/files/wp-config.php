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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '~^{s)[rWnQ^DIqT|kVqY+URkOn,5Cs)GFITDD}L}1HPFdM$[hE>zkrkz<:Vg({+5');
define('SECURE_AUTH_KEY',  'igXOz*9Rb)oDk3*W@UXik%j*SJ/r$OZOfI$R%sVU6_7jGz@{{Y9[4^AqF~as_%QK');
define('LOGGED_IN_KEY',    '_0Ht,$Q2FL|9OL&bWuNSidn^&1?MDZ/r9ThX4QQ/9DViv:s2bhg^.,tn-`3!5(=P');
define('NONCE_KEY',        'grd0RCJE5`z%Wqcy16%UR*q(g&TmS5F]d&rz5Lif+_=cQ,s.znLXkyu,L6-,Uesr');
define('AUTH_SALT',        'XO<i}0g0p^0hH>N|2LR&^j^&8Q+LuRd}w!;6|uh,bp`WUJPJ-mn ^T|h.*SW:z2 ');
define('SECURE_AUTH_SALT', ')r&I6H_y0h|+]x`)JA:B`1Y%ksx5AycEOww1jwv-oy1XIF0S[#Q3CF[] eM~j.)&');
define('LOGGED_IN_SALT',   'v`S)i,V.*Gn8`)^pn!KXU(vApwXnsA{bUlps-39@LY6@*c(O[QacE4M/K4fR^Hm7');
define('NONCE_SALT',       '5}UJ;kDkZaj|jwP]8[2V<&whr,$9~t<KrCQ6[tg|>fp>Km6#XTmIOMsZ|7uF2flT');

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

