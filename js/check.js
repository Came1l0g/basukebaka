'use strict';

let errs = {
    err_prefe: '都道府県を入力してください。',
    err_munic: '市区町村を入力してください。',
    err_cname: 'コートの名前を入力してください。',
    err_cexplanation: 'コートの説明をかんたんに入力してください。',
};
// 全入力を判定し、登録ボタンの制御を行う
function check() {
    let flag;
    if (Object.keys(errs).length) {
        flag = false;
        btn.disabled = true;
    } else {
        flag = true;
        let btn = document.getElementById('btn');
        btn.disabled = null;
    }
}
function prefecheck() {
    let prefe = document.getElementById('prefe');
    if (!prefe.value) {
        errs['err_prefe'] = '都道府県を入力してください。';
    } else {
        delete errs['err_prefe'];
    }
    check();
}

function municicheck() {
    let munici = document.getElementById('munici');
    if (!munici.value) {
        errs['err_munic'] = '市区町村を入力してください。';

    } else {
        delete errs['err_munic'];

    }
    check();
}

function coat_imagecheck() {
    let coat_image = document.getElementById('coat_image');
    if (!coat_image.value) {
        errs['err_prefe'] = '都道府県を入力してください。';
    }
    check();
}
function coat_namecheck() {
    let coat_name = document.getElementById('coat_name');
    if (!coat_name.value) {
        errs['err_cname'] = 'コートの名前を入力してください。';

    } else {
        delete errs['err_cname'];
    }
    check();
}
function coat_explanationcheck() {
    let coat_explanation = document.getElementById('coat_explanation');
    if (!coat_explanation.value) {
        errs['err_cexplanation'] = 'コートの説明をかんたんに入力してください。';
    } else {
        delete errs['err_cexplanation'];
    }
    check();
}



