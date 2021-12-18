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
define( 'DB_NAME', 'cooperativacorreallc' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q2b2TQEDvfeD0jiIyF6R' );

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
define( 'AUTH_KEY',         '`Q3&.>u~n5v9%DT&()!tT&_<RqP:nJZFcE.^IZ4@W/3Y<dm~Bq:x2y-xq!6g};G7' );
define( 'SECURE_AUTH_KEY',  ')y2NScMjSGP__N.kTu5|,vpyVZhANE=|eYou>+E =af=4U)9me>PV,Zyu*1YP/z)' );
define( 'LOGGED_IN_KEY',    ']=-Ad>I|uet=WdB4TfD~d^ebAR=y6]Z5mkS8Sl)@R@@/k8&z?g)D<pU?{Q;YDS+l' );
define( 'NONCE_KEY',        'C@2}AKEa5!ElT*_WhT]<tu_lxcZ$m+6G}WoOh?rV%Esnl  &zv1yLtqo}@Vh}7A1' );
define( 'AUTH_SALT',        ' .$xO?@RFj@$_$1Q4&U9vm$:BWI4W1ZUn@2LM?7I<gnPKe6?pJadpnirk?W+&3,.' );
define( 'SECURE_AUTH_SALT', '!s>p/hNvup!K7c|Tf3)O>s5JkT?j9VXpprU}sak$H&RLtcuQ:Q[n#mIG`6w=,pZv' );
define( 'LOGGED_IN_SALT',   '`D9.5:F:)vxl1{>X<4[aJ3XQT$e5L1:`GC|#z>Z|OQqjmn!zcq}K8~~&V3DOj0V>' );
define( 'NONCE_SALT',       'q|M`oF+?W^]=M1B)s|?*|D{&9i?5CSOO5v)A^XfY+Z,Nil}x@hyQ0]B_~3`?OOl;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cl_';

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
