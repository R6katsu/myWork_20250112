<?php
    // ヘッダーの高さ
    const HEADER_HEIGHT = '60px';
?>

<style>
    /* ヘッダーのスタイル */
    header {
        position: fixed; /* 位置を固定 */
        top: 0; /* 画面上部に配置 */
        left: 0; /* leftとrightを0に設定して真ん中に配置 */
        right: 0;
        width: 100%; /* 横幅を画面に合わせる */
        height: <?php echo HEADER_HEIGHT; ?>; /* 高さを設定 */
        background-color: black; /* 背景色 */
        color: white; /* 文字色 */
        display: flex; /* 子要素を横並びに配置 */
        align-items: center; /* 中央揃え（横） */
        justify-content: left; /* 子要素を左に配置（左から順に配置していく） */
        padding: 0 5%; /* 左右の余白（子要素を配置する為の範囲） */
        z-index: 1000; /* 優先して表示 */
    }

    /* ボタンのコンテナ */
    .header-nav {
        display: flex;
        gap: 20px; /* ボタン同士の間隔を設定 */
        align-items: center;/* 中央揃え（横） */
        height: 100%; /* ヘッダーの高さを継承 */
    }
</style>

    <?php
        // 固定ヘッダーを作成
        function createFixedHeader($contents) 
        {
            echo 
            '<header>
                <nav class="header-nav">'
                    .$contents.     // コンテンツをヘッダーの子要素として表示
                '</nav>
            </header>';

            // ヘッダー用の余白
            echo '<br><br>';
        }
    ?>