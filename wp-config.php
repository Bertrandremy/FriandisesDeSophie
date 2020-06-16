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
define('DB_NAME', 'lesfrianza199');

/** MySQL database username */
define('DB_USER', 'lesfrianza199');

/** MySQL database password */
define('DB_PASSWORD', 'jkj121JKL');

/** MySQL hostname */
define('DB_HOST', 'lesfrianza199.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'JVDOnY2MITAU4TjcVYD/f9gORPFMMHeqBADvG2A3/cg5d2fWtj5iDvK6nx6D');
define('SECURE_AUTH_KEY',  'GeK4bR2yONzHop046jT7ev+KJIMcHHb5QhAaRo8i5bPCa8BKdhzUQl7nOKCy');
define('LOGGED_IN_KEY',    'Eq5p2Uk3mKqdnHs10k3Uru96d92Hjw3igWrdH947bxOIT7K661yy/vFegv9Z');
define('NONCE_KEY',        'ODN8atg5y3m2da9ubSFyGSE1/5rJs9Qv3o+8aWMZbOOqT+N9cGhvK0PQzeuZ');
define('AUTH_SALT',        'mkJ9Jn/ZLtJzgmDP3YXHqtbJfGQ+uGb9H9cQ8j79dNvuzF/XWXyxTv1rqomI');
define('SECURE_AUTH_SALT', 'T80u5AjF5MZzXvl9mTiPqoGlI+OQqcNlBwN0+ORK4A+IjbbgrknYlhscNZqy');
define('LOGGED_IN_SALT',   'oLd2PoX7uzosmk9djMM9lUKaG0fjEyIWYEQQCFwASNOSHIIqfj30T3LBWGxF');
define('NONCE_SALT',       'eWTPG/3DQMb5Z0hqPQ+EWyT5iOkpg4tE0ixOwzDnWN78oXqtEWH4OddNmZcv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor2290_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
