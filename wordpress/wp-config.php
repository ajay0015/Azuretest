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
define( 'DB_NAME', 'kardia_db' );

/** MySQL database username */
define( 'DB_USER', 'abhiramjns' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abhiramjns' );

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
define( 'AUTH_KEY',         '$%ql=GMC|niUxY]8UP7DXa0:XWmlCbE%0A{R`b^0s)UaZHbo0Mp{LxZ0l{08)!DI' );
define( 'SECURE_AUTH_KEY',  'u51(- Gx_r${yHvIes`D:^}<Iq>2:B!0s=ea@;7#y+A#vzk8Ff(,h])nbOE_&j@4' );
define( 'LOGGED_IN_KEY',    'YK{ArSi?>}yQ#%rO+fMpmQI|(V7%:^.u>PK]@kEXO,~VQ6s}t^84U<010PlU1<h?' );
define( 'NONCE_KEY',        'sZzVh2by >.uY{lJ]@Wq[uGz;MX9Z,jABpHsThTpY=4E<Ev(mdq^o@Rz.^_>U<H_' );
define( 'AUTH_SALT',        '8,Ym.?OX5[5QFwVe?!$KbZSAva1-TjcC*yN8#Gh%8&0?mC.w7d&k+w8XQ4y,NOw9' );
define( 'SECURE_AUTH_SALT', '(>Mz=3;}|AXMOgzeT Gz&MNH3(`r,;tsx~gf2[R1ccgFE=g;@?aEb.yoN(5@9@tg' );
define( 'LOGGED_IN_SALT',   '[Q8[O=eO,gyLZ,[vbH[.9=M}<Gy_-i]|Cm1v;21iX!,_]1R5C=Ps+jNFtRy&QMT!' );
define( 'NONCE_SALT',       '?-=-,h/Rg{V?K:apGHKoc2S^24)x[Ix~NOH1L=EmS6X^rl PD?m!/-Y o*In,[J8' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
