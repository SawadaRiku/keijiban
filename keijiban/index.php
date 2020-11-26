<?php 

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$stmt = $pdo->query("select * from 4each_keijiban");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <div class="main">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <div class="box">
                <h3>入力フォーム</h3>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class=text size="35" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class=text size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" class="text" cols="60" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                    <br>
                </form>
            </div>
                <?php
                
                while ($row = $stmt->fetch()) {
                
                    echo "<div class='kiji'>";
                        echo "<h2>".$row['title']."</h2>";
                        echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                    echo "</div>";
                
                }
                
                ?>            
        </div>

        <div class="right">
            <h2>人気の記事</h2>
            <p>PHPオススメ本</p>
            <p>PHP MyAdminの使い方</p>
            <p>今人気のエディタ Top5</p>
            <p>HTMLの基礎</p>
            <h2>オススメリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Bracketsのダウンロード</p>
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
        </div>
    </div>

    <div class="fwrapper">
        <footer>
            copyright © internous | 4each blog the one which provides A to Z about programming.
        </footer>
    </div>


</body>

</html>
