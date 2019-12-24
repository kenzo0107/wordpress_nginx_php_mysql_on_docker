<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL のホスト名 */
define( 'DB_HOST', getenv('DB_HOST') );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%/0y$h&WBlsh%mIRQJ^[.qZ$<aG%6yqbuX1/1=qD`*yo]v[<^^$T1FKI+w!JjQT&');
define('SECURE_AUTH_KEY',  'E&gp2:!%A8`Lo{ul[9Q,7d6kkrO{x+]z%N_.-{Ly+O$>9u7ffQCU_&@~09N<K4D%');
define('LOGGED_IN_KEY',    'JghM~.gt{eG-E2!*N1{-+&82-!-8~bAkS;QH/rbfS=0LEgkRf:YTKL9?rq 0%_9O');
define('NONCE_KEY',        '9|l~;vA?HL|&Kn%2Ljw=hkJ62f<&p#-s|T ,c+hhbcBtz*Q3^=SD2+g-UV{=kVx)');
define('AUTH_SALT',        '=s-Y%%+-Sta-h-/8gj*NQ|_}!X%v!UT)(K%aX4r:(Qm$K]bJR9=M]]5X_+[7nY^N');
define('SECURE_AUTH_SALT', 'quz(0ks{=+ +!?<8J=%`-r>po,.v-++1*Hpqw.qe9F}^-^b`IGBL5}U#+Nf])6)U');
define('LOGGED_IN_SALT',   'S7~~,MA3_WXp1&vE.k*6_2#%_=5^fWVp;oyqLK5%q<ec4}+SAFu}=CS/$ T;sp-g');
define('NONCE_SALT',       '`:f|2o/Yi2I&]gzL+-cbm|i65Z!RDdxHzEWQ6<3.g6y+&&`4j]ne/f_{!4%.tGL[');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
