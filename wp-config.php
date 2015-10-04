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
define('DB_NAME', 'srijanalaya');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         '[*_jiV)wM5u1sCx@E_y}O8K6.5%yb|v0kV,;14v.R#iaZpq~E8.JgO^RNI uY$K*');
define('SECURE_AUTH_KEY',  '||X7rG$R0m}<6$T)ZjzVmL5_V`^d4ZQDf&MPrt5E%[y##clTUFKF)_qp<H7]jw=P');
define('LOGGED_IN_KEY',    '|SU2=i]#X|s*kOK.Vz|[0`K+lX=x~sN)2gR))YqC<2<lN:`Q:_kQ_!chv->*xAxM');
define('NONCE_KEY',        'q4LD6noli~R{m:Mymv%}E;U*nXj(>!+j4+62je1%a,(B:DSW>Yab&{2qh~=Gk!y1');
define('AUTH_SALT',        'X6@.h]@I~i&)RARGFA!TpBe])~~JedVa4%WY`d&&NG.P#wzjf@3taMm|gbvtX)}U');
define('SECURE_AUTH_SALT', 'Hk/-$/&6uNjr*G@S**=NE;_`/M=<-T0BT%pZqz7vE%t+n6,,Q:6P~U:uH -M8P>m');
define('LOGGED_IN_SALT',   'G:Ir4:hiX>aG?B$py4)OwE|cZ;8e>a~L2gr9t<0xh[c8=1Q93].&OlUFMcR22pz0');
define('NONCE_SALT',       'n`46@LrL^3n*Q&A_!P(t-WCf)KewtG`e=aZ^{wYb8E7+8eM4pxwP&3teS_]RC$@;');

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
