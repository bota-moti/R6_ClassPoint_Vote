<?php
$mysqli = new mysqli('localhost:3305', 'root', '', 'count_classpoint');  //DBとの接続
session_start(); //セッションの開始

$class_year = 1;  //index.phpから受け取った入力内容をセッションで受け取リ表示

$class_number = 1;  //index.phpから受け取った入力内容をセッションで受け取リ変数に格納


$class = $class_year . "_" . $class_number;

if (!empty($_POST)) {  //条件式によって中身が入力されているか確認している。
    if (isset($_POST['star_1'])) {  //☆１を押された時のif文
    $sql = "UPDATE $class SET count = count + 1 WHERE id = 1";  //sql文を用いて4_miというテーブルの中にあるidの値が1のカラムに値を1+するという宣言
    $res = $mysqli->query($sql);  //queryを用いてsql文を使用
    //下記コメントアウトの原因:上記のsql文を使用する前にサイト移動しているためDBへ値が更新されない
    header('Location: ../thank.php'); //headerを用いてthank.phpへ移動。
    } else if (isset($_POST['star_2'])) { //同文
    $sql = "UPDATE $class SET count = count + 1 WHERE id = 2";
    $res = $mysqli->query($sql);
    header('Location: ../thank.php');
    } else if (isset($_POST['star_3'])) {
    $sql = "UPDATE $class SET count = count + 1 WHERE id = 3";
    $res = $mysqli->query($sql);
    header('Location: ../thank.php');
    } else if (isset($_POST['star_4'])) {
    $sql = "UPDATE $class SET count = count + 1 WHERE id = 4";
    $res = $mysqli->query($sql);
    header('Location: ../thank.php');
    } else if (isset($_POST['star_5'])) {
    $sql = "UPDATE $class SET count = count + 1 WHERE id = 5";
    $res = $mysqli->query($sql);
    header('Location: class_point\thank.php');
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <body>
            <div class="Class_name"> <!--divのクラスネームがClass_name-->
                <?php echo "$class"; ?> <!--セッションから得た値を表示-->
            </div> 
            <div class="Count">  <!--divのクラスネームがCount-->
                <form action="" method="post">  <!--formアクション-->
                    <input type="submit" name="star_1" value="☆" />  <!--ボタン作成　nameがstar_1になる。-->
                    <input type="submit" name="star_2" value="☆☆" />  <!--以下同文-->
                    <input type="submit" name="star_3" value="☆☆☆" />
                    <input type="submit" name="star_4" value="☆☆☆☆" />
                    <input type="submit" name="star_5" value="☆☆☆☆☆" />
                </form>
            </div>
            
        </body>
    </head>
</html>
