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
define('DB_NAME', 'centrosa');

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
define('AUTH_KEY',         '-q0%{cnST)ms.(+l(izTykdH$c^c3=H6bflWn|-rhh],i,c.%E{kDgxAm,n*b*uK');
define('SECURE_AUTH_KEY',  '?]r 3+Z#O+s5P/Atd}r@hv-;Dja@0qc8,XIsc^yIoX}j|o1{Gkb=3@rE:Mzo#:.]');
define('LOGGED_IN_KEY',    'dkmD!q[Q)5jI4.Z3r!^5H+cw8_#X$QrE6C01xf|@*t0xy1RnB4W^aPXcfN-13mbJ');
define('NONCE_KEY',        '13syo)Y =4,|ZK%I|/vF~/J4o**k6J1iX/U[q5$Q{I+6oLdLd,{[Cnl6/{!]m/@7');
define('AUTH_SALT',        '-p%7pw+;>19C/)%/XwZTHPDFAPb2 zp8<7Jvjl}rnr5+YAmZBS8=f:|-N>1 Xh=j');
define('SECURE_AUTH_SALT', 'o Ca9i9k0H!e_yq<co7nem1|?3!EOAvY&5!4h}gnKh)yN|41.-JtuNK=)[3H[+Q$');
define('LOGGED_IN_SALT',   'iJXd},c|ylch>Wn3eG)avV!0RjH`^?@h[:4@|1dO,F@[kwtfw1.V!TY0-[dbA#qt');
define('NONCE_SALT',       '+d@Dys}Iwm(Y(s|mDdRR+15^wR2s_62nITPX_]-^6|-dR+OEj3CE,e>0Oe|?;-z9');

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
