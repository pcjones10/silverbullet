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

define('DB_NAME', 'bulletsandbox');



/** MySQL database username */

define('DB_USER', 'bulletsandbox');



/** MySQL database password */

define('DB_PASSWORD', 'SilverBullet9!');



/** MySQL hostname */

define('DB_HOST', 'bulletsandbox.db.5411397.hostedresource.com');



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

define('AUTH_KEY',         'xxQpssU~@(862<yjsnkifeP(:a?bRCSosUiKP^!6WBjmC>=6dhEf:)#(EQj9u:?MskkA;jX');

define('SECURE_AUTH_KEY',  '6=^*9B^uL~2*bWmZnXcV)PIV<WjzG*Eyx3t>90^BKP6457z<DV8!pNwG#GT/ciMJW(kq9alS>ldmHB');

define('LOGGED_IN_KEY',    '$t-oKBWhu0/~$Nr#LI0wo;Oz18p-cI^CiZ#K~o^*Y6MSvwMoFQu;01!0dr7ZxQq#VpcYfb4|M*d\`2ct');

define('NONCE_KEY',        '2Tm9T!-cDx~I-<\`Q(nVW!G^^9eciw;xJFVAIc)WrbegPuH!$gz!5DFN==-hS<AmqZZW8kehkSHGV\`=Sw');

define('AUTH_SALT',        '-6WHViTxeVx^z*fREL(6LF#>8xGb/ogZtLre7pn~kWCU3tIAK-\`:b#JGM^EO<3P=MlQ*<Aw\`Jff0$|');

define('SECURE_AUTH_SALT', '|p0U3X5QK4xUV\`S0sO;~AtvY;G|JceL:-YE7#ba5gCDDg-*5!WKFuAdptigApWILU2R');

define('LOGGED_IN_SALT',   ')xRDX>Rt4($MoRlQ(aB;i=yA/jGvoK$^j<=;ywxislKd:Ro_@8-/c|$U>=^T;vfh9Kuxk');

define('NONCE_SALT',       '|:zX|gv!iRFE_og)tpwVGq^O14VqDIRIX)Rn)F(Cy*1Wk=:qdHsxwRaAqyt2IdItTxpTQ(r\`>2|\`L');



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

