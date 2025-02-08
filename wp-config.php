<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppassword' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ';f4klw3^=0eu}CKO0V3IVy41`g#{Mq^?oGz{g+Sx?UIhQX1ovBQid:vu5uDWMs{(' );
define( 'SECURE_AUTH_KEY',  '%JbEkp!5pdcO(%7D5LE:,==`}#Zx!A6YN@dT%f;LJs}9az})b(e2zVN5?Xfmm@)6' );
define( 'LOGGED_IN_KEY',    'fgO#eK),<4}p9mdnPf7)Xlbce+Gv(`9j1 ,I[RkpPByp8LEq((~Ds;iVxdP22PcY' );
define( 'NONCE_KEY',        ')cyA_?uqD0tZU0FS:<laim@]6T4S$7zp$-k1mfj[Tg.-6wVQI!, vZqMuy6Zsc[L' );
define( 'AUTH_SALT',        '1S8_>y 0t</|Gjjy7LJ&Yy^*l?zD+t8XP8!Rtb,B+>Y|a{<]n$SsWWOz?H)FiCQN' );
define( 'SECURE_AUTH_SALT', '4+dy?uofX.NUXxEf@bskIXB-BB?&!q1>%FK$J0ZKe~ {9{e=(o{FBk<p)2{MDH#^' );
define( 'LOGGED_IN_SALT',   'xKr#Ej:dq1KW0*O!Dd?O[x9[fRnl*Escp9kK&N&ntdB.x5dS,{A]6=BOU*WTIjUV' );
define( 'NONCE_SALT',       'Br%pq;$<l2%[X[tUr|*e3?]W7FxtO~2K&%k?UT=A7Fly<O1FFo@y1]MQeV9vq-]y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
