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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2;6}&b9&jq9:$:K,x;WRperoGIC>:5HcKE^~Uf+Do|k*69R{?K%j3).p5I<6 597' );
define( 'SECURE_AUTH_KEY',  'n#I(ID<YJ+Lc((&  )V.Nj9u%E^ckeEv^L6*;ogXg=ZsM8 pjTIe,CABUq*]nOPi' );
define( 'LOGGED_IN_KEY',    '|:;V?M`kt:6rG0HF/_nCvHYq^BrU{~zU^yxb?_ tijFGS?w0E@ox!V)FYVz>`0K ' );
define( 'NONCE_KEY',        'MANZeK},e3/YmV)^qxU&2#|hW0hxfV-wN8a|[%MdtwFGoRwrb$>TT40)o= %[)4h' );
define( 'AUTH_SALT',        'dC|tXvCSO+nQ9;:E[}0E=(UdO:~kdQ[_+?edGWv|?ghsqGc98l:LX X/ hB=[z|P' );
define( 'SECURE_AUTH_SALT', '?#ZnB>31>hBv~y&v?t#Ua{Oh+<r`YV?[mOll4<YWNl#t}Zftu4d9QJQd{8gd[koc' );
define( 'LOGGED_IN_SALT',   '3Sg.2r[yuQ4rF>*onPd(Js|mYSp=OD3[A(+fkxTpMVnO?=@f&.<Zc:I+{t2k%{+C' );
define( 'NONCE_SALT',       '62uH}jc W+h$<EX|RS5`d#}q#W]OJAE80[zA/+Yx4(DafL|Soiy?-de40i|CvOfr' );

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
