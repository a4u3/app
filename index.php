<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="googlebot" content="noindex">
<title>Suguru Kawahara's Portfolio</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="./css/reset.css" rel="stylesheet" type="text/css">
<link href="./css/common.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});
</script>
</head>

<body>
<header>
	<p>Suguru Kawahara's Portfolio</p>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#profile">Profile</a></li>
		<li><a href="#works">Works</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</header>

<section id="profile">
	<h1>自己紹介</h1>
	<div>初めまして、河原秀と申します。<br>高校生の頃にHP制作に興味を持ち、独学でHP制作を開始。<br>以前働いていた制作会社では、創設メンバーという事もあり、色々な事に携わらせてもらいました。<br>Wordpressでの汎用テーマの作成からプラグインの開発、ドメインの管理やサーバーの管理等もしていました。<br>現在はUnityの勉強を始めようと思っています。</div>
	<p class="midashi">色々な好きなもの</p>
	<ul class="cf">
		<li>
			<figure><img src="./img/01.jpg" alt="音楽シミュレーションゲーム"></figure>
			<p>音楽シミュレーションゲーム</p>
			<div>コナミ製の音ゲーをよくやります。<br>中でもビートマニアやドラムアニアをよくプレイしています。</div>
		</li>
		<li>
			<figure><img src="./img/02.jpg" alt="格闘ゲーム"></figure>
			<p>格闘ゲーム</p>
			<div>2D格闘ゲームを主にプレイしています。<br>最近はGGシリーズを特にプレイしています。他にもBBや電撃、アルカナ、メルブラ等も触っています。</div>
		</li>
		<li>
			<figure><img src="./img/03.jpg" alt="その他ゲーム"></figure>
			<p>その他ゲーム</p>
			<div>シャドウバースなどのデジタルTCGやテトリスのようなパズルゲーム等も好きで時間があればプレイしています。</div>
		</li>
		<li>
			<figure><img src="./img/04.jpg" alt="漫画"></figure>
			<p>漫画</p>
			<div>少年漫画から少女漫画まで色々なものを読みます。<br>好きな漫画は魔法陣グルグルや背筋をピンと、魔法使いの嫁等。</div>
		</li>
		<li>
			<figure><img src="./img/05.jpg" alt="アニメ"></figure>
			<p>アニメ</p>
			<div>深夜アニメを中心に視聴しています。<br>今期の注目はFateですね。<br>声優さんを追いかけていたこともありましたね。</div>
		</li>
		<li>
			<figure><img src="./img/06.jpg" alt="写真"></figure>
			<p>写真</p>
			<div>気が向いた時に空の写真を撮ることが多いです。<br>あとはどこかへ出かけた際に、その時々の想い出として写真に撮っておくこともあります。<br>近々一眼レフが欲しいなと思っています。</div>
		</li>
	</ul>
</section>

<article id="works">
	<h1>実績</h1>
	<div>
		<section class="cf">
			<div>
				<h1>HobbyForest動画版</h1>
				<ul>
					<li>個人で運営中のブログサイトです。<br>自分が気に入った動画を紹介し、見てもらう方の見易さを考えながら制作しました。<br>また、SNSとも連携をし、投稿の拡散を目的として活用しています。</li>
					<li>
						<span>担当箇所</span>
						<span>デザインからコーディングまで全てを担当。</span>
					</li>
					<li>
						<a href="http://video.hobbyforest.net/" target="_blank">サイトを見る</a>
					</li>
					<li>
						<a href="/zip/video_hf.zip">ソースをダウンロード</a>
					</li>
				</ul>
			</div>
			<div><img src="./img/hobbyforest.jpg" alt="HobbyForest動画版"></div>
		</section>
		<section class="cf">
			<div>
				<h1>かえるHOME</h1>
				<ul>
					<li>Wordpressを使用し、一からテーマを開発。<br>パソコン慣れをしている方が少なかったため、カスタム投稿やカスタムフィールドを駆使しHTMLやCSSがわからない方でも更新が出来るよう対応しました。</li>
					<li>
						<span>担当箇所</span>
						<span>全ページのコーディングを担当。</span>
					</li>
					<li>
						<a href="http://kaeru-home.com/" target="_blank">サイトを見る</a>
					</li>
					<li>
						<a href="/zip/kaeru-home.zip">ソースをダウンロード</a>
					</li>
				</ul>
			</div>
			<div><img src="./img/kaeruhome.jpg" alt="かえるHOME"></div>
		</section>
		<section class="cf">
			<div>
				<h1>株式会社スリーライク</h1>
				<ul>
					<li>日本語ページから英語、スペイン語まで対応した大量生産系のサイト。<br>珍しくスマホ対応は無いサイトでした。</li>
					<li>
						<span>担当箇所</span>
						<span>全ページのコーディングを担当。</span>
					</li>
					<li>
						<a href="http://www.threelike.co.jp/" target="_blank">サイトを見る</a>
					</li>
					<li>
						<a href="/zip/threelike.zip">ソースをダウンロード</a>
					</li>
				</ul>
			</div>
			<div><img src="./img/threelike.jpg" alt="株式会社スリーライク"></div>
		</section>
		<section class="cf">
			<div>
				<h1>日本科研株式会社</h1>
				<ul>
					<li>フリーランスで制作したレスポンシブ対応サイトの一つです。</li>
					<li>
						<span>担当箇所</span>
						<span>全ページのコーディングを担当。</span>
					</li>
					<li>
						<a href="https://www.nihon-kaken.co.jp/" target="_blank">サイトを見る</a>
					</li>
					<li>
						<a href="/zip/nihonkaken.zip">ソースをダウンロード</a>
					</li>
				</ul>
			</div>
			<div><img src="./img/nihonkaken.jpg" alt="日本科研株式会社"></div>
		</section>
	</div>
</article>

<footer>
	<section id="contact">
		<h1>お問い合わせ</h1>
		<div>info@lanceleaf.com</div>
	</section>
	<p>&copy; 2017 Suguru Kawahara.</p>
</footer>
</body>
</html>
