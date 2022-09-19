<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/coat_addition.php">戻る</a>
</body>

</html>
<?php

require_once "dbc.php";
// _FILEデータ
$imageItem = $_FILES["image_path"];
$imageName = $imageItem["name"];
$imagePath = $imageItem["tmp_name"];
// ＿POSTデータ
$coatPrefecturesId       = $_POST["prefectures_id"];
$coatMunicipalitiesId    = $_POST["municipalities_id"];
$coatName                = $_POST["coat_name"];
$coatExplanation         = $_POST["coat_explanation"];

// 保存先のパス
$saveDir = "../images/";
// 保存する画像に日付を付与
$addDate = date("Ymdhis") .$_FILES["image_path"]["name"];
// 保存先と保存する画像を一つにする
$savePath = $saveDir . $addDate;

if($imageItem["error"] === 0){
    if(move_uploaded_file($imagePath, $saveDir . $addDate)){
        echo "保存完了";
        save($coatPrefecturesId, $coatMunicipalitiesId, $savePath, $coatName, $coatExplanation);
    }else{
        echo "保存失敗";
    }
}


?>