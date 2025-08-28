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
define( 'DB_NAME', 'wpku1' );

/** Database username */
define( 'DB_USER', 'pma' );

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
define( 'AUTH_KEY',         '192,!mde8vX!&:Yk28ULNbVD>V7509q=xuqww:!i2Hx${F:gFQs=h3+fYvY#&si1' );
define( 'SECURE_AUTH_KEY',  'oFsND{K!^FL<Uc/kWaT:/kZ_V`TGy?M4:G<GG>cJ9SGrF`t*uFy@~!tL|UMzd!ts' );
define( 'LOGGED_IN_KEY',    'MhvwQu-yV]!Z$hq3YbX=lU0&7>:y 29#ru}kPm>OUd-<jU>o`+u{7$9O cg|=S$z' );
define( 'NONCE_KEY',        'E;ot[[qmhjk4(~>mjdyF@tA2@EOYBLc oK7@01_TD`yUg(hBj|3d{1OSv$rg~new' );
define( 'AUTH_SALT',        '6s?1*{}P:%SbOvpaE*P8&i^a])U|0Bh2a+4xv2P9.:)N.eoHhvzB>~2~t69yUHtK' );
define( 'SECURE_AUTH_SALT', 'HGOZVOH7>0}8_y0X#KR(6Sc5%^cH<e,3r,.gE#Hi-s?gHdOz!e.3_}GgE9Dd8,S-' );
define( 'LOGGED_IN_SALT',   'a.nq5,CTHmF=C#Q5r1*^}k`drp3P_;{zGgo~KAgHN<`Sv</$m#3^/~sNl{R3zdA)' );
define( 'NONCE_SALT',       'g>*-9`6[)q=CZ~t(?!`tGP.e7dtpZ<rqpv9`c>U(~K7X}4J-TLS[+/C~Ms{7eS>#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp1_';

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
