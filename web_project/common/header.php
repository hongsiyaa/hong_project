<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : "pluxity"; ?></title>
    <link rel="stylesheet" href="../assets/css/layout.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/sub.css" />
    

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/common.js" defer></script>
  </head>
  <?php
    // $bodyData가 설정되지 않았을 경우 빈 문자열로 초기화
    $bodyData = isset($bodyData) ? $bodyData : '';
?>
  <body <?php echo $bodyData; ?>>
    <div id="wrapper">
      <header id="header">
      <div class="header-container">
        <div class="header-gnb">
            <h1 id="logo">
            <a href="/"><img src="../assets/images/pluxity_logo.png" alt="" /></a>
            </h1>
            <ul class="header-list">
            <li class="header-list-depth1">
                <a href="" id="gnb01">ABOUT</a>
            </li>
            <li class="header-list-depth1">
                <a href="">OUR TECH</a>
            </li>
            <li class="header-list-depth1">
                <a href="">PLUG</a>
            </li>
            <li class="header-list-depth1">
                <a href="">CAREER</a>
            </li>
            <li class="header-list-depth1">
                <a href="" id="gnb05">NEWS</a>
            </li>
            <li class="header-list-depth1">
                <a href="" id="gnb06">CONTACT US</a>
            </li>
            </ul>
        </div>
        <div class="header-lang">
            <ul class="lang">
            <li><a href="" class="active">KR</a></li>
            <li><a href="">EN</a></li>
            </ul>
        </div>
        </div>
        <div class="header-bottom-wrap">
        <div class="header-depth2-wrap">
            <ul class="header-list-depth2">
            <li><a href="../about/whoweare.php" id="gnb01-1">Who we are</a></li>
            <li><a href="../about/achievements.php" id="gnb01-2">Achievements</a></li>
            <li><a href="#">Patents & Awards</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="#">Digital twin</a></li>
            <li><a href="#">Our service</a></li>
            <li><a href="#">Extended service</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="#">Smart City</a></li>
            <li><a href="#">Smart Industry</a></li>
            <li><a href="#">Digital SOC</a></li>
            <li><a href="#">Sports & Leisure</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="#">Our culture</a></li>
            <li><a href="#">Recruitment</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="/news/board_list.php" id="gnb05-1">News & Notice</a></li>
            <li><a href="#">Our works</a></li>
            <li><a href="#">Newsletter</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="/contactus/inquiry.php" id="gnb06-1">Inquiry</a></li>
            <li><a href="#">Location</a></li>
            </ul>
        </div>
        <div class="gnb-banner">
            <div class="banner banner01">
            <img src="../assets/images/banner01.png" alt="" />
            <span>스마트 건설 안전 플랫폼</span>
            </div>
            <div class="banner banner02">
            <img src="../assets/images/banner02.png" alt="" />
            <span>스마트 골프 플랫폼</span>
            </div>
        </div>
        </div>

      </header>