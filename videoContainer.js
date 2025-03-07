function addVideoAndSummaryContainer(videoUrl, title, summary) {
    const videoArea = document.getElementById("videoArea");

    if (!videoArea) {
        console.error("videoAreaが見つかりません");
        return;
    }

    // タイトル作成
    const titleElem = document.createElement("h2");
    titleElem.classList.add("main_content_area");
    titleElem.style.textAlign = "center";
    titleElem.innerText = title;

    // コンテナ作成
    const container = document.createElement("div");
    container.classList.add("container");

    // DOM に追加してから横幅を取得
    videoArea.appendChild(titleElem);
    videoArea.appendChild(container);

    const width = container.clientWidth;

    // YouTubeの埋め込み
    const iframe = document.createElement("iframe");
    iframe.src = videoUrl;
    iframe.frameBorder = "0";
    iframe.width = `${width / 2}`;
    iframe.height = `${(width / 2) * (9 / 16)}`;    // 横幅と比率から縦幅を求める
    iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;

    // 説明文エリア
    const description = document.createElement("div");
    description.classList.add("main_content_greet");

    const text = document.createElement("p");
    text.classList.add("main-content-greet__line");
    text.innerHTML = summary;

    description.appendChild(text);

    // 要素を横並びに配置
    container.appendChild(iframe);
    container.appendChild(description);
}
