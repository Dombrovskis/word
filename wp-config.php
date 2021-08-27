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
define( 'DB_NAME', 'wordtest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dqKdnX~zE``a$.bq0`|dpf+9LoH}XQkwcTx{r1rrw1p8luPJUFT?gasi%fIs!bB>' );
define( 'SECURE_AUTH_KEY',  '-jK|fV<%V;a#PFE7|r7s,Y*2+,q%uYA8v/keJzv]ze=;vggfMg~[R9|uT.HpgTGE' );
define( 'LOGGED_IN_KEY',    '|5irS5HRD|rgOi%/*RT~0S50neH2 `P=+2+nvl0^1tf[Yso(RL4]/![|e,lf+Z+Q' );
define( 'NONCE_KEY',        ']u/?kCkGp$th=vi6s$HPloM>kGWB|XiZ,6<JduiF+0WR&FsZ$@k0eSa~}SE7kHM+' );
define( 'AUTH_SALT',        'pK,Q?o!XSDYPyX4]b(*+.;.MdB;:buC^!ywNJ, :K7Y!bO?[Fsl9cmDgI_H#afg5' );
define( 'SECURE_AUTH_SALT', 'K41 LipY<sE4k:NS]Cw$DOfrYR DHGNo2g[,JpWyl]blSn(.LGZAm-K=ej<}keVm' );
define( 'LOGGED_IN_SALT',   '?&bl Au!h#(_<o&(E$0D38;T_r]+:n;,=SO9)Gc}2sNt]Foz|u1vQrFZ%7VOn=xu' );
define( 'NONCE_SALT',       '.l]G#Y2=V-x=biD~}DMqXn;4SU*b`qf|gjR<P=hjo%@5oU;P3$Vj_Xx8XbIX9o/5' );

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
