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
define( 'DB_NAME', 'wp_colab' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'WWH:kG}bDR&A9 [DovigFo${zk5h|=pZOQ0@v!RnWr88)*qdI81hlsTdL&imR}{2' );
define( 'SECURE_AUTH_KEY',  '%1LVPms(cLF51:vV&0P#n6=O{sBS%X:&oUvyPzY~7Z``H]<@sIT*EfgT~]7>Fb5u' );
define( 'LOGGED_IN_KEY',    'ZRkU8Afj9RKiu1_$1rMks?+n+C/zx`@ayt%g?K|}ZdnM>qV^8}Q5p;4EFVrbJZRK' );
define( 'NONCE_KEY',        '<6_-%&QkU|}fe-yE*m1amJ{Uz/Gt>yF[>1>,YQE|WH9_4wy6&zmr~;xP:~!~(3$4' );
define( 'AUTH_SALT',        'B*O{t7B!!cw|Cc`EC$Xd]wXm]3737<iZ~_$>A MtTmLcOij>?53|PQ9y9&n4ts[r' );
define( 'SECURE_AUTH_SALT', 'WU$qiV>hj7x?TDKXvk(iepnFx3Ah}$Rs}xmb?<EcTP6rE.}IGqk*TK-&??!;t5I?' );
define( 'LOGGED_IN_SALT',   '[I]Jk2Zkb/@OP4n6h^p:^ ?vfFIj|Ia2}T*o*J%/?GuHH)H(GbO5O0:YrZI3SgAj' );
define( 'NONCE_SALT',       '/+hxCGU!4@7Zr/7/fdNL76`2c9LO8:dXbmH5r-ezM:Lr}YY4,X`{8J[&;+zQ%^[N' );

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
