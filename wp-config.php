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

if(file_exists(dirname(__FILE__) . '/local.php')){

	define('DB_NAME', 'university');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

} else {

	define('DB_NAME', 'university_2');
	define('DB_USER', 'tirral');
	define('DB_PASSWORD', '47115585450518');
	define('DB_HOST', 'localhost');

}


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2_.;5v%y+f<fPF5?X#e:3m_[vad5?`/IKzfkOi4O1;Zs5ZA1]x0]S;.kmSV-7qC~');
define('SECURE_AUTH_KEY',  '<|7tQd*Vjj$Q,]7]f6_,cVux/2R^a;n(`v.A7(MBvNUfvxi|uOZ4}6(?e6QEjp#J');
define('LOGGED_IN_KEY',    'mLJ&TJa^=Yd=~~dT<p9)P$/(nmQ+e{ugrq/ll|jzyhnpsU_&2-;|5gwI~y#a46Xw');
define('NONCE_KEY',        'b$]4Up@/.`N;%p=AL@6sF,m=+Vm?-~vsl#Jov[tiQ7E2xHxBSK_`q<@NL>VF8{`M');
define('AUTH_SALT',        'Ch8YwZ?Aeu,[&;%Sa$, .YskOG=qCkLW9cxb#Q3[q<o>,f@L}zeNk9Q@G77fl[}}');
define('SECURE_AUTH_SALT', 'C7+:HuK[z%|h?k6Cb<6T6vj*:m5g,~R?9};&>0<][?h=~[^dr{}{ATF?g#CEEsE&');
define('LOGGED_IN_SALT',   'o-W N^ir2oKsdvb!z  w4<fwcLSC~~x?VX|D<5,W=A*E,k$|YZZiBTu<G=>u0O1%');
define('NONCE_SALT',       'bOpJpec@)R)~dqH>0=WU]+=f;J6LkArR9Glu7`>Df=3))0Vz^70pZbX-,:w1pk)M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
