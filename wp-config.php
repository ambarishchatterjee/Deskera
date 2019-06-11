<?php
//The entries below were created by iThemes Security to enforce SSL
define( 'FORCE_SSL_ADMIN', true );

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
define('DB_NAME', 'deskera');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin123#');

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
define('AUTH_KEY',         'c>*JBEVRFTv&(fFE]m_fCl1unS:2xkC/G&{)_)2d&_wPvc>3P iY%X=JCeECwGC@');
define('SECURE_AUTH_KEY',  'KgzH5IzA9~w)~+ekGjL.AG-k#j4n$,N0yt>lftApy_KvcIG>`NRGc2+]B+Gp+t<T');
define('LOGGED_IN_KEY',    '-#-`5FW:smIQ![%QaboY8}W[]2PfA`yQ52K-YopK?sPHez+mlB)4p}+B|3[Z8vu ');
define('NONCE_KEY',        'Cs(%,~xUknLEd1hH3JDTA!$MbXN006>i)+~/?p4`+a@QC$wLOsfo|aJ[uBQK yib');
define('AUTH_SALT',        'bYvNS.dnerZ;4aA_vq8P/a`6|=s&?cq$P:5&~l[Q,~PBW[=aTqkEQl:KQ_>:$-q<');
define('SECURE_AUTH_SALT', ';20@=QAJ(8>, i_heXO%C+~1sxh?!o34_u0XCIpo$6nPRo+5oS 9zSDK]MV=-mYt');
define('LOGGED_IN_SALT',   'lDmM}$x8cgk(Cb*BAolAY3G?NG@^{<90eOp#Vol, ~rUY8G2I3s6S(>)DawHh3w7');
define('NONCE_SALT',       'e3zjJTbHg*vDPC|%KS(r18Ka8;EEJBw~p?2(g]S*ErvY].Y1`Sf-phxE3 3fj_Er');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
@ini_set( 'upload_max_filesize' , '12800M' );
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
