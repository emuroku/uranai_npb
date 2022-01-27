<?php

// ランダムの文字列を生成して返す
// 文字列の長さのデフォルトは20
function get_random_string($length=20){
    // ハッシュ関数でランダムの文字列を作成し、指定された文字数で文字列を切り取って返す
    return substr(base_convert(hash('sha256', uniqid()), 16, 36), 0, $length);
}

// トークンを生成し、セッションにセットして生成したトークンを返す
function get_csrf_token(){
    // ランダムの値を取得
    $token = get_random_string(30);
    // sessionにトークンをセット
    set_session('csrf_token', $token);
    return $token;
}

// SESSIONの$nameキーの値に$valueを設定する
function set_session($name, $value){
    $_SESSION[$name] = $value;
}

