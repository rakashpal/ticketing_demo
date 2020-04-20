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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eQ%_#@ 4K?oIAN?;eRsST2VNBN~$_oXagAwR4.6~*$rAYOz;b1g(%fa(dS3xSX#P' );
define( 'SECURE_AUTH_KEY',  'hg=UXTxTd[bLBp3-HfST~`/UqSd.d+w2/UCUu)KjDbkgm>u`I}K5OQUd6-bB/Y?$' );
define( 'LOGGED_IN_KEY',    'n5/6=M=Qh[~Zb8rFvpscvjFV;JQe%0(_PTH9rw$+1#he3{bz(a(7OhgG+QX3(@3e' );
define( 'NONCE_KEY',        ':tc$93:XH`0U0`H--%6!+yfci2nLv]%EZ=0es,0qd#XEmXjqm7MkeTZAcs& %=Q:' );
define( 'AUTH_SALT',        'Ipl55|ACDCs>;k3|DVxY)bEc2znUwV4f>dndfUpm:Xg%H>@bx{8*1S}c-tajA=6}' );
define( 'SECURE_AUTH_SALT', '^#D`lvAM*&Lhqhz[YCs]`K*Pu9TyMz8L`bDNAhlem*mM<o3<)$:s%cpIP))n.g*W' );
define( 'LOGGED_IN_SALT',   ' #X!}>QOcm@yc{XH<O]rJQJdv-9!_lWHEfelK<AOMMQea`m}!8%{A=Ujy^(>3WEd' );
define( 'NONCE_SALT',       ';,><ZV2*LRD(%s[jUnwWyt{S4?Lq,@)4b)#|Zw[N;;Ag; (6aqrf1nnA9x#[`u}[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
