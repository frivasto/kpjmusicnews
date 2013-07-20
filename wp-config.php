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
define('DB_NAME', 'kpj_data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9nCpp dARUj]JkFFZ8b[@?&gu_57E+!z.A>%LMu8*3Y-X]HE@2obzbO/<0I,Em5!');
define('SECURE_AUTH_KEY',  '{5$bvO[9,Wv:tWqRN8W`pf[BOoi(dF55x*6&+Xur%niH8gTC;Wx*gcsZZ2}IsCQf');
define('LOGGED_IN_KEY',    'fL/.2 UkQ2)o-?wS3UM[&wdPkKuA=}]^WqnWLO`c6+SL~:TsQEzN?C<eMhFV~nU^');
define('NONCE_KEY',        'QBs&ok?EX@9C-vcV.0fiW,w8,W>el~zDJ)mEJ&5}BvB_N@.{2UY]oOR[LWY>^;m`');
define('AUTH_SALT',        '`14l&RUyVO`rC;grW[gfPH]WA:,#}@,z4`V2G;0qwv#;,I|oEQ^pAWmBzR[A6m6@');
define('SECURE_AUTH_SALT', ' VBvEWTXXUUx:/lxia(h.#f;_,Y|0UXF#awuHw6PQ7[*m:`5!faS+e|@Z_s :o3&');
define('LOGGED_IN_SALT',   'X}`6)=p`8Xy}H{Z)S5z=|>75$rc&=z>O~rH3:#l8TRV#4{rj):i/&i^xp.ek~*[Q');
define('NONCE_SALT',       'M5}+rB/C]<ndbCCqd)Btc>E)/PG]SSF,Ydm2YKPg53F*ZHloFUB.yp$QGr02L-=X');

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
