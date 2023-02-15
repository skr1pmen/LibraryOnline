<?php
session_start()
?>

<!DOCTYPE html>
<html lang="ru-ru">
<head>
    <meta charset="UTF-8">
    <title>Library Online</title>
    <link rel="stylesheet" href="./styles/style.css">
    <?php
        if($_SESSION['mc'] === true){
            echo '<link rel="stylesheet" href="../styles/mc.css">';
        }else{
            echo '<link rel="stylesheet" href="../styles/fonts.css">';
        }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container">
            <a href="#" class="logo head"><span class="logo_text">Library Online</span></a>
            <nav>
                <a class="head btn" href="#">Home</a>
                <a class="head btn" href="#">Books</a>
                <a class="head btn" href="#">Authors</a>
            </nav>
            <?php
                if(empty($_SESSION['user'])){
                    echo '<a class="head last_btn" href="./pages/login.php"><i class="fas fa-sign-in-alt"></i></a>';
                } else{
            ?>
            <a class="head last_btn" href="./pages/profile.php"><img class="ava_head" src="data:image/jpeg;base64, <?php echo base64_encode($_SESSION['user']['avatar']) ?>" alt="avatar"></a>
            <?php
                }
            ?>
        </div>
    </header>
    <div class="welcome_block">
        <h1>Library Online</h1>
        <span>By the way, it's the largest on the <i>localhost</i> domain!</span>
        <a href="./pages/login.php">Get started!</a>
    </div>
    <style>
        .ava_head{
            height: 48px;
            width: 48px;
            border-radius: 50%;
            margin: 1px 0 0 1px;
        }
    </style>
</body>
</html>