<?php
# Database Configuration
define( 'DB_NAME', 'wp_castileventure' );
define( 'DB_USER', 'castileventure' );
define( 'DB_PASSWORD', 'zipBWnToyU2gIGPTF830' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '|*ovXgC?7h*ceX*12:`hMo4B;^V4:,@=;=Lq&>Ck-yk[NeIH^2<o<Gu%^> n{ai!');
define('SECURE_AUTH_KEY',  '=w6SdK;Gf#geQwo;b uaX:.c,XUCn&DVCL^c[r|HvZ#1+re0Qw+%cU@a7yS|E#V>');
define('LOGGED_IN_KEY',    '5}u9!6O*,*OjsZ|(9)R6_;ZyynOznlUgI1W#D<Z2w[f|/P?j<OZ75sb0pO^En,hz');
define('NONCE_KEY',        '89xgVyn@{*b|plBar:$,@lR)`yfEwD)#65RjjVChDf-r@PbnS* PXGd-;NP`As1^');
define('AUTH_SALT',        'ezwjx1-tG!Q[h,*s*Pw`lbf*X.-d4ZSb{7@w6@;o:B@e~<DstbAOfJC<q~je_KTv');
define('SECURE_AUTH_SALT', 'D~#BP,>e*^5iNm$[8GySOO%r+5<LB./@@@L_0NUYeOq7QnK]>]KW?Wz(LL?XPGTG');
define('LOGGED_IN_SALT',   'eJ%UKj9l<G!_~Mo`PKtE-;$4#7_C.VbZ7(dm&k~>ur!;:R#9%~]rVHlF:0 4{o9n');
define('NONCE_SALT',       'sg>%-py%)-2R86imz1y|=*>rSj<gy0O,s5@+s<iM~V#Z!0sm[wUF$( U~Aw;dn<-');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'castileventure' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'd3fa35f53284a174633b34b7a67952405714de97' );

define( 'WPE_CLUSTER_ID', '111278' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'castileventures.com', 1 => 'castileventure.wpengine.com', 2 => 'www.castileventures.com', );

$wpe_varnish_servers=array ( 0 => 'pod-111278', );

$wpe_special_ips=array ( 0 => '104.155.133.48', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'zone' => '4egy2p1hrbeo3ynjqicevdmg', 'match' => 'castileventures.com', 'enabled' => true, ), 1 =>  array ( 'zone' => '1tr4tua9dc21db9na8p1nd5y', 'match' => 'castileventure.wpengine.com', 'enabled' => true, ), 2 =>  array ( 'zone' => '2on05r3chapz3cc3a4465co8', 'match' => 'www.castileventures.com', 'enabled' => true, ), );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
