<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_Rv92L' );

/** Database username */
define( 'DB_USER', 'u756016664_lFNwN' );

/** Database password */
define( 'DB_PASSWORD', '2oOIfR5UPd' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'zafq:8Pe0dW#LM(+;vrr.AxdQ(ZEBSlItF/6k}m|mEsi_PTUPT2WJ^vpL+2vMF|w' );
define( 'SECURE_AUTH_KEY',   '!4Eg_vFl6_;O(Jb%<~yym:>tU[S`L}bJoIo,Q3#5Ar944k*:aY5qfouys3hpqx A' );
define( 'LOGGED_IN_KEY',     '%D0]6?$=Q`f*~9K/BCYG_m{@12!Waw>k4%SJx*<~{+eDqt!tD}B<M /bn@<.mijn' );
define( 'NONCE_KEY',         'Ox:w@LTzn,+3O-cK~isoxAUx}@C`m:*W}_0--w[%Veo(oq%Pg-_|kbF6oV$!,nm9' );
define( 'AUTH_SALT',         'dmm>{(>z5i|hi?Ux[Ocd:h1L{Aa}P01{<tg47Cg+;uHG{lAI1#y|M{+Z+K^FHQyH' );
define( 'SECURE_AUTH_SALT',  'R.MnOk{}qxS <#I75lCJbM>J1=&|uVb,&8s(60Xvz_$7oZI`vN*dX@b2{$A&tzwA' );
define( 'LOGGED_IN_SALT',    '.~PB/(:(:x)*$yr`MMl/~n6 OH`dqCq%xKd>ARH}Y{DmOKH>El@_^3j##N{41Ha{' );
define( 'NONCE_SALT',        'TbA<08lkQc] UoTgPZbx]jAj *kmo d5>-G>9b>(%}!o4@ycSS 64#Ia.~E`1AcN' );
define( 'WP_CACHE_KEY_SALT', '5&lhUa&^H&k1_W|y1[)Ii? &R.=h6+7,,GB)@=3R7(;UW{DACet b9lTR7y}KWwR' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
