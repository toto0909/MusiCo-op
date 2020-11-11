<!doctype html>
<html lang="ja">

<head>
    <?php include(dirname(__FILE__) . '/include/head.php'); ?>
    <!--Mojuled head/meta-->
    <link rel="stylesheet" type="text/css" href="/css/member.css" />
    <!--CSS read-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--JavaScript/jQuery read-->
    <title>メンバー・団体情報 Member</title>
    <!--set tytle for even pages-->
    <style>

    </style>
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <?php
        //DB接続
        include(dirname(__FILE__) . '/include/db/db.php');
        $db = new DB();
        $personal = $db->get_personal();

        echo 'personal' . PHP_EOL;
        echo "<pre>";
        var_dump($personal) . PHP_EOL;
        echo "</pre>";
        ?>

    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>