<?php
    $pageTitle = "inquiry"; 
    $bodyData = 'data-target="gnb06" data-number="gnb06-1"';
      include '../common/header.php';
      
?>
<div class="container inquiry">
        <section class="sc-board-title">
          <div class="inner">
            <h2 class="">INQUIRY</h2>
            <p class="sub-title">
              플럭시티의 디지털 트윈 플랫폼을 통해
              <br />
              <span>새롭고 혁신적인 경험을 만나보세요.</span>
            </p>
            <p class="sub-text">
              문의하기로 남겨주시면, 각 담당자 확인 후 신속히 연락드리겠습니다.
            </p>
          </div>
        </section>
        <section class="sc-inquiry">
          <div class="inner">
            <div class="inquiry-wrap">
              <p class="title">문의하기</p>
              <ul class="tab-wrap">
                <li class="on">디지털 트윈 플랫폼 <span>PLUG</span></li>
                <li>스마트 건설안전 플랫폼 <span>Safers</span></li>
                <li>스마트 골프 플랫폼 <span>Golf</span></li>
                <li>마케팅/ 대외협력</li>
                <li>채용</li>
                <li>기타</li>
              </ul>
              <div class="form-wrap">
                <form>
                  <div class="form-row">
                    <label for="name">성함 <span>*</span></label>
                    <input type="text" id="name" placeholder="예) 김플럭" />
                  </div>

                  <div class="form-row">
                    <label for="email">이메일 <span>*</span></label>
                    <input
                      type="email"
                      id="email"
                      placeholder="example@pluxity.com"
                    />
                  </div>

                  <div class="form-row">
                    <label for="phone">연락처</label>
                    <input
                      type="text"
                      id="phone"
                      placeholder="-없이 숫자만 입력"
                    />
                  </div>

                  <div class="form-row">
                    <label for="company">회사명</label>
                    <input
                      type="text"
                      id="company"
                      placeholder="현재 소속된 단체명 또는 개인으로 표기"
                    />
                  </div>

                  <div class="form-row">
                    <label for="subject">제목 <span>*</span></label>
                    <input
                      type="text"
                      id="subject"
                      placeholder="제목을 입력해주세요."
                    />
                  </div>

                  <div class="form-row message-area">
                    <label for="message">내용</label>
                    <textarea
                      id="message"
                      placeholder="문의 내용을 입력해주세요."
                    ></textarea>
                  </div>

                  <div class="checkbox-group">
                    <label
                      ><input type="checkbox" />
                      <a href="#">개인정보처리방침</a>에 동의합니다.
                      (필수)</label
                    >
                    <label
                      ><input type="checkbox" /> 플럭시티 관련
                      <a href="#">프로모션 및 마케팅 정보 수신</a>에 동의합니다.
                      (선택)</label
                    >
                  </div>

                  <div class="submit-button">
                    <button type="submit"><span>문의하기</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>


<?php
      include '../common/footer.php';
      
?>