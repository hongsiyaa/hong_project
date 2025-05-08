$(document).ready(function () {
  $("#header").load("/common/header.html");
  $("#footer").load("common/footer.html");
});

$(document).ready(function () {
  const gnb_target = $("body").data("target");
  const gndFind = "#" + gnb_target;
  const subGnb = $("body").data("number");
  const subGnbFind = "#" + subGnb;

  $(gndFind).addClass("on");
  $(subGnbFind).addClass("on");
});

//푸터팝업 열기
$(document).ready(function () {
  // 팝업 열기
  $(".popup_btn").click(function () {
    const popupId = $(this).data("popup");
    $("#" + popupId)
      .css("display", "flex")
      .hide()
      .fadeIn();
  });

  // 팝업 닫기
  $(".close-btn").click(function () {
    $(this).closest(".modal-wrap").fadeOut();
  });
});

//메인 슬라이드..?
$(".sc-slide .slide-item").mouseover(function () {
  $(".sc-slide .slide-item").removeClass("on");
  $(this).addClass("on");
});

//맨위로 이동
$(".top-btn-wrap").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 500);
});

$(window).scroll(function () {
  const scrollTop = $(this).scrollTop();
  const windowHeight = $(this).height();
  const scrollBottom = scrollTop + windowHeight;

  const footerOffsetTop = $("footer").offset().top;

  // 1000px 이상 && footer에 닿지 않았을 때만 보여줌
  if (scrollTop > 500 && scrollBottom < footerOffsetTop) {
    if (!$(".top-btn-wrap").is(":visible")) {
      $(".top-btn-wrap").fadeIn(300);
    }
  } else {
    if ($(".top-btn-wrap").is(":visible")) {
      $(".top-btn-wrap").fadeOut(300);
    }
  }
});

$(document).ready(function () {
  $(".partners-list .first-list, .partners-list .third-list").marquee({
    speed: 60,
    gap: 20,
    delayBeforeStart: 0,
    direction: "left",
    duplicated: true,
    pauseOnHover: false,
  });
});

$(document).ready(function () {
  $(".partners-list .second-list").marquee({
    speed: 50,
    gap: 20,
    delayBeforeStart: 0,
    direction: "left",
    duplicated: true,
    pauseOnHover: false,
  });
});
