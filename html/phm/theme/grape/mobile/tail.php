<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div id="ft">
    <div class="ft_wr">


            <div id="ft_company">
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            </div>
            <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>

    </div>
    <button type="button" class="ftbtn insta_btn" onclick="window.href='//instagram.com/justincatering'"><i class="fab fa-instagram" aria-hidden="true"></i><span class="sound_only">인스타그램</span></button>
    <button type="button" class="ftbtn youtube_btn" onclick="location.href=''"><i class="fab fa-youtube" aria-hidden="true"></i><span class="sound_only">유튜브</span></button>
    <button type="button" class="ftbtn contact_btn" onclick="location.href='/phm/bbs/write.php?bo_table=contact_1' "><i class="far fa-calendar-check" aria-hidden="true"></i><span class="sound_only">예약하기</span></button>
    <button type="button" class="ftbtn top_btn" onclick="location.href='/' "><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>

    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {

        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
