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
define( 'AUTH_KEY',         'H]O(*>wy!o 0CLtcYF@f;oW8-,}V5N7<Ro|=W1J7<xEQiDsuU=/k{%nL_e+`g3Es' );
define( 'SECURE_AUTH_KEY',  '=dD^lUEVZv]F<n7&* Gv0f.jS{e+k?<` tQ;JR7tO.IcL1Qjqn]m[TG:<iGgq!En' );
define( 'LOGGED_IN_KEY',    'O>]c_y&*qnDosO|Ym=13+A;Gp@BG6@Pzn:LQ8Btkm!|SUNnRu5>0<Ff{|,&$SfS(' );
define( 'NONCE_KEY',        'wV0nX2d# FI$|I?mVLeV6C9<;%<1]U?;]}|cSXlDgl<spLqZH>+.l<)F6Xzd~/8*' );
define( 'AUTH_SALT',        'povT}1J9qj:$/|iQ&F`|}5c3K~RX{SPWp[$.o4~i+wi)!Uf8CdLYH(_,k$h]_{*k' );
define( 'SECURE_AUTH_SALT', '>=b8?G:e*U9<NaH7^H5s4dygrST$+rhE+C+l|{p=L;0oG+&w!zwk,?[a!Jt2k|_W' );
define( 'LOGGED_IN_SALT',   '7D^hs:V4ff[Avmi_faNKbsXe9Ktfx`P<,LI(X9[oYv?=f&u#G$m*zRt@o9<Retb3' );
define( 'NONCE_SALT',       'TiD2eypg:ZX];J;s).xX0Pw _c`wtMWwT>+-h)@KEhsa8DC~wuOVc<,tdvF#0@_F' );

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
