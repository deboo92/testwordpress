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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'U[l80$U4v97XHP6, lsY@)0hY=Drei#S*~nI<FJmgQt8=lK5],Ar%wU|Mg@oo{Qt' );
define( 'SECURE_AUTH_KEY',  'EsF,Jt1,J@Q01=fY`r1$@RQI</<JS3ICSP9y1j$Rh{u%N6-{n?nyoO$zhLrsP?6_' );
define( 'LOGGED_IN_KEY',    'cJ_$-=:~t; BE1Pb4h?27g#qGPuzth![?Ez?&}fnuq 4]S%p|`cY%o~G+o`]_yb ' );
define( 'NONCE_KEY',        'b:c!dW&{oEf9Y)-;gbKnhN8rLvBjr&eNfI-8juxzwYg@AASs2@<g+ZZUN:<|sh:n' );
define( 'AUTH_SALT',        '4n;3Bn-L(`Gfv>dg!S.y9Su2g&% pldN0($fV@WK7Rh-0eT:gFqDBywtq@?}fsUg' );
define( 'SECURE_AUTH_SALT', '{ap^G:O;jukX;tr!bL`aj1,NRl6GIdK)f_ /!Zs+NNT^1`fI.C]z~0^^%5Vyl|1G' );
define( 'LOGGED_IN_SALT',   'yE:y9!TW~YKRM:!x3Z9?,#=R[8-z.(|t_Ff|1 <%ubWX/!S=^?&.KamQNQ}K#Npm' );
define( 'NONCE_SALT',       '=G4cXq1DeS|.B./aB,X=>iE*x%`5zg1 bt(MI=6r0V>0|*a0,b=]*Y@5UBIe,SV8' );

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
