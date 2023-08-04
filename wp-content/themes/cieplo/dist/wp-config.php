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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hxxhsjwmpg_wp16' );

/** Database username */
define( 'DB_USER', 'hxxhsjwmpg_wp16' );

/** Database password */
define( 'DB_PASSWORD', 'K-&DqETnxS1fXVOYZ#&98.)9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'FSLuHeWFz7FeocIhzrLnDEYSo0abzlWa13thpac7Vcx0WaHd9FDhKtce54u3276K');
define('SECURE_AUTH_KEY',  'bewyYJkwpxvPC0ya2KiXuBCD78B7iK3KdGw7gut5f4VGq5C4moazNep6nM57JxeS');
define('LOGGED_IN_KEY',    'dd4oab6PpwQGmlOLvmIEpGlsrqVOL7QQJ3IIJPhFG8LdODJPDVaZZhfuF8rbJZTj');
define('NONCE_KEY',        '92IMz78MIdZhYYsBg1IFtPovREx98RWzvxklSguPfMj5cEeOUrBX2NK6FIOv8rHC');
define('AUTH_SALT',        'We8rOaguLeg8VfIDJqvaamOofRScJjgHQPrEsIUrxNoGlFRxc4is4CY6CO47nWYx');
define('SECURE_AUTH_SALT', 'v9pDTGxiHVkTzsJqu54X89qCVON3izUZjiwRY17tL6rnKaeBc1CJlxWm7nxc0FJq');
define('LOGGED_IN_SALT',   'HZc6cOUAYLJ7DyVxeMl6sBXAlnVLUURwKBlp8vbBNzhXiqFGWPpbDA77lxYQPkbO');
define('NONCE_SALT',       'iLcSg8NkBFFJnxAAfhDHfoZoscqtUzin4AhaiGsaGZJUtV9bELwLYgcCC0EX6Eia');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
