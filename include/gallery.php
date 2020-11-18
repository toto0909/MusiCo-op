<!-- 画像5枚のギャラリー(レスポンシブ)作成-->
<?php
    //画像5枚とってくる img01~05へ
?>

<div id="gallery">
    <img alt="img01" src="src/img/sea.jpg">
    <img alt="img02" src="src/img/sky.jpg">
    <img alt="img03" src="src/img/sunset.jpg">
    <img alt="img04" src="src/img/flower.jpg">
    <img alt="img05" src="src/img/penguin.jpg">
</div>
<script type="text/javascript">
// テーマをロード
Galleria.loadTheme( '../js/classic/galleria.classic.js');

// オプション
option = {
    width:  600,              // 幅
    height: 427,              // 高さ
    imageCrop: false,          // 画像のクロップ有無
    // true：width/heightにフィットさせるように画像を切り取って表示
    // false：画像を全体表示させるように縮小
    transition: 'fade',       // 画像の遷移エフェクト
    _toggleInfo: true,       // imgのalt属性を取得してキャプションとして表示
    // true：キャプションの非表示 
    // false：キャプションの表示
    autoplay: 1500,
}

// ギャラリー作成
Galleria.run( '#gallery', option);
</script>
