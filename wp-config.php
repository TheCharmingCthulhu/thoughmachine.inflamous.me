<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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
define( 'DB_NAME', 'db822498614' );

/** MySQL database username */
define( 'DB_USER', 'dbo822498614' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PDUdJPQdOnExbueYLdoh' );

/** MySQL hostname */
define( 'DB_HOST', 'db822498614.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'a22SUg;i IJpe:wF6s5|7wJMiafynngLs(OH:4LQ5B A%c*&O?My+sR1ItZe9>2A' );
define( 'SECURE_AUTH_KEY',   'slmLH=IM!Xmg@!~IR*~iW_9]p/}VXc_M.-D 9Jn<nNlJ3ztJe5eqyY!os-6hPWD>' );
define( 'LOGGED_IN_KEY',     'w9s.bZxJpjj7^|<Igwx2_.mtY%$HN0Pc3^S7GG8aLBsJJ~z9pCye74!flxAmU)y#' );
define( 'NONCE_KEY',         'k5nT`vliK9Y,hBs5@UPqsfv;7-%~-aiN$bju?F#_e7*Zon0!vIjX3;voU`vSt#i1' );
define( 'AUTH_SALT',         'Z#B/lNf%!RDP$wp,>W$]66;4YX#6M:/3Y?yG7`lC&}<6I<4-)WFi?vX8s`QOOes7' );
define( 'SECURE_AUTH_SALT',  '5O#3[_c)Mbpw,si}gz5(E;5x7#[Sw/gyEgb~r;g;DNFJdujMhMQ6z&Cn>tc~(&Rk' );
define( 'LOGGED_IN_SALT',    '|N4$p]igsj;k;F-tP^cJ*:,HZP<sYn9.JrzNWW-eTp^zEd(y6rd^)q@roL9,Bhfi' );
define( 'NONCE_SALT',        'VyHEEV1S2MyesYapx2UjX=ec:o@^tV+L;~I3R{b26i|dJ/>w;p8.XVCgh5=FPV2f' );
define( 'WP_CACHE_KEY_SALT', ')km+{_f7RCrb`/BNT]0YbevRqP|#|H0h8Q*5gd&&DKo^Ki)uw*=lO!g3^7|($+}#' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SMCJsTZW';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
