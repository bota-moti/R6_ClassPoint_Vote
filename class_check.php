<?php
$mysqli = new mysqli('localhost:3305', 'root', '', 'class_point_vote');  //DBとの接続
session_start(); 

if (isset($_SESSION['class'])){
    $class = htmlspecialchars($_SESSION['class']);
} 

if (!empty($_POST)) {  
    if (isset($_POST['star_1'])) {  
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
            <div class="class_name"> 
                <br><br>
            <?php 

                if ($class == 1) {
                    echo '1-1';
                } else if ($class == 2) {
                    echo '1-2';
                } else if ($class == 3) {
                    echo '1-3';
                } else if ($class == 4) {
                    echo '1-4';
                } else if ($class == 5) {
                    echo '2-1';
                } else if ($class == 6) {
                    echo '2-2';
                } else if ($class == 7) {
                    echo '2-3';
                } else if ($class == 8) {
                    echo '2-4';
                } else if ($class == 9) {
                    echo '3-MS';
                } else if ($class == 10) {
                    echo '3-IC';
                } else if ($class == 11) {
                    echo '3-MI';
                } else if ($class == 12) {
                    echo '3-BR';
                } else if ($class == 13) {
                    echo '4-MS';
                } else if ($class == 14) {
                    echo '4-IC';
                } else if ($class == 15) {
                    echo '4-MI';
                } else if ($class == 16) {
                    echo '4-BR';
                } else if ($class == 17) {
                    echo '5-MS';
                } else if ($class == 18) {
                    echo '5-IC';
                } else if ($class == 19) {
                    echo '5-MI';
                } else if ($class == 20) {
                    echo '5-BR';
                } 
                
                

            ?>
            </div> 
            <div class="count">  
                <form action="" method="post">  
                    <input type="submit" name="star_1" value="☆" />  
                    <input type="submit" name="star_2" value="☆☆" />  
                    <input type="submit" name="star_3" value="☆☆☆" />
                    <input type="submit" name="star_4" value="☆☆☆☆" />
                    <input type="submit" name="star_5" value="☆☆☆☆☆" />
                </form>
            </div>  
        </div>
         
    </body>   
</html>
