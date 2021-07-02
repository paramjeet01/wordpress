<?php

/** Enable W3 Total Cache */

 // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'FS_METHOD', 'direct');
    define('WP_MEMORY_LIMIT', '512M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', true);

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
define( 'DB_NAME', '384166_13c8e3b56f8d91fd26eb3f800ad6ef3e' );

/** MySQL database username */
define( 'DB_USER', 'easywp_288378' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HfTffJ2HFZEmse5uPtfX+kgSvcycZZy61k58o7NPpa4=' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-3-mysql-master.database.svc.cluster.local:3306' );

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
define( 'AUTH_KEY',          'M[>Q!%YLqn]*>b}UG~7G]>lBHDSdKTL3,#PGV-r|p4znmC/_pDT]t^?}TFI|`{er' );
define( 'SECURE_AUTH_KEY',   'UAcD-`[Tu`g]FfuU$LgYQCAuTg;X+,`:{&RQz,06AdN1KhAn,]ki-dwls<opGPO+' );
define( 'LOGGED_IN_KEY',     'M~Oe8~ch{o,{6A>B^P?pl#rk.]+os]a{e6+^`+9}rP+CfH)bNhCAU7CfFjul M@%' );
define( 'NONCE_KEY',         'I&Mv%{IE%V3Pc#SuW*qbE)}us`|ochrjGA``@/]uA+O9e-0D+ *d;XPi>R~-^qe ' );
define( 'AUTH_SALT',         ' m3}E51e|NILL~X_.+A=;t~2zpoyHK2y#_FXdXJA[uUk$*&XAi~zT(O:f8/XS{QT' );
define( 'SECURE_AUTH_SALT',  '+|[8L!P^;0eBF[`O/.Y^.)HsMdnluaW(+*?$.JBYqdm,n2nHgU$}z::Hw$f7v+&v' );
define( 'LOGGED_IN_SALT',    '#PUAs?dk+#^#zvz0x%vHNRX5@]j~I~OlDZQT5/+X7TXmfz85u|{ihlI,5&i+M|1F' );
define( 'NONCE_SALT',        '7EZ 0?[^EV^c#pY!3PNWXtk8jt=rQ4VnBfLe4a4J|Pu$4XY8q,0][Ki>`T_U17.$' );
define( 'WP_CACHE_KEY_SALT', 'I$ryi~j&Ldv%`}}ka;S,c.M,(}T+`tmON#|yI5&|kmy6+6ywB.(x?Ip&y5bD]xKW' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';