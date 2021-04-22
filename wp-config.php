<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'midside-it1_1');

/** Nome utente del database MySQL */
define('DB_USER', 'midside-it1');

/** Password del database MySQL */
define('DB_PASSWORD', 'fU.d413u1DW-nSAv');

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'oeJ.)koRB=QtQKsl0pSgy-a>WFK>|xZ3m+,R#:UdsY$sx)%%T0r32x4vYg&`Mue`' );
define( 'SECURE_AUTH_KEY',  'K#v+6sI<nG=u8/OL1;XNqsCMVX,;x/^u{ClV/M)US_AJ>@|,YID}|=`w$M<Gxk|<' );
define( 'LOGGED_IN_KEY',    '0nH<vU6l. ;s0}0k;Ua=lyfq=30[gm+YA`S+x?MH:=ghI*&{9<QbUV*ULX[62=t:' );
define( 'NONCE_KEY',        'd0.ShFM7rm?6*O<HS 1apv2fJ=z>.&<>IY@,X5)g(nw1H4;|thu,$)A*XeGY6?TE' );
define( 'AUTH_SALT',        '!_%=N1[=e_L>K_{Ekws>]$Hq.}!q5+Hg=gFEnME5u&ueHAvdecgGE=!vrVTC617T' );
define( 'SECURE_AUTH_SALT', '*MG!i9kEX}.#ogiBKUhWtM=T8h`k&wbbwp]eZ(8/zn4?3FgFMi.;(SD.gBl1O9Z0' );
define( 'LOGGED_IN_SALT',   'gr}}d ,-BbwsiX)|Wx;%ng&!r/glwzj1B=P@Bgnd-`vb,D;;Z5o)+/>6},-r?D5)' );
define( 'NONCE_SALT',       '}1#R_|.,a (Z510b6#sdVt9s&cGh3y{9t)H3b(!gD[p>7Xb+_c,yuCtY/p1Q~>!L' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'shlwp54_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');

/** Autoamtic core update */
define('WP_AUTO_UPDATE_CORE', true);
