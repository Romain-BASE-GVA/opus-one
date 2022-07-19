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
define( 'DB_NAME', 'wp_opusone_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'C$@B>MwhZ4/s@ILLT+6]CM Vaozz|6EEi9nqGXbb!?p?tCoII_h9~Y+4GuoM/n4`' );
define( 'SECURE_AUTH_KEY',   'b1vPkM3Ts<%xze{`0G}*f&8<%$gMD6$P@&j$>w`d<X]gVUrxmVcc~z+;6bj]q+||' );
define( 'LOGGED_IN_KEY',     'pk=q~7lM,FfK^I^mMH#|dz7(K|KlNE;Bk9HUCP(~g@R;z] C0zSFS)=~aiOB(N5E' );
define( 'NONCE_KEY',         'm]ZreBoX2tuX{n3u 4(jJX:TO8Ntb<5_?:P]h|c:kGK#Sr~{0kndgk|j=x/]B,%:' );
define( 'AUTH_SALT',         '_p>QuaS[$WKc9Vz9a-zU}D({{d9[zD(@uL1gcM31H!MF{SWq0hHe=t9NT{GR9tL3' );
define( 'SECURE_AUTH_SALT',  '.*-dFwD2szPq0<9V~6*QI;l+b_ L~Mc@TLTRi]pn}Ux^-,n+S*ldm6F|p|=Fh(i!' );
define( 'LOGGED_IN_SALT',    '.hh-<| O1Ga:WvqYpaxSE3t8I38ixb<Z2Lk#BM[aH$?.q7ScgEp:1mH+^|wR|pgL' );
define( 'NONCE_SALT',        'g0tDkxyNOzHye[zQu&@:9EH%N:HevHPv]oA<i3;qA^<6i?s3X8)<*Tr;o9APs^w[' );
define( 'WP_CACHE_KEY_SALT', 'cp=eG.Uc2/,{X$?%q@CH?bB>68g/ZTE-a;wJS7+fYzbz%^J6<N|G8ZOMcw6 Zh-A' );

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
