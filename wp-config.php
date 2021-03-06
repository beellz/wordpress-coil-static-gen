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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coil_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TI%06C}1vkd0Qo  &o!<OsmYF5,FX#}y(reW`28rc?4Z2i2,Bds+Ewo/SREdG}UY' );
define( 'SECURE_AUTH_KEY',  'QLptF1rZt:?H*B=yd2F. I)!QmuNESG}L#BU&LK/#F}{U/-3,UMi.=p:Y,+eRS#i' );
define( 'LOGGED_IN_KEY',    'a-f|+H>@2}Yt[prt2N[GLq.$m$Pt3y-DblXP*]U]n5aUhUs>@_^#4>n&>B[0WD,:' );
define( 'NONCE_KEY',        'HN)L#spAo~J=_mo.=naq_D>.m,6_!7fwe]0rs9{xv_GRe1are&cD(?uc#*W1F(bE' );
define( 'AUTH_SALT',        '8CfZ`7RV+d}:p|SWnS_0~.AdoKPX$hfJq.>BfDtnzLhJ[+:rX`$b&EHG#-G9.Cx-' );
define( 'SECURE_AUTH_SALT', 'mFf;Jz%a9EEpOdy_IHO[dyo8rb-o}ij/^k>kc*>nM4#DMjW&p~P&0pvU_?QA_fX^' );
define( 'LOGGED_IN_SALT',   'ZiCX_oFR4hd`ver} ~szAZAMQ-j}:Za;iI%-SY:y<Z:aDpVKve[IOxCU&x5k*Sr@' );
define( 'NONCE_SALT',       '_D&DBqO!ERH.,HE7j|9C3AnF;xEtgPidG;iD1bnQ%su/9X5L3{?D#>cQB>}Y/Gst' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
