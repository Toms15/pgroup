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
define('DB_NAME', 'Sql1516974_1');

/** MySQL database username */
define('DB_USER', 'Sql1516974');

/** MySQL database password */
define('DB_PASSWORD', 'PL_2021_db');

/** MySQL hostname */
define('DB_HOST', '89.46.111.106');

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
define('AUTH_KEY',         'y;J, ^>^lxHr-iP]#IO `ODY-)o<r+ZEI,s8^v_iV7D}eZU*#&:C=rV5vO7yX8.u');
define('SECURE_AUTH_KEY',  'Qe@6dpl0f+vbm3pe[e-q_=-~nUEc%p/g>}L%:H.Y4Q:6H%.>*OxXT53:Ieze]{/h');
define('LOGGED_IN_KEY',    'DA1u.#v@h8=(G,Gn:T&rGC)1#JGLb-mo80[4lj.HSs/4~R58VNAZ9r6(23wZm9Gp');
define('NONCE_KEY',        '(m)e4V30u0 [X.b@JUN7|B?ZlCh]LS:eb>HUMR~$=T`Gp2}nXS958.??{Z$mg..G');
define('AUTH_SALT',        'Fd.vX[8WtfPjEx8U6i=r^X*XEtlmam1_0Cp7%pRhB:2#u>Hp,YCE+*usIe=lbGXG');
define('SECURE_AUTH_SALT', 'Se;n[uAhh,e]o[$~bY.2;}&CwS23M0E9i2PXG8GAROxeHF|CiNJOG(+I]gnvg,{:');
define('LOGGED_IN_SALT',   '|km1z9QklEsx}>Tn>c Z~{wn?MDp>[Fg.l#gv|S;I{|I1?vWIEVy43+I+WMdgU)6');
define('NONCE_SALT',       '3`yP#8oy{rD:3|Sg?*(rDC?WSSB-a.Zw[L@dVFV6r}{6h*`JRyK*H*;QobH-Rwue');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pl_';

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
