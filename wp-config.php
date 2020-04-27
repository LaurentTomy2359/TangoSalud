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
define( 'DB_NAME', 'projet_tango_salud' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^53l<PhMJ<]as#t4r?k|+3YxP0>go*O[W}PLy{3.?/%bJ`<s+h`ZRGtbT,r+6bhm' );
define( 'SECURE_AUTH_KEY',  '3*aB/ls1&vIY#1dAL!-b$KB^lD$V,+t3YKCT[B&|?:|h%d_q%<?#kq4+C6>;vi$^' );
define( 'LOGGED_IN_KEY',    '.?Qt>@&{Cu135B)gJ $/m4fI7HFo^M59R/?j_fFnWkQCWX90i].Avy=m$=n =KRW' );
define( 'NONCE_KEY',        '#q/cbmLz%iY#lrO$_sW-43I>8v)i/4_F0AbgbdowB3EgmvW9d{ORO}b?o)hEE!@@' );
define( 'AUTH_SALT',        'LV`NSO}-P+eYV4]E{yvh@*v}x/7jf jD%K:.dt/|.j_:<M7/8I$<_<Qgp/S%7&G}' );
define( 'SECURE_AUTH_SALT', '}|]88abKQK.)I(yUo}JEh~qcZLm+2+J,k}^Ld*Sjrgy6L/36+pqp{W!YP6_Z%V%k' );
define( 'LOGGED_IN_SALT',   'yp.K&&w2*+ _e~6JaLTx3t61wf@Kw`wGm]m)VO4uxtQohfUQ]2b)owTFqHza>O7w' );
define( 'NONCE_SALT',       'gE;UFL,n{]@IKH]_YV6mYz2<mI./~+ekLEk}l[* 1Q)%(QndKaZF(.Q+MdJG~vh(' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
