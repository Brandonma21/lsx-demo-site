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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=K~ZjO,?>>5*YE!e}(t(xMORV<oJit| 57DlZ!4b<`e]G&aV_#3=D[6U#*$=no~I' );
define( 'SECURE_AUTH_KEY',   's#dF&&[0,bLp%]s08Ng$.A!=hD^frw1<N[h@@)6[?v9M)rcn,-K}M&+)ccflhV34' );
define( 'LOGGED_IN_KEY',     ':)?zl=RTyj+QS)Kvf3fBBwXHhWScQsj`pKVw (0>9Be1[m^k9W$-rw_uJs/ws+W=' );
define( 'NONCE_KEY',         'LG(* f;4Q%nRpdzW5]!u5tm~[~D;(=WEuq07:7%-<VSM^rBt+.R5eFEV~G|9$nM.' );
define( 'AUTH_SALT',         'EBiO#dx.oA^T4<LP#QFRQ6;=yggWaO2$].uY1jd>2T5l}}S+V7+qJ4QyD5MwDbr@' );
define( 'SECURE_AUTH_SALT',  'ghva*.ya+#^pMo+yD~WcT:C6vj!m$V8y@wdIea[xHQ.K6GijS/sWl6j7Z;^IU2v_' );
define( 'LOGGED_IN_SALT',    'eWh%-PD*EG-8ea(~NqO]/D[.g3U4+_OOX3u=t6QO07v5!O0u%h+n@`:!Dg>?8Z/ ' );
define( 'NONCE_SALT',        'tgKigJiCwM>_Wn[H%,;.UeVvvv6]$8G;)ys5h1,!m?E<Vck@?Qu=v$&U-$tt$rnO' );
define( 'WP_CACHE_KEY_SALT', 'iSQ7c!ep|+U)Y=Jp;ep6k_!#(Ep9}9G_v6Al7K9&06<j}&_v;G7@*yx#hu|c=Y7_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
