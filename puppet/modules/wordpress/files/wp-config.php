<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'eTeKxsno-,6Z}|N:ZF]t0f/4Kan5T.V% F !}Ir?_~k-^|mj|Vx7bK82a/2Ad|Q,');
define('SECURE_AUTH_KEY',  'Bqp:]fhY%u5-nD+IM$:m O%HQ{CTFbL,9rhi$xV<;i}dY&qf1 s.pyB#ibb|x4b+');
define('LOGGED_IN_KEY',    'fT|52|x5og&yYi&s-ueYu|B0f}:o=j?b*n$o$ZH}weH3t+)89|BGVQ/ZTO[_ (&7');
define('NONCE_KEY',        'Gv@^OMB1+68lOoSYZ}B6|W`vB_+Ochwi=-{ntPf%||JXczf2ymBJEKC3&-j>wLD<');
define('AUTH_SALT',        '< )2qW#=%hlk|smow<4?hUx4G1GIQ*xu-x8kvZ>6=?b]5n=2J4AKcT)h| Y^.WK|');
define('SECURE_AUTH_SALT', 'K`b@Ah`LYi|u8([k>33kw4i_ R0|EF1ja013Ev7@ff,0)BPXZJR*-YEm>S hIP-]');
define('LOGGED_IN_SALT',   'ZRS!n,A:j2iX/{=&ZiM7WPaz xVhXa#J5MlV>CCg9/B!yU,sc@>xbV>PMHG`|OQ-');
define('NONCE_SALT',       'sRV;d)Cey37Idp_s^oz2_z3s-oJ/;@??9!TVV b+atIqTku_,)|V%Fm.a7WWL5FI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
