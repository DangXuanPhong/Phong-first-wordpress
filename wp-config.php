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
define( 'DB_NAME', 'phong' );

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
define( 'AUTH_KEY',         '7DyrIe@>[JcBH}jO8cuMDQ1+_g=k<T=nW8r X8P>L#qCQkbS E)st^ZtUWGqW7NF' );
define( 'SECURE_AUTH_KEY',  'HWbSF_&L`iT,`WzY4x#a%X9b9=B*{D5;o=@D;bBzJgL^T4Zb<<njDeR_1xs~Xvl+' );
define( 'LOGGED_IN_KEY',    'Svtf=3Dy}x)80e$5}!h|($X[~5[n9UI&Z*hC%.sr& /,=:wL,WQv)_uK,h1}K!mS' );
define( 'NONCE_KEY',        'MDtVOQRE^hO(,qK={`NBl<6!mZs):lO:I4UC2Zv0U|c2q5b5b~)f8}h[9u$XUv&}' );
define( 'AUTH_SALT',        'y50X1Bx{+{MhkW/7XBtpMjjfWTqIzjWRik%[<T;pO$a@7JHj5[u|(4RS*pyfyBF-' );
define( 'SECURE_AUTH_SALT', 'n[(j<tOM:2w)rO,^rh u!s)N8eQO6Z; 2_*t136Ol^SwmSR;dT6!%A0d48S[O|`Y' );
define( 'LOGGED_IN_SALT',   'YQ[0|9I|D`tw~|{+gK{#@B~kiu.+-%=[/YO_hYW1 W$>PiatZ=j*F>x1^Fx<[^@$' );
define( 'NONCE_SALT',       'rl[akub06{fKwuG7/GI(QCq<d36x]lqU:@BW}_@|@<C rRRJIfmC*($ iQ)z1P^r' );

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
