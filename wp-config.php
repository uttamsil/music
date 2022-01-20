<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'music' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_/}CwBo6(CcColaU|,HmTQ&jMabZ*qo 4oy0q r~ |qsn(>`wO:Tw:$]=ANI%D/u' );
define( 'SECURE_AUTH_KEY',  '@1IgH]!6JV.*NZT,CgR/}U={O5vG`lSu23};J;a5^_,0@RxKJA>90]XPV3*OTZZD' );
define( 'LOGGED_IN_KEY',    '[DxEC]SeGb&RW}pkCP+=~[`3gY@+^]4@`H(;~[|XdSd!LY/5=@bMW[G>+l||i>x#' );
define( 'NONCE_KEY',        'M~#_;O&cmuZ)cj]+vYsV;f:o7|[&qUR~um3?AbJ@?y6M?PsF/j;%20.xN;.mhV)X' );
define( 'AUTH_SALT',        '6dCNZ:XAY84We)kUk?XRtJ*<Q:Z{F`@6]Cfxli++C=mu`~g$M(yFvmS|&Ot1s+3S' );
define( 'SECURE_AUTH_SALT', 'Lqjip03lCAIjTFnu2(o0SO0K5w0V5U&hbDv= QM:Q`vr0iLFaMje-LXuF^ qyyO|' );
define( 'LOGGED_IN_SALT',   'ECKM6:!-^;V cR)V{:.vrgHqxcD9fJV3e!l^(0~o+NP{8Wn;mnmDo09aWQ*DZ]41' );
define( 'NONCE_SALT',       'z@W &o]MO=!fgUn6fr1lb]r_3T=9>D%|ga[-auE6i;dcyVJH]ti jdXq@}+]4tPv' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
