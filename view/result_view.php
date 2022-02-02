<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>あなたと相性最強なNPB選手占い</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . '/result.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-sm justify-content-center navbar-light bg-light">
        <i class="fas fa-heart fa-2x"></i>
        <h2> あなたと相性最強なNPB選手占い</h2><i class="fas fa-heart fa-2x"></i>
        <!-- <i class="fas fa-home"></i> -->
    </nav>

    <!-- container -->
    <div class="container">
        <h5><i class="fa-solid fa-pen-field"></i>どうぶつ占いで、あなたと相性が最強の現役プロ野球選手を占います</h3>
            <section>
                <div class="result_animal">
                    <p>あなたは...</p>
                    <div class="col-12">
                        <div class="users_animal">
                            <h3><?php print($user_result['text']); ?></h3>
                        </div>
                        <img src="<?php print(IMG_PATH . 'animals/' . $user_result['animal'] . '.png'); ?>" class="animal_img">
                    </div>
                </div>
            </section>

            <section>
                <div class="result_player">
                    <h5><i class="fas fa-baseball-ball"></i>あなたと相性が最強なのは...</h5>
                        <div class="col-12">

                            <div class="player_info">
                                <div class="player_team">
                                        <?php print($player_result['team']); ?>
                                </div>
                                <div class="player_name">
                                        <?php print($player_result['name']); ?>
                                </div>
                                <div class = "player_type">タイプ：
                                        <?php print($player_result['text']); ?>
                            </div>
                        </div>
                        <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5><a id="result"></a></h5>
                        <p>結果をシェア<br>
                            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"
                                    style="color: #55acee;"></i>つぶやく</a>
                        </p>
                        <textarea class="form-control"
                            area-label="With textarea">
                        私の最強パートナーは<?php print($player_result['team'] . ' ' . $player_result['name'] . '選手！' . '#あなたと相性最強なNPB選手占い'); ?>
                        </textarea>
                    </div>
                </div>
            </div>
                </div>
            </section>
    </div>



    </div>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
</body>
<footer>
    <div class="copyright">
        <small>©emuroku.</small>
    </div>
</footer>

</html>