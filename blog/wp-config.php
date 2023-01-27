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
//	$con_string=mysqli_connect("localhost","efrog_admin","pAR-}hcMw*H%",'efrog_admin');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'efrog_com_au_admin' );

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
define( 'AUTH_KEY',         'nE]qm#!ZAAXP+{S)y# a^T<!wc27V4-MOMk@ssK(d6eX7-lt<dnAWFdO5o=?.$@8' );
define( 'SECURE_AUTH_KEY',  'VW:%kb)2?9RT1(vu>TOUW/_pbE(CBPn*GLgqQB1DB.TIF%LnRl`ZfWQ+0mG>7FN)' );
define( 'LOGGED_IN_KEY',    'bOQM6$`wAbV0WI!]dFK,4Tj;|p{Ty49D@!MJ+efJSq0Pqu~uMg1GRbjEmW4Bh=fn' );
define( 'NONCE_KEY',        '*yuu8,XYb|G2)mud.eh^P(8HgEN-z0%V+K|qD97&y|p)b[Vk_D /aj-ihVG1~=r6' );
define( 'AUTH_SALT',        'S~ d5@(An|2yix/:7wI_$PgPAMe$j-s2pE4a 14.s)g&c^8C,&EnY+{hc~~_&mEr' );
define( 'SECURE_AUTH_SALT', '*Yc24.l,v;k~e%[cS:R`3D]LX~^~5AD=+(Pl.w_[-.1q9|^GZKT#(ob*Pul<1$U*' );
define( 'LOGGED_IN_SALT',   'Z%#H2AcNSBr(^!TA,d(KWI|F<dBw0MnnI*5s1~m,G~[}4tq-!f)w^}bTSh_lU>1B' );
define( 'NONCE_SALT',       'y}d@Pp,)+*{_UZXcP>dqV&fYfhP=y$axPuN:6.A3gw+M{e=aTCJ0+^c:D{>GiGK[' );

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
