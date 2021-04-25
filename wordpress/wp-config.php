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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$ex >6fRJRANu`GZX`~@ah(bKW+k[Ix%g9x458Jl4eyEr;w*[i#?:WW?Gb`h#+v;' );
define( 'SECURE_AUTH_KEY',  'Ysx_bBa(j!?n2O[6TZsY[X[<Hz(/[ZP1SOLQSu:tAwCa(mYGm}k0qp@M4L!mj>QL' );
define( 'LOGGED_IN_KEY',    'N))S0#nO$6ux1PebW0pbK6U:4Z:@L/`:UdQA4rv4xz#`%v<fV)}d9q7ZZf7O#|*g' );
define( 'NONCE_KEY',        '8^82VIgX<d&JM/LF8xU^N4{a7J|#D~:LI/&gJNI|+y=1&Y:fpdaTKoTj,8]3f ~;' );
define( 'AUTH_SALT',        '=zaNLin$,E9en{Oy]jYu7O_lNcu3Sgzl}6s(8og8xa8HjOnjbeu.BNNRKy%=5&iU' );
define( 'SECURE_AUTH_SALT', '*-#ebH%kWk2ot9r^fE%vouidGaf>MqCZ.yip,.@&=./r{=ZIEwO0Gqntqm@R4m#s' );
define( 'LOGGED_IN_SALT',   '6@}U)>~=A>ul<+unK@NPFWMwQjQ u/^zp<g^MV_Kg$^`-~Xp}OsJ8o:|?x>}O}XW' );
define( 'NONCE_SALT',       'A#bwF3q)Q>S81}(%5qo!:uQ8{b< DdvWDR%yX+h,9[/{|a*u{;SMT_&<u,wfPW,]' );

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
