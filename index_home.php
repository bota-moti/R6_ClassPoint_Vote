<?php 


if (isset($_POST['11'])) {    // フォームの内容をセッションで保存
    header('Location: ./Class_check/1-1_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['12'])) {
    header('Location: ./Class_check/1-2_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['13'])) {
    header('Location: ./Class_check/1-3_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['14'])) {
    header('Location: ./Class_check/1-4_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['21'])) {
    header('Location: ./Class_check/2-1_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['22'])) {
    header('Location: ./Class_check/2-2_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['23'])) {
    header('Location: ./Class_check/2-3_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['24'])) {
    header('Location: ./Class_check/2-4_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['3ms'])) {
    header('Location: ./Class_check/3-ms_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['3ic'])) {
    header('Location: ./Class_check/3-ic_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['3br'])) {
    header('Location: ./Class_check/3-br_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['3mi'])) {
    header('Location: ./Class_check/3-mi_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['4ms'])) {
    header('Location: ./Class_check/4-ms_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['4ic'])) {
    header('Location: ./Class_check/4-ic_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['4br'])) {
    header('Location: ./Class_check/4-br_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['4mi'])) {
    header('Location: ./Class_check/4-mi_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['5ms'])) {
    header('Location: ./Class_check/5-ms_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['5ic'])) {
    header('Location: ./Class_check/5-ic_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['5br'])) {
    header('Location: ./Class_check/5-br_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} else if(isset($_POST['5mi'])) {
    header('Location: ./Class_check/5-mi_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
} 


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <title>クラス杯投票システム</title>
        <link rel="stylesheet" href="css\style_index.css">
    </head>

    <body> 
        <div class="background-container">
            <div class="content">  
                <div class="pic">
                    <h1>クラス杯投票システム</h1>
                    <h2>投票したいクラスをタッチしてください</h2>
                    <form action="" method="POST" class="bottom">
                        <table>
                            <tr>
                                <td><button type="submit" class="btn" name="11">1の1</button></td>
                                <td><button type="submit" class="btn" name="12">1の2</button></td>
                                <td><button type="submit" class="btn" name="13">1の3</button></td>
                                <td><button type="submit" class="btn" name="14">1の4</button></td>
                            </tr>
                        </table> 
                        <br>
                        <table>
                            <tr>
                                <td><button type="submit" class="btn" name="21">2の1</button></td>
                                <td><button type="submit" class="btn" name="22">2の2</button></td>
                                <td><button type="submit" class="btn" name="23">2の3</button></td>
                                <td><button type="submit" class="btn" name="24">2の4</button></td>
                            </tr>
                        </table> 
                        <br>
                        <table>
                            <tr>
                                <td><button type="submit" class="btn" name="3ms">3ms</button></td>
                                <td><button type="submit" class="btn" name="3ic">3ic</button></td>
                                <td><button type="submit" class="btn" name="3mi">3mi</button></td>
                                <td><button type="submit" class="btn" name="3br">3br</button></td>
                            </tr>
                        </table> 
                        <br>
                        <table>
                            <tr>
                                <td><button type="submit" class="btn" name="4ms">4ms</button></td>
                                <td><button type="submit" class="btn" name="4ic">4ic</button></td>
                                <td><button type="submit" class="btn" name="4mi">4mi</button></td>
                                <td><button type="submit" class="btn" name="4br">4br</button></td>
                            </tr>
                        </table> 
                        <br>
                        <table>
                            <tr>
                                <td><button type="submit" class="btn" name="5ms">5ms</button></td>
                                <td><button type="submit" class="btn" name="5ic">5ic</button></td>
                                <td><button type="submit" class="btn" name="5mi">5mi</button></td>
                                <td><button type="submit" class="btn" name="5mi">5br</button></td>
                            </tr>
                        </table> 
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>