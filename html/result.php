<?php
header('X-Frame-Options:DENY'); // クリックジャッキング対策

// 定数ファイル読み込み
require_once '../conf/const.php';
// DB接続用関数ファイル読み込み
require_once MODEL_PATH . 'db.php';
// 汎用関数ファイル読み込み
require_once MODEL_PATH . 'functions.php';

// CSRF対策
$token = get_csrf_token();

// DB接続
$db = get_db_connect();

// フォームの入力値から結果を算出
$user_result_num = 1;

// topページのクライアントソースファイル読み込み
include_once VIEW_PATH . 'result_view.php';
