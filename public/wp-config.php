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
define( 'DB_NAME', 'local' );

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
define('AUTH_KEY',         '/a+d+KSkpAmMiDATscFqup4miwjw91XrW9BHoKcCUbTQGUn2ISOCk1FFSyYirzeI0brgzAiq3dJaQv3vA2gS/g==');
define('SECURE_AUTH_KEY',  'Bi/6lf15Xr+WP7E29GGImiP7RlHcRTyQrBEr7XhIZYpPPDzOHs0pgAoXRn97dWBZ8CE3xrlfAqzT0nQD6cIEhg==');
define('LOGGED_IN_KEY',    'Yn/ov8SpNdEzMsUFG5vwfag0JMJxP6yh/L63WUAKLkT7w50MejArTx4u05gBAFrD71VO3zCHP53TOYyob4+qBg==');
define('NONCE_KEY',        '7wcSdrvRsoJlCs5NSB1hRjVMVCUZiUXK8suwYyO2iwNHu3IQWwBZupu9o53tE0XoXFWoYqvmiiq+15yncrTDAA==');
define('AUTH_SALT',        'fHH/xwJguNQmvA2158+YkxVA/rrPc13eWV8z6wDiRPnMBCHJ8C8EbJ0bQxvrOVqYmytJY6flvauFWBtqOq4oSg==');
define('SECURE_AUTH_SALT', 'V+MbCJy5OQTY9IjCOdj26Sc63+An+0raw5UmQUkjtKQnxeRCdRRCRZyL55ZyZ7CazN8HstmKFu5F7EE1DXrWyA==');
define('LOGGED_IN_SALT',   'PD1uSJB7S65Ykdlv7YOru7DtIPC04zuc+R8DSoeuxpHRZUCafKNMl7C8PdAfI2DrJN2NSKb70av5KQHC/MnLkw==');
define('NONCE_SALT',       'LNqaIhGnkACK3DuK5eAULJQEVXKXQ+JsM/1uO3yAxqJ404RxZxQ9yuOZe0zCOj3i/Fx4kFimYCINr4W3lu+9wg==');

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
