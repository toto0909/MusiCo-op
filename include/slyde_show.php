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
            <div>
              <img
                src="src/img/img_sample06.jpeg"
                alt="img06"
              />
            </div>
            <div>
              <img
                src="src/img/img_sample07.jpg"
                alt="img07"
              />
            </div>
            <div>
              <img
                src="src/img/img_sample08.jpeg"
                alt="img08"
              />
            </div>
          </div>
        </div>
        <div class="content-head d-block d-sm-none text-right">
          <a href="#">>>イベント情報をもっと見る</a>
        </div>
</div>
<script>
    $(document).ready(() =>
    {
        $(".regular").slick({
        autoplay: true,
        autoplaySpeed: 1500,
        dots: true,
        arrows: false,
        accessibility: true,
        adaptiveHeight: true,
        centerMode: true,
        variableWidth: true,
        mobileFirst: true,
        slidesToShow: 1 
        });
    });
</script>