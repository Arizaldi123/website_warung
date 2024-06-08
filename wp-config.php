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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kecpri' );

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
define( 'AUTH_KEY',         'a5}=$e]5EB*@1_*ac<>8U,(}>w)rQTFyJvTi]Y+8LVolBH):Fv,{g=56Q8/078py' );
define( 'SECURE_AUTH_KEY',  'L.6w)p<%1{ouXTTqX~B2vWl.h40Q6de1bB6LcfR%]#-o6,kx)Y+A<XRc9V+AHz1q' );
define( 'LOGGED_IN_KEY',    'zrYFyx:JpY3~Dw$^Om}!&5SQ8OG45PF]3q4(+94`{. -n|it-E1F6ZagQsB~Z~::' );
define( 'NONCE_KEY',        '47$uiyIRtb.G=:]E,GJwlNw^6C_iq{&[ufNt{QbHGV;c?m6iCaYT<JMtN.b>*P5:' );
define( 'AUTH_SALT',        'wn]qUX(Euo%Gux!<JuJ3YVT?vLvs@a>0x m3//X_*h((D3E=Ym$prZD:rI<:.Iv1' );
define( 'SECURE_AUTH_SALT', ' 9;;KKw6fJ=UN_ I,V@nAaJp*R-.c%?&?jL3E7XCPl.h<jKWI3?4 ubf:5M3$AqI' );
define( 'LOGGED_IN_SALT',   'hhn.};$4C{[N%h)w0t_/b6O4}H$[e;cD3DZv0HD)J1-nR0XM<L+_gyjZ6iwi6s)%' );
define( 'NONCE_SALT',       'J?T<S3#HO31EzJ~kYEQ/[ Yg;y)9<O*H^uEqIQ(G+l@jYKYB]L/Z9fc+*C~k6=,C' );

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
