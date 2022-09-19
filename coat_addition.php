<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main class="main">
        <div class="formarea">
            <h2>近場のコートを追加しよう！</h2>
            <form action="php/file_uploader.php" method="POST" enctype="multipart/form-data" onchange="prefecheck()">
                <div class="prefectures">
                    <label for="prefe">追加する都道府県を選択</label>
                    <select name="prefectures_id" id="prefe">
                        <option value="">都道府県を選択</option>
                    </select>
                </div>

                <div class="municipalities">
                    <label for="munici">追加する市区町村を選択</label>
                    <select name="municipalities_id" id="munici" onchange="municicheck()">
                        <option value="" selected>市区町村を選択</option>
                    </select>
                </div>

                <div class="coat_image">
                    <label for="coat_image">コートの画像を選択！</label>
                    <input type="file" id="coat_image" name="image_path" accept="image/*" multiple="multiple">
                </div>

                <div class="coat_title">
                    <label for="coat_name">コートの名前を入力してください</label>
                    <input type="text" name="coat_name" id="coat_name" onchange="coat_namecheck()">
                </div>

                <div class="coat_explanation">
                    <label for="coat_explanation">コートの説明</label>
                    <textarea rows="" cols="" name="coat_explanation" id="coat_explanation" onchange="coat_explanationcheck()"></textarea>
                </div>

                <input type="submit" value="コートを追加する" id="btn" disabled>
            </form>
        </div>
    </main>


    <script src="./js/prefectures.js"></script>
    <script src="./js/func.js"></script>
    <script src="/js/check.js"></script>
    <script>

    </script>
</body>

</html>