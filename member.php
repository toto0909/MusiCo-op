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
        .card {
            color: #000;
        }

        .menu {
            position: sticky;
            top: 0;
        }
        .img{
            object-fit: cover;
        }
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
        $address_ = $db->get_address();
        ?>
        <!--1行$even_rows人ずつだす(<$even_rowsの場合$colsの数だけ出す 出す順番はランダム) -->
        <!-- PC版 -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <div class="menu">
                        <p>メニューバー</p>
                        <p>検索窓</p>
                        <p>大学検索</p>
                        <p>学年検索</p>
                        <p>性別検索</p>
                        <p>楽器検索</p>
                        <p>住所検索</p>
                        <p>検索ボタン</p>
                    </div>
                </div>
                <div class="col-sm-10 overflow-auto">
                    <div class="row">
                        <?php foreach ($personal as $value) : ?>
                            <?php $org = $value['organization_ID'] ?>
                            <?php $adr = $value['address_ID'] ?>
                            <?php $ins = $value['instrumental_ID'] ?>
                            <?php $grd = $functions->get_grade($value['grade']); ?>
                            <div class="col-sm-3 col-md-2 pt-3 pl-0 pr-2">
                                <a href="#">
                                    <div class="card text-center">
                                        <img class="card-img-top img-fluid" src="/src/user/<?php echo $value['img_URL']; ?>" alt="person">
                                        <div class="card-body">
                                            <h5 class="card-title pb-1"><?php echo $value['name']; ?></h5>
                                            <h6 class="card-subtitle text-muted pb-1"><?php echo $organization[$org - 1]['org_name']; ?></h6>
                                            <h6 class="card-subtitle text-muted pb-1"><?php echo $grd ?></h6>
                                            <h6 class="card-subtitle text-muted pb-1"><?php echo $instrumental[$ins - 1]['ins_name']; ?></h6>
                                            <h6 class="card-subtitle text-muted pb-1"><?php echo $address_[$adr - 1]['adr_name']; ?></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- SP版 -->
        <div class="container mb-2 mt-2">
            <div class="members">
                <?php foreach ($personal as $value) : ?>
                    <?php $org = $value['organization_ID'] ?>
                    <?php $adr = $value['address_ID'] ?>
                    <?php $ins = $value['instrumental_ID'] ?>
                    <?php $grd = $functions->get_grade($value['grade']); ?>
                    <div class="row">
                        <div class="col-xs-4 ml-2">
                            <a href="#"><img src="/src/user/<?php echo $value['img_URL']; ?>" alt="person" width="100" height="100" class="img-fluid"></a>
                        </div>
                        <div class="col-xs-8 ml-2 mx-auto">
                            <div class="container text-center"><?php echo $value['name']; ?></div>
                            <div class="table-responsive overflow-auto text-center">
                                <table class="table table-condensed member_table mb-0 pb-0 height=100">
                                    <tbody>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php echo $value['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php echo $organization[$org - 1]['org_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php echo $grd ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php echo $address_[$adr - 1]['adr_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php
                                                                    if ($value['sex'] == 0) {
                                                                        echo '男性';
                                                                    } else {
                                                                        echo '女性';
                                                                    }
                                                                    ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-0 pb-0"><?php echo $instrumental[$ins - 1]['ins_name']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>