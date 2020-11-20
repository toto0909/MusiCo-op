<?PHP 
// ini_set( "display_errors", On );
// error_reporting( E_ALL );
?>

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
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <!--写真+名前-->
        <div class="container text-center">
            <div class="">
                <img class="img-fluid mx-auto d-block" src="/src/user/<?php echo $person_data['img_URL']; ?>" alt="member img" width="200" height="200"><br>
                <h3><?php echo $person_data['name']; ?></h3><br>
            </div>
        </div>
        <!--ギャラリー(jQuery) PC-->
        <div class="container text-center pt-5 pb-5 d-sm-block d-none">
            <div class="row">
            <?php for($i = 1; $i <= 4; $i++){?>
                <div class="col-sm-3">
                <img class="img-fluid" src="/src/user/<?php echo $functions->get_images($person_data["name_E"],$person_data["birthday"]); ?>/<?php echo "img0".$i.".jpg"?>"
                alt="member img" width="160" height="160">
                </div>
            <?php }?>
            </div>
        </div>
        <!--ギャラリー(jQuery) SP-->
        <div class="container text-center pt-2 pb-2 d-block d-sm-none">
            <div class="container-fluid content-head">
                <div class="table-responsive">
                <table class="table table-condensed text-center">
                    <thead>
                    <tr>
                    <?php for($i = 1; $i <= 4; $i++){?>
                        <th width="20%" height="50%"><img src="/src/user/<?php echo $functions->get_images($person_data["name_E"],$person_data["birthday"]); ?>/<?php echo "img0".$i.".jpg"?>" alt="img" class="img-fluid"></th>
                    <?php }?>
                    </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>

        <!--コンテンツ-->
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-sm-4 pl-2"> 
                    <h6>所属　<?php echo $organization[$org - 1]['org_name']; ?></h6>
                    <h6>学年　<?php echo $functions->get_grade($person_data['grade']);?></h6>
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