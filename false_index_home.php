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
    <title>グラス杯投票システム</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style_index.css">
</head>
<body>
    <div class="content"> <!--divクラスがcontent-->
        <form action="" method="POST"> <!--formアクション-->
            <h1>クラス投票システム</h1>
            <dic class="Count">
                <table>
                    <tr>
                        <td><button type="submit" class="btn" name="11">1-1</button></td>
                        <td><button type="submit" class="btn" name="12">1-2</button></td>
                        <td><button type="submit" class="btn" name="13">1-3</button></td>
                        <td><button type="submit" class="btn" name="14">1-4</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" name="21">2-1</button></td>
                        <td><button type="submit" class="btn" name="22">2-2</button></td>
                        <td><button type="submit" class="btn" name="23">2-3</button></td>
                        <td><button type="submit" class="btn" name="24">2-4</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" name="3ms">3-ms</button></td>
                        <td><button type="submit" class="btn" name="3ic">3-ic</button></td>
                        <td><button type="submit" class="btn" name="3mi">3-mi</button></td>
                        <td><button type="submit" class="btn" name="3br">3-br</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" name="4ms">4-ms</button></td>
                        <td><button type="submit" class="btn" name="4ic">4-ic</button></td>
                        <td><button type="submit" class="btn" name="4mi">4-mi</button></td>
                        <td><button type="submit" class="btn" name="4br">4-br</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" name="5ms">5-ms</button></td>
                        <td><button type="submit" class="btn" name="5ic">5-ic</button></td>
                        <td><button type="submit" class="btn" name="5mi">5-mi</button></td>
                        <td><button type="submit" class="btn" name="5mi">5-br</button></td>
                    </tr>
                </table> 
            </div>     
        </form> 
    </div>
</body>
</html>