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
define( 'DB_NAME', 'wp_db 133' );

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
define( 'AUTH_KEY',         '&@({6XLXK2v2a{7D`[J>J,/W,(5f !1[KcK>vY7}N5%WdxklXa+j:)52<+FZ03Ij' );
define( 'SECURE_AUTH_KEY',  ';wMPz KVSBTjNH;P^{@KJ/kSF3/$)(RP1kf,B)vq:W2ik pOS>G#Sh>0^.uE7cB6' );
define( 'LOGGED_IN_KEY',    '< xHiKbZzvBFz/(iWdkM6|wN9T=xy8F|W?4C[)&VP|^bAvH0dY&j=7%%%gg`:m_ ' );
define( 'NONCE_KEY',        'b,fj=~V-s`A?k-n>v)SU5vS8w+6hi{fS>@b@^cHCRD{e_Y/C7..BLc.)=I)Kek`l' );
define( 'AUTH_SALT',        ':J(hm_Uu|[tE954&#Dk=4]>8noINT~2 a|sTH9]C#RyM-J)0EmIt w D-DnRVF~Z' );
define( 'SECURE_AUTH_SALT', 'n `zGq|H(n]*D2HriLS1:b~TK+8EcwxD+v^8I+W!h=sn1TjyY+.X&`PtH0Z;K449' );
define( 'LOGGED_IN_SALT',   'J/(b)p+5D|V?hk%M%=/2Yn/(k=1{Zh!@?tpu3UzP|VYQa?aY^>Ohw(tn>{$!lv5]' );
define( 'NONCE_SALT',       'zGApX &%#apN(A!)&m!$x&~`yBmm)DN=IvXl<63E`&UNFcOMG `&DU&#j7t^(?<r' );

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
