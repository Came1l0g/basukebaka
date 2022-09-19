const prefecture = pref['prefectures'];
let prefe = document.getElementById('prefe');
let munici = document.getElementById('munici');

// 都道府県のセレクトボックスに値を入れる関数を実行
addition(prefecture, prefe);

// 都道府県のセレクトボックスに値を入れる（関数化）
function addition(ele1, ele2) {
    if(ele1 !== undefined){
        ele1.forEach(element => {
            let options = document.createElement('option');
            if (element['code']) {
                options.value = element['code'];
                options.textContent = element['name'];
            } else {
                options.value = element['id'];
                options.textContent = element['name'];
            }
            ele2.appendChild(options);
        });
    } 
}

// セレクトボックスの値が変わったら市口調損のデータを取得させる
prefe.addEventListener('change', function () {
    if(!(prefe.value)){
    }else{
        getApi(prefe.value);
    }
});

// 市区町村のデータを取得
function getApi(number) {
    if(!(number)){
        return;
    }
    const api = `https://www.land.mlit.go.jp/webland/api/CitySearch?area=${number}`;
    fetch(api)
        .then((res) => {
            return (res.json());
        })
        .then((json) => {
            while (munici.firstChild) {
                munici.removeChild(munici.firstChild);
            }
            addition(json['data'], munici);
        });
}