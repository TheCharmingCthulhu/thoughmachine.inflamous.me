<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db822463616' );

/** MySQL database username */
define( 'DB_USER', 'dbo822463616' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MIWQZJhxAKFHQzcHsuSb' );

/** MySQL hostname */
define( 'DB_HOST', 'db822463616.hosting-data.io' );

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
define( 'AUTH_KEY',          'kC<<Un3gh ,@NAD4c5hb=Hi0Ql2=,m1VY`tXo_0_eZ$i,ZFAbB<rO!-rzmp<h](E' );
define( 'SECURE_AUTH_KEY',   'J6%$5T0! .Yb.|?pabE/$UyO$E+S&M;lSXNLlMzAk+!>=Vj4#H_J}RrGt|5{.43#' );
define( 'LOGGED_IN_KEY',     '%!4xFca:_-Cf|MINvCUks+nZOXDANm5gCkyD%kb}V~Mi<iaf2Z<$qMNuN/%$e{hF' );
define( 'NONCE_KEY',         'S:>427Nv).2{K q)<YcZ)*[4!~X}pze)XjE3Ply9m]viT4mV[)*PEEh&gM4QvN|:' );
define( 'AUTH_SALT',         'e[Wf;^?(ge[SIYJRQ#y`&7A19#^*N_m{Z_{6FM9)#[Yi^.gG1sJnPf{2hJc+)(#&' );
define( 'SECURE_AUTH_SALT',  'IWEYfht`E=@gpFLM_p:we5<u5IxK(Np-:W5X6U CUSmuou?Tq$Y5]%}UQNEY+]*Q' );
define( 'LOGGED_IN_SALT',    'LW+6>3m0>mQM;G_LB/(EAnX{M^0=hxG$!|z~EQg~eNs*L!R16dQA0qk$w~*nO(]Y' );
define( 'NONCE_SALT',        'D,uS{?HBi1|Zpl]9]fhc)-Y0`so6:aD>In+oj=vZ688yUu|=!h|}TaZ!>,=.oth]' );
define( 'WP_CACHE_KEY_SALT', '|yXi%@RAACx(7J.WU[;vFNYzMFV*KKt}Vz8g_LbtB[K|Z$dNbln W|g~3KrWnEu~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'OCtKsTsh';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
