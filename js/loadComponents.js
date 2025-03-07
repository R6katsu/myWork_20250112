document.addEventListener("DOMContentLoaded", function() {
    // ヘッダーを読み込む
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
        });

    // セクションを読み込む
    fetch('sections.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('sections-container').innerHTML = data;
        });
});
