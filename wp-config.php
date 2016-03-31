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
define('DB_NAME', 'ironRush');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ladygaga123');

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
define('AUTH_KEY',         '[y|cr:!1FH,mS.p9luBk-o$C2g_hg9bI$j||im-&C6*/j9xS,HboJa>`PyIbQc|1');
define('SECURE_AUTH_KEY',  '@/7ch?g`8(B5gvr!D{K#!~ @H8W{am(g9{4hq6)})pb!dUHgJ>--pQwujxpqMl O');
define('LOGGED_IN_KEY',    'sniuqTq/b vgI/a$vCc55z(sZ;^-tOF&j+skwCz0^e8i:Hp}!]<WQvD6UyXlb)W2');
define('NONCE_KEY',        'P3k< 8!2Z7Wc18KO[&W Uop]U!h+0m<}*ibyg<ps$dj^_ZoEJ|):zu{W:XVj{P^p');
define('AUTH_SALT',        '+K=n2/evh:A{BMS^C8Np_]2_E=|j!-g;gs[QWNkR+9jQ-B Cc9=Ck,6!scN3Bg8]');
define('SECURE_AUTH_SALT', '<RGLw~-gQCZ^E8.U|(1A?KtL}<~1|5!QfA8>$mM_Fy+WHx=RcG!TVZE|-Xg(-!yR');
define('LOGGED_IN_SALT',   'wYN.B6$j)W,57VMF3%zT-e^a1#f dQH.FBj%J-lXYIi;5/@&0Ig`%Zyy<+5,:kJo');
define('NONCE_SALT',       '6i8J:+hLMn*/]S<+~g$pp?4DHCC*K+.>ZzE@`sp/ h)Svo*|D>`_+4(+gV#%LkeF');

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
define ('WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
