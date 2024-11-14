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
define( 'DB_NAME', 'mutro_db' );

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
define( 'AUTH_KEY',         'Nm<@I=*Y!:Sn`LG4RLx_e&pvcXW}ESpA(=Yj0R=ALZ0sgNa=$NT8thS6/8/3du/g' );
define( 'SECURE_AUTH_KEY',  'W>]ACUjM)@Xu_Ga|fQ7%V4{KDfBe9Nee9+8SbaiE*,B@Ds:s&>w)<-te8N$ Zy*P' );
define( 'LOGGED_IN_KEY',    'A<^8t01vSDTv#.|ADX$MmbYvmU8?sZ{Vz4[X)rz/Tz7S[@m=<34{j+G eC7#NDhU' );
define( 'NONCE_KEY',        '_h/_=O9Pe|YaYTH}/Fd~J<1`;HGR^U:L^F).S;up#Y(c6vN%PZZv#?ES@:KGveS ' );
define( 'AUTH_SALT',        ']#Y>_P]15kOdy8V)6i!]94v623}ySIEELd)OBU;Csc2&5cyCTOW?t+U=UA=#|ObJ' );
define( 'SECURE_AUTH_SALT', '%%6uS-L6-1AprIf[~>u]?vx0%k6ZHqut+>9Hd-&ZLngM($xB:xK]FLSq>ZkW9#m>' );
define( 'LOGGED_IN_SALT',   ' ?DV!h :1W,}@Y3&R7rW;M#K(:}vg5<@APV9=-b[%vW`CuF+vIrkys5.=)_YndU?' );
define( 'NONCE_SALT',       'zOq.=Py1Rn|bS9#K]8C%Io81eVAStzgs0jS[]O~Q#,TFTINn*+H5Aqj1yJsy%|BF' );
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
