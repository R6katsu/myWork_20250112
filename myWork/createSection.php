<?php
    // セクション（下線付きh1）を作成
    function createSection($title)
    {
        echo '<h1>' . htmlspecialchars($title) . '</h1><hr>';   // <hr>は下線
    }
?>