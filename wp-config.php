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
define( 'DB_NAME', 'mutiameidita' );

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
define( 'AUTH_KEY',         ':>uI&<&HjG$5VAp7?Xnb)75tCY^80 #q6H~z?x%]N&@H(Qv!jOgq-.DK@y|zt}S!' );
define( 'SECURE_AUTH_KEY',  'HC7L:wVbX*}~)u02PXy_ D:OT.K_r6-(l>/kS(,0gc+ >|ABkU#RC8v(wQ/?-reP' );
define( 'LOGGED_IN_KEY',    '_zy%Upxn/WABh{^Vv*#c]Z=#jyy.>L;oHEuA{M(O3uWa:{n:--Mf:[VE+2fs;xnf' );
define( 'NONCE_KEY',        '#o5k%Efa4m5z_J:p2vJMch`n8C0@w*B>f>}>m>9z6FiA!5%Bu% >puw5Udj hK%c' );
define( 'AUTH_SALT',        'cR@WBA$k{S8%0p>;SF[U:rH61K^ ~ V,2<x)%vSF_;/QIq`j^dk.0(CqbE+{#ur>' );
define( 'SECURE_AUTH_SALT', '|mJ@)._bpVyzkOv1C3-VOv/CjA6LBGs+-b7.Ks*af_^eU3h5w=+EbUR_k6*P?wA)' );
define( 'LOGGED_IN_SALT',   'Kk)8zVi>+~ba>W~zXO|MEm{jrL=Ot(RpH@3-5i_Az-I.L~1;<[)wOC!U|I !i?!J' );
define( 'NONCE_SALT',       '-<}3dyQd8=~1])Ofo}{DnvOuz{*hB6HAoZuwosXz+g YgdY0=p4-5M cbkJ*}k0_' );

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
