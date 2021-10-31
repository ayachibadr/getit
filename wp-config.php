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
define( 'DB_NAME', 'getit_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U5VW-ye{~4,yu%!s0;q[twncqWge3LR4O!>k>JZ7wkLrN1)Rw!+)b}hEP_Ss(|!.' );
define( 'SECURE_AUTH_KEY',  '(0]EP6Sz),Yd}+Kk0diHW%R=~e/nJi{V~kLYen9]Duo*{LaX3gz;7l<26Vb!YV2c' );
define( 'LOGGED_IN_KEY',    'FMCXKe!SUo2$~)#4i{-bYg7v40SB>s{H XCqrVLqK42gWKHuU%PXXm~oF/nZ>o8k' );
define( 'NONCE_KEY',        '(U 4y)xVUyW=yBej10Hn[}~;~ytP(X$t[&W o0cXFL4[ZRf,!TZbF4,.}C!E%Jr[' );
define( 'AUTH_SALT',        ' `gN|B|KreR1+_QuZHWwC8K#&GppV>voK#kyLLk**!!j|SSsAin3Tm|si+~zawsn' );
define( 'SECURE_AUTH_SALT', '/|6#eDH?}#REBt. =GxqWa__.~ZM8%c(RV-a8c^I+F$oWI|g1[&Pjnz-*fVp]RaQ' );
define( 'LOGGED_IN_SALT',   '5|52Z% ?^w|N2dbwMBa@dko&]/Ung]{.v<m:B <=P uCC}UZ@A06hP!1q2C{yH8P' );
define( 'NONCE_SALT',       'CX::(/2S#w)jT -#7i# BG?Mi#hrsM||]Ud/$IuYe=3:Wa=RRisZVGi]*zFoUZ0;' );

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
