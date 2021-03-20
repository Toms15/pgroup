<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'praxigroup_multisite' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',>?1HCVhm#CA)A-C`}jBhBctS!I58oswF2=On`i]4_MnJC]@>|tp^JwDQlkhjNpG' );
define( 'SECURE_AUTH_KEY',  'E1x;_97c1CbLvZ~JM;QM%c1&fb`6q&7^xNVYnPu/A02s!(sK&&`iFTo#c4c=@;3!' );
define( 'LOGGED_IN_KEY',    '@guQM`Fkw-E=p|:~IQIKLU[shZdlD=RLJ>6n;`?zseG7@r7*To2J_`6aMyG<srm9' );
define( 'NONCE_KEY',        'f`l]t@>dIy.9o!*RE1;P{~KtB_)j2OX>8BZQLW$paKEx#j)9N%Byq^dP@pvn%ePk' );
define( 'AUTH_SALT',        'Z>rI#L5DW[4q*56KY$5#V7W4+}oX#<`/UF-1OJ(j*drpnm5R])6QA0V=hy(cj&%q' );
define( 'SECURE_AUTH_SALT', '+o75dm(eF$JH!F#M*;+**AXS$H;Z*-2ZawzOD68cl^87.(Tqc}]gN];P/mA,mKqP' );
define( 'LOGGED_IN_SALT',   ')Chp4EGjZziPeGYa`nNB`6vBp%1Wn6$C`GXYev^M$x8.i>LdGY%xUVz[(l<b4x&L' );
define( 'NONCE_SALT',       'Y)cxG/OZGVt&B>@uU4,1+?d,R|`QniAo!%PgsS{O~68u`V|t9H._N_EfA^)&eFG,' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'pg_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'praxigroup.app');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
