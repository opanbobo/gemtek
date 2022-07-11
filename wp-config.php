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
define( 'DB_NAME', 'gemtek' );

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
define( 'AUTH_KEY',         'oY&F,3es|s6j~TP,Q9UmGVQ_7ymv!?qA@DtVPR$G]v-x!xE-UKq&ms?x`2PASc#z' );
define( 'SECURE_AUTH_KEY',  'a-cz5&|6`<9 :Hz{D{{b/Kme|cMb%!j30}|k84.RNQ8Q:=|ex ncj wE[/Ihca`&' );
define( 'LOGGED_IN_KEY',    'J=K7,_<?Li[es`<EHA*EuXf)Y%<^CC5=5c!`De*cq;M}bu/w|.Jk3nNK;:}9ukUi' );
define( 'NONCE_KEY',        '[yr)nk@Ux+i@2dZOfs}>=;V6]uAna~gU6.q>$490fURDA8k.S]5sEyy ,3^),ZwW' );
define( 'AUTH_SALT',        'N%$O3?1z>CPEvf7uEW[Rs9:O,`#pf@6CBJDL!ngEZMVXOM>GcETu[ms8;k],fVgF' );
define( 'SECURE_AUTH_SALT', 'FqEL3T9qUT:+xykq%3j,.vJ>s*}Xf@+;dIcB6?]KZPRE91M+|$d#S7O*I$q`$ukb' );
define( 'LOGGED_IN_SALT',   '+4)4-ifSgkJ0=!{A~%0y2MOMw@JR`]VME8Ao|8n:JF#jjeQ:4vhC5:<3-!-ty3vX' );
define( 'NONCE_SALT',       'm!Y{xpe5;#|EK>SD^0WjN)2WN;%`(NtTeyzKT{55|/M13;v4jj|To0(ki2 2x7+#' );

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
