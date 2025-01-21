<?php
    // 読み込み
    include 'fixedHeader.php';
    include 'createSection.php';
    include 'videoContainer.php';
?>

<!DOCTYPE html>
<html lang="jp">
	<head>
		<meta charset="UTF-8">

        <!-- 検索エンジンのロボットに、検索結果に表示しないように指示する -->
        <meta name="robots" content="noindex">

		<!-- 
			href="..."：		リンクする外部リソース（この場合は CSS ファイル）のパスを指定する。
			css/style.css：		相対パスで指定する。
			rel="stylesheet"：	スタイルシートであることを示す。ブラウザはこれに従ってCSSを適用する。
			type="text/css"：	リンクするリソースの MIME タイプを指定する。
		-->
		<link href="css/mainContentArea.css" rel="stylesheet" type="text/css">
		<link href="css/mainContentGreet.css" rel="stylesheet" type="text/css">
		<link href="css/backGround.css" rel="stylesheet" type="text/css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
</html>

<!-- これまでに制作した作品のページ -->
<?php
    // タグの名前
    $page1 = "提出作品";
    $page2 = "これまでに制作した作品";

    // セクションの名前
	$section1 = "制作した作品";
	$section2 = "制作中の作品";

	ob_start();

    // タグの名前を設定
    echo '<title>'.$page2.'</title>';

    // ヘッダーに表示するコンテンツを定義
    $myName = "<b>専門学校デジタルアーツ仙台<br>勝又 柊介（カツマタ シュウスケ）</b>";

    $ecsDanmakuGitButton = 
    '<div><a href="https://github.com/R6katsu/ECS_Danmaku" target="_blank" style="text-decoration: none; color: white; background-color: #4CAF50; padding: 10px 20px; border-radius: 5px; display: inline-block;">
        <b>提出作品のソースコード</b>
    </a></div>';

    $memo = "<b>こちらのウェブサイトのソースコード</b>";

    $backPageButton = 
    '<div><a href="myWork.php" style="text-decoration: none; color: white; background-color: #4CAF50; padding: 10px 20px; border-radius: 5px; display: inline-block;">
        <b>'.$page1."のページへ".'</b>
    </a></div>';

    // 固定ヘッダーを作成
    createFixedHeader($myName . $ecsDanmakuGitButton . $memo . $backPageButton);

	// セクション1作成
	createSection($section1);

	// 動画と説明文のコンテナを追加
    addVideoContainer("https://www.youtube.com/embed/V9ZWpWmo5L8", "2.5横スクロールアクション", 
    "<b>2022/08/20に制作を開始し、2022/11/10に完成した作品。</b><br>
    入学までの数か月の間に基礎を学ぼうと思い、学園の「クリエイティブ特待生制度」というサポート制度に挑戦した。この制度は、自作のゲーム作品を提出することで認定ランクに応じて学費の減免を受けられるという制度であり、独学で初めてのゲーム作品を制作し、D～S認定の中で上から二番目のAランクに認定された。");
    
    addVideoContainer("https://www.youtube.com/embed/QMijGHHqIgs", "SwipeCar", "<b>2023/04/27に制作を開始し、2023/05/16に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/aXi5kB5xWJ4", "DefenseSTG", "<b>2023/05/23に制作を開始し、2023/06/06に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/nzG_961f3ro", "Climb", "<b>2023/06/06に制作を開始し、2023/06/27に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/z9_G_KHAzos", "Igaguri", "<b>2023/07/04に制作を開始し、2023/08/29に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/1srk7gIKN0M", "SuikaGameLike", "<b>2023/10/10に制作を開始し、2023/10/17に完成した作品。</b><br>");

    // 説明文
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'
            .'ここまでに制作した作品のソースコードは、バックアップを取っていなかったためPCを買い換えた時に消えた。'.
        '</p>
    </div>';

    addVideoContainer("https://www.youtube.com/embed/PnNeRrajcfE", "PLANET SEARCHERS", 
    "<b>2023/07/20に制作を開始し、2024/03/15に完成した作品。</b><br>
    初めてのアジャイル開発で取り組んだ作品。私はロープAssetを使用したロープアクション、プレイヤー操作、UI制作を中心に担当しました。DA-TE APPs! 2024というゲームコンテストに3人グループで参加し、最優秀賞に選ばれました。");

    addVideoContainer("https://www.youtube.com/embed/wiXblS3k_lA", "A*と棒倒し法を活用した地形生成", "<b>2024/03/15に制作を開始し、2024/03/22に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/fgHTiIy5XoM", "部屋を設置するタワーディフェンス", 
    "<b>2024/04/01に制作を開始し、2024/05/23に完成した作品。</b><br>
    就職活動用にタワーディフェンスの制作を開始。");

    addVideoContainer("https://www.youtube.com/embed/4XWMUQ12mwc", "設備を設置するタワーディフェンス", "<b>2024/05/23に制作を開始し、2024/07/18に完成した作品。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/X4r7aTEPgwE", "Unity制作夏季休業課題 車を使ったゲーム", 
    "<b>2024/07/20に制作を開始し、2024/08/15に完成した作品。</b><br>
    VFXGraphを活用して着弾地点を表現した。これにより、VFXGraphの基礎を学んだ。動く車に着弾エフェクトを追従させるため、ローカル座標系での角度計算や位置計算を行った。");
    
    addVideoContainer("https://www.youtube.com/embed/2s74LgqOTIE", "倒した敵が障害物になるタワーディフェンス", "<b>2024/08/15に制作を開始し、2024/08/29に完成した作品。</b><br>");

    // 説明文
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            '就職活動に向けて制作していた作品は、バックアップを取っていなかったため消えました。
            以降はGithub、外付けデバイスの二つでバックアップを取っています。'
        .'</p>
    </div>';

    addVideoContainer("https://www.youtube.com/embed/SBQBJGjWC-M", "Unity ECSで作る弾幕ゲーム",
    "<b>2024/10/03に制作を開始し、2024/12/19に完成した作品。</b><br>
    この作品の制作を通じて、Unity ECS（1.2.4以降のEntity Component System）を扱う基礎が身についた。");

    addVideoContainer("https://www.youtube.com/embed/yCE0I5l3_0I", "マウスを使わないジェンガ", "<b>2024/12/23に制作を開始し、2024/12/30に完成した作品。</b><br>");

    // 後で置き換える
    echo 
        '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: left;">'.
        '<h2>こちらのウェブサイト</h2><br>
        <b>2025/01/12に制作を開始し、2025/01/20に完成した作品。</b><br>
        第二言語として、PHPの学習を2025/01/12に開始。htmlとPHPでウェブサイトを制作した。'
        .'</p>
    </div>';

	// セクション2作成
	createSection($section2);

	addVideoContainer("https://www.youtube.com/embed/voklLYLtOaE", "制作中のCCFOLIAもどき（2025/01/06時点の映像）", "<b>2024/12/31に制作を開始し、現在も制作中。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/W4AkoCWJspk", "制作中のヴァンパイアサバイバー3D（2025/01/17時点の映像）", "<b>2024/06/03に制作を開始し、現在も制作中。</b><br>");

    addVideoContainer("https://www.youtube.com/embed/b81HL7v6OmU", "制作中のcsv ×メッセージウィンドウ（2025/01/21時点の映像）", "<b>2025/01/21に制作を開始し、現在も制作中。</b><br>");

	$contents = ob_get_clean();
	echo $contents;
?>