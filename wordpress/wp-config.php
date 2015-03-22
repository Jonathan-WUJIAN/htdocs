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
define('DB_NAME', 'joanna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ray0803226');

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
define('AUTH_KEY',         '.2HmFcw}MG%B3UwL(ywlIbg)t`Lb=g0js,t1n!yp~R]U9eH+)#OFIFwSF5|mGuK-');
define('SECURE_AUTH_KEY',  ':YQM,2CS%Y$^:oJ6Vg>@Hq[/sUl}&4g4Mur$e4&(-4*+E~y<]&rF~.<+=E)]AyYE');
define('LOGGED_IN_KEY',    'v?/jIBX}E7lPn2lJsNoYcA*aP?}IVgV#8`3%tK=M;lwmvLtE-4sr#l5x#p__&qYC');
define('NONCE_KEY',        'Mk~iSW1@O:.*z=~M,z2(+0@z+Z!YSl7tM7I+En5o|+]-d/XmbI//:IFOp&~|B!|K');
define('AUTH_SALT',        'uZV8tJ3fiU`,?-&kiy~CxZz8pF1(p78p3p-S(K5[8D^sy/804ACaY+YQQCcRP:uP');
define('SECURE_AUTH_SALT', 'a6H8F!/!a8BYGZ@%i/PYk}`Ne &&2Cb&FOZLOjrhj||;{_z4C{1Q[Ylab{(Xr8fN');
define('LOGGED_IN_SALT',   'W/+OBdub<e]+D~]A3-+Wb;O+1P7p`oJuE4-JBE0cW>e6O0l041=s}Lpqx:L++Q:|');
define('NONCE_SALT',       'VQ3xz%dTH%LAB7VnyjJz2gL/{r?ml67BZ*^zi-^i}VZEM%[B40|?PkY[{US$]zeo');

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
