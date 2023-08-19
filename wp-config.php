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
define( 'DB_NAME', 'hm_hammerio_db' );

/** MySQL database username */
define( 'DB_USER', 'hm_hammerio_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hm_hammerio_pw' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '@jy B9z@+i!zCVYdHfDlU2=5}tR_L$?4-J=A@0+Bo+ZM^Mb[vG%)~-LbCh V^uNV' );
define( 'SECURE_AUTH_KEY',   'WI{;+xq4W{54-S;0a~U.r%lf3XE%SV,/U:$}Iai*x#wdI0F-d`fq?6_D+>PqRXO3' );
define( 'LOGGED_IN_KEY',     'NM!9?DiFK`OEq>lfm?`<F83ONKMtA3KNrfW!:2u^-,yU&(vw<.!gn_v+]fU67]h%' );
define( 'NONCE_KEY',         '.52[JIEdflMmCU.hXcS%A:#]&;;:8tv >/[IY|l2{/I{1?vD(unsBC4V[z,!,$NE' );
define( 'AUTH_SALT',         'u#@0xPKseqzc$Q<w@QFaEp_~}:u}.3ZI`8~h!)+0^#u}iFJ`M7rc^aSa9X{I+6cv' );
define( 'SECURE_AUTH_SALT',  '[Xi /[c[LAHRDTTH5)Q&<{nZ.V8mgi@4Hudc.Gxx(]l$jPf(7E77K(bS^Vn<Gw|k' );
define( 'LOGGED_IN_SALT',    '(0,3/Tj.I_f79OS(w@~TYKOZG&9#;9{^15gdUB?pXOD`+Y9o|KW735Fc&Il4O#qX' );
define( 'NONCE_SALT',        '[~En<;bDrWn]9(Df0a|@eI2Pn;7#F{Ibp0+7ktVRy3eD+j_>Aw=I&x=3uVa6+H6~' );
define( 'WP_CACHE_KEY_SALT', 'yU%psJT*+MP&4z~+Gz Z>ceBA7d]t|:KDNWC|PUJ]&d%Z%& 0Cwp&#kE_H];]:zI' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
