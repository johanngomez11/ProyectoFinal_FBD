<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sqlgym' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '$JS5If{?j4s, bl4T=E0z&mxy^aW=Q56:vS7#2a=`ArBN6os;a1a<{S]KXP:NrcO' );
define( 'SECURE_AUTH_KEY',  '0$:j+#d[`qZL<,_YN~*TE]8FmAYKKR+sy&o}*]J(<!`V%}U}@<QWNRQsP,W=vkC`' );
define( 'LOGGED_IN_KEY',    '&@*?<Rj45P~68bN.&6RK{L0D,@X9RVG^hyHdN&YR}gaz^1:@`G+&(x+*d<=`7}V!' );
define( 'NONCE_KEY',        '&yCGusmB=faZ./)oY/;I>sm4gBN(RuNMnH^mMBc]m*ty77pExM[9h5?r!T/w*o#/' );
define( 'AUTH_SALT',        'qQVlwJI_O[Az5{n=|Rix%s IksR`%rTC_?Rj>YH]v5erCm=J`pRuVjs(%(Sv`(x5' );
define( 'SECURE_AUTH_SALT', 'x5`D4(Ln/5z~;E8jT @2,0)DqYCaFVoVj8RXP;4hDeJ*0+g%6n+d0V{#x5s4ZSrh' );
define( 'LOGGED_IN_SALT',   '>DxEQE/7ly-Z]S8yXHd#l_5Q@*mW#jFw6M^xTMOa,sW[mzuG$iM]2qon?r]!aR`&' );
define( 'NONCE_SALT',       'OHa:9u?3IWOx;%]|BE1 vO?o@T s,JX8h17oukQ1Tbw!?21EV)@`Hm(1ts]9@)m7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
