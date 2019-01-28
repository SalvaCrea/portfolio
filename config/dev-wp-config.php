<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 's');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '192.168.1.15');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ThMsjJ@lmLau4Nl_y#j80? /s`gkIy3Puznz!m(|u>+DQng*jo4Qr]_(=cv*}TO0');
define('SECURE_AUTH_KEY',  '(lQ];4(<[0Ux1I)qo|]xl#IJ6 {szo9uSB~#TW#omxG1Zm|UC>q2}IcP=}DScbs1');
define('LOGGED_IN_KEY',    'GFq$7(M=,t*=8&<a$I+!p9h41DmX^iet[HbA/&E.f=ik.| YW4;aX+<s$|XNs,$z');
define('NONCE_KEY',        'C%.hsVqa?^X~kGy)DJ<XkiU4U**BY.Z$Q5*,U28}i-$q>MeA{h9c4yi0kV3UMqT9');
define('AUTH_SALT',        '$1?jj]PJKFWc|+88l@[}`&5WhK(v(] k+<>B3gJl8hZD#lMoLa*uh,)e7C[^1{MT');
define('SECURE_AUTH_SALT', 'Kc9hvcIxOee(GMkkITMAE`M^*q0EG#g>>>#4&Ylel@$(d9&a|t$Bc/$#1w5+/UMJ');
define('LOGGED_IN_SALT',   'a(On_hV+o$J!fSZF)7u#b )O8{Wl@gY U1oo:S6)|A#s-3*t<4za@Z.@7)KBnlDY');
define('NONCE_SALT',       '/6#%rkYLQ!z;GqKQsW^Ho&ZG NCCKp^X<I^n-;*`S2Qy-_n:l8t4^XL:38^x|@G#');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');