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
define( 'DB_NAME', 'plugin_wp' );

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
define( 'AUTH_KEY',         ']a=$U[g;Z#eXB|Qy`Xw2KEqOG7MH,a *%:F; n@Ht,48^!o I/p}.dn]&PdKVhF4' );
define( 'SECURE_AUTH_KEY',  '$n^@g1JC)J`OVI!Pn?9luMuiE3~-T-SL+}cCpL<alfdqQc(v7M5o,P5<NRgJVSV$' );
define( 'LOGGED_IN_KEY',    'lmyw;A(_<1fyM%0yR(4P}/5&w#w+WUXNr`L!7#nm*>b.jK=b$t682C_`~meAHP?X' );
define( 'NONCE_KEY',        'lbxCdO,A)bQAOND|vU^FVkW6XOA.fm?5[:2&WW++#[!<5?%0aa+3Tn^=ezOWw&$$' );
define( 'AUTH_SALT',        '}~p9n,j/Ab&NO3(w[9h?P8Jp2J(Nl$.9EO@pOv-Br{,ofgxSAZsR9YCMSgEdR pj' );
define( 'SECURE_AUTH_SALT', '2-JNb+zyg7x`lQV1:Z3_E!Oi8sAyivpPtW7R_pbN%x6UNJ7)yPE/x6 Iuh1CI]yN' );
define( 'LOGGED_IN_SALT',   'Ch1y`6ieuc4w4=H++-U@}v>pv^?-MzHj]x0|P,cEZS@r|J>5y?h%b3zv2WoW%N);' );
define( 'NONCE_SALT',       '4>l5lcn*QSa4TkR5h8&crA=OR9VQh~,3LmxYS233dK[&[>37;tKKJ-@.:u^&=HQ.' );

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
