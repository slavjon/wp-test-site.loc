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
define( 'DB_NAME', 'wp-test-site' );

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
define( 'AUTH_KEY',         '!Z_/1R4RauW||j-UXer@P(@meD2KkhT]=-7#_Bx=d_Ay_`~g7u@R:1zCC+q]@mhq' );
define( 'SECURE_AUTH_KEY',  '58]o1$gRgWP]c5tP*fl#I9O7=.s$yE.ySgxUt)O6Aegu~ORG1mjx;9v&4KKP3ZUz' );
define( 'LOGGED_IN_KEY',    'FY|/<>5FOH=`Y3k%?^j6b=f2SAC/:fyva3=jHx+ u$XC*nh&6|#t1de%5)I9/Ajd' );
define( 'NONCE_KEY',        ',Sm7<>tg=SL.{M]Ts=-H/N@e$mSmMVn&zQFA;/ihpZWhTD?.!BAJjEu{}!+ n<M)' );
define( 'AUTH_SALT',        '+)g1=OYx_U5o{Ad-#:CVg FR-oA3:z]LZDpRS}-2jmN8qZKX^lZwA=g-Qp6RJ.U8' );
define( 'SECURE_AUTH_SALT', '=y],p]b<!)o?%]:QqajeE]!y:md@yl@^q=SdLqxum=A-3zeL1Evmb;FDp,,$kyj/' );
define( 'LOGGED_IN_SALT',   'JF=R%C2L90b9=0Nz/TLQ~>8=d3yfQ;(Y4kXPDuCbnzY.s8s)~aH%7 MhAbuF<!zM' );
define( 'NONCE_SALT',       'z5IDLr|Jp1@dShyEWX)c~c yl{}H~pDDn2M:k%b$<K &K1FMSPpF#!:,CE9x$1ZA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpc_';

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
