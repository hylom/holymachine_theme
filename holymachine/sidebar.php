<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
?>
<h1 class="hidden">DailyHackrナビゲーション</h1>

<div id="sidebar" role="complementary">

  <div id="sidebarbox_1" class="sidebar_box rounding_bottom">
    <div class="sidebar_inner rounding_bottom">
      <?php /* Widgetized sidebar, if you have the plugin installed. */ ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

      <div class="sidebar_search sidebar_text">
	<h2 class="hidden">記事検索</h2>
	<?php get_search_form(); ?>
      </div>

      <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
	   <li><h2><?php _e('Author', 'kubrick'); ?></h2>
	     <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
	   </li>
	   -->
      <div class="sidebar_profile sidebar_text">
	<h2 class="hidden">About</h2>
	<p>ライター/エディター/プログラマー/Webディレクター、hylomのブログです。ご興味のある方は<a href="http://twitter.com/hylom">つぶやき</a>や<a href="http://sourceforge.jp/magazine/search?tid=209">執筆記事</a>などもどうぞ。</p>
      </div>

      <h2 class="hidden">カレンダー</h2>
      <div class="sidebar_calendar sidebar_text">
	<?php get_calendar(false); ?>
      </div>

      <div class="sidebar_resent sidebar_text">
	<h2>最近の記事</h2>
	<ul>
	  <?php wp_get_archives('type=postbypost&limit=10'); ?>
	</ul>
      </div>
      
      <div class="sidebar_archives sidebar_text">
	<h2>過去の記事（過去12か月分）</h2>
	<ul>
	  <?php wp_get_archives('type=monthly&limit=12'); ?>
	</ul>
      </div>
      
      <div class="sidebar_categories sidebar_text">
	<h2>カテゴリ</h2>
	<ul>
	  <?php wp_list_categories('show_count=1&title_li='); ?>
	</ul>
      </div>
      
      <div class="sidebar_categories sidebar_text">
	<h2>タグ</h2>
	<ul>
	  <?php wp_tag_cloud('smallest=10&largest=10&orderby=count&order=DESC'); ?>
	</ul>
      </div>

      <div class="sidebar_tools sidebar_text">
	<h2>ツール</h2>
	<ul>
	  <?php wp_register(); ?>
	  <li><?php wp_loginout(); ?></li>
	  <?php wp_meta(); ?>
	</ul>
      </div>
    </div><!-- end of .sidebar_inner -->
  </div><!-- end of #sidebar_1 -->

  
  <div id="sidebarbox_2" class="sidebar_box rounding">
    <div class="sidebar_inner rounding">
       
      <div class="sidebar_freesoftwares sidebar_text">

	  <h2>愛用するフリーソフトウェア</h2>

	  <h3>Windows向け：</h3>
	  <dl>
		<dt><a href="http://sourceforge.jp/projects/ttssh2/">Tera Term</a></dt>
		<dd>　Windows用のSSHクライアント機能付きターミナルエミュレータ。Windowsで作業する場合に必須。</dd>

		<dt><a href="http://sourceforge.jp/projects/winscp/">WinSCP</a></dt>
		<dd>　SCP/SFTP/FTPS対応クライアント。遠隔サーバーとのファイル交換などに必須。</dd>

		<dt><a href="http://sourceforge.jp/projects/tortoisesvn/">TortoiseSVN</a></dt>
		<dd>　バージョン管理システムSubversionのWindows用クライアント。使用頻度が下がり、コマンドを忘れ気味なのでGUIは便利。</dd>

		<dt><a href="http://sourceforge.jp/projects/smplayer/">smplayer</a></dt>
		<dd>　とりあえずだいたいのファイルを何も考えずに再生できるマルチメディアプレーヤー。UIも必要十分。</dd>

		<dt><a href="http://sourceforge.jp/projects/pdfcreator/">PDFCreator</a></dt>
		<dd>　PDF作成ツール。日本語対応のはずだけど日本語UIは相変わらず終わっている感じなので英語UIでの使用をおすすめ。</dd>

		<dt><a href="http://sourceforge.jp/projects/clamwin/">ClamWin Free Antivirus</a></dt>
		<dd>　ウイルス対策ソフト。やばそうなファイルはこれでチェック。常駐しないので軽いし。</dd>

		<dt><a href="http://sourceforge.jp/projects/mingw/">MinGW</a></dt>
		<dd>　PerlやMake、grepなどUNIX関連ツールを環境を汚さずに簡単にインストールできて便利。</dd>

		<dt><a href="http://sourceforge.jp/projects/flac/">FLAC</a></dt>
		<dd>　CD音源をリッピング後劣化させずに管理するのに使用。しかしリッピングが面倒で進んでいない……。</dd>


		<dt><a href="http://sourceforge.jp/projects/ffdshow-tryout/">ffdshow</a></dt>
		<dd>　コーデック集。これを入れておけば、とりあえずだいたいの動画をWindows Media Playerで再生可能に。</dd>
		  
		<dt><a href="http://sourceforge.jp/projects/ntemacsjp/">NTEmacs JP</a></dt>
		<dd>　テキストエディタ。コード書きの必須ツール。無いと仕事になりません。</dd>
	  </dl>
	  
	  <h3>Mac OS X向け：</h3>
	  <dl>
		<dt><a href="http://cyberduck.ch/">Cyberduck</a></dt>
		<dd>　SCP/FTP/SFTP/WebDAVなどに対応するGUIのファイル転送ツール。ドラッグ＆ドロップでファイル転送するのに便利。</dd>
		
		<dt><a href="http://sourceforge.jp/projects/macwiki/">Carbon Emacs</a></dt>
		<dd>　テキストエディタ。やっぱり無いと仕事にならない。</dd>
		
		<dt><a href="http://www.perian.org/">Perian</a></dt>
		<dd>　コーデック集。これをインストールしておくだけで、ほとんどの動画ファイルがQuickTime Playerで再生可能＆QuickLookで閲覧可能に。</dd>
		
		<dt><a href="http://www.mimikaki.net/">mi</a></dt>
		<dd>　Mac OS Xよりも前から使っているエディタ。多機能＆そこそこ軽量。</dd>
		
	  </dl>
	</div>
    </div><!-- end of .sidebar_inner -->
  </div><!-- end of #sidebar_2 -->


  <div id="sidebarbox_3" class="sidebar_box rounding">
    <div class="sidebar_inner rounding">
      <div class="sidebar_links sidebar_text">
	<h2>関連リンク：</h2>
	<dl>

	  <dt><a href="http://slashdot.jp/">Slashdot Japan</a></dt>
	  <dd>セキュリティ関連からどうでもよいネタまで幅広く扱う雑談サイト</dd>

	  <dt><a href="http://sourceforge.jp/magazine/">SourceForge.JP Magazine</a></dt>
	  <dd>オープンソース関連ニュース/情報を掲載</dd>

	  <dt><a href="http://sourceforge.jp/">SourceForge.JP</a></dt>
	  <dd>オープンソースソフトウェア開発支援サイト。私も使っています</dd>

	  <dt><a href="http://github.com/">GitHub</a></dt>
	  <dd>公開Gitリポジトリ。こちらも愛用しています</dd>

	  <dt><a href="http://vps.sakura.ad.jp/">さくらのVPS</a></dt>
	  <dd>hylom.netはさくらのVPSサービスを利用してます</dd>


	</dl>
    </div><!-- end of .sidebar_inner -->
  </div><!-- end of #sidebar_2 -->

    <?php endif; ?>
</div><!-- end of sidebar -->

