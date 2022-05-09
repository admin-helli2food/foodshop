<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1&AQWGX|.4WiKSycr/xZ]k0jJqj*$.J5n1Tmmuqw@?$xeE2NB.1b$uL-8ZY%!.Cq' );
define( 'SECURE_AUTH_KEY',  'w+2*V7Yds[EHE.s35[|VXTQS{dl@X%v]EyD-@;84H<EbTwq@o53 (IMB@q7rbEtE' );
define( 'LOGGED_IN_KEY',    'n<;.%|?zu+v6@(^ndr2tk@d !_,fBzfE0^|<@50T6YQGI,Xl<iDOZDK1KLyB]F~,' );
define( 'NONCE_KEY',        's];vmGJMBU{=8lILaC4mZ1l$v?<])8P%[i!xL;Jz8zQzhGyg)wy8bJ%S?_q3@uM.' );
define( 'AUTH_SALT',        '1<:/xa(*!Mga;+Fh]EFm>I[EB5^Vd[o3dnkq%nLGf4Prn3U2 }*og%/#waw#mQVM' );
define( 'SECURE_AUTH_SALT', '(~OAS^@EGISQ%|EZF+`2e6Ay;=;/>Xsb^Q;,4O&b=HTDt%I`|F=lG_XA]%dsj:j;' );
define( 'LOGGED_IN_SALT',   'Ku_Hc#p).I5aFcv}r!+>,XN}5twQ1NQc`xKSG!o$udi2O@wQ_KF)_Z`)v<n`:bd>' );
define( 'NONCE_SALT',       'q.@U6)7WCS~j]7j>=[(jq^EeM}[n.Jw;-I dy)uU&=Hm1BYEn$}xtCt8sU5YxL:>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
