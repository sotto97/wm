<!doctype html>
<html>

<style>
    * {
        margin: 0;
        padding: o;
    }

    body {
        display: flex;
        min-height: 100vh;
    }

    .leftNavigation {
        width: 250px;
        text-align: center;
        background-color: #888;
        color: #fff;
    }

    .content {
        flex: 1;
        background-color: #eee;
        text-align: center;
        margin-left: 10px;
    }
</style>

<head>
    <meta charset="utf-8" />
    <title>左軸ナビゲーション型</title>
    <link rel="stylesheet" href="css/leftNavigation.css">
</head>

<body>
    <header class="leftNavigation">
        <p>ナビゲーション</p>
    </header>
    <div class="content">
        <p>コンテンツ</p>
    </div>
</body>