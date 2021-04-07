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
define( 'DB_NAME', 'sst' );

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
define( 'AUTH_KEY',         '_,zy3;veD<Hy#wRW#3@)nAeR7{EjSnxA$=c0{j==R``a@eKl)VuE0#Cekc^8 X%/' );
define( 'SECURE_AUTH_KEY',  '@q9wRqH#e+f%vWJV>2i&hF[a`m>*?J:de#{x )IO76Uim]J.r{qns}N3h7.4=;U!' );
define( 'LOGGED_IN_KEY',    'NDMS:+!Fvz*gHxmiE0TU[tJ+cI]>dG2-w(6H &S0+VM8l_I5%:,P98oEn&ycDmnj' );
define( 'NONCE_KEY',        '2<]1sj2O`oBnn,.} pWzU crr38iCLG,bi=Ip)1wZ] X%D1pShCz[dLf,uicbM.i' );
define( 'AUTH_SALT',        '44yNtw!2-d^WhG0>W:z 33*?4kx9H~,L%)xuT5#Kk~uyr_>z0K)jDILi-p{abn.P' );
define( 'SECURE_AUTH_SALT', 'tPoCDf9$-2#N6@(.7Q^Ji(:&rGvXcRI5$Y6n#|PwEL=HoBN{SzR=w_Pkq}qB#c5X' );
define( 'LOGGED_IN_SALT',   '%-Vpqy^{<%ve/8s:<.!PQKgang^}j7*P<qwI,OWt{&^3@:lYm-O9[|JUc7V.^7jN' );
define( 'NONCE_SALT',       '_hG1bw`cW)>7$io6G&EIChyDOxGh||L}Ebex)9<%rJvc1im1d<(Cy6QBf}hEwOs-' );

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
