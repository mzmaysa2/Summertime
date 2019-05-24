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
define( 'DB_NAME', 'summertime' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '8L*x|o)pQ6lJk.Hc8UW_#AML&e@vq*OzG)XP!lyhv-Z`gS*{vB&_a,7z+:<,m+xc' );
define( 'SECURE_AUTH_KEY',  '.}{w/Wr:W4_Vi #lSjAVKc]CdcF28.qrc5>e^&p.]k3e#o,UnQs5t+H8q%=TEY0v' );
define( 'LOGGED_IN_KEY',    '06{MDizK :KIv7^:SCP`e25rEOj&8xq~P96W#|1B1J6-Jyb-czGvf}kpTPK.O*=G' );
define( 'NONCE_KEY',        'B;1|2L6NcYt)&wVA!Ghkk5Ad}+l`yWo`H0I8QS9Hk)kemQs<yqLDea+,GC:bnV^/' );
define( 'AUTH_SALT',        '5HAFzT%XlkdKOS-7pQxmo;n#2$P0_l25}(y-^y5 /!^u02s/q<87I#]_0.bp9}<r' );
define( 'SECURE_AUTH_SALT', '<$SK#V9]|34elTz8_`a~+r`Yt@GKO8NE}3Zh8Dm)`y;aDckM1!UJ4qjUJpd,6q:f' );
define( 'LOGGED_IN_SALT',   '8FU#;:,(-Y7X{Fc;_b*<Xi ur0#)DaTp3?>#sfC_J~Y/s3VsiL<6QGU6gE,{}2oD' );
define( 'NONCE_SALT',       '0nkE:;]~W!C*F. a<ZKfVwcQWUM`|I)Cz# byvm$EC2`E..o~jyRk/ZE3:h[aWTj' );

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
