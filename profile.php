<?PHP
// ini_set( "display_errors", On );
// error_reporting( E_ALL );
//写真拡大jQuery実装
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
$SNS = $db->get_SNS();
//個人データ取得
$person_data = $db->get_personal_by_id($musicoop_id); //個人のpersonal行取得
$org = $person_data['organization_ID'];
$adr = $person_data['address_ID'];
$ins = $person_data['instrumental_ID'];
$grd = $functions->get_grade($person_data['grade']);
$sns = $person_data['SNS_ID'];
?>

<!doctype html>
<html lang="ja">

<head>
    <!--Mojuled head/meta-->
    <link rel="stylesheet" type="text/css" href="/css/profile.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <!--CSS read-->
    
    <title><?php echo $person_data['name']; ?></title>
    <!--PHPでユーザー名代入=ページタイトル-->
    <!--set tytle for even pages-->
    <?php include(dirname(__FILE__) . '/include/head.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <!--写真+名前-->
        <div class="container text-center">
            <div class="">
            <a href="/src/user/<?php echo $person_data['img_URL']; ?>" data-lightbox="group"><img class="img-fluid mx-auto d-block" src="/src/user/<?php echo $person_data['img_URL']; ?>" alt="member-image" width="240" height="240"></a><br>
                <h3><?php echo $person_data['name']; ?></h3><br>
            </div>
        </div>
        <!--ギャラリー(jQuery) PC--> 
        <div class="container text-center pt-5 pb-5 d-sm-block d-none">
            <div class="row">
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <div class="col-sm-3">
                        <a href="/src/user/<?php echo $functions->get_images($person_data["name_E"], $person_data["birthday"]); ?>/<?php echo "img0" . $i . ".jpg" ?>" data-lightbox="group">
                            <img class="img-fluid" src="/src/user/<?php echo $functions->get_images($person_data["name_E"], $person_data["birthday"]); ?>/<?php echo "img0" . $i . ".jpg" ?>" alt="img" width="200" height="200">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--ギャラリー(jQuery) SP-->
        <div class="container text-center pt-2 pb-2 d-block d-sm-none">
            <div class="container-fluid content-head">
                <div class="table-responsive">
                    <table class="table table-condensed text-center">
                        <thead>
                            <tr>
                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <th width="20%" height="50%">
                                        <a href="/src/user/<?php echo $functions->get_images($person_data["name_E"], $person_data["birthday"]); ?>/<?php echo "img0" . $i . ".jpg" ?>" data-lightbox="group"><img src="/src/user/<?php echo $functions->get_images($person_data["name_E"], $person_data["birthday"]); ?>/<?php echo "img0" . $i . ".jpg" ?>" alt="img" class="img-fluid">
                                        </a>
                                    </th>
                                <?php } ?>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--コンテンツ-->
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-sm-4 pl-2"> <!-- PC-left SP-top -->
                    <!--profile-->
                    <h6>所属　<?php echo $organization[$org - 1]['org_name']; ?></h6>
                    <h6>学年　<?php echo $functions->get_grade($person_data['grade']); ?></h6>
                    <h6>楽器　<?php echo $instrumental[$ins - 1]['ins_name']; ?></h6>
                    <h6>在住　<?php echo $address_[$adr - 1]['adr_name']; ?></h6>
                    <h6>生年月日　<?php echo $functions->get_birthday($person_data['birthday']); ?></h6>
                    <p><?php echo $person_data["profile"] ?></p>
                    <!--twitter 個々のDBからtwitter_URLを取得 twitterをやっていなければ非表示-->
                    <div class="container-fluid">
                    <a class="twitter-timeline" 
                    data-width="650" 
                    data-height="300" 
                    data-theme="light" 
                    href="<?php echo $SNS[$sns-1]['twitter_URL']?>">
                    <?php if($SNS[$sns-1]['twitter_URL'] != NULL)
                    {
                        echo $person_data['name_E'];
                    }else{
                        echo '表示するtweetはありません';
                    }
                    ?>
                    </a> 
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-sm-8"> <!-- PC-right SP-bottom -->
                    <p>新着情報</p>
                    <?php // var_dump($person_data) 
                    ?>
                    <?php // print($functions->get_images($person_data["name_E"],$person_data["birthday"]))
                    ?>
                    <?php // echo $functions->get_birthday($person_data['birthday']) 
                    ?>
                </div>
            </div>
        </div>


    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>