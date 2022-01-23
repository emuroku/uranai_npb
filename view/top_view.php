<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>あなたと相性最強なNPB選手占い</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'top.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-sm justify-content-center navbar-light bg-light">
        <i class="fas fa-heart fa-2x"></i><h2> あなたと相性最強なNPB選手占い</h2><i class="fas fa-heart fa-2x"></i>
    </nav>

    <!-- container -->
    <div class="container">

        <h5><i class="fa-solid fa-pen-field"></i>どうぶつ占いで、あなたと相性が最強の現役プロ野球選手を占います</h3>
            <div class="col-12">
            </div>

            <!-- 入力フォーム -->
            <div class="input_birthday">
                <form method="post" action="result.php">
                    <!-- CSRF対策 -->
                    <div class="form-group">
                        <p>生年月日を入力してください</p>
                        <div class="birthday">
                            <input type="number" class="form-control form-control-lg" name="year" required min="1900"
                                max="2100" id="year" placeholder value="1990">
                            <p class="birth_txt"><label for="year">年</label></p>

                            <input type="number" class="form-control form-control-lg" name="month" required min="1"
                                max="12" id="month" placeholder value="1">
                            <p class="birth_txt"><label for="month">月</label></p>

                            <input type="number" class="form-control form-control-lg" name="day" required min="1"
                                max="31" id="day" placeholder value="1">
                            <p class="birth_txt"><label for="day">日</label></p>
                        </div>
                        <div class="submit"><button class="btn btn-primary" id="btn_submit">占う！</button></div>
                    </div>
                </form>
            </div>


            <!-- Twitter投稿誘導 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5><a id="result"></a></h5>
                        <p>作成した画像をぜひTwitterで紹介してください！<br>
                            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"
                                    style="color: #55acee;"></i>つぶやく</a>
                        </p>

                        <small>↓こちらを付けてシェアしてくださると嬉しいです</small>
                        <textarea class="form-control"
                            area-label="With textarea"> #Bs応援タオルメーカー https://emuroku.github.io/buffaloes_towel_maker/</textarea>
                    </div>
                </div>
            </div>
    </div>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
</body>
<footer>
    <div class="copyright">
        <small>©emuroku.</small>
    </div>
</footer>

</html>