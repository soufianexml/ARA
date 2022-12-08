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
define( 'DB_NAME', 'aramex' );

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
define( 'AUTH_KEY',         'gtKTkVX-3~TqJhiz(ZV$P+5WE5*gQJ_b`b>wm^a)hez/F}_FYZ=64iH=|rL_oV_z' );
define( 'SECURE_AUTH_KEY',  'gkgaka{{miX^p>N+GC>UKU$/ry6-5oWny=Qd+Lz@>Ob3GW27-~]mRO.2DsKNMA4G' );
define( 'LOGGED_IN_KEY',    'fDI{hZu|c5}U+~?h-[M)5(b8hJ-5!w^vWTf!qdfJ*)(6,Ca[gPVdYM=K1*LTY@va' );
define( 'NONCE_KEY',        '%ZD*1i$%17r_ mzqR56KfYi[b8ZP,R[v>d*NmmCL&<L3a!%*/[Z]mv1XeZa R|@.' );
define( 'AUTH_SALT',        '}iRH-kTs~},.WAS$U [y1h_& }E@MF-NoNjS.`=QnNa{q::,%cA]VnlzP0kKq6X/' );
define( 'SECURE_AUTH_SALT', '<SN%CGJeh2Hp/|eSOHD{BlvyGjluD#DZAg?q9}s2]``1D)W&(U{k7aw96V-_xsQ ' );
define( 'LOGGED_IN_SALT',   'CZ$OjaF}!5M`<ubJ_!SJIE#WzpM~43G?hdg7--QJxjW{Aex3V,}O~2!Qgp10GhdH' );
define( 'NONCE_SALT',       '9=` Vvvd:hR/C>Q#23;<(|Yrj0UuYJuG<I8yY4c>{y4,.;t Rk<E~xKNY.)kt5Hm' );

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
