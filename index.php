<?php

    require_once ("php/dbc.php");
    $test = getparam();
    echo "<pre>";
    echo"</pre>";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link rel="stylesheet" href="/scss/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1 class="title">バスケバカ！</h1>
        <nav class="nav">
            <ul>
                <li><a href="">イベント一覧</a></li>
                <li><a href="">バスケショップ</a></li>
                <li><a href="">人気コート</a></li>
                <li><a href="./coat_addition.php">コートを追加！</a></li>
                <li><a href="">開発中</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">


        <div class="formarea">
            <h2 id="title">近場のコートを探してみよう！</h2>
            <form action="php/coatselect.php" method="GET">
                <div class="fromFlex">
                    <div class="prefectures">
                        <select name="prefe" id="prefe">
                            <option value="">都道府県を選択</option>
                        </select>
                    </div>

                    <div class="municipalities">
                        <select name="munici" id="munici">
                            <option value="" selected>市区町村を選択</option>
                        </select>
                    </div>
                </div>

                <input type="submit" value="コートを探す" id="btn" >
            </form>
        </div>

        <div class="court">
            <h2>【最近追加されたコート】</h2>
            <ul>
                <?php foreach($test as $item) : ?>
                <li>
                    <img src=<?php echo $item["image_path"]; ?> alt="">
                </li>
                <p><?php echo $item["coat_name"] ?></p>
                <?php endforeach ?>
            </ul>
            <p>ーーーーーーー都道府県が選択されたら表示する ーーーーーーーーー</p>
            <h3 class="court_name">場所の名前</h3>
            <p class="court_popularity">人気度</p>
            <p class="court_image">コート画像</p>
            
            <p>ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー</p>
        </div>
    </main>

    <footer>
        <small>&copy; バスケバカ！！！</small>
    </footer>

    <script src="./js/prefectures.js"></script>
    <script src="./js/func.js"></script>
    <script src="./js/ajax.js"></script>
</body>

</html>