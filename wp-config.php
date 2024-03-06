<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'maescosmetique_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NIS<pQD.Z~iDlN044ume1VbY#c~?36@o/_T$<U[mar}F!wuMX>G +jKbnd0|~.c[' );
define( 'SECURE_AUTH_KEY',  ';;{RBg7D47Mod!M3cq6SwGnk9r^b7X9f7%^Ng,XnLAcozTY/S+QKX$*a7,vtiN2I' );
define( 'LOGGED_IN_KEY',    '?es^dN R&PJ~DukUhq _|VBa~a4R.`5Q%tzEVv|PHVhOHp<X:=/!O_ QSnG=+nIa' );
define( 'NONCE_KEY',        'n+or F(7&zHv1HFcqArMGu$+.RO]OGa&q@[0Gb-yiBkJ%_,A?!/{4b`a<<1SPKLL' );
define( 'AUTH_SALT',        'T.t$Z=}(2!* .~/QO)XwyoSD&7GPi=Jn]y?X;O)7RYo,;=]veOR7=BLC{u.*<D2t' );
define( 'SECURE_AUTH_SALT', 'lQo`9HrWUMQzQ>cNl%MUpz6eEqR(+kYYUf3$vo{h~ete[`(}U=kxN{Se31H=`uSl' );
define( 'LOGGED_IN_SALT',   '4@%5SU?L>vL ?NdgNx]d>:=Q| /t}f*:Y9M&4Mpp^]by%t&X)U8rS/[rm.<rIAiG' );
define( 'NONCE_SALT',       '@8.r`@A*pKokx#G7{kS$.pXx5 @y#: ;;!?cPd,/q%ip/$wh4d HGJd{xg}srL/~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
