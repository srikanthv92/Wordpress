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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '5&9Dk^h}np30XFYc. ~Ki-KA:A,z_e/oHaJ?T<{+.KZkS~yaAY0|jWLiU->jTBB]');
define('SECURE_AUTH_KEY',  ',+2fa.!@@aCR@59U@pp*`D-y+@#V7ju|le|%;Mxr @5cw*YqIj5_mOzn WE^Z -~');
define('LOGGED_IN_KEY',    ';>o)k>/$S^YIuZ}m>mx^gU39[Y>#,T&%]ZsEEf66[s=ZAM#@DOvtnV,EJIcr|^%/');
define('NONCE_KEY',        '.@U.]0@i0#fFs?rZ3k`Hn{t-FL~C}#4g4wd$Qz+Q:PZqwg`,WYD`DG8Q,1ltd2M+');
define('AUTH_SALT',        'pnU1HA@@M2EU]HOO$cU1dJx4@;1B%NC2P&tBb/f$bBU)[F;veE_vdSl0sdhYv&P:');
define('SECURE_AUTH_SALT', '-&%b51;fA)baQ4J9)p]uz(ye_(g0,&~-yi/^v1|PP~O7Y@u Aov>|eWKP{|&@R:J');
define('LOGGED_IN_SALT',   '&-ZDKg!ug*N_LBgt(s;SE4P>+_&JdHDZ!CDJA![X.uAKzw-Fcd%;{tO#7QG]38-7');
define('NONCE_SALT',       'B6MmLfj2IBTA[bkIlX)NExYed+b{NpTx3G{tr.`S6ad?9A HQoypa9:SdHsuVR3>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ssh_';

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
