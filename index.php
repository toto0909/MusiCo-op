<!doctype html>
<html lang="ja">
  <head>
    <?php include(dirname(__FILE__).'/include/contents/head.php'); ?>                   <!--Mojuled head/meta-->
    <link rel="stylesheet"  type="text/css" href="/include/css/index.css" />            <!--CSS read-->
    <link rel="stylesheet"  type="text/css" href="/include/css/slick/slick.css" />
    <link rel="stylesheet"  type="text/css" href="/include/css/slick/slick-theme.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!--JavaScript/jQuery read-->
    <script src="/include/js/slick.js"></script>
    <title>MusiCo-op</title>                                                            <!--set tytle for even pages-->
  </head>
  <body>
      <main>
          <!--Mojuled header-->
          <?php include(dirname(__FILE__).'/include/contents/header.php'); ?>
          <!--Mojuled Slyde show -->
          <?php include(dirname(__FILE__).'/include/contents/slyde_show.php'); ?>

          <!-- Youtube動画(スマホだけ) -->
          <div class="container-fluid justify-content-center">
            
            <div class="youtube d-block d-sm-none mb-sm-2">
              <iframe width="480" height="270" src="https://www.youtube-nocookie.com/embed/rNEqrQkzNUs " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="content-head d-block d-sm-none text-right">
              <a href="#">>>演奏動画をもっと見る</a>
            </div>
          </div>

          <!-- コンテンツ -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8 order-sm-last mb-2"> <!--右カラム-->
                <div class="row justify-content-center d-block d-sm-none"> <!--スマホだけバナー出す-->
                  <div class="col-sm-6 mr-0 ml-0">
                    <a href="#"><img src="src/img/request.png" class="mx-auto d-block img-fluid border"></a>
                  </div>
                  <div class="col-sm-6 mr-0 ml-0">
                    <a href="#"><img src="src/img/member.png" class="mx-auto d-block img-fluid border"></a>
                  </div>
                </div>
                <div class="container-fluid content-head"> <!-- 新着メンバー(5人) -->
                  新着メンバー
                  <div class="table-responsive">
                    <table class="table table-condensed table-bordered text-center member_table mb-0 pb-0">
                      <thead>
                          <tr>
                              <th width="20%" height="50%"><a href="#"><img src="src/img/human_sample.jpg" alt="person" class="img-fluid"></a></th>
                              <th width="20%" height="50%"><a href="#"><img src="src/img/human_sample.jpg" alt="person" class="img-fluid"></a></th>
                              <th width="20%" height="50%"><a href="#"><img src="src/img/human_sample.jpg" alt="person" class="img-fluid"></a></th>
                              <th width="20%" height="50%"><a href="#"><img src="src/img/human_sample.jpg" alt="person" class="img-fluid"></a></th>
                              <th width="20%" height="50%"><a href="#"><img src="src/img/human_sample.jpg" alt="person" class="img-fluid"></a></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>sample01</td>
                            <td>sample02</td>
                            <td>sample03</td>
                            <td>sample04</td>
                            <td>sample05</td>
                        </tr>
                          <tr>
                              <td>東京藝術大学</td>
                              <td>東京藝術大学</td>
                              <td>京都市立芸術大学</td>
                              <td>大阪芸術大学</td>
                              <td>国立音楽大学</td>
                          </tr>
                          <tr>
                              <td>4年</td>
                              <td>1年</td>
                              <td>3年</td>
                              <td>2年</td>
                              <td>院1年</td>
                          </tr>
                          <tr>
                              <td>琴</td>
                              <td>ピアノ</td>
                              <td>ピアノ</td>
                              <td>フルート</td>
                              <td>トランペット</td>
                          </tr>
                      </tbody>
                  </table>
                  </div>
                  <div class="content-head text-right pt-2 pr-2">
                    <a href="" class="btn02">メンバー・団体情報をもっと見る</a>
                  </div>
                </div>

              
                <div class="container-fluid content-head"> <!-- 新着情報 -->
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
              </div> 
              <div class="col-sm-4"><!--左カラム-->
                <div class="container"> <!--カレンダー-->
                  <div id="calendar"></div>
                  <script>
                    $(function () {
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
                <!-- Twitter(Mojuled) -->
                <?php include(dirname(__FILE__).'/include/contents/twitter.php'); ?>
              </div>
            </div>
          </div>

          <!--Mojuled SNS share buttons(only top page) -->
          <?php include(dirname(__FILE__).'/include/contents/SNS.php'); ?>
          <!--Mojuled footer-->
          <?php include(dirname(__FILE__).'/include/contents/footer.php'); ?>
      </main>
  </body>
</html>