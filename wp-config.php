<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'P3cwPjw3aStmb3JoQE1jdytzVWo4TkdQNj9DbCVWbl8xOGBUeSxqaFIpR2F4anJobyFVeGIrVTdnP2k+OXdjZg==' );

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
define( 'DB_NAME', 'hijamashifa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<OiGGy}.]4w]B}Fn`2WFd)Kx$(B}NuiS/N33P3V9Eo-;u(d/EtGQk`{}(`#Al|ZN' );
define( 'SECURE_AUTH_KEY',  'J:thg?gKU@:g)u]?~&f*rSwBAR|{,T~c>R!;aqTr`C6=GIN|ZU2.V:{|9bOv|;Jz' );
define( 'LOGGED_IN_KEY',    '-EY5|+7uPXqv]&1uq;PYX(Jju FUZlFJE>j TA]L~)_`Kg<d(73#ud<0uJg|;Dm%' );
define( 'NONCE_KEY',        '1{},q^fM5Q#~t76G@>7j{654F DWJZ UG_[CE2N}[-b|,84g[K!5sCJc&CyjXMVi' );
define( 'AUTH_SALT',        'gj^U+(<Yb]3k=Ui>$$3aaR|Ji(iBFe_IPG(Q|b{:dB.zYK(/+&M6fas]$}vz`)ti' );
define( 'SECURE_AUTH_SALT', 'W7r3M)_oVnGr!Z|$O^38Z34bsDv|w`3@MT{Upfv15pMV(}8,;X}Zcg5 28jb,z$x' );
define( 'LOGGED_IN_SALT',   'B{>5`^9+`^kNRP#A?P`f?SLw[Z$/0HR,IV@-|D!P%73)^Gf9iChPWM7lXv}?iaH0' );
define( 'NONCE_SALT',       'TH(A?SkzMoxJbiphX)IXx8WiuHasA^fVSDP(NpWVhj}8?ne]?O;z5ypaRbGVFR*f' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );


