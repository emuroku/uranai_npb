<?php
header('X-Frame-Options:DENY'); // クリックジャッキング対策

// 定数ファイル読み込み
require_once '../conf/const.php';

// 汎用関数ファイル読み込み
require_once MODEL_PATH . 'functions.php';

// CSRF対策
$token = get_csrf_token();

// topページのクライアントソースファイル読み込み
include_once VIEW_PATH . 'top_view.php';
