<?php
    $pageTitle = "news"; 
    $bodyData = 'data-target="gnb05" data-number="gnb05-1"';
      include '../common/header.php';
      
?>
     <div class="container news">
        <section class="sc-board-title">
          <div class="inner">
            <h2 class="">NEWS & NOTICE</h2>
            <p class="sub-title">
              플럭시티의<br />
              <span>최신 소식들을 만나보세요.</span>
            </p>
          </div>
        </section>
        <section class="sc-board-view">
          <div class="inner">
            <ul class="board-view">
              <li class="title-area">
                <p class="title">
                  제목을 입력하세요 제목을 입력하세요 제목을 입력하세요
                </p>
                <p>
                  <span class="cate">CATEGORY</span><span class="bar"></span>
                  <span class="date">2023.00.00</span>
                </p>
              </li>
              <li>
                <div class="contents-wrap"></div>
              </li>
            </ul>
            <ul class="page-list">
              <li class="prev">
                <a href="" class="prev-btn">
                  <p class="prev-cont">이전글</p>
                  <p class="prev-cont-tit">제목제목제목제목제목제목</p>
                </a>
              </li>
              <li class="next">
                <a href="" class="next-btn">
                  <p class="next-cont">다음글</p>
                  <p class="next-cont-tit no-more">다음 글이 없습니다.</p>
                </a>
              </li>
            </ul>
          </div>
        </section>
      </div>

<?php
      include '../common/footer.php';
?>