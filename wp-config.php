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
define('AUTH_KEY',         '`Kqtn*kzU93V)NA~j9qA?e[h@I 6c$6h#k=+76?-Rf&~Y9CM0)&#HB;JWK~CFVY^');
define('SECURE_AUTH_KEY',  '`+o,GDtA=vH|vuMN<<#}R_Ds4z%s<f`w{2D#y(QQ7KKQ$aNat;$n:1t.q.7)vl|v');
define('LOGGED_IN_KEY',    'tZp:>^UB#<[LTOnzqIhqs{ZjlE>bYEGm,e^-(~B@W62}8Q2;j;p.YZ%GV,}yd;g}');
define('NONCE_KEY',        'bX!)g+8?CV&sHMu[zfR:F6II.D$5k(. $^vI2?oaJ#RbKhSPx,>0fi##-JZ V{K*');
define('AUTH_SALT',        '&G6>}|y/!T89)h}UNuw!1@?H<DlSq%xl@Tf:KGalI8*kiRG$1SM>3<t:!4a4IA-]');
define('SECURE_AUTH_SALT', 'OK6Q9/m):*4hTF;k&1:eihr(Q(}sxl$f7hgcqb!SBPN{xygw,kaA`J`iLl5!DLMl');
define('LOGGED_IN_SALT',   '/=dqtb=RvBknm(!kvjvFMLai+<9n|K@;Nz[^T-dK*#wssZ5t9wr>vVBI5JAU_sk|');
define('NONCE_SALT',       '_k((hkF#Jpmx^g!b-K|&AB?}%jeN$saX*NZ6jt=rsu%[gC>=rJhSB&G!|&~KB,wN');

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
