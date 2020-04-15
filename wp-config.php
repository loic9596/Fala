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
define( 'DB_NAME', 'fala' );

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
define( 'AUTH_KEY',         '/%r`,,%+L|Wben14zG_aeY(5*nmi[1n@.nlY$01Qm},02ss+B1&QyzT?=lSH>V%z' );
define( 'SECURE_AUTH_KEY',  '#:+BMhhr&2e`rR?~@J)Mb!QwkTiQM*@c1B^x8^ t_Y!;Ek[3{KRI[Ola`r2DIc49' );
define( 'LOGGED_IN_KEY',    '{c93,X_k/r>AlCc/OfN8R3M`j)c[M#wKiQJp>udjX*Ap%Q6g;6}=37+@lsS;QrVP' );
define( 'NONCE_KEY',        'HcF|OGi.8?P)o;*-a2Z*Nq+#aCTQfnf2x*hVaK7=M=Ds(Zm;6r`Gmv|Liw hCpq}' );
define( 'AUTH_SALT',        'N2v77Q%WAw;cl!Vp.<Cha%zTZ2r&:/Xr>?ppCfIa$Hn{V zbkH^M,#${I)d<8Gv%' );
define( 'SECURE_AUTH_SALT', '^n2Cr_S/.mGe%L^pPIdXg2Qk?mW98l}c]D(4>Om(g(59U?MZ_zj>p-Xk*G{ED#e[' );
define( 'LOGGED_IN_SALT',   'Paxg<@A9Wz.P%;b[swFs$_zrht]U3=q0{n^,+`./Uz_:3%.=M2vWt{=O!D bDJ_3' );
define( 'NONCE_SALT',       'FpdKwIQNoc5w%FhAA3Ydy1IQ;SgI+.&#K}/p;&f%gc@DyLw=yZa;{@<Y{3b>[4*8' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
