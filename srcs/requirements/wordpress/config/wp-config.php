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
define( 'DB_NAME', 'db_name_here' );

/** Database username */
define( 'DB_USER', 'db_user_here' );

/** Database password */
define( 'DB_PASSWORD', 'db_pass_here' );

/** Database hostname */
define( 'DB_HOST', 'db_host_here' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'sb]olWqXawV:-yp[tNuAO<9?9&Uyz LZ?-.v#]mu{DTJ=c6].z6r)JkHXVNpb2M9');
define('SECURE_AUTH_KEY',  '9k>6fcF>N!f?)nMuK)z?miJt|yP;0(%rffye3eh)#pvKJTrg:{WT;~|$f=3#^Au-');
define('LOGGED_IN_KEY',    'f`K|kq R.W(@jmumI,yy<LsHcc1no:RUcx*OnN`6Zk/-4d]N`H[8/vt*myu;UF~9');
define('NONCE_KEY',        'eb!w@i#~WT)GEG2Z%t:LS6.Ih5(Bc+>)}R(lkvbg<M>Ob2s!CoXKX*+N-rHI6}1G');
define('AUTH_SALT',        'M0930FX5B|vz3OhrD(&(|V2Kw4@g{)EqDMzLDgY;S?m %nkhE3Q$VEg|p.+P}bU/');
define('SECURE_AUTH_SALT', ',mi&JlBQOqx~tSt-6DE6 !Tr3e`PPpt;Lw;`I%Df>=oRA>c05(TBYCothO(*>4Ia');
define('LOGGED_IN_SALT',   'Mxo&BDtF#kRO^ 9}tPpYkX29/uPZdrW$~8^j`x9s?aiYGe0|bug`pLV!I5qagyY.');
define('NONCE_SALT',       '&hu_Ge>@/Q[E_$UBu8$c3-}--=pz>o7&jHOy[cy|VK8IWRWOfGnlr&dyv>5EJ3p:');

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