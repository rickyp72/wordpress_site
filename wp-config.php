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
define('DB_USER', 'ricky');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'V-Y*^gPI_VhlRu|cz|pp{yJ/be$/y3;wuv:fy_]&)>05%on}qZ}x{8Xl&ZYp?b`*');
define('SECURE_AUTH_KEY',  'E@>G740UP{rQHEZEirG4YZ1)OP`Qe34%g~pj1UU7L=]=qMS<%R/QN;G>h=<+E=8~');
define('LOGGED_IN_KEY',    'H:kbFDA5F]stuu<LA}6##3Jn1Y%+z]ID<=3m<9CFemp]v})*8Knpy;oBQn5>;=Cb');
define('NONCE_KEY',        'ZAlGalVsMXMenMW-PB6e2g{5S3-Y7CZM_=w5unE7>$l[/S_JFDxI=6Y[B_!>b4sL');
define('AUTH_SALT',        '4v}%`1M/*l{A&>eb;d-IqWygfzLea-r8DUA&SZq5)X.d6yW.]RC]e}OpNW%x_Z-l');
define('SECURE_AUTH_SALT', 'GKk ^Z**T3(6vFGHhc85>,u4d8CX)A:mq5#@oB,&e.]-SHX;l^E@-ic_57]^m;sQ');
define('LOGGED_IN_SALT',   'i:wqHfR|]Mo7nTG5.I#EH]au>%LbT[Mqllq!SQTtd)-G:6t7RL=#aU5V<UnlYq@C');
define('NONCE_SALT',       '}9X(CVA3WMUMpS.:<kpkj7:r6Q^i$Djn{;_^hm_H%eGkhd&xjx.rc_fK/w[23E;c');

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
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

