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

<!-- 提出作品のページ -->
<?php
    // タブの名前
    $page1 = "提出作品";
    $page2 = "これまでに制作した作品";

    // セクションの名前
    $section1 = "提出作品";
    $section2 = "ソースコードから抜粋";

	ob_start();

    // タブの名前
    echo '<title>'.$page1.'</title>';

    // ヘッダーに表示するコンテンツを定義
    $myName = "<b>専門学校デジタルアーツ仙台<br>勝又 柊介（カツマタ シュウスケ）</b>";

    $ecsDanmakuGitButton = 
    '<div><a href="https://github.com/R6katsu/ECS_Danmaku" target="_blank" style="text-decoration: none; color: white; background-color: #4CAF50; padding: 10px 20px; border-radius: 5px; display: inline-block;">
        <b>提出作品のソースコード</b>
    </a></div>';

    $memo = "<b>こちらのウェブサイトのソースコード</b>";

    $nextPageButton = 
    '<div><a href="previousWorks.php" style="text-decoration: none; color: white; background-color: #4CAF50; padding: 10px 20px; border-radius: 5px; display: inline-block;">
        <b>'.$page2."のページへ".'</b>
    </a></div>';

    // 固定ヘッダーを作成
    createFixedHeader($myName . $ecsDanmakuGitButton . $memo . $nextPageButton);

    // セクション1作成
	createSection($section1);

    // Unity ECSで作る弾幕ゲームの動画と説明文を含むコンテナを作成
    addVideoContainer("https://www.youtube.com/embed/SBQBJGjWC-M", "Unity ECSで作る弾幕ゲーム",
    "<b>2024/10/03に制作を開始し、2024/12/19に完成した作品。</b><br>
    この作品の制作を通じて、Unity ECS（1.2.4以降のEntity Component System）を扱う基礎が身についた。");

    // セクション2作成
	createSection($section2);

    // InputSystem等のコールバックを使用
	echo 
    '<div>
        <h3 class="main_content_area" style="text-align: center;">'."InputSystemを使用".'</h3>
    </div>';

    echo '<img src="src/image/InputSystemを使用.png" alt="InputSystemを使用" width="100%">';

    // 画像の説明
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            'ECSでInputSystemを使用する為にSystemBaseを継承した。'
        .'</p>
    </div>';

    echo '<br><br>';

    // Playerの移動関数
    echo 
    '<div>
        <h3 class="main_content_area" style="text-align: center;">'."Playerの移動関数".'</h3>
    </div>';

    echo '<img src="src/image/Playerの移動関数.png" alt="Playerの移動関数" width="100%">';

    // 画像の説明
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            'SystemBaseを継承したclassでの関数の例'
        .'</p>
    </div>';

    echo '<br><br>';

    // 拡張関数でマジックナンバーを減らす試み
    echo 
    '<div>
        <h3 class="main_content_area" style="text-align: center;">'."拡張関数でマジックナンバーを減らす試み".'</h3>
    </div>';

    echo '<img src="src/image/拡張関数でマジックナンバーを減らす試み.png" alt="拡張関数でマジックナンバーを減らす試み" width="100%">';
    
    // 画像の説明
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            '拡張関数を活用し、半分の値を計算する際のマジックナンバーを出さないようにした。'
        .'</p>
    </div>';

    echo '<br><br>';
    
    // Dataに使用する構造体
    echo 
    '<div>
        <h3 class="main_content_area" style="text-align: center;">'."Dataに使用する構造体".'</h3>
    </div>';

    echo '<img src="src/image/Dataに使用する構造体.png" alt="サンプル画像" width="100%">';

    // 画像の説明
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            'IComponentDataを継承したstructの例'
        .'</p>
    </div>';

    echo '<br><br>';

    // StateでDataを付け替えて挙動を変化させる
    echo 
    '<div>
        <h3 class="main_content_area" style="text-align: center;">'."StateでDataを付け替えて挙動を変化させる".'</h3>
    </div>';

    echo '<img src="src/image/StateでDataを付け替えて挙動を変化させる.png" alt="サンプル画像" width="100%">';

    // 画像の説明
    echo 
    '<div class="main_content_greet" style="text-align: center;">
        <p class="main-content-greet__line" style="text-align: center;">'.
            'デリゲートで処理内容を変化させることは非推奨だった為、IComponentDataを継承したstructを付け替えることで処理内容を変化させた。'
        .'</p>
    </div>';

    // 最後に余白を作る
    echo '<br><br>';

	$contents = ob_get_clean();
	echo $contents;
?>
