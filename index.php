<?php
//Functions
include(dirname(__FILE__) . '/include/functions.php');
$functions = new Functions();
//DB接続
include(dirname(__FILE__) . '/include/db/db.php');
$db = new DB();
$person_list = $db->get_personal_list();
$organization = $db->get_organization();
$instrumental = $db->get_instrumental();
?>
<!doctype html>
<html lang="ja">

<head>
  <?php include(dirname(__FILE__) . '/include/head.php'); ?>
  <!--Mojuled head/meta-->
  <link rel="stylesheet" type="text/css" href="/css/index.css" />
  <!--CSS read-->
  <link rel="stylesheet" type="text/css" href="/css/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!--JavaScript/jQuery read-->
  <script src="/js/slick.js"></script>
  <title>MusiCo-op</title>
  <!--set tytle for even pages-->
</head>

<body>
  <!--Mojuled header-->
  <?php include(dirname(__FILE__) . '/include/header.php'); ?>
  <main>
    <!--Mojuled Slyde show -->
    <?php include(dirname(__FILE__) . '/include/slyde_show.php'); ?>

    <!-- コンテンツ -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 order-sm-last mb-2">
          <!--Right/Topカラム-->
          <!-- 新着メンバー(5人) -->
          <div class="container-fluid content-head">
            新着メンバー
            <?php 
                $person_5 = array_slice($person_list, -5);
                $person_5 = array_reverse($person_5);
            ?>
            <div class="table-responsive">
              <table class="table table-condensed table-bordered text-center member_table mb-0 pb-0">
              <thead>
                  <tr>
                    <th width="20%" height="50%"><a href="/profile.php?musicoop_ID=<?php echo $person_5[0]['musicoop_ID']; ?>"><img src="/src/user/<?php echo $person_5[0]['img_URL']; ?>" alt="person1" class="img-fluid"></a></th>
                    <th width="20%" height="50%"><a href="/profile.php?musicoop_ID=<?php echo $person_5[1]['musicoop_ID']; ?>"><img src="/src/user/<?php echo $person_5[1]['img_URL']; ?>" alt="person2" class="img-fluid"></a></th>
                    <th width="20%" height="50%"><a href="/profile.php?musicoop_ID=<?php echo $person_5[2]['musicoop_ID']; ?>"><img src="/src/user/<?php echo $person_5[2]['img_URL']; ?>" alt="person3" class="img-fluid"></a></th>
                    <th width="20%" height="50%"><a href="/profile.php?musicoop_ID=<?php echo $person_5[3]['musicoop_ID']; ?>"><img src="/src/user/<?php echo $person_5[3]['img_URL']; ?>" alt="person4" class="img-fluid"></a></th>
                    <th width="20%" height="50%"><a href="/profile.php?musicoop_ID=<?php echo $person_5[4]['musicoop_ID']; ?>"><img src="/src/user/<?php echo $person_5[4]['img_URL']; ?>" alt="person5" class="img-fluid"></a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/profile.php?musicoop_ID=<?php echo $person_5[0]['musicoop_ID']; ?>"><?php echo $person_5[0]['name']; ?></a></td>
                    <td><a href="/profile.php?musicoop_ID=<?php echo $person_5[1]['musicoop_ID']; ?>"><?php echo $person_5[1]['name']; ?></a></td>
                    <td><a href="/profile.php?musicoop_ID=<?php echo $person_5[2]['musicoop_ID']; ?>"><?php echo $person_5[2]['name']; ?></a></td>
                    <td><a href="/profile.php?musicoop_ID=<?php echo $person_5[3]['musicoop_ID']; ?>"><?php echo $person_5[3]['name']; ?></a></td>
                    <td><a href="/profile.php?musicoop_ID=<?php echo $person_5[4]['musicoop_ID']; ?>"><?php echo $person_5[4]['name']; ?></a></td>
                  </tr>
                  <tr>
                    <td><?php echo $organization[$person_5[0]['organization_ID']-1]['org_name']; ?></td>
                    <td><?php echo $organization[$person_5[1]['organization_ID']-1]['org_name']; ?></td>
                    <td><?php echo $organization[$person_5[2]['organization_ID']-1]['org_name']; ?></td>
                    <td><?php echo $organization[$person_5[3]['organization_ID']-1]['org_name']; ?></td>
                    <td><?php echo $organization[$person_5[4]['organization_ID']-1]['org_name']; ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $functions->get_grade($person_5[0]['grade']); ?></td>
                    <td><?php echo $functions->get_grade($person_5[1]['grade']); ?></td>
                    <td><?php echo $functions->get_grade($person_5[2]['grade']); ?></td>
                    <td><?php echo $functions->get_grade($person_5[3]['grade']); ?></td>
                    <td><?php echo $functions->get_grade($person_5[4]['grade']); ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $instrumental[$person_5[0]['instrumental_ID']-1]['ins_name']; ?></td>
                    <td><?php echo $instrumental[$person_5[1]['instrumental_ID']-1]['ins_name']; ?></td>
                    <td><?php echo $instrumental[$person_5[2]['instrumental_ID']-1]['ins_name']; ?></td>
                    <td><?php echo $instrumental[$person_5[3]['instrumental_ID']-1]['ins_name']; ?></td>
                    <td><?php echo $instrumental[$person_5[4]['instrumental_ID']-1]['ins_name']; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="content-head text-right pt-2 pr-2">
              <a href="/member.php" class="btn02">メンバー・団体情報をもっと見る</a>
            </div>
          </div>

          <!-- 新着情報 -->
          <div class="container-fluid content-head">
            新着情報
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
            <div class="content-head text-right pt-2 pr-2">
              <a href="" class="btn02">新着情報をもっと見る</a>
            </div>
          </div>
          <!--広告(SP)-->
          <div class="row justify-content-center text-center d-block d-sm-none">
            <img src="src/img/Google_320_100.png" alt="google adsense" class="img-fluid">
            <img src="src/img/Google_320_50.png" alt="google adsense" class="img-fluid">
          </div>
          <!--広告(PC)-->
          <div class="row justify-content-center text-center d-none d-sm-block">
            <img src="src/img/Google_728_90.png" alt="google adsense" class="img-fluid">
          </div>
        </div>

        <div class="col-sm-4">
          <!--左カラム-->
          <div class="container">
            <!--カレンダー-->
            <div id="calendar"></div>
            <script>
              $(function() {
                $("#calendar").fullCalendar();
              });
            </script>
          </div>
          <!-- Youtube動画(PCだけ) -->
          <div class="container-fluid justify-content-center">
            <div class="youtube d-sm-block d-none mb-sm-3">
              <iframe width="480" height="270" src="https://www.youtube-nocookie.com/embed/rNEqrQkzNUs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <!-- Youtube動画(スマホだけ) -->
          <div class="container-fluid justify-content-center">

            <div class="youtube d-block d-sm-none mb-sm-2">
              <iframe width="480" height="270" src="https://www.youtube-nocookie.com/embed/rNEqrQkzNUs " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="content-head d-block d-sm-none text-right">
              <a href="#">>>演奏動画をもっと見る</a>
            </div>
          </div>
          <!-- Twitter(Mojuled) -->
          <?php include(dirname(__FILE__) . '/include/twitter.php'); ?>
          <!--広告(SP)-->
          <div class="row justify-content-center d-block d-sm-none">
            <img src="src/img/Google_320_100.png" alt="google adsense">
          </div>
          <!--広告(PC)-->
          <div class="row justify-content-center d-none d-sm-block">
            <img src="src/img/Google_300_200.png" alt="google adsense">
          </div>
        </div>
      </div>
    </div>
    <!--Mojuled SNS share buttons(only top page) -->
    <?php include(dirname(__FILE__) . '/include/SNS.php'); ?>
  </main>
  <!--Mojuled footer-->
  <?php include(dirname(__FILE__) . '/include/footer.php'); ?>
</body>

</html>