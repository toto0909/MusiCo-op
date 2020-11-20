<?php
//Functions
include(dirname(__FILE__) . '/include/functions.php');
$functions = new Functions();
//DB接続
include(dirname(__FILE__) . '/include/db/db.php');
$db = new DB();
$musicoop_id = $_GET['musicoop_ID']; //member.phpから_POSTされた情報
$organization = $db->get_organization();
$instrumental = $db->get_instrumental();
$address_ = $db->get_address();
//個人データ取得
$person_data = $db->get_personal_by_id($musicoop_id); //個人のpersonal行取得
$org = $person_data['organization_ID'];
$adr = $person_data['address_ID'];
$ins = $person_data['instrumental_ID'];
$grd = $functions->get_grade($person_data['grade']);
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
    <title><?php echo $person_data['name']; ?></title>  <!--PHPでユーザー名代入=ページタイトル-->
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
        <!--写真+名前-->
        <div class="col-lg-2 text-center">
            <img class="img-fluid" src="/src/user/<?php echo $value['img_URL']; ?>" alt="member img" width="200" height="200">
            <h3><?php echo $person_data['name']; ?></h3>
        </div>
        <!--ギャラリー(jQuery)-->
        <div class="container text-center">
            <div class="row">
            <?php for($i = 1; $i <= 5; $i++){?>
                <img class="img-fluid" src="/src/user/<?php echo $functions->get_images($person_data["name_E"],$person_data["birthday"]); ?>/<?php echo "img0".$i.".jpg"?>"
                alt="member img" width="80" height="80">
            <?php }?>
            </div>
        </div>
        <!--コンテンツ-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 pl-2"> 
                    <h6>所属　<?php echo $organization[$org - 1]['org_name']; ?></h6>
                    <h6>楽器　<?php echo $instrumental[$ins - 1]['ins_name']; ?></h6>
                    <h6>在住　<?php echo $address_[$adr - 1]['adr_name']; ?></h6>
                    <h6>生年月日　<?php echo $functions->get_birthday($person_data['birthday']); ?></h6>
                    <p><?php echo $person_data["profile"]?></p>
                </div>
                <div class="col-sm-8">
                    <p>新着情報</p>
                    <?php var_dump($person_data) ?>
                    <?php print($functions->get_images($person_data["name_E"],$person_data["birthday"]))?>
                    <?php echo $functions->get_birthday($person_data['birthday']) ?>
                </div>
            </div>
        </div>
        
        
    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>