<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <title>Bookmark</title>

    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/category.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>
        [data-tab-content] {
            display: none;
        }

        .active[data-tab-content] {
            display: flex;
        }
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- header -->
    <main id="main">
        <div class="main_wrap">
            <div class="main_inner">
                <section class="bookmark_banner">
                    <div class="banner_inner">
                        <p>CATEGORY</p>
                        <div class="banner_udline"></div>
                    </div>
                </section>

                <section class="card_inner container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image01.jpg" alt="">
                                <p>WALLPAPER <br><em>배경화면</em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image02.jpg" alt="">
                                <p>ANIMAL<br><em>동물</em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image03.jpg" alt="">
                                <p>ILLUSTRATION<br><em>일러스트</em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image04.jpg" alt="">
                                <p>PLANTS<br><em>식물</em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/image/main_image05.jpg" alt="">
                                <p>FOOD<br><em>음식</em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/image/main_image07.jpg" alt="">
                                <p><em></em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image06.jpg" alt="">
                                <p><em></em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image05.jpg" alt="">
                                <p><em></em></p>
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/image/main_image04.jpg" alt="">
                                <p><em></em></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SWIPER -->

                <section class="category__title container">
                    <h2>CATEGORY</h2>
                    <ul class="category__tag">
                        <li><a href="#" data-tab-target="#All" class="active">All</a></li>
                        <li><a href="#" data-tab-target="#love">love</a></li>
                        <li><a href="#" data-tab-target="#pastal">pastal</a></li>
                        <li><a href="#" data-tab-target="#plants">plants</a></li>
                        <li><a href="#" data-tab-target="#vintage">vintage</a></li>
                    </ul>
                </section>
                <section id="All" data-tab-content class="main_card container active">
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image05.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                </section>
                <!-- card1 -->
                <section id="love" data-tab-content class="main_card container">
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                </section>
                <!-- card2 -->
                <section id="pastal" data-tab-content class="main_card container">
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                </section>
                <!-- card3 -->
                <section id="plants" data-tab-content class="main_card container">
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                </section>
                <!-- card4 -->
                <section id="vintage" data-tab-content class="main_card container">
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                    <article class="main_cardBox">
                        <div class="main_image">
                            <figure>
                                <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                            </figure>
                        </div>
                        <div class="main_info">
                            <div class="mainInfo_left">
                                <figure>
                                    <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                </figure>
                                <div class="mainInfo_title">
                                    <h3><a href="#">이미지 제목</a></h3>
                                    <span>크리에이터 이름</span>
                                </div>
                            </div>

                            <div class="mainInfo_right">
                                <figure>
                                    <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>20</span>
                                <figure>
                                    <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                </figure>
                                <span>12</span>
                            </div>
                        </div>
                        <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                    </article>
                </section>
                <!-- card5 -->
                <!-- card6 -->
            </div>
        </div>
    </main>
    <?php include "../include/footer.php" ?>
    <!-- footer -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 
    <script>
        const heartBtn = document.querySelectorAll('.main_card .main_cardBox > img');
        console.log(heartBtn);

        heartBtn.forEach((heart, num) => {
            // console.log(num);
            heart.addEventListener('click', () => {
                heartBtn[num].classList.toggle('show');
            });
        });
    </script>
    <!-- swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 5,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                "@0.75": {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                "@1.00": {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                "@1.50": {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
                "@1.75": {
                    slidesPerView: 5,
                    spaceBetween: 60,
                }
            },
        });
    </script>
    <!-- 태그 선택 -->
    <script>
        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')

        tabs.forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(tab.dataset.tabTarget)
                console.log(target);
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                });
                tabs.forEach(tab => {
                    tab.classList.remove('active')
                });
                target.classList.add('active')
                tab.classList.add('active')
            })
        })
    </script>
</body>

</html>