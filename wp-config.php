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
define( 'DB_NAME', 'blueprint' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'f{m(#{W%fmL=Px3tHlL)Q<lc/g$sMb8p(t-o&?ZM.DE+V{%rWXoO{19sp{+BQ%9+');
define('SECURE_AUTH_KEY',  '07kqGbr@-dn~~K@i-%>DbhJ64N#Xg_n05]ZC>UybU9YzrdS+ t4AH}Wqr/+WC^b;');
define('LOGGED_IN_KEY',    'dG,h[::J|%2%gsn=c,L|^K,R8Q^0_UHK$nMEAXr?. !eF99dBXt?^,HLV+|PS2!u');
define('NONCE_KEY',        ';?@ lY!V!@`ywdRO2@jl6L|pCQ7Q5B9-uNudr0?RLnF[e_V%Xg0KAQR2t{6tcEP:');
define('AUTH_SALT',        '|u+P7Q_  iCc|/D(tF{6u+1z^ucyx28m+RqLz:!2Aw#6L>j@rd-*3V^?h*>9EkxK');
define('SECURE_AUTH_SALT', 'M 3}0bERgq=l}fc$8w,rx`D~Trq+rlejZJj|S{;HKb{p_%co<z:r53M>x~|!jOKK');
define('LOGGED_IN_SALT',   '$B@TZC i%*,G-k;^-wf?G/-so:6AxCbia:n-#A)3!(^oxlSq|O&)VG!CJ9^KpuId');
define('NONCE_SALT',       'o 3d&MU=X?rAfU!Z. !5ju8Tw3?Hn5oG|jN0.5RLcVW+[JE`@@m-:!84SXM|`#QA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
