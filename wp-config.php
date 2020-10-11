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
define( 'DB_NAME', 'myhealthnet_db' );

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
define( 'AUTH_KEY',         'GFB#h -Hmg0|KL74*MrEK=3xxN,:0GFp1K{w`vU1X)A>}05H#>Hy?G#<L)c-M/5!' );
define( 'SECURE_AUTH_KEY',  'kU8<J5;0N-tfcq{UF[dFi}Q[LS1iADK[QiV<WN.M{Mqtuv~q~{qyRyg:GKfk~sOR' );
define( 'LOGGED_IN_KEY',    'l_hkv ()U{jJ2!t_/Tb/p(Av-8v?<d={:9V3[iX1LV[FXQw}jS=PFx6oTWRx|Id&' );
define( 'NONCE_KEY',        'UWj7*%qe9u5%aG.q_Xi@xSXd;Y7(s(6GEOoR{` Ed;v2u1TBeYx${@|4zI:j}i-G' );
define( 'AUTH_SALT',        'Uz4dnQ8s#]f  hC 9E] QM Ymg2pO#ydowwwu,2x1:>7l+3PQ2i5he>I3RHWg@R&' );
define( 'SECURE_AUTH_SALT', 'B&pV9TM1h]RB)&O&y w145c9*5pk}2^HFo2AgA#DPIU[7d>F|YY>BZzdz} $1}&s' );
define( 'LOGGED_IN_SALT',   'ZkJvB{q<4B^EFe25&OivB_t_#>@(z>-H5x7Jwk)tD$(uFku(f9G?#7~8>$yWQ<QH' );
define( 'NONCE_SALT',       '6&Yf~`YtEh`N (p0A8A/h>vS1Nr)a3MoQ6bk{YjJ&%Ev+PDLs$U[r&g[5oFu(j1|' );

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
set_time_limit(30000);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
