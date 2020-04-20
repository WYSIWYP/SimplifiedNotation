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
define( 'DB_NAME', 'simplifiednotation_db' );

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
define( 'AUTH_KEY',         'i`lP2Ls~<U@9Z|13Q&0SG&ww^wk8O?>BQBKrN%Ax9Ap4^7,/?V4ct&QT1U$|zUv2' );
define( 'SECURE_AUTH_KEY',  'RjhcbC&44Z?QJA5c&YfrEM0b8peL5H$//9+}6yc``wCCW_&^CR,kUATt<?dxlUGO' );
define( 'LOGGED_IN_KEY',    'l*/pvB@=7UHewcJ`Qc(G7jZnIPAr[#}DaiTmg!W*hCYZeIs}Hv/ETo/osKGUvGaT' );
define( 'NONCE_KEY',        '9.]}P^FN6eG^S!NerXs4uF=H_9M=8#IpTI*.>/}~2:Eml|vYo<3<tC|d1p:-/kQA' );
define( 'AUTH_SALT',        '&=AEuIdVa%HD{3mjYj|p^jY$e)oTQ,KE_:i<n8bOz}ucgtg08sX;_!^_VS]dUS(n' );
define( 'SECURE_AUTH_SALT', 'l ,6:SrNT;h|kd)niT^EW[W%P;5&`zp%*?@k?-]{)?+fdg2T3Y*rOWX[Ch$.8]s}' );
define( 'LOGGED_IN_SALT',   '-1_](&5X1[@eT)7W#|:@7en2w-21[2ZU4YK|n{+WBq.9MR*hu%WL*ML&d*K,S1ap' );
define( 'NONCE_SALT',       'ec1T!`lh_2)@z5C+MSt^>>WFQwAYtv9lBzAH5#X/j83o0f&~;37Mu%/T1P)26N)c' );

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
