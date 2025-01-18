<?php
session_start();

if (!empty($_POST)) {
    if (isset($_POST['11'])) {    // フォームの内容をセッションで保存
        $_SESSION['class'] = "1";
    
    } else if (isset($_POST['12'])) {
        $_SESSION['class'] = '2';

    } else if (isset($_POST['13'])) {
        $_SESSION['class'] = '3';

    } else if (isset($_POST['14'])) {
        $_SESSION['class'] = '4';

    } else if (isset($_POST['21'])) {
        $_SESSION['class'] = '5';

    } else if (isset($_POST['22'])) {
        $_SESSION['class'] = '6';

    } else if (isset($_POST['23'])) {
        $_SESSION['class'] = '7';

    } else if (isset($_POST['24'])) {
        $_SESSION['class'] = '8';

    } else if (isset($_POST['3ms'])) {
        $_SESSION['class'] = '9';

    } else if (isset($_POST['3ic'])) {
        $_SESSION['class'] = '10';

    } else if (isset($_POST['3mi'])) {
        $_SESSION['class'] = '11';
        
    } else if (isset($_POST['3br'])) {
        $_SESSION['class'] = '12';

    } else if (isset($_POST['4ms'])) {
        $_SESSION['class'] = '13';

    } else if (isset($_POST['4ic'])) {
        $_SESSION['class'] = '14';

    } else if (isset($_POST['4mi'])) {
        $_SESSION['class'] = '15';

    } else if (isset($_POST['4br'])) {
        $_SESSION['class'] = '16';

    } else if (isset($_POST['5ms'])) {
        $_SESSION['class'] = '17';

    } else if (isset($_POST['5ic'])) {
        $_SESSION['class'] = '18';

    } else if (isset($_POST['5mi'])) {
        $_SESSION['class'] = '19';

    } else if (isset($_POST['5br'])) {
        $_SESSION['class'] = '20';

    }
    header('Location: ./class_check.php');   // check.phpへ移動
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buttons with Transparent Background</title>
  <link rel="stylesheet" href="./css/style_index.css">
  
</head>
<body>
  <!-- 背景画像とオーバーレイ -->
  <div class="background-container">
    <div class="overlay"></div>
  </div>
  
  <!-- 上部の説明文 -->
  <div class="header-text">
    クラス杯投票
    <br>
    好きなクラスを押してください
  </div>
  <br><br>
  <!-- ボタンのグリッド -->
  
  <form action="" method="POST" class="button-grid">
    <button type="submit" class="btn" name="11">1-1</button>
    <button type="submit" class="btn" name="12">1-2</button>
    <button type="submit" class="btn" name="13">1-3</button>
    <button type="submit" class="btn" name="14">1-4</button>
    <button type="submit" class="btn" name="21">2-1</button>
    <button type="submit" class="btn" name="22">2-2</button>
    <button type="submit" class="btn" name="23">2-3</button>
    <button type="submit" class="btn" name="24">2-4</button>
    <button type="submit" class="btn" name="3ms">3-ms</button>
    <button type="submit" class="btn" name="3ic">3-ic</button>
    <button type="submit" class="btn" name="3mi">3-mi</button>
    <button type="submit" class="btn" name="3br">3-br</button>
    <button type="submit" class="btn" name="4ms">4-ms</button>
    <button type="submit" class="btn" name="4ic">4-ic</button>
    <button type="submit" class="btn" name="4mi">4-mi</button>
    <button type="submit" class="btn" name="4br">4-br</button>
    <button type="submit" class="btn" name="5ms">5-ms</button>
    <button type="submit" class="btn" name="5ic">5-ic</button>
    <button type="submit" class="btn" name="5mi">5-mi</button>
    <button type="submit" class="btn" name="5br">5-br</button>

  </form>
</body>
</html>
