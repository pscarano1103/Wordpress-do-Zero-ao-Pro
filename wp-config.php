<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W^V_{`TjO%OuUx_(AKqpF tkEJ0QHx<HJE%d0T3jlw-l1:IvUy;G;NBN~LYGlp(,' );
define( 'SECURE_AUTH_KEY',  '|*HKm)-o2,L^{[d}A}_XR${rL[x?S[3r]=GhiF PlQJ(CDz.hS*R:&LdIEIw-59m' );
define( 'LOGGED_IN_KEY',    'l%9$3{;H<x`1@CFJ2a9cFoEDgo];jAKSRKxfEHL_ {q-ubl*D~TF~YN&,pa%)i(>' );
define( 'NONCE_KEY',        '?r{rhJFE%8QWFtot:$R!XN4e_`sg(<=qz-B^>/hu0!b{R4G(`;A}oxnzB^2;eTh7' );
define( 'AUTH_SALT',        'zXK ltgFK=/qG)Jvlt[AQVobR5vo4T|+/GtAgsG5[9U+]rl?>E/$:5Nm<(UFE*Qt' );
define( 'SECURE_AUTH_SALT', '4+@Iy`zFVXJcL3h[7XBh8N:^7z,|SX[5tN<WF2$}C4/^9PryNn$4}Ooi/tpdUW+8' );
define( 'LOGGED_IN_SALT',   'R2XC}N8RT%[=:k*2;#/PpBlm T)|xKs!h2_^OG1,+m#W6ZQ+5VC6onYvAW7XQ8}@' );
define( 'NONCE_SALT',       '*m5!92H xH[8GJ$BM9vrFeV`wm2dB~v.^jC;_e/.0{co}7q{>C5b<P?Db^,#<Ry(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
