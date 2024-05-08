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
define( 'DB_NAME', 'thuongmai' );

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
define( 'AUTH_KEY',         '2g:1[eZP%$ZwjCu$V5HOw(gQK3!/j!mx9Vhbv9APQL8h>dwFT>^bA0$VU/HSt26^' );
define( 'SECURE_AUTH_KEY',  'R1B~X HP$P&Yr;er2W>~U,%(o6#f}/~48qe!)q-~N8{k<j/-BBQ+FQu`z-,<():~' );
define( 'LOGGED_IN_KEY',    'aaL/VL1.O5)ieRSw_T5n*#5&;38nZ[YYiM&?sD`}~UoTw4qj,WmFPLvsG9*^7q=@' );
define( 'NONCE_KEY',        'n[D{jOy.;eZ~,{5nz>@deQXl=2fa&U?g!?9=nA.S{&Kua4Itr/f7w@LMUEWvH2O0' );
define( 'AUTH_SALT',        'k[[mQD/@L<]x` gcz>H7$I_vLg1({LkOy_9_[oI/^v$[RW;-:aWTE8A0_P-H M>[' );
define( 'SECURE_AUTH_SALT', 'm$TX7}f2bLz[1R81=%fR!.G-)R&JbgoU>(=qgxy{u)t>Cq)u uoH4`Je|z]Fh-g}' );
define( 'LOGGED_IN_SALT',   '<ft~h?I({Kt^aVxm!%,BOwJn|dQrqvU@/eCw?Hg2QBsl7l930_0A_zBV&`oIwguU' );
define( 'NONCE_SALT',       '{XL<.B1e{A:H*^BwJW5u8i{8(o^lWiF!_h&e@4o@y[ 0r>FmBB<1nAVxI=9qHXgq' );

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
