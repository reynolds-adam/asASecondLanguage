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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'AA2LDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'd1|}N@&{w??QyjCaFKPEeHe6;$<iZ>LB-!nA)?(K_OfUp%9V3:s6*}hyB4A9oq}]' );
define( 'SECURE_AUTH_KEY',  '*.!os/:(gf*lqx^(WA}?(yJ6/#p#*dn%!G}Gi2a-n(BQDpOg!b [[Z-8Jh=5V(_+' );
define( 'LOGGED_IN_KEY',    ' Cy!=t4Q6PS$Na9|@Ra0yPMbPn)UdFtfx^8a=_fj^w?~/|pF5)ofUf?Szl[q/Q/3' );
define( 'NONCE_KEY',        'D1`}a*+d^)qzR-#8=db?;eb2,CE|]u y2M mq }g7?yJH^m_W>CN!H@?_/shdd47' );
define( 'AUTH_SALT',        'yp)M&o/oqK<e[xSnVDVP{j!;CvhoAO<#<T1X:od6#O@?FKKnL%1`|8P6qA?yn/&Q' );
define( 'SECURE_AUTH_SALT', '3*3YDkRdGR|9G;]o/D[0RFjRw/g=K`!TWuw}gCyn*Cq?<?J0Fu]Bu` %q4ngus]J' );
define( 'LOGGED_IN_SALT',   ';F{y~^n?ROpft6<$U/a:gOr_,Ta$>U)S1HmKr??+NzH`Ju!ngZGK|{wWM796Z9 I' );
define( 'NONCE_SALT',       '[CT+_r3bzhb,,+`F:eY,&ZK@r#?HtRC/Pxif^jQg:qPIX|ib.>[cD|OHXz@qA<l_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
