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
define( 'AUTH_KEY',          '/qd=R,7p 8:S5I~l>m..p1-9~]9KI4Xj0E(2ooB;G:iBL,PW@AF#V>Os+7I?qwt|' );
define( 'SECURE_AUTH_KEY',   ',Zd{}Zu+8<a>`Z.x1%/%*nI!Q~ntN[SZOXkLozl8LZ/4#}$Kni3;uBx0N[5)97Mj' );
define( 'LOGGED_IN_KEY',     'pFwDgf*@0BE_X(mt7&k/;RZ0]:wGsv}1/qsIx{e6kvdrzyK:G/V0m-{>hBjmveA:' );
define( 'NONCE_KEY',         '`N788+ZA~t[z>K UmyA(09K,(LY4s,QM&Fk(mg!vv,._9p%>ZSXISu7%J-(!bxHD' );
define( 'AUTH_SALT',         'qMK.n|6m}; SP5SwCgk_kGoc-;BQ/c%zSkA^JLt#ub*~s]$vU.E7H%[ETk?VKjrk' );
define( 'SECURE_AUTH_SALT',  ')Oam:y/gOM~Bk<6h_S;$s>JJyL c@L:mW!?d~S,e[|fL`^_YfQ+g(0yw(ANAQ@]D' );
define( 'LOGGED_IN_SALT',    '>9XTPNe 0@;UB13n}m^pB+>(!nC{yIL9BeYr9/#H4wN`QD[iOJ}b_U5VIz-CivZ8' );
define( 'NONCE_SALT',        '18}EPLOF<=KNi<hcD?gT?1/uj@Bu@bTD`-8fn/WCK>XJnar[U^`3</JgD{C4$h_Y' );
define( 'WP_CACHE_KEY_SALT', 'itIUM-P,#9??V,D>/)^r)N9!{1~ybkt& JDrQE?Dg|W@Q|I6rh8Z}Nck~7qe3}Hq' );


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
