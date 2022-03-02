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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'mfP.8CH9$lrG84R,V{k &qMDPY0kaa L=JctC%=lbSGA:1I*OB9wFkx}_Bo68:qe' );
define( 'SECURE_AUTH_KEY',  'Pw:J<8(oJ$aG7@#}{~Syi`ppx,i~rPgwYbs73pV`H}v }Q>R<QMs10JLK6oZ<xqY' );
define( 'LOGGED_IN_KEY',    '?aoN7~kQ0_=Y[QQjq#Vw#R/h487r Ijw9E&B~x:PX% #;_&DrwS-<_MC]3G@7)}H' );
define( 'NONCE_KEY',        'N`Y=+#+TfZMCRg*MvEvoZQC#jr?itf:*pK6p!Lm-T>&3o]$lR4tX&PQNUyh<f=9K' );
define( 'AUTH_SALT',        'dHEnS8N=F<OM_bPJ(U{PV$(&<&wjcg.Ii%^ u2{t3d16Kbiw/2r d_rYwQYM{8GN' );
define( 'SECURE_AUTH_SALT', 'qvRKs/vjY>{CTP!WS3qpQu<tlf?RH+rBXQRr7Lm&e,~96msP/,5Keu%bTS#m=V}:' );
define( 'LOGGED_IN_SALT',   '>r5!`)Md?t]bhX5Y7I#E Wdv.Uosm-#z7ejpPY$I0HD^-HB{@:Q&p{&[.5T(VP-[' );
define( 'NONCE_SALT',       'gVn{9E>TTZ8q=}xaV>eS)ADtG^q`|q||Fh+>P[0OJ7:* !b5akCt2YNlG7N++I),' );

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
