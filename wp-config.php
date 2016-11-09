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
define('DB_NAME', 'linen');

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
define('AUTH_KEY',         '>Q-EUjJY,$c:qK1),o<-*p;7`>kOxoj0hB_8(0wckn@dU}89t,$[SK~K?ZHB;+IQ');
define('SECURE_AUTH_KEY',  'z9G%XU2~lhmVgcl<Ra~F/Wr>}G4cF%R9 nWk)FRe{2EEiMrI3~M9$D2w$hzM0N7{');
define('LOGGED_IN_KEY',    '9($e9B>&W4y#/!{SF,:-tZYz`I!Z A<Lm]dp$6uuOjx*`8^v/z/t/*l=+XJdDa a');
define('NONCE_KEY',        'YkC+sv8v%l2u=a=nio%WV8YZ.97u_48xE9n3q%GxT_yZDzPqE6o 3@<k;73V%/gF');
define('AUTH_SALT',        'Vgi?ju_#rb7H6~}le(C^(~d,?)~Klqwh|KbW`?equrBZR&>-<(e#;TGn>}hFG6|1');
define('SECURE_AUTH_SALT', 'qg*UN^uW5ZwM,!DDNYT%[[){D{{p8F;*aLT<9^t#Zt}j)4kP,~Z?Dm%T-AXl|l/{');
define('LOGGED_IN_SALT',   '$DlE e-t.&MFX.B@fILCK!Yq(&sz%2<]?aFXaW}[n$T}Lcm)o]Vh~7M;uQ0Q7xnx');
define('NONCE_SALT',       '^=`Q,XWV^@GDD2b:|K1tivU.9xjI,Vw$uK!7W-CqcU@@:;ISh@mQg#uvqca(8I%{');

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
