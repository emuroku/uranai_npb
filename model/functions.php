<?php

// SESSIONの__errorsキーに$errorを設定する
function set_error($error){
    $_SESSION['__errors'][] = $error;
}

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

// $name のPOSTパラメータを取得する。値が入っていない場合は空の文字列を返す
function get_post($name){
    // $nameのPOSTパラメータが設定されている場合
    if(isset($_POST[$name]) === TRUE){
        return $_POST[$name];
    };
    // POSTパラメータが設定されていない場合は、空の文字列を返す
    return '';
}

// 指定のSQL文を実行し、実行結果を取得して返す
function fetch_query($db, $sql, $params = array()){
    try {
        // statementに指定のSQL文をセット
        $statement = $db->prepare($sql);
        // SQL実行
        $statement->execute($params);
        // 実行結果を取得して返す
        return $statement->fetch();
    } catch (PDOException $e){
        // try処理中にエラーが発生した場合は、エラーメッセージを設定
        set_error('データ取得に失敗しました');
    }
    // エラーが発生した場合はfalseを返す
    return false;
}

// ユーザーのどうぶつ占いの結果を計算して結果ナンバーを返す
function uranai($db, $year, $month, $day){
    // 結果ナンバーを設定
    $result_num = 0;

    // 早見表から計算用tmp_numを取得
    $tmp_num = get_tmp_num($db, $year, $month);

    // tmp_numにdayを加算
    $tmp_num += $day;

    // tmp_numが60以下であれば結果ナンバーへ代入
    if($tmp_num <= 60){
        $result_num = $tmp_num;
    }else{
    // tmp_numが60より大きければ60を引いて結果ナンバーへ代入
        $result_num = $tmp_num - 60;
    }
    return $result_num;
}

// 早見表テーブルから計算用のtmp_numを取得して返す
function get_tmp_num($db, $year, $month){
    // カラム名を取得
    $col_name = 'month_' . $month;

    // SQL文作成
    $sql = "
    SELECT {$col_name} 
    FROM simplified_chart
    WHERE year = {$year}
    ";
    // SQLを実行し、配列として取得する
    $result = fetch_query($db, $sql);
    
    // 取得した配列の$col_nameの値を返す
    return $result[$col_name];
}