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
        .img {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <?php
        $person_list = $db->get_personal_list();
        $organization = $db->get_organization();
        $instrumental = $db->get_instrumental();
        $address_ = $db->get_address();
        ?>

        <div class="container">
            <div class="row">
                <?php foreach ($personal_list as $value) : ?>
                    <?php $org = $value['organization_ID'] ?>
                    <?php $adr = $value['address_ID'] ?>
                    <?php $ins = $value['instrumental_ID'] ?>
                    <?php $grd = $functions->get_grade($value['grade']); ?>
                    <div class="col-lg-2 text-center">
                        <img class="img-fluid" src="/src/user/<?php echo $value['img_URL']; ?>" alt="member img" width="140" height="140">
                        <h5><?php echo $value['name']; ?></h5>
                        <h6><?php echo $organization[$org - 1]['org_name']; ?></h6>
                        <h6><?php echo $instrumental[$ins - 1]['ins_name']; ?></h6>
                        <h6><?php echo $address_[$adr - 1]['adr_name']; ?></h6>
                        <p><a class="btn btn-secondary" href="/profile.php?musicoop_ID=<?php echo $value['musicoop_ID']; ?>" role="button">プロフィール&raquo;</a></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>