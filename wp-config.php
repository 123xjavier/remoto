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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'g^*<[sW:%sI$k3gsY#Q2^Gk4oV]>{;:<RU[^IEX~X3%<c{|M<D4WWHlP&29O}iSS' );
define( 'SECURE_AUTH_KEY',  'a`*@h&)nX3Dlj82Zsa9tgoHpm</~,i9L-<Rhp_G~y!j$0# I%>@-(~e|Y<l.mlF.' );
define( 'LOGGED_IN_KEY',    ')me2][!||frNI$1((?^)_L>,aL3PEkaudh4Y_{P46aBdyGk3B^lE7(PYV,T/}4[h' );
define( 'NONCE_KEY',        'zC=<EI`pViJ<nybY)WX!dyR,U)s YgR9fdy]t0H`&3YqW#,BIO+D`_DtytNW;^Bo' );
define( 'AUTH_SALT',        '<<`fQ/me9pCEtAPx2h1{c,kQ3Luw03I@Pbmrej+PGuxn~0}8|qqwbni!NX3eh^L%' );
define( 'SECURE_AUTH_SALT', 'L&hc@t8/KK2bfPDbx%1GOC84p@7SoOrkEF~tizZ|LoZL$7|gotTM=i#JnZCS-O(1' );
define( 'LOGGED_IN_SALT',   '96&9b(cHmIIpl%UG/.6sgr,-^GnU0#j2|w(r1QMPIL;C_?c9f{&Pq@FxM>u4S;*C' );
define( 'NONCE_SALT',       '/ie{mbuu0x.{J9+P389_:ut<],>IICnG }tEmra]w+p2P~J:Rc=s?UDIK16~}Yb%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
