<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>あなたと相性が最強な野球選手診断</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'top.css'); ?>">
    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'common.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-sm justify-content-center navbar-light bg-light">
        <!-- <a class="navbar-brand" href="top.php"> -->
        <div class="title">
            <h2> あなたと相性が最強な野球選手診断 </h2>
        </div>
        <!-- </a> -->
    </nav>

    <!-- container -->
    <div class="container">
        <div class="col-12">
            <h5><i class="fa-solid fa-pen-field"></i>どうぶつ占いで、あなたと相性が最強の現役プロ野球選手を占います</h3>
                <!-- 入力フォーム -->
                <div class="input_birthday">
                    <form method="post" action="result.php">
                        <!-- CSRF対策 -->
                        <div class="form-group col-12">
                            <p>生年月日を入力してください</p>
                            <div class="birthday">
                                <input type="number" class="form-control form-control-lg col-6" name="year" required min="1926" max="2030" id="year" placeholder value="1990">
                                <p class="birth_txt"><label for="year">年</label></p>

                                <input type="number" class="form-control form-control-lg col-3" name="month" required min="1" max="12" id="month" placeholder value="1">
                                <p class="birth_txt"><label for="month">月</label></p>

                                <input type="number" class="form-control form-control-lg col-3" name="day" required min="1" max="31" id="day" placeholder value="1">
                                <p class="birth_txt"><label for="day">日</label></p>
                            </div>
                            <div class="submit"><button class="btn btn-primary" id="btn_submit">占う！</button></div>
                        </div>
                    </form>
                </div>
                <!-- Twitter投稿誘導 -->
        </div>
    </div>
</body>
<footer>
    <div class="copyright">
        <small>©emuroku.</small>
    </div>
</footer>

</html>