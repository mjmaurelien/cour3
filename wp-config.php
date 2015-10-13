<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'cour3');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iT=+CjykAlF>$;.Zeo]z1*.xTh.#WoR4x]6;}pw+jAy5AVmrY$->Af%J|&I/is .');
define('SECURE_AUTH_KEY',  'Hz0~7;^H~{hs`2IT;s$EugO+pa&p|1Y9${6S<B$akaTiLVaTRzUcsh.H*m@:)e=G');
define('LOGGED_IN_KEY',    'd<yGfg`slvlKN~s#9EA^:|X*m,=@k6s@S+1m{YLbBmKM3#WaWI&e%@:aeRWXC/,n');
define('NONCE_KEY',        'k9*R!QJ<I| n>$%VkXpk_8Olh3 @n;4b</2aT{C:@|T}N|yyQMvfuG[i)haV n>%');
define('AUTH_SALT',        'ErXWrkt^OSGLg(89S|TrrKO5DJkXx#EuR^.5e676Rt(I~o}g,C!j=5<z$.pPZsw ');
define('SECURE_AUTH_SALT', 'E>!A=Mk;Y2L~.c#}|Yr}Rhp|*X&;%X@Q^.34EU,wg?6t-siHg.[*+ddb|c+894BS');
define('LOGGED_IN_SALT',   '$L/Twt.MP]0-sI|+yF@!95^ZI7cyypUJPM>-<=R,A|0p;um@DKI.EdS?5R,k5~&=');
define('NONCE_SALT',       'L<$*hC>oZR$7QcGy,mQMzF-Xg}BE=P.|V^5*:6Tm{FuSSooDYntj8f-%qw8+T34,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'Aurelien_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
