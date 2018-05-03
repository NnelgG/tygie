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
define('DB_NAME', 'tygie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'C5hP0(/6sT.k?&a/gOO~)-W3fq!q^Z9lNPeF3W6)iZ[&A=2Gen8Y;o_jb+z6UUsO');
define('SECURE_AUTH_KEY',  '{cl/ys0(:i@k!*?#~UtUE@;W7IWKNEAIqt_3BUb&vi{Tx, P&yBBrJK*#>&H?/>v');
define('LOGGED_IN_KEY',    'K;GMVTW8I=MM~5wR?FNQ(d+5sy).Z}(Fu2KK?x2S1|xfC<U|l}.<9d~k,r&::kBK');
define('NONCE_KEY',        'Y!ag+I*kn7HZBe/NUqwx~E*VJX9D$i8fW*B;B|ro`!y7nrAs3Aj+yRr#rjxdAT~=');
define('AUTH_SALT',        'tCbpR|kLCw@pmug/ew_VrO|GG5jKX]:~/OyJXY<G:W#:^8i;cpD{uz/z[xGWkg,`');
define('SECURE_AUTH_SALT', 'nt+v5R?9a^fz=|uFKU*ITT,8ij#vk4U-%CDv9U2KI3ja@8q`Y3IUH9ePY66;4!M8');
define('LOGGED_IN_SALT',   ',BD45^&-6]nE[e3p4x)2`s?^5WB[/cHI)S8To9H>Jp-b,{?X9GK2jF^u`w@UDp#k');
define('NONCE_SALT',       'ab$h-d4?l*:0g~r>5Sfg+!Dz^WIRz[FJ!hDwI)Oyb?nx2!a`P,,2Or-%L[/yuVwW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
