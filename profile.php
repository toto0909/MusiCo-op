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
$JOB = $db->get_job();
//個人データ取得
$person_data = $db->get_personal_by_id($musicoop_id); //個人のpersonal行取得
$job_id = $person_data['job_ID']; //仕事情報取得
$job = $db->get_job_by_id($job_id);
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
    <style>
        .facebook {
            font-size: 2.2em;
            color: #1877f2;
        }

        .facebook_off {
            font-size: 2.2em;
            color: #555555;
        }

        .twitter {
            font-size: 2.2em;
            color: #1DA1F2;
        }

        .twitter_off {
            font-size: 2.2em;
            color: #555555;
        }

        .instagram {
            font-size: 2.2em;
            color: #CF2E92;
        }

        .instagram_off {
            font-size: 2.2em;
            color: #555555;
        }

        .home {
            font-size: 2.2em;
            color: #fff;
        }

        .home_off {
            font-size: 2.2em;
            color: #555555;
        }

        .youtube_on {
            font-size: 2.2em;
            color: #DA1725;
        }

        .youtube_off {
            font-size: 2.2em;
            color: #555555;
        }
    </style>
</head>

<body>
    <!--Mojuled header-->
    <?php include(dirname(__FILE__) . '/include/header.php'); ?>
    <main>
        <!--写真+名前-->
        <div class="container text-center" style="color: white;">
            <div class="">
                <a href="/src/user/<?php echo $person_data['img_URL']; ?>" data-lightbox="group"><img class="img-fluid mx-auto d-block" src="/src/user/<?php echo $person_data['img_URL']; ?>" alt="member-image" width="240" height="240"></a><br>
                <h3><?php echo $person_data['name']; ?></h3><br>
                <!-- SNSアイコン(NULLなら灰色) -->
                <div class="">
                    <a href="<?php echo $SNS[$sns - 1]['facebook_URL'] ?>"><i class="fab fa-facebook-square mr-2 ml-2 mb-2 <?php if ($SNS[$sns - 1]['facebook_URL'] != NULL) {
                                                                                                                                echo "facebook";
                                                                                                                            } else {
                                                                                                                                echo "facebook_off";
                                                                                                                            } ?>"></i></a>
                    <a href="<?php echo $SNS[$sns - 1]['twitter_URL'] ?>"><i class="fab fa-twitter-square mr-2 ml-2 mb-2 <?php if ($SNS[$sns - 1]['twitter_URL'] != NULL) {
                                                                                                                                echo "twitter";
                                                                                                                            } else {
                                                                                                                                echo "twitter_off";
                                                                                                                            } ?>"></i></a>
                    <a href="<?php echo $SNS[$sns - 1]['instagram_URL'] ?>"><i class="fab fa-instagram mr-2 ml-2 mb-2 <?php if ($SNS[$sns - 1]['instagram_URL'] != NULL) {
                                                                                                                            echo "instagram";
                                                                                                                        } else {
                                                                                                                            echo "instagram_off";
                                                                                                                        } ?>"></i></a>
                    <a href="<?php echo $SNS[$sns - 1]['youtube_URL'] ?>"><i class="fab fa-youtube-square mr-2 ml-2 mb-2 <?php if ($SNS[$sns - 1]['youtube_URL'] != NULL) {
                                                                                                                                echo "youtube_on";
                                                                                                                            } else {
                                                                                                                                echo "youtube_off";
                                                                                                                            } ?>"></i>
                        <a href="<?php echo $SNS[$sns - 1]['hp_URL'] ?>"><i class="fas fa-home mr-2 ml-2 mb-2 <?php if ($SNS[$sns - 1]['hp_URL'] != NULL) {
                                                                                                                    echo "home";
                                                                                                                } else {
                                                                                                                    echo "home_off";
                                                                                                                } ?>"></i></a>
                </div>
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
        <div class="container-fluid" style="color: white;">
            <div class="row text-center">
                <div class="col-sm-4 pl-2 border-bottom mb-3">
                    <!-- PC-left SP-top -->
                    <!--profile-->

                    <table style="border:none;" class="mx-auto text-left">
                        <tbody style="border:none;">
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-graduation-cap"></i> 所属</td>
                                <td style="border:none;" width="180" class="mx-auto text-center"><?php echo $organization[$org - 1]['org_name']; ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-user"></i> 学年</td>
                                <td style="border:none;" width="180" class="mx-auto text-center"><?php echo $functions->get_grade($person_data['grade']); ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-music"></i> 楽器</td>
                                <td style="border:none;" width="180" class="mx-auto text-center"><?php echo $instrumental[$ins - 1]['ins_name']; ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-map-marker-alt"></i> 在住</td>
                                <td style="border:none;" width="180" class="mx-auto text-center"><?php echo $address_[$adr - 1]['adr_name']; ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-birthday-cake"></i> 生年月日</td>
                                <td style="border:none;" width="180" class="mx-auto text-center"><?php echo $functions->get_birthday($person_data['birthday']); ?></td>
                            </tr>
                        </tbody>
                    </table><br>
                    <p><?php echo $person_data["profile"] ?></p><br>

                    <!-- 公演・指導情報 -->
                    <?php
                    if ($job['can_performance'] == 1) {
                        $perform = "○ ";
                    } else {
                        $perform = "× ";
                    }
                    if ($job['can_teach'] == 1) {
                        $teach = "○ ";
                    } else {
                        $teach = "× ";
                    }
                    if ($job['can_performance'] != 0) {
                        $perform_fee = $job['performance_fee'] . "円~";
                    } else {
                        $perform_fee = "";
                    }
                    if ($job['can_teach'] != 0) {
                        $teach_fee = $job['teach_fee'] . "円~";
                    } else {
                        $teach_fee = "";
                    }
                    $area_1 = $address_[$job['area_1'] - 1]['adr_name'];
                    $area_2 = $address_[$job['area_2'] - 1]['adr_name'];
                    $area_3 = $address_[$job['area_3'] - 1]['adr_name'];
                    $area_4 = $address_[$job['area_4'] - 1]['adr_name'];
                    $area_5 = $address_[$job['area_5'] - 1]['adr_name'];
                    ?>
                    <table style="border:none;" class="mx-auto text-left">
                        <tbody style="border:none;">
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-user-check"></i> 演奏依頼</td>
                                <td style="border:none;" width="280" class="mx-auto text-center"><?php echo $perform . " " . $perform_fee ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-chalkboard-teacher"></i> 指導依頼</td>
                                <td style="border:none;" width="280" class="mx-auto text-center"><?php echo $teach . " " . $teach_fee ?></td>
                            </tr>
                            <tr style="border:none;">
                                <td style="border:none;" width="100" class="mx-auto text-left"><i class="fas fa-map-marked-alt"></i> 出張地域</td>
                                <td style="border:none;" width="280" class="mx-auto text-center"><?php echo $area_1 . " " . $area_2 . " " . $area_3 . " " . $area_4 . " " . $area_5 ?></td>
                            </tr>
                        </tbody>
                    </table><br>
                    <p><?php echo $job['comment'] ?></p><br>

                    <!--twitter(PC) 個々のDBからtwitter_URLを取得 twitterをやっていなければ非表示-->
                    <div class="container-fluid d-sm-block d-none">
                        <a class="twitter-timeline" data-width="650" data-height="300" data-theme="light" href="<?php echo $SNS[$sns - 1]['twitter_URL'] ?>">
                            <?php if ($SNS[$sns - 1]['twitter_URL'] != NULL) {
                                echo $person_data['name_E'];
                            } else {
                                echo '表示するtweetはありません';
                            }
                            ?>
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>


                </div>
                <div class="col-sm-8">
                    <!-- PC-right SP-bottom -->
                    <h6>イベント情報</h6>
                    <div class="container-fluid content-head mb-3">
                        <div class="table-responsive overflow-auto">
                            <table class="table table-condensed  member_table mb-0 pb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/event.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/event.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/event.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/event.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/event.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                    <h6>新着情報</h6>

                    <div class="container-fluid content-head mb-3">
                        <div class="table-responsive overflow-auto">
                            <table class="table table-condensed  member_table mb-0 pb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/news.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/news.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/news.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/news.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center info_date">2020.12.1</td>
                                        <td class="text-center"><img src="src/img/news.png"></td>
                                        <td><a href="#">【投稿者氏名】見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--twitter(SP) 個々のDBからtwitter_URLを取得 twitterをやっていなければ非表示-->
                    <div class="container-fluid d-block d-sm-none">
                        <a class="twitter-timeline" data-width="650" data-height="300" data-theme="light" href="<?php echo $SNS[$sns - 1]['twitter_URL'] ?>">
                            <?php if ($SNS[$sns - 1]['twitter_URL'] != NULL) {
                                echo $person_data['name_E'];
                            } else {
                                echo '表示するtweetはありません';
                            }
                            ?>
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>


    </main>
    <!--Mojuled footer-->
    <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>