<?php
//Functions
include(dirname(__FILE__) . '/include/functions.php');
$functions = new Functions();
//DB接続
include(dirname(__FILE__) . '/include/db/db.php');
$db = new DB();
?>

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
        $personal = $db->get_personal();
        $organization = $db->get_organization();
        $instrumental = $db->get_instrumental();

        echo 'personal' . PHP_EOL;
        echo "<pre>";
        var_dump($personal) . PHP_EOL;
        echo "</pre>";

        $members = count($personal); //合計人数の取得
        $rows = floor($members / 6); //行数
        $cols = $members % 6;        //最終行に出力される人数
        echo $members;
        echo $rows;
        echo $cols;
        ?>
        <!--1行$even_rows人ずつだす(<$even_rowsの場合$colsの数だけ出す) -->
        <!-- PC版 -->
        <?php foreach ($personal as $value) : ?>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-2">
                        <?php $org = $value['organization_ID'] ?>
                        <?php $adr = $value['address_ID'] ?>
                        <?php $ins = $value['instrumental_ID'] ?>
                        <img src="/src/user/<?php echo $value['img_URL']; ?>">
                        <!--画像-->
                        <span><?php echo $value['name']; ?></span>
                        <!--名前-->
                        <span><?php echo $organization[$org]; ?></span>
                        <!--組織-->
                        <span><?php echo $functions->get_grade($value['grade']); ?></span>
                        <!--学年-->
                        <span><?php
                                if ($value['sex'] = 0) {
                                    echo '男性';
                                } else {
                                    echo '女性';
                                }
                                ?></span>
                        <!--性別-->
                        <span><?php echo $address_[$adr]; ?></span>
                        <!--住所-->
                        <span><?php echo $instrumental[$ins]; ?></span>
                        <!--楽器-->
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>