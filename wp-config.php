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
define('DB_NAME', 'web3-a-wordp-17e');

/** MySQL database username */
define('DB_USER', 'web3-a-wordp-17e');

/** MySQL database password */
define('DB_PASSWORD', 'EH2T9x.!!');

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
define('AUTH_KEY',        'P<w:+1@KO.mT(NsA(s-9vLtE27:6p)SI7A|/4{KEEhls3)|Qn&.OoSpy$l5}%}E|');
define('SECURE_AUTH_KEY', '%;1PQ,_Ir)Y<Qtqd>s*>*WS^!7U>0:XJX7F$d8:goXtNqr~A+lACo=n4+$}n} 39');
define('LOGGED_IN_KEY',   'IT;N^Hk:.eNJ_QnZ#L5<|<`&t]0_1/`Z&:W}L;q-N9XVw&-!|.!$=.+(6`C+P5J7');
define('NONCE_KEY',       't5XYo7YSU|h-jTf(-U&jLv2iUd=e8ja8)`thp-Q]|6k]6Oj,%SX|gyr{raU@~}~F');
define('AUTH_SALT',        '|]cz8|6|?VteH:~*09+m7]/^(`x&ff`q<_~%v=.>mNEGM[PmPPFX+,J1k`&[k)|c');
define('SECURE_AUTH_SALT', 'Brz 6_[~+^sK@|-JpnZ4P;#|iG$P@Y:h8|6Ko{lc1?*0n6J/L~tw~LR$NMq^uWy-');
define('LOGGED_IN_SALT',   '7lcPQo|oA IvLp6B@j_|Lgr&F+P<F~L=KW66|Ci-|o{mfQwHQPH<9 FjPQdzP{1o');
define('NONCE_SALT',       'Tl#%B4U,^-7[{f~1s8uIH!Yc`t?PJtl|)bkhYy`s~,$n(1d%?2aH&ldH-+[-XO|7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

