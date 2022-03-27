<?php
// フォームの入力値から結果を算出する
    // フォーム入力値の読み込み

    // 入力値からユーザーの動物占いの結果を算出
    // ユーザーの動物占いの結果から相性占いの結果を算出

// フォーム入力値から動物占いの結果を算出し、結果のidを返す

// ユーザーの占い結果idから、相性占いの結果を検索し、結果のidを返す


// playersテーブルから、指定のidの選手の情報を返す
// 
function get_item($db, $num){
    // SQL文の作成
    $sql = "
      SELECT
        partner_id
      FROM
        compatibility_result_list
      WHERE
        user_num = {$num}
    ";
    // SQLを実行し結果を返す
    return fetch_query($db, $sql);
  }
  
  // 入力された日付（month / dayの組み合わせ）が有効化をチェックする
  function is_available_day($db, $birth_month, $birth_day){
    // 存在しない組み合わせデータの取得
    $unavailable_day_list = get_table_list($db, 'unavailable_day_list');
    // フラグの設定
    $err = '';
    foreach($unavailable_day_list as $line){
      if($line['month'] == $birth_month && $line['day'] == $birth_day){
        $err = 'true';
      }
    }
    return $err;
  }