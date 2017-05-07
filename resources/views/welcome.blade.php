<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{!! asset('/css/common.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/welcome.css') !!}" rel="stylesheet">
</head>
<body id="body" class="width_1280">




<!--
<div id="background" class=" width_1280">
    <img src="../image/top_back.png"/>
</div>
-->





<div id="top" class="of_h">

    <div id="top_header" class="of_h width_1280  back_black opacity_50 pad_10">

        <div id="top_header_left" class="f_l">
            <img src="{!! asset('/image/location.png')!!}"/>
            <span class="color_white"> 내 위치:서울시 동작구 | 내 위치 재설정 </span>
        </div>

        <div id="top_header_right" class="f_r">
            로그인 | 회원가입 | 서울
        </div>
    </div>
    <!--    end top_header-->







    <div id="top_menu " class="of_h color_white pad_10  back_white">

        <div id="top_menu_logo" class="f_l pad_r_10 pad_l_10">
            <img src="{!! asset('/image/BestStay.png')!!}"/>
        </div>
        <!--        end top_menu_logo       -->

        <div id="top_menu_list" class="f_r">
            <ul id="top_menu_list_ul" class="mylist display_inline m_0_a pad_10 color_black" >
                <li>부동산</li>
                <li>호텔</li>
                <li>여행</li>
                <li>재능나눔</li>
                <li>타임쉐어</li>
                <li>구인구직</li>
                <li>마이페이지</li>

            </ul>

        </div>
        <!--end top_menu_list -->

    </div>
    <!--    end top_menu-->


    <div id="top_submenu" class="of_h back_yellow">
        <ul id="top_submenu_list" class="mylist display_inline ">
           <li>매물검색</li>
           <li> 분양정보</li>-
           <li> 자동매칭</li>
           <li> 중개서비스</li>
           <li> 뉴스</li>
           <li> 계약</li>
           <li> 전문가</li>
           <li> 커뮤니티</li>
           <li> 인테리어</li>
           <li> 이사정보</li>
        </ul>

    </div>
    <!--    end top_submenu-->
</div>
<!--end top-->


<div id="search">
    <div id="search_back" class="left_0 right_0 m_0_a opacity_75 of_h">
        <button id="search_back_button">매물검색</button>
        <textarea id="search_back_textarea">베스티</textarea>
    </div>

</div>








<div id="content">




    <div id="content_wrap">
        <p class="width_1280p">공지사항 </p>
        <div id="notice">
            <label id="board_title_label">
                제목
            </label>
            <textarea id="board_title_input">

            </textarea>

        </div>
        <div id="content_wrap_board">
            <img src="../image/board.png"/>
        </div>

        <!-- 가운데 정렬이 안되영...-->
        <div id="ok_cancel" class="of_h left_0 right_0 m_0_a">
            <button id="ok" class="color_white border_none ">확인</button>
            <button id="cancel" class="color_white border_none ">취소</button>
        </div>
    </div>
</div>












<footer id="footer">
    <p>사이트이용약관 : 개인정보취급방침 : 법적고지 : 패밀리사이트 : 제휴문희 : 광고문의 :</p>
</footer>

</body>
</html>