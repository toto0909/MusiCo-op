<!--プロフィール画像5枚取得・格納-->
<?php
  //DB接続 
  //設定5枚画像をarrayに格納
  //img[0]~img[4]を$分けて格納
  //以下でsrcに代入
  class profile_slyder{
      function get_images(array $images){

      }
  }
?>

<!--スライドショー-->
<div class="container-fluid mb-sm-2 ">
        
        <div class="sliderArea">
          <div class="regular slider">
            <div>
              <a href="#">
              <img
                src="src/img/img_sample01.jpg"
                alt="img01"
              />
              </a>
            </div>
            <div>
              <a href="#">
              <img
                src="src/img/img_sample02.jpg"
                alt="img02"
              />
             </a>
            </div>
            <div>
              <img
                src="src/img/img_sample03.png"
                alt="img03"
              />
            </div>
            <div>
              <img
                src="src/img/img_sample04.png"
                alt="img04"
              />
            </div>
            <div>
              <img
                src="src/img/img_sample05.jpeg"
                alt="img05"
              />
            </div>
          </div>
        </div>
</div>
<script>
    $(document).ready(() =>
    {
        $(".regular").slick({
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        arrows: false,
        accessibility: true,
        adaptiveHeight: true,
        centerMode: true,
        variableWidth: true,
        mobileFirst: false,
        slidesToShow: 1 
        });
    });
</script>

