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
define('AUTH_KEY',         'gG83y3CPeVoPqdna/7abw8jHNoEmVTdjHwOhzlRC3x+FLILh7kSuJOpRjcUOPqfzOtA3q8gmmB9QcqFdwnixtQ==');
define('SECURE_AUTH_KEY',  'HY1qPHsEKycLNjfaJJLkqc5f2yZwkZD9pVcxYbGl7Usfc+nykzs7VFgTAm11AtbyU4eascYS/UvyH5Ntd4n8+Q==');
define('LOGGED_IN_KEY',    'KDDkUWLIKqKv521Z4kPv1uEqRNpmoim0DacEq7MVYbt5WilSzhAZjG/XdYg7OTNYKn1tNb7FhvBrKCHALpfwEA==');
define('NONCE_KEY',        'IVSqzNpE012xLxUbx6APpS8182t79Yn9+b2qy3HId+L0s/vT7hR+1420qc0uXIK2MrOu2ZfSHmZxEXxuQZyOww==');
define('AUTH_SALT',        'tJH8X4suE4c+MLuRt1HMHqJJb943ZxBsMeKJngQSFPiwzEfr5gZqs2+HfhpQjUeHtC2zxoWNhzIOgJbfFZLllA==');
define('SECURE_AUTH_SALT', 'l0spqG5WQDDxAsNOZfxC5kSMEcDuPnMcRB8EU5sg0F0DibesoT93ael/7JpFECAW5O7XhsCDFoPJepb/ziYq7w==');
define('LOGGED_IN_SALT',   'tF2iwTZwj4TGnVA4qviAf9t0PLGZEZAfNXaI0fIW+dxFSB59P2vKRz7Sx9j+kHbJK0I/AynjWO9ZS1friioJzw==');
define('NONCE_SALT',       'EihWrfCBkMlc5Fmvh7oOG7rZCXuqQfgI0WK0q28/GPlzCKlX7+qj6dKl7IDuJmqcTNN5EAy2DNnCBnry1V2MNA==');

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
