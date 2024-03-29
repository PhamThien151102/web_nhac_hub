<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kq Mp3</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/custom_button.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
   <header>
      <div class="menu-side">
        <a href="#" class="menu-side__logo">
          <img src="./assets/img/icon_zingmp3.svg" alt="MP3 Player" />
          <img
            src="./assets/img/logo_name.svg"
            alt="Zing mp3"
            style="width: 120px"
          />
          <i class="bi bi-x-lg"></i>
        </a>
       
        <div class="menu-side__playlist">
          <div class="menu-side__playlist-label">
            <i class="bi bi-star-fill"></i>
            Bảng Xếp Hạng
          </div>
          <h4 class="active">
            <i class="bi bi-music-note-beamed"></i>Việt Nam
          </h4>
          <h4><i class="bi bi-music-note-beamed"></i>Âu Mỹ</h4>
          <h4><i class="bi bi-music-note-beamed"></i>EDM</h4>
        </div>
        <div class="menu-side__song active">
          <!-- <div class="menu-side__song-item active">
            <div class="menu-side__song-item--number">1</div>
            <div class="menu-side__song-item--image">
              <img src="./img/song_image.jpg" />
            </div>
            <div class="menu-side__song-item--info">
              <div class="song-item--title">Tập Cô Đơn</div>
              <div class="song-item--singer">Nguyễn Văn Giàu</div>
            </div>
            <div class="menu-side__song-item--play">
              <i class="bi bi-play-circle-fill" id="1"></i>
            </div>
          </div> -->
        </div>
        <div class="menu-side__song us-uk">
          <h1 style="text-align: center;">Loading data...</h1>
        </div>
        <div class="menu-side__song edm">
          <h1 style="text-align: center;">Loading data...</h1>
        </div>
      </div>
      <div class="song-side">
        <header class="song-side__heading">
          <nav class="song-side__heading--left">
            <ul class="song-side__heading--tabs">
              <li class="tab-item active">Trang chủ</li>
              <li class="tab-item">Cá nhân</li>
              <li class="tab-item">Khám phá</li>
            </ul>
            <form class="song-side__heading--search">
              <div class="mobile__heading--menu">
                <i class="bi bi-music-note-list"></i>
              </div>
              <div class="mobile__heading--logo">
                <img 
                  src="./assets/img/logo_name.svg" 
                  alt="Zing MP3">
              </div>
              <div class="search__container">
                <div class="search-btn">
                  <i class="bi bi-search"></i>
                </div>
                <input
                  class="hide-on-mobile-tablet"
                  type="search"
                  name="search-song"
                  id="search-song"
                  placeholder="Nhập tên bài hát"
                />
              </div>
              
            </form>
          </nav>
          <nav class="song-side__heading--right">
            <div class="song-side__heading--theme">
              <img src="./assets/img/icon_theme.svg" alt="Theme" />
              <span class="tooltip tooltip-bottom">Chủ đề</span>
            </div>
            <div class="song-side__heading--setting hide-on-mobile-tablet">
              <i class="bi bi-gear"></i>
              <span class="tooltip tooltip-bottom">Cài đặt</span>
            </div>
            <div class="song-side__heading--user">
              <img src="./assets/img/kienquan.jpg" alt="Avatar" width="50" />
            </div>
          </nav>
        </header>

        <div class="song-side__container active">
          <div class="song-side__banner">
            <div class="song-side__banner--title">
              Alan Walker - End of Time
            </div>
            <div class="song-side__banner--content">
              You were the shadow to my light Did you feel us Another start You
              fade Away afraid our aim is out of sight Wanna see us Alive
            </div>
            <div class="song-side__banner--btn">
              <button class="banner__btn-play">Play</button>
              <button class="banner__btn-follow glow-on-hover">Follow</button>
            </div>
          </div>
          <div class="song-side__playlist">
            <div class="song-side__playlist--popular">
              <div class="playlist__popular--title">Có Thể Bạn Muốn Nghe</div>
              <div class="playlist__popular--arrow">
                <i class="bi bi-arrow-left" id="left-scroll-playlist"></i>
                <i class="bi bi-arrow-right" id="right-scroll-playlist"></i>
              </div>
            </div>
            <div class="song-side__playlist--carousel">
              <!-- <a href="." class="playlist__carousel-item">
                <div class="playlist__carousel-item--img">
                  <img src="./img/album_image.jpg" alt="#" />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="playlist__carousel-item--title">
                  Hoa Bằng Lăng Remix (Single)
                </div>
                <div class="playlist__carousel-item--subtitle">
                  Nguyễn Văn Giàu
                </div>
              </a> -->
            </div>
          </div>
          <div class="song-side__new-release">
            <div class="song-side__playlist--popular">
              <div class="playlist__popular--title">Mới Phát Hành</div>
            </div>
            <div class="song-side__playlist--carousel">
              <div class="swiper swiper__new-release">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <!-- <div class="song-side__new-release--item swiper-slide">
                    <div class="song-side__new-release--thumbnail">
                      <img src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/3/8/f/6/38f6c01056fbbe19ae00c018b8dec874.jpg">
                      <i class="bi bi-play-circle"></i>
                    </div>
                    <div class="song-side__new-release--content">
                      <div class="new-release__info">
                        <div class="new-release__info--title">Trai Tài Gái Sắc</div>
                        <div class="new-release__info--subtitle">NB3 Hoài Bảo</div>
                      </div>
                      <div class="new-release__time">
                        <div class="new-release__time--rank">#1</div>
                        <div class="new-release__time--date">26.04.2022</div>
                      </div>
                    </div>
                  </div> -->
                </div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
              
            </div>
          </div>
          <div class="song-side__singer">
            <div class="song-side__playlist--popular">
              <div class="playlist__popular--title">Ca Sĩ Nổi Bật</div>
              <div class="playlist__popular--arrow">
                <i class="bi bi-arrow-left" id="left-scroll-singer"></i>
                <i class="bi bi-arrow-right" id="right-scroll-singer"></i>
              </div>
            </div>
            <div class="song-side__playlist--carousel">
              <!-- <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://vangiau-cover.vercel.app/img/CauHenCauThe.png"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--name">Văn Giàu Nguyễn</div>
              </a> -->
            </div>
          </div>
          <div class="song-side__chart">
            <div class="song-side__chart--wrapper">
              <div class="song-side__playlist--popular">
                <div class="playlist__popular--title">
                  #ZingChart
                  <i class="bi bi-play-circle-fill"></i>
                </div>
              </div>
              <div class="song-side__playlist--carousel chart">
                <div class="chart__legend-box">               
                    <!-- <div class="chart__legend-box--item">
                      <div class="legend-box__item-number">2
                      </div>
                      <div class="legend-box__item-song">
                        <div class="legend-box__item-song--thumbnail">
                          <img src="https://photo-resize-zmp3.zmdcdn.me/w94_r1x1_webp/cover/1/8/0/7/1807c6b5fcc7058a14e1a288801221c7.jpg" width="50px">
                        </div>
                        <div class="legend-box__item-song--info">
                          <div class="song__info-title">
                            Sau Lưng Anh Có Em
                          </div>
                          <div class="song__info-subtitle">
                            Thiều Bảo Trăm
                          </div>
                        </div>
                        <div class="legend-box__item-song--percent">
                          30%
                        </div>
                      </div>
                    </div> -->
                </div>
                <div class="chart__main">
                  <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
              </div>
              <div class="song-side__chart--overlay"></div>
            </div>
          </div>
          <div class="song-side__footer">
            <div class="footer__title">
              <img src="./assets/img/icon_zingmp3.svg">
              <span>Một sản phẩm của Kien quan</span>
            </div>
            <div class="footer__links">
              <ul class="footer__links--nav">
                <li class="links__nav--item">Giới Thiệu</li>
                <li class="links__nav--item">
                  <div class="link-special">•</div>
                </li>
                <li class="links__nav--item">Liên Hệ</li>
                <li class="links__nav--item">
                  <div class="link-special">•</div>
                </li>
                <li class="links__nav--item">Quảng Cáo</li>
                <br>
                <li class="links__nav--item">Góp Ý</li>
                <li class="links__nav--item">
                  <div class="link-special">•</div>
                </li>
                <li class="links__nav--item">Thỏa Thuận Sử Dụng</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="song-side__container">
          <div class="song-side__container--personal">
            <div class="container__personal--heading">
              <img src="./assets/img/kienquan.jpg" alt="Avatar" />
              <span class="personal__name-user">Kien quan</span>
            </div>
            <div class="container__personal--body">
              <ul class="personal__navbar">
                <li class="personal__navbar-item active">Tổng Quan</li>
                <li class="personal__navbar-item">Bài Hát</li>
                <li class="personal__navbar-item">Playlist</li>
                <li class="personal__navbar-item">Album</li>
                <li class="personal__navbar-item">MV</li>
                <li class="personal__navbar-item">Ca Sĩ</li>
              </ul>
            </div>
            <div class="container__personal--wrapper-item active">
              <div class="container__personal--control">
                <div class="personal__title--left">
                  <span>Bài Hát</span>
                  <i class="bi bi-chevron-right"></i>
                </div>
                <div class="personal__title--right">
                  <button>
                    <i class="bi bi-play-fill"></i>
                    Phát Tất Cả
                  </button>
                </div>
              </div>
              <div class="container__personal--song">
                <div class="personal__song--animate">
                  <ul class="song__animate-img">
                    <li class="song__animate-img--item first">
                      <img
                        src="https://vangiau-cover.vercel.app/img/TinhAnh.jpg"
                        alt=""
                      />
                    </li>
                    <li class="song__animate-img--item second">
                      <img
                        src="https://vangiau-cover.vercel.app/img/ThichThiDen.jpg"
                        alt=""
                      />
                    </li>
                    <li class="song__animate-img--item third">
                      <img
                        src="https://vangiau-cover.vercel.app/img/TapCoDon.jpg"
                        alt=""
                      />
                    </li>
                    <li class="song__animate-img--item third">
                      <img
                        src="https://vangiau-cover.vercel.app/img/HoaBangLangRemix.jpg"
                        alt=""
                      />
                    </li>
                    <li class="song__animate-img--item third">
                      <img
                        src="https://vangiau-cover.vercel.app/img/TrucXinh.jpg"
                        alt=""
                      />
                    </li>
                    <li class="song__animate-img--item third">
                      <img
                        src="https://vangiau-cover.vercel.app/img/DungNoiLoiChiaTayKhiEmVanConYeu.jpg"
                        alt=""
                      />
                    </li>
                  </ul>
                </div>
                <div class="personal__song--list">
                  <!-- <div class="personal__song--list-item active">
                    <div class="song__list-item--left">
                      <i class="bi bi-music-note-beamed"></i>
                      <div class="song__list-item--left-thumbnail">
                        <div class="music-play__wave active">
                          <div class="music-play__wave-item"></div>
                          <div class="music-play__wave-item"></div>
                          <div class="music-play__wave-item"></div>
                        </div>
                        <img src="./img/album_image.jpg" alt="#" />
                      </div>
                      <div class="list-item__left--card-info">
                        <span class="card-info__title">Hello World</span>
                        <span class="card-info__subtitle">Alan Walker</span>
                      </div>
                    </div>
                    <div class="song__list-item--content">
                      <span>Hello World (Single)</span>
                    </div>
                    <div class="song__list-item--right">
                      <span>04:50</span>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="container__personal--wrapper-item active">
              <div class="container__personal--control">
                <div class="personal__title--left">
                  <span>Playlist</span>
                  <i class="bi bi-chevron-right"></i>
                </div>
                <div class="personal__title--right">
                  <div class="playlist__popular--arrow playlist-personal">
                    <i class="bi bi-arrow-left"></i>
                    <i class="bi bi-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="song-side__playlist--carousel playlist">
                
              </div>
            </div>
            <div class="container__personal--wrapper-item active">
              <div class="container__personal--control">
                <div class="personal__title--left">
                  <span>Album</span>
                  <i class="bi bi-chevron-right"></i>
                </div>
                <div class="personal__title--right">
                  <div class="playlist__popular--arrow album-personal">
                    <i class="bi bi-arrow-left"></i>
                    <i class="bi bi-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="song-side__playlist--carousel album">
                
              </div>
            </div>
            <div class="container__personal--wrapper-item active">
              <div class="container__personal--control">
                <div class="personal__title--left">
                  <span>MV</span>
                  <i class="bi bi-chevron-right"></i>
                </div>
                <div class="personal__title--right">
                  <div class="playlist__popular--arrow mv-personal">
                    <i class="bi bi-arrow-left"></i>
                    <i class="bi bi-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="song-side__playlist--carousel mv">
                <!-- <div class="playlist__mv-item">
                  <div class="playlist__mv-item--video">
                    <video
                    id="video" 
                    src="http://api.mp3.zing.vn/api/streaming/video/ZWBICDCO/1080" 
                    width="330" 
                    height="186" 
                    controls
                    poster="https://photo-resize-zmp3.zmdcdn.me/w600_r300x169_webp/thumb_video/d/6/e/6/d6e6201323fed8fb16886a3f428fc4f7.jpg">
                    </video>
                  </div>
                  <div class="playlist__mv-item--info">
                    <div class="mv-item__info--thumbnail">
                      <img src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_jpeg/avatars/4/5/a/b/45ab1296d73b215629fcbab092687d4c.jpg" alt="">
                    </div>
                    <div class="mv-item__info--content">
                      <div class="info__content-title">Túp Liều Vàng</div>
                      <div class="info__content-subtitle">Nguyễn Đình Vũ</div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="container__personal--wrapper-item active">
              <div class="container__personal--control">
                <div class="personal__title--left">
                  <span>Ca Sĩ</span>
                  <i class="bi bi-chevron-right"></i>
                </div>
                <div class="personal__title--right">
                  <div class="playlist__popular--arrow singer-personal">
                    <i class="bi bi-arrow-left"></i>
                    <i class="bi bi-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="song-side__playlist--carousel singer">
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/huong-ly.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/karik.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/justatee.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/hoa-minzy.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/onlyc.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/mr-siro.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
                <div class="playlist__singer-item">
                  <img src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/zma-2021/imgs/chi-dan.png" alt="#">
                  <div class="playlist__singer-item--btn">
                    <i class="bi bi-check-lg"></i>
                    <span>Đã quan tâm</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div class="song-side__container">
          <div class="song-side__container--slider">
            <div class="swiper swiper__banner">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img src="https://avatar-ex-swe.nixcdn.com/slideshow-web/2022/04/19/f/7/0/6/1650339221004.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="https://avatar-ex-swe.nixcdn.com/slideshow-web/2022/04/21/4/0/f/1/1650511092735.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="https://avatar-ex-swe.nixcdn.com/slideshow-web/2022/04/22/f/4/8/8/1650627480162.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="https://avatar-ex-swe.nixcdn.com/slideshow-web/2022/04/19/f/7/0/6/1650365706875.jpg" alt="">
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>
            
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            
              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
          </div>
          <div class="song-side__playlist">
            <div class="song-side__playlist--popular">
              <div class="playlist__popular--title">Radio Nổi Bật</div>
              <div class="playlist__popular--arrow">
                <i class="bi bi-arrow-left" id="left-scroll-playlist"></i>
                <i class="bi bi-arrow-right" id="right-scroll-playlist"></i>
              </div>
            </div>
            <div class="song-side__playlist--carousel radio">
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/1/4/6/b/146b49d11cc9b3bc591823bfedb8bce2.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/f/d/7/9/fd79808d2180de9a421afa6aff38953e.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">VPOP</div>
                <div class="carousel-item__circle--subtitle">900 đang nghe</div>
              </a>
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/4/7/4/d/474d782672bcbaaac54100ceb4ccf31d.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/0/8/2/5/0825d8cd559dee502625a25d540c636a.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">XONE Radio</div>
                <div class="carousel-item__circle--subtitle">521 đang nghe</div>
              </a>
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/4/8/c/e/48cefd41cfc03533d52303190f47e6ef.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/1/3/0/5/1305cd954d22d89fef4354301613fd68.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">Bolero</div>
                <div class="carousel-item__circle--subtitle">550 đang nghe</div>
              </a>
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/b/f/2/2/bf223818f85e7fe129091b415038ca6c.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/b/f/3/b/bf3bf87a788a5d0b8719c6feee774a2e.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">Rap Việt</div>
                <div class="carousel-item__circle--subtitle">1k đang nghe</div>
              </a>
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/e/f/b/0/efb05fb9097a7057aecef6ecb62bff5a.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/0/9/9/3/0993b3110c60ba6518fceeba9913d20d.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">Acoustic</div>
                <div class="carousel-item__circle--subtitle">767 đang nghe</div>
              </a>
              <a class="playlist__carousel-item--circle">
                <div class="carousel-item__circle--img">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/d/4/f/f/d4ffcd5734d4dae6266fec08719324f0.jpg"
                    alt="#"
                  />
                  <i class="bi bi-play-circle"></i>
                </div>
                <div class="carousel-item__circle--host">
                  <img
                    src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/avatars/b/0/d/a/b0da7c8ecd6521337682f3a86fa0170f.jpg"
                    alt="#"
                  />
                </div>
                <div class="carousel-item__circle--title">US-UK</div>
                <div class="carousel-item__circle--subtitle">882 đang nghe</div>
              </a>
            </div>
          </div>   
        </div>
    </header>
    <!-- music play ------------------------------------- -->
    <div class="music-play">
      <div class="music-play__left">
        <div class="music-play__wave hide-on-mobile-tablet">
          <div class="music-play__wave-item"></div>
          <div class="music-play__wave-item"></div>
          <div class="music-play__wave-item"></div>
        </div>
        <div class="music-play__image">
          <!-- <img src="./img/icon_zingmp3.svg"/> -->
          <div class="box-note-icon">
            <i class="bi bi-music-note-beamed"></i>
          </div>
          <div class="box-note-icon">
            <i class="bi bi-music-note-beamed"></i>
          </div>
          <div class="box-note-icon">
            <i class="bi bi-music-note-beamed"></i>
          </div>
          <div class="box-note-icon">
            <i class="bi bi-music-note-beamed"></i>
          </div>
        </div>
        <div class="music-play__info">
          <marquee class="song-item--title" direction="left">
            Welcome to world of music
          </marquee>
          <div class="song-item--singer">Kiến Quân</div>
        </div>
      </div>
      <div class="music-play__center">
        <div class="music-play__control">
          <div class="btn btn-repeat hide-on-mobile">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <div class="btn btn-prev">
            <i class="bi bi-skip-backward"></i>
          </div>
          <div class="btn btn-toggle-play">
            <i class="bi bi-play-circle"></i>
          </div>
          <div class="btn btn-next">
            <i class="bi bi-skip-forward"></i>
          </div>
          <div class="btn btn-random hide-on-mobile">
            <i class="bi bi-shuffle"></i>
          </div>
        </div>
        <div class="music-play__progress">
          <span class="music-play__progress--start">00:00</span>
          <div class="music-play__progress--seek">
            <input
              id="progress"
              class="progress"
              type="range"
              value="0"
              step="1"
              min="0"
              max="100"
            />
            <div class="seek__bar"></div>
            <div class="seek__dot"></div>
          </div>
          <span class="music-play__progress--end">05:00</span>
          <audio id="audio" src="" preload="metadata"></audio>
        </div>
      </div>
      <div class="music-play__right hide-on-mobile-tablet">
        <div class="music-play__volume">
          <i class="bi bi-volume-down"></i>
          <input
            id="volume"
            class="volume"
            type="range"
            value="30"
            step="1"
            min="0"
            max="100"
          />
          <div class="seek__bar"></div>
          <div class="seek__dot"></div>
        </div>
      </div>
    </div>
    <div class="theme-modal">
      <div class="theme-modal__heading">
        <h3>Giao Diện</h3>
        <i class="bi bi-x-square"></i>
      </div>
      <div class="theme-modal__content">
        <!-- <div class="theme-modal__content--item">
          <h3 class="content__item--title">Dynamic</h3>
          <div class="content__item--container">
            <div class="content__item--theme">
              <div class="item__theme--display">
                <img
                  src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/theme/London-thumb.png"
                  alt=""
                />
                <div class="item__theme--actions">
                  <button class="item__theme--apply">Áp Dụng</button>
                  <button class="item__theme--preview">Xem Trước</button>
                </div>
              </div>
              <h4>London</h4>
            </div>

            <div class="content__item--theme">
              <div class="item__theme--display">
                <img
                  src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/theme/dynamic-blue.jpg"
                  alt=""
                />
                <div class="item__theme--actions">
                  <button class="item__theme--apply">Áp Dụng</button>
                  <button class="item__theme--preview">Xem Trước</button>
                </div>
              </div>
              <h4>Xanh Da Troi</h4>
            </div>

            <div class="content__item--theme">
              <div class="item__theme--display">
                <img
                  src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/theme/dynamic-pink.jpg"
                  alt=""
                />
                <div class="item__theme--actions">
                  <button class="item__theme--apply">Áp Dụng</button>
                  <button class="item__theme--preview">Xem Trước</button>
                </div>
              </div>
              <h4>Hồng</h4>
            </div>

            <div class="content__item--theme">
              <div class="item__theme--display">
                <img
                  src="https://zmp3-static.zmdcdn.me/skins/zmp3-v6.1/images/theme/dynamic-brown.jpg"
                  alt=""
                />
                <div class="item__theme--actions">
                  <button class="item__theme--apply">Áp Dụng</button>
                  <button class="item__theme--preview">Xem Trước</button>
                </div>
              </div>
              <h4>Nâu</h4>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <script src="./themes.js"></script>
    <script src="./app.js"></script>
    
  </body>
</html>
