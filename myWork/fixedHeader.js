// 固定ヘッダー作成
function createFixedHeader(messages, links, height)
{
    // ヘッダーの高さの半分を更に半分にした値
    // 上の余白と下の余白の両方に使用し、その合計がヘッダーの高さの半分になる
    const verticalPadding = height / 4;

    const header = document.createElement("header");
    header.style.background = "#333";
    header.style.color = "white";
    header.style.textAlign = "center";
    header.style.position = "fixed";    // 位置固定
    header.style.width = "100%";        // 横幅を画面サイズに設定
    header.style.height = `${height}px`; // ヘッダーの高さ
    header.style.top = "0";             // 一番上
    header.style.left = "0";
    header.style.right = "0";
    header.style.zIndex = "1000";       // 最優先表示

    // 中央揃え
    header.style.display = "flex";      // フレックスボックスで配置
    header.style.flexDirection = "column"; // 縦方向に並べる
    header.style.alignItems = "center";  // 横方向に中央揃え
    header.style.justifyContent = "center"; // 縦方向に中央揃え

    // リンクコンテナを作成（flexbox を適用）
    const linkContainer = document.createElement("div");
    linkContainer.style.display = "flex"; // 横並びにする
    //linkContainer.style.justifyContent = "center"; // 中央配置
    linkContainer.style.gap = "15px"; // リンク同士の間隔

    // メッセージの表示
    if (messages) {
        const messageElement = document.createElement("p");
        messageElement.innerHTML = messages; // `innerHTML` に変更して `<br>` を有効化
        messageElement.style.marginBottom = `${verticalPadding}px`; // 下に余白を追加
        messageElement.style.marginTop = `${verticalPadding}px`; // ★ メッセージの下に適度な余白
        messageElement.style.textAlign = "left";  // 文字を左揃えに設定
        linkContainer.appendChild(messageElement);
    }

    // href、textを代入
    // 存在しない場合は定義されている文字リテラルを代入
    links.forEach(link => {
        const href = link.href || '#';
        const text = link.text || 'リンクなし';
        const linkElement = document.createElement("a");
        linkElement.href = href;
        linkElement.textContent = text;
        linkElement.className = "button";
        linkElement.style.color = "white";
        linkElement.style.textDecoration = "none";
        linkElement.style.border = "1px solid white";
        linkElement.style.borderRadius = "5px";
        linkElement.style.marginBottom = `${verticalPadding}px`; // 下に余白を追加
        linkElement.style.marginTop = `${verticalPadding}px`; // ★ メッセージの下に適度な余白

        // ★ 追加: ボタン内のテキストを縦方向にも中央揃えにする
        linkElement.style.display = "inline-flex"; // フレックスボックスを適用
        linkElement.style.alignItems = "center";  // 縦方向の中央揃え
        linkElement.style.justifyContent = "center"; // 横方向の中央揃え

        linkContainer.appendChild(linkElement);
    });

    // ヘッダーにリンクコンテナを追加
    header.appendChild(linkContainer);

    // ヘッダーを body の最上部に追加
    document.body.prepend(header);
}