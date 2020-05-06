<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 5, 33);
?>
<!-- 공지사항 -->
    <?php echo latest("false9_notice", 'notice_1', 3, 33); ?>

<div class="circle-group">
                            <div class="cricle1"></div>
                            <div class="cricle2"></div>
                            <div class="cricle3"></div>
                            <div class="cricle4"></div>
                            <div class="cricle5"></div>
</div>
<!-- <div class="idx_rs">
   <h2><i class="fa fa-calendar"></i> 견적상담 / 예약문의</h2>
   <p class="tel">01-234-5678</p>
   <div class="online-btn">
       <p>홈페이지에서 빠르고 쉽게 견적상담을 하실 수 있습니다.</p>
       <a href="/phm/bbs/write.php?bo_table=contact_1">온라인상담</a>
   </div>
</div> -->

<?php
echo latest('theme/slider_step', 'stepSlide', 1, 23);
?>

<div class="idx_con">
    <ul>
        <li>
            <h2><i class="fas fa-hotel"></i><span>Brand</span></h2>
            <p>저스틴케이터링은 이태원에 위치한 프리미엄 뉴욕 레스토랑인 "Justin Steak"
				쉐프들이 직접 참여하여</br>
				셀프 스몰웨딩, 하우스파티, 대규모파티, 브랜드 런칭에 이르기까지 독창적이고 이야기
				있는 케이터링 서비스를 제공 해 드립니다.</p>
            <a href="/phm/bbs/content.php?co_id=company">자세히보기</a>
        </li>
        <li>
            <h2><i class="fas fa-utensils"></i><span>Menu</span></h2>
			<p>저스틴케이터링은 단순한 음식에 그치지 않고</br>
				행사 전문 파티플래너와 최고의 플로리스트,</br>
				그리고</br>
				이태원 프리미엄 레스토랑
				“Justin Steak”의 수석쉐프들로 구성된
				ONE-STOP 케이터링 서비스를 제공해 드립니다.
			</p>
            <a href="">자세히보기</a>
        </li>
         <li>
            <h2><i class="fas fa-menorah"></i><span>Review</span></h2>
			 <p>저스틴케이터링은 파티나 행사에 고품질의 케이터링을 제공함으로써 계신 자리의
				품격을 높이는 역할을 합니다.</br> 소중한 순간을 더욱 특별하게 만들기 위해 행사에 맞는 음식부터 스타일링까지 직접 커스텀하고 있습니다.</br></p>
            <a href="">자세히보기</a>
        </li>
    </ul>
</div>


<!-- catering  -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/service', 'gallery', 4, 33);
?>


<!-- portpolio  -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/team', 'notice', 8, 10);
?>

<!-- 후기 인스타 글 끌  -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/review', 'insta', 8, 33);
?>

<!--  최신글 -->


<div class="idx_lt">
    <div class="bg"><span></span><span></span><span></span></div>


    <div class="lt_wr time">
        <h2>운영시간 안내</h2>
        <ul>
            <li><strong><i class="fa fa-clock-o"></i> 운영시간</strong> 09:00 ~ 18:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 점심시간</strong> 13:00 ~ 14:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 토요일</strong> 09:00 ~ 18:00</li>
        </ul>

    </div>
    <div class="lt_wr">
        <h2>견적상담 / 예약문의</h2>
        <strong class="tel">01-234-5678</strong>
        <p>홈페이지에서 빠르고 쉽게 견적상담을 하실 수 있습니다.</p>
    </div>
    <a href="/phm/bbs/write.php?bo_table=contact_1" class="btn_m btn_b02">온라인상담</a>
<!--
    ?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'contact_1', 4, 33);
    ?>
-->

</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
