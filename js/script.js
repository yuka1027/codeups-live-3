
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $(".js-hamburger").click(function () {
    if($(".js-hamburger").hasClass('is-active')) {
      $(".js-hamburger").removeClass("is-active");
      // $("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeOut(300);
    } else {
      $(".js-hamburger").addClass("is-active");
      // $("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeIn(300);
    }
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  // Swiper
  var swiper = new Swiper(".js-works-swiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".js-works-pagination",
      clickable: true,
    },
  });

  // headerスクロールで色が変わる
  function FixedAnime() {
    // メインビューの高さを取得
    var height = Math.round($('.js-news').offset().top);
    var scroll = $(window).scrollTop();
    if (scroll >= height){//news-sectionまで来たら
          $('.js-header').addClass('change');//js-headerについているchangeというクラス名を付与
    }else{
          $('.js-header').removeClass('change');//changeというクラス名を除去
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    FixedAnime();//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    FixedAnime();//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
  });

});
