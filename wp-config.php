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
define( 'AUTH_KEY',         '(b2>al.8Y::fBFTW= FxA=x8b8Jeic)d~Ip#zYeNMOT,eu/NR#TU8FR*rN ;7-H ' );
define( 'SECURE_AUTH_KEY',  '[H`GL:-Q!8[i R)l:t8<!>&,7X74e:QYF|gK}WJ/Qum,*K#/tf!v_#&-y*ucG>ot' );
define( 'LOGGED_IN_KEY',    'e|L?}tjQLAg%7bNA|b^5iSilgbdq-Y>9iTDl^me@*nZ*s81k%,-=`#,=3_sGHnx?' );
define( 'NONCE_KEY',        '9lPU{>X)aWJQ^a,PqbB4J*O>w!-1hzK)E$nEm2.9a>=}M(Iyh*=$XntwIFt+/#@6' );
define( 'AUTH_SALT',        'gnoTY>pj>1?tr8SUhiDLAF6YB/c4-hu]-[[z/9Eer3$`|LN~]j&yR~UGs &KK`>Q' );
define( 'SECURE_AUTH_SALT', 'y@IXz;afdD|zV_$1,gI0/N^v2Ob1IjZ8J))zc z$; #Fke/MzZsH}@R8y0.X=1qz' );
define( 'LOGGED_IN_SALT',   'X{89J=q;8A%qGEa qBex#C_rsLfLkKP3oi-e$9`9h`<@i#(%N=d9p&G$5HE66vb6' );
define( 'NONCE_SALT',       'ejr}b.8`iujK,r?UGx8%)~Sy^@7f&CC9v(i42B,KF7drtz{]G.a!XIj<4>uFcz-e' );

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
