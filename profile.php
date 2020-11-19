<?php
//Functions
include(dirname(__FILE__) . '/include/functions.php');
$functions = new Functions();
//DB接続
include(dirname(__FILE__) . '/include/db/db.php');
$db = new DB();
$musicoop_id = $_GET['musicoop_ID']; //member.phpから_POSTされた情報
$person_data = $db->get_personal_by_id($musicoop_id); //個人のpersonal行取得

$organization = $db->get_organization();
$instrumental = $db->get_instrumental();
$address_ = $db->get_address();
?>

<!doctype html>
<html lang="ja">

<head>
    <?php include(dirname(__FILE__) . '/include/head.php'); ?>
    <!--Mojuled head/meta-->
    <link rel="stylesheet" type="text/css" href="/css/profile.css" />
    <!--CSS read-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/galleria.min.js"></script>
    <!--JavaScript/jQuery read-->
    <title>プロフィール 〇〇</title>  <!--PHPでユーザー名代入-->
    <!--set tytle for even pages-->
    <style>
        .top{
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <!--PC版-->
        <?php var_dump($person_data)?>

        <div class="container-fluid pt-4">
            <div class="row">
                <div class="col-md-2 offset-md-5">
                    <img src="src/user/yuki_takeda.jpeg" alt="person" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center pt-4 pb-4">
                    <h3>名前</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 pl-2"> 
                    <p>プロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィール</p>
                </div>
                <div class="col-sm-8">
                    <p>新着情報</p>
                </div>
            </div>
        </div>
        
        
    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>