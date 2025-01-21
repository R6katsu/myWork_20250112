<style>
    /* 動画と説明文を囲むコンテナ */
        .container {
            display: flex; /* 横並びにする */
            align-items: center; /* 中央揃え */
            gap: 20px; /* 動画とメッセージの間隔 */
            max-width: 100%; /* コンテナの幅 */
            height: 289px; /* 縦横比を保持（目視で丁度いい大きさを調整した値） */
            margin: 20px 0;
            padding: 10px;
            background-color: white;
            border-radius: 8px; /* 角を丸く */
            box-shadow: 1px 1px gray;
        }

    video, iframe 
    {
        width: 100%;
        height: 100%;
        border-radius: 8px; /* 角を丸く */
        box-shadow: 1px 1px gray;
    }
</style>

    <?php
        const NO_VIDEO_MESSAGE = "お使いのブラウザは動画に対応していません。";

        // 動画と説明文を囲むコンテナを追加する関数
        function addVideoContainer($url, $title, $summary) 
        {
            // 動画タイトルを中央揃え
            echo 
                '<div>
                    <h2 class="main_content_area" style="text-align: center;">'.$title.'</h2>
                </div>';

            // 動画コンテナを生成
            echo '<div class="container">';

            if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) 
            {
                // YouTubeの動画
                echo 
                '<iframe width="640" height="360"
                src="' . htmlspecialchars($url) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>';
            }

                // 動画のメッセージウィンドウを中央揃え、説明文を左揃え
                echo 
                '<div class="main_content_greet">
                    <p class="main-content-greet__line">'.$summary.'</p>
                </div>';

                // 動画コンテナ締め
            echo '</div>';

            // 改行
            echo '<br>';
        }
    ?>