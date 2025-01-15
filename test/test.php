<?php
session_start();

if (!empty($_POST)) {
    if (isset($_POST['11'])) {    // フォームの内容をセッションで保存
        $_SESSION['class'] = "1_1";
    
    } else if (isset($_POST['12'])) {
        $_SESSION['class'] = '1_2';

    } else if (isset($_POST['13'])) {
        $_SESSION['class'] = '1_3';

    } else if (isset($_POST['14'])) {
        $_SESSION['class'] = '1_4';

    } else if (isset($_POST['21'])) {
        $_SESSION['class'] = '2_1';

    } else if (isset($_POST['22'])) {
        $_SESSION['class'] = '2_2';

    } else if (isset($_POST['23'])) {
        $_SESSION['class'] = '2_3';

    } else if (isset($_POST['24'])) {
        $_SESSION['class'] = '2_4';

    } else if (isset($_POST['3ms'])) {
        $_SESSION['class'] = '3_ms';

    } else if (isset($_POST['3ic'])) {
        $_SESSION['class'] = '3_ic';

    } else if (isset($_POST['3mi'])) {
        $_SESSION['class'] = '3_mi';
        
    } else if (isset($_POST['3br'])) {
        $_SESSION['class'] = '3_br';

    } else if (isset($_POST['4ms'])) {
        $_SESSION['class'] = '4_ms';

    } else if (isset($_POST['4ic'])) {
        $_SESSION['class'] = '4_ic';

    } else if (isset($_POST['4mi'])) {
        $_SESSION['class'] = '4_mi';

    } else if (isset($_POST['4br'])) {
        $_SESSION['class'] = '4_br';

    } else if (isset($_POST['5ms'])) {
        $_SESSION['class'] = '5_ms';

    } else if (isset($_POST['5ic'])) {
        $_SESSION['class'] = '5_ic';

    } else if (isset($_POST['5mi'])) {
        $_SESSION['class'] = '5_mi';

    } else if (isset($_POST['5br'])) {
        $_SESSION['class'] = '5_br';

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
  <link rel="stylesheet" href="test2.css">
  
</head>
<body>
  <!-- 背景画像とオーバーレイ -->
  <div class="background-container">
    <div class="overlay"></div>
  </div>
  <br><br><br><br><br><br>
  <!-- 上部の説明文 -->
  <div class="header-text">
    Welcome to the Button Grid!
  </div>
  <br><br><br><br><br><br>
  <!-- ボタンのグリッド -->
  
  <form action="" method="POST" class="button-grid">
    <button type="submit" class="btn" name="11">1の1</button>
    <button>Button 2</button>
    <button>Button 3</button>
    <button>Button 4</button>
    <button>Button 5</button>
    <button>Button 6</button>
    <button>Button 7</button>
    <button>Button 8</button>
    <button>Button 9</button>
    <button>Button 10</button>
    <button>Button 11</button>
    <button>Button 12</button>
    <button>Button 13</button>
    <button>Button 14</button>
    <button>Button 15</button>
    <button>Button 16</button>
  </form>
</body>
</html>
