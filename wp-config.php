<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mywordpresstheme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'MK1i_MG]MZ/eQ|tss$]rS8]8B>_8{|Q~<m[W-mBefrQEdJ/EFC%:rU-aEOQWZ7aL' );
define( 'SECURE_AUTH_KEY',  'wEW>as6:-Z_HN[1hti]{JEw,+]Hnk?#j1EKv%8-k-ih9%5!Za!p:@[$hsmh{$}xv' );
define( 'LOGGED_IN_KEY',    'x.cF+.B&ESVRHAr!KP|Vnl}(p{F8k|t!+g^$=#]o8c4_e[Hg(6t7MK1iXG0{^CBo' );
define( 'NONCE_KEY',        '/:Zcs$8[!t,{ X02JZHI=djo%-Cc#:+svWeE^j(vAR+&|DA7j/j8RrmCJ=<{sji9' );
define( 'AUTH_SALT',        'V&7kr}&osRo.FY>4`}re&/QZk300|<n^-D]R(uPT;J.{ZKxtI_PLwOu:-;~qG)Bs' );
define( 'SECURE_AUTH_SALT', 'Td.D]p8r9e1$xFbLY*(eR4Z$)CtQc; SC.efzg&NKcc1/jHGI-%hw/9 Y_N=7Bb`' );
define( 'LOGGED_IN_SALT',   't]DN> 1`Zna j73V& FnxBY^dB;osJi=d$?Z9R7x+i@LA-Zn hrZ>`6FS2%_*v6(' );
define( 'NONCE_SALT',       '*R E/ho+^`!@ /go/7SKeT)L{n#~$ k6N_/38bi${C r55)9J`5e=2dxfAl71BN{' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mywordpress_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
