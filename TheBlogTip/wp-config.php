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
define('DB_NAME', 'db688669539');

/** MySQL database username */
define('DB_USER', 'db88669539');

/** MySQL database password */
define('DB_PASSWORD', '19dfs');

/** MySQL hostname */
define('DB_HOST', 'db88669539.db.1and1.com');

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
define('AUTH_KEY',         '34gvnqodowtc3bjjb0yprqvgssd9hkzuzfeddldaft7szj6ktyv4lr5jjmunxq5v');
define('SECURE_AUTH_KEY',  'k6fo56imj2dekk0hfu8hupdo4ank0eibm7exqoze4xdtxb5fhrysvz9ilakfchh8');
define('LOGGED_IN_KEY',    'k9w6r4ahubn5vjeuy1dcii7idbuc0sbq3gt6xlhxoupzobuclae4q6ymnhx7vgzm');
define('NONCE_KEY',        'gvbsr7lorxbltfcewcujbtvbqxetf36uvnotzpwpij4kulvtcrzpjra7kcb48xhj');
define('AUTH_SALT',        'ib8deyq4pxyavvb8r5cylvday663u0eeosug4lqoi3rwfzhu7hghulszwdl82h2n');
define('SECURE_AUTH_SALT', 'wh8r303meancnzezzytniq7kwyqasuzvfgpaoz8nniy9jpc8wej8unyxrvzbdsj9');
define('LOGGED_IN_SALT',   'rudbkpblijbfr0b6k93qlmy5bh0axuzsjngpbi9eyvyjkm5fdoow6cxy8tqqt0vx');
define('NONCE_SALT',       'rkuq8xzljpgvdrocvz8vs2393tsy5go1s99rhmk4mndk5evpjjrwddk15ciud2hc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpqu_';

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
define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
