<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '?Ib-a2@yEWxkCj,6@b;GUQKpo%C33P=gn$~LyF!`_Q%pu?y;SHl$fQ.2sH3{nz5]' );
define( 'SECURE_AUTH_KEY',  's6CH?bK,M7r=7Wy@(~H-W6`P5pE^B.CM=Kwu4T3uO<dT+h[&A#+Jdi)85Qs=nGHU' );
define( 'LOGGED_IN_KEY',    '8IOCE}EYOi%Q.v/lWOQl}n.v=e:Mpq;m6b[G5)`9fuK4Njyz~,?+PVvukP2qj6g7' );
define( 'NONCE_KEY',        'XkHCcdE2jQqN}7osQ!!Ob3*Rc%2eORu;8;hQmvLV4pcSRoCt~b/b7gVA`B_(^*:C' );
define( 'AUTH_SALT',        ':B;fqFb!_OB)=KD3m([VfunHll?)89;h|;LZ[gBu`dwFZDq8<NxQs5@bZe@ZaJYT' );
define( 'SECURE_AUTH_SALT', 'C?,YX*<}ekh5y:[F<iaUUSM!;oI-C<bSRWB1:*I #ev,hQh4Ut/<-|_U2(vF]1`6' );
define( 'LOGGED_IN_SALT',   '<5>9ypoBC}XB@=HpY(pHY3Dg{ia-/,SIKy;#RC@_1JM8i@!ji>v4]@o66{n$YkXM' );
define( 'NONCE_SALT',       'wc Jv;4ui.Z:(#{t{eGfpB9Mk*>FZXFA#8jQ),1*V/44Oyi(X|sQ^LN%^wI=lpLk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
