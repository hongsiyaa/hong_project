<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : "pluxity"; ?></title>
    <link rel="stylesheet" href="/project/web_project/assets/css/layout.css" />
    <link rel="stylesheet" href="/project/web_project/assets/css/main.css" />
    <link rel="stylesheet" href="/project/web_project/assets/css/sub.css" />
    

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.1/jquery.marquee.min.js"></script>
    <script src="/project/web_project/assets/js/common.js" defer></script>
  </head>
  <?php
    $bodyData = isset($bodyData) ? $bodyData : '';
?>
  <body <?php echo $bodyData; ?>>
    <div id="wrapper">
      <header id="header">
      <div class="header-container">
        <div class="header-gnb">
            <h1 id="logo">
            <a href="#"><img src="/project/web_project/assets/images/pluxity_logo.png" alt="" /></a>
            </h1>
            <ul class="header-list">
            <li class="header-list-depth1">
                <a href="javascript:void(0)" id="gnb01">ABOUT</a>
            </li>
            <li class="header-list-depth1">
                <a href="javascript:void(0)">OUR TECH</a>
            </li>
            <li class="header-list-depth1">
                <a href="javascript:void(0)">PLUG</a>
            </li>
            <li class="header-list-depth1">
                <a href="javascript:void(0)">CAREER</a>
            </li>
            <li class="header-list-depth1">
                <a href="javascript:void(0)" id="gnb05">NEWS</a>
            </li>
            <li class="header-list-depth1">
                <a href="javascript:void(0)" id="gnb06">CONTACT US</a>
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
            <li><a href="/project/web_project/about/whoweare.php" id="gnb01-1">Who we are</a></li>
            <li><a href="/project/web_project/about/achievements.php" id="gnb01-2">Achievements</a></li>
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
            <li><a href="/project/web_project/news/board_list.php" id="gnb05-1">News & Notice</a></li>
            <li><a href="#">Our works</a></li>
            <li><a href="#">Newsletter</a></li>
            </ul>
            <ul class="header-list-depth2">
            <li><a href="/project/web_project/contactus/inquiry.php" id="gnb06-1">Inquiry</a></li>
            <li><a href="#">Location</a></li>
            </ul>
        </div>
        <div class="gnb-banner">
            <div class="banner banner01">
            <img src="/project/web_project/assets/images/banner01.png" alt="" />
            <span>스마트 건설 안전 플랫폼</span>
            </div>
            <div class="banner banner02">
            <img src="/project/web_project/assets/images/banner02.png" alt="" />
            <span>스마트 골프 플랫폼</span>
            </div>
        </div>
        </div>

      </header>