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
define( 'AUTH_KEY',         'U`_pfmIUq5&wJMIXt@#v`p1*>14k&dY~[}oFqCVgt99Q<5n#m/A8TjANKRi.2qx+' );
define( 'SECURE_AUTH_KEY',  ' 8iMW:O+gO}=cvO?~Qqk[~ Eg@Y(VO(&S9(j<]fHeg}PIWTy59%A#8A`-.0unMV~' );
define( 'LOGGED_IN_KEY',    'KDz?{eDd[}JVrJQ!s:7~(Q(9+yhEvoZ_5hM[B?m<SPY<Eaz1Rtkf5GQsnaKW6;2=' );
define( 'NONCE_KEY',        '[Lgu?CrW:=Jyx>}VUbm:2E5%91<U-b1|^<!SahR.BUQY,-=  WashSE3k{;s[?S;' );
define( 'AUTH_SALT',        'tr_k!)%Aq$.6lMGshtS+_F-IwInAQ{K8CR-!l--_NMPv1W2IM0~TDHW*NAzExvU4' );
define( 'SECURE_AUTH_SALT', 'SsZb/61Rh8zkJ([JgO+@mUN+s:-qNx_o xG9FrUG=ix1e-5)GaqOC]CW+B#7S?&]' );
define( 'LOGGED_IN_SALT',   'V&Z{C!X/7CG)5^B~Beuj#73KB&QU<vS5%,cV66md/o?Z[CWx%t::g$k{`k{=v*.t' );
define( 'NONCE_SALT',       'x>F$#/~&8Pwh_f(L/<G LZ_B_lIslpGun+}zi=!jvK3=5^k]t(M3*f$$o|(8/M}`' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
