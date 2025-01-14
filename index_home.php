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