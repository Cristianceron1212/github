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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'batman' );

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
define( 'AUTH_KEY',         '}V&%?D-3qa$XX7_XZJ(F1-HD+)awe`3N?p~VT`f|d2<:4:vR$=NDwf0^{VZUU[c?' );
define( 'SECURE_AUTH_KEY',  '|hH$UBjrvvK:6Oj4TNmkbz<C l.,f7.Sywlh^TBv.],OZm|Gl~#AwK8;Zg O9`nU' );
define( 'LOGGED_IN_KEY',    'R=}bbUa,aFEKH])J;M7SJw?o*%iD1*rp4^PK]`T!LML|gES$c}S1Kc#0<RAVHP`u' );
define( 'NONCE_KEY',        '0]uy?ZW t;zH{7 MY_ey|:E4id2J)AAtc>MY6zyl;e[DWO~s={k4pPk@a_$(ONwD' );
define( 'AUTH_SALT',        'qLB8w(Vlp]T[Uh:[<&s}^eR{_?fZIJXQs=,~3Y!Y 7|l20Rig-xozC3l-.Z-I.Zk' );
define( 'SECURE_AUTH_SALT', ')~hO/#Zp|6wq%?iY}Pj+4aOu9rQQ!S%Epp|?*SrBXR+$>)zBuxY=r+7qw5 MfC8J' );
define( 'LOGGED_IN_SALT',   ',aV J=vNWo+_)u)WE,Z~VD(CH5D*p`oc.<1I~KI}wJu`_fcwm&U`/r x#`mF_W|q' );
define( 'NONCE_SALT',       'w1=5(wgY&g@]IfTT5r|veeR)}S +L*`-9qOM%/P#c%?B88LsTFQhZ3,S@AStWN;z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
