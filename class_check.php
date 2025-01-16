<?php
$mysqli = new mysqli('localhost:3305', 'root', '', 'class_point_vote');  //DBとの接続
session_start(); 

if (isset($_SESSION['class'])){
    $class = htmlspecialchars($_SESSION['class']);
} 

if (!empty($_POST)) {  //条件式によって中身が入力されているか確認している。
    if (isset($_POST['star_1'])) {  //☆１を押された時のif文
        $stmt = $mysqli->prepare("INSERT INTO ratings (class_id, rating) VALUES (?, ?)");
        $rating = 1;
        $stmt->bind_param("si", $class, $rating);
        if (!$stmt->execute()) {
            $stmt->error;
        }
        $stmt->close();
        header('Location: ./thank.php'); 

    } else if (isset($_POST['star_2'])) { 
        $stmt = $mysqli->prepare("INSERT INTO ratings (class_id, rating) VALUES (?, ?)");
        $rating = 2;
        $stmt->bind_param("si", $class, $rating);
        if (!$stmt->execute()) {
        $stmt->error;
        }
        $stmt->close();
        header('Location: ./thank.php'); 
    } else if (isset($_POST['star_3'])) {
        $stmt = $mysqli->prepare("INSERT INTO ratings (class_id, rating) VALUES (?, ?)");
        $rating = 3;
        $stmt->bind_param("si", $class, $rating);
        if (!$stmt->execute()) {
        $stmt->error;
        }
        $stmt->close();
        header('Location: ./thank.php'); 
    } else if (isset($_POST['star_4'])) {
        $stmt = $mysqli->prepare("INSERT INTO ratings (class_id, rating) VALUES (?, ?)");
        $rating = 4;
        $stmt->bind_param("si", $class, $rating);
        if (!$stmt->execute()) {
        $stmt->error;
        }
        $stmt->close();
        header('Location: ./thank.php'); 
    } else if (isset($_POST['star_5'])) {
        $stmt = $mysqli->prepare("INSERT INTO ratings (class_id, rating) VALUES (?, ?)");
        $rating = 5;
        $stmt->bind_param("si", $class, $rating);
        if (!$stmt->execute()) {
        $stmt->error;
        }
        $stmt->close();
        header('Location: ./thank.php'); 
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buttons with Transparent Background</title>
        <link rel="stylesheet" href="./css/style_class_check.css">
    </head>
    <body>
        <div class="background-container">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="class_name"> <!--divのクラスネームがClass_name-->
            <?php echo "$class"; ?> <!--セッションから得た値を表示-->
            </div> 
            <div class="count">  <!--divのクラスネームがCount-->
                <form action="" method="post">  <!--formアクション-->
                    <input type="submit" name="star_1" value="☆" />  <!--ボタン作成　nameがstar_1になる。-->
                    <input type="submit" name="star_2" value="☆☆" />  <!--以下同文-->
                    <input type="submit" name="star_3" value="☆☆☆" />
                    <input type="submit" name="star_4" value="☆☆☆☆" />
                    <input type="submit" name="star_5" value="☆☆☆☆☆" />
                </form>
            </div>  
        </div>
         
    </body>   
</html>
