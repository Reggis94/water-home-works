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
define( 'DB_NAME', 'water_home_fun' );

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
define( 'AUTH_KEY',         'O;t:hx%Wc3a/Xe3YNk>FvEGWw(!E^:L1_5CfZLl&#iu/D=[[0i7dxt<m8Ku+zoWL' );
define( 'SECURE_AUTH_KEY',  '#2N/)BNc11^%(WC1#VNArS5<ANrLg4e8{*xMEGv*%N[Xa3>2PxmbHuSj(NXXhx{&' );
define( 'LOGGED_IN_KEY',    '@UH=:S0QzoNqoKgWIJWH5KFU3sSqVUE&Bx6kStgGpG^Jx+#auyLs/9v)+GVNe0/b' );
define( 'NONCE_KEY',        '!]dv*Sg#s]MW|#fA[f$f//C.Z^voZ0=G9D21_mz5@?:C)Tz&}~<L,X<%76TZ(>{v' );
define( 'AUTH_SALT',        'ZDEe5K(t5`_j`1!Lvhbm:j`^1{y!%@l,o_<OV* pZIZiq7d.Y!YPPI8(scJ8~h_k' );
define( 'SECURE_AUTH_SALT', '&JNcY_@gZ6{^g4. gKLHWO<ag,Lf98XOgblCHs-SqJ)W5c7kNE>h i=f*PGHs|t{' );
define( 'LOGGED_IN_SALT',   '|:u=ZGJAuX<|dLN5=b3Y`+V:_oJ#hGMI^6-Ew[SP ca]_p<=~2_!524a{57;*Z|&' );
define( 'NONCE_SALT',       '7rqXxbpQrTrm9yfRo6[zgX|*~KQ>?)ZUGg8KS}b-iye,Pvhb:g^sq;7;pX<w;$3`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'whf_';

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
