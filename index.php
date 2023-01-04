<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thiep dam cuoi online cua Thinh va Nhat Lam</title>
    <!-- background backup https://picsum.photos/id/381/1920/1080 -->
    <meta property="og:title" content="Dam cuoi Thinh Va Lam - HCM, 28 Dec 2023">
    <meta property="og:description" content="Dam cuoi Thinh Va Lam - HCM, 28 Dec 2023">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <link rel="stylesheet" type="text/css" href="css/menikah.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.coundown.js"></script>
    <link rel="icon" type="image/png" href="image/favicon.png" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
    <!-- Begin Script for Countdown -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23064379-20');
    </script>
    <!-- Begin Script for Countdown -->

    <!-- Github Button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>

  <body>
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
      <div class="preloader">
        <img src="image/favicon.png" alt="Flower" />
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large">

        <nav class="navbar is-transparent is-hidden-desktop">

          <div class="navbar-brand is-fixed-top">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="navbar-item" href="#Waktu">
                  Ngày tổ chức
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#lokasi">
                  Địa điểm
                </a>
              </div>
              
              <div class="navbar-item">
                <a class="navbar-item" href="#tentang-sherly-daeng">
                  Câu truyện tình yêu
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#rsvp">
                  Lời kết và mini game
                </a>
              </div>
            </div>
          </div>
        </nav>

        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Lễ Thành Hôn</h1>
            <h2 class="title">Công Thinh và em</h2>
            <h4 class="subtitle tempatwaktu">
              
                Tp Hồ Chí Minh, 28/12/2023 
                </br>
                Nhà Hàng ABC 
                </br>
                Với những điều ngọt ngào nhất
              
            </h4>
          </div>
          <!-- Start Countdown -->       
          <div>
            <ul id="hitungmundur" >
              <li><span class="days">00</span><p class="days_text">Days</p></li>
              <li class="separator">:</li>
              <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
              <li class="separator">:</li>
              <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
              <li class="separator">:</li>
              <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
            </ul>
            <div class="spasi">
            </div>
            <script type="text/javascript">
              var now = new Date();
              var day = now.getDate();
              var month = now.getMonth() + 1;
              var year = now.getFullYear() + 1;
          
              var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
              var harih = '12/28/2023 17:00:00';

              $('#hitungmundur').countdown({
                date: harih, // TODO Date format: 07/27/2022 17:00:00
                offset: +7, // TODO Your Timezone Offset
                day: 'ngày',
                days: 'ngày'
              }, function () {
                alert('Done!');
              });
            </script>  
          </div>
          <!-- End Countdown -->
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot ">
          <div class="hero-foot--wrapper">
            <div class="columns">
              <div class="column is-12 hero-menu-desktop has-text-centered">
                <ul>
                  <li class="is-active">
                    <a href="#home">Trang Chủ</a>
                  </li>
                  <li>
                    <a href="#Waktu">Ngày tổ chức</a>
                  </li>
                  <li>
                    <a href="#lokasi">Vị trí</a>
                  </li>
                  <li>
                    <a href="#tentang-sherly-daeng">Kỷ niệm của chúng êm</a>
                  </li>

                  <li>
                    <a href="#rsvp">Xác nhận và chơi mini game</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->


    <div class="main-content">

     <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content" id="regular-section">
        
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/vvv.png" class="bismillah has-text-centered" alt="Bismillahirrahmaanirrahiim">
        </div>

        <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
          Cảm ơn mọi người đã tham dự đám cưới của chúng êmmmmmmm
          <br />
          Thật hành phúc và vinh dự biết bao khi có sự góp mặt của mọi người trong ngày trọng đại này, 
          <br />
          Nhân dịp ngày trọng đại này chúng em có trò chơi nho nhỏ cho quý dị :D :D 
        </p>

        <span class="space40px"></span>
        <span class="space40px"></span>

        <div data-aos="fade-up" data-aos-easing="linear">
          <div class="nama-lengkap" >
            Tran Cong Thinh.
          </div>
          <div class="ampersand">&</div>
          <div class="nama-lengkap">
            NL. 
          </div>
           
        </div>
        <span class="space40px"></span>
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
        </div>
        <span class="space40px"></span>
        <span class="space40px"></span>
      </section>

      <section class="section-dark" id="Waktu">
        <div class="container">

          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title">Ngày tổ chức</h1>
          </div>
          <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
            <div
              class="column is-4 has-vertically-aligned-content">
             
              <p class="is-larger has-text-centered">
                  <div class="waktu tanggal-hari has-text-centered">Thứ X</div> 
                  <div class="waktu tanggal-angka has-text-centered">28</div>
                  <div class="waktu tanggal-bulan has-text-centered">Dec 2023</div>
              </p>
            
            </div>
            <div class="column is-4 has-vertically-aligned-content">
            
              <p class="waktu is-larger has-text-centered">
                Giờ bắt đầu lễ:
                <br>
                <strong>18.00 pm</strong>
              </p>
            
            </div>

            <div class="column is-4 has-vertically-aligned-content">
              
              <h1 class="waktu is-larger has-text-centered">
                Giờ khai tiệc:
                <br>
                <strong>19.00  - 21.00 pm</strong>
              </h1>
              
              
            </div>

          </div>
        </div>
        <div class="space40px"></div>
        <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NGgzdW00NG84dXFwMzcwNXYxbGliNGxzaWggZGFlbmdkb2FuZ0Bt&amp;tmsrc=daengdoang%40gmail.com" target="_blank" class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank" data-aos="zoom-in">
            <i class="far fa-calendar-plus"></i>
            &nbsp;&nbsp;Google Calendar
          </a>
        </div>
      </section>

      <section class="section-darker" id="lokasi" >
        <div class="container">
          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title">Địa điểm</h1>
            <p class="tempat is-larger has-text-centered">
              <strong>Nhà Hàng ABCD</strong>
              <br>
              số A đường 33 phường 55
              <br>
              Sảnh số N tại nhà hàng abcdefgh
              <br>
            </p>
          </div>
          <div class="section-map" data-aos="fade-up" data-aos-easing="linear">            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.724088996984!2d106.68818351451195!3d10.755734762517093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f0fc935b50d%3A0xc11b8be03b0d1561!2sNh%C3%A0%20H%C3%A0ng%20RIVERSIDE%20PALACE!5e0!3m2!1sen!2ssg!4v1672283781844!5m2!1sen!2ssg" width="100%" height="450" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div class="space40px"></div>
          <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <a href="https://maps.google.com/maps?ll=-6.246855,106.971346&z=16&t=m&hl=en&gl=ID&mapclient=embed&daddr=RM.%20Pondok%20Kenanga%20Jl.%20Kenanga%20Raya%20No.9%20RT.001%2FRW.006A%2C%20Jakasampurna%20Bekasi%20Barat%2C%20Bekasi%20City%2C%20West%20Java%2017145@-6.2468549,106.9713456" class="button btn-cta" target="_blank" data-aos="zoom-in">
              <i class="far fa-directions"></i>
              &nbsp;&nbsp;Google Maps
            </a>
          </div>
        </div>
      </section>

      <section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
        <div class="container">
          <div class="columns is-multiline">  
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Câu truyện tình yêu</h1>
            

          
          <!-- IMAGES -->  
        <div class=" tile">
          <div class="tile is-ancestor">
          <div class="tile is-parent">
            <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">Dec 2016</p>
                <p class="subtitle-foto">
                  Hai chúng ta gặp nhau và bắt đầu câu truyện  <a href="https://google.com" target="_blank">tình yêu</a>
                </p>
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification foto2" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">
                  Dec 2017 - Dec 2018
                </p>
                <p class="subtitle-foto">
                  Trải qua nhiều sự yêu thương.
                </p>   
              </div>            
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification foto3" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">  
                <p class="title-foto">
                  2019
                </p>
                <p class="subtitle-foto">
                  Có nhiều biến cố và chúng ta đã vượt qua
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="space24px"></div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child notification foto6" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">2020</p>
              <p class="subtitle-foto">Chúng ta yêu nhau nhiều hơn</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">2021</p>
              <p class="subtitle-foto">Chúng ta nhìn về một hướng có nhiều quyết định trong đời</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">              
          <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto"> 2022</p>
              <p class="subtitle-foto">Thật khó nói</p>
            </div>
          </article> 
        </div>
      </div>   
          <!-- IMAGES -->
          <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div> 
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
        </div>
      </section>

      <section class="section-dark contact" id="rsvp">
        <div class="container">
          <div class="columns is-multiline">          
            <div class="column is-12 prolog">
              <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Xác nhận có mặt và chơi trò chơi</h1>
            </div>
            <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
              <p class="h2 subtitle">
                Đó là niềm vinh dự và hạnh phúc cho chúng tôi
                <br>
                Nếu bạn có thời gian tham dự, hãy nhấn nút ở dưới nhé
                <br>
                <br>
                Chúng ta có một trò chơi nho nhỏ
                <br>
                Bạn hãy chọn một con số may mắn ở ô này
                <br>
                <br>
                Điền tên của mình vô nhé :p
                <br> 
                Và đặt một ký hiệu đặc biệt để chúng tớ còn biết trao quà cho đúng người nè
                <br>
                <br>
               Chúc mọi người sẽ có thật nhiều sức khỏe ^^ :)
                </p>
     
              <!-- Điền Game trò chơi ở đây-->
              <form>
                Bạn sẽ chắc chắn tham gia chứ? <br>
                              
                <label ><input type="radio" id="ok2" name="drone" value="0"  >không đi</label>  
                <label ><input type="radio" id="ok" name="drone" value="1"  >có</label>   
                <br>
                <label for="fname">Tên của bạn:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="Codename">Mã code trên thiệp nè:</label><br> 
                <input type="text" id="Codename" name="Codename"><br>
                <label for="fnumber">Con số may mắn(1->999): </label><br>
                <input type="number" id="fnumber" name="fnumber" min="1" max="999"><br>
                <input type="button" id="myBtn" onclick="myFunction()" value="Gửi xác nhận">
              </form>  

              <div class="space40px"></div>

              <div class="space40px"></div>
              <div data-aos="fade-up" data-aos-easing="linear">
                <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
              </div>
              <div class="space40px"></div>
              <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
                Chúng tôi, những người hạnh phúc!
                <br>
                <a class="instagram":" href="https://instagram.com/congthinh95" target="_blank" alt="Instagram Sherly">
                  <i class="fab fa-instagram"></i> @Thịnh
                </a>
                &nbsp
                <a class="instagram" href="https://google.com" target="_blank" alt="Instagram Daeng">
                  <i class="fab fa-instagram"></i> @.....
                </a>
              </p>

            </div>
 
         </div>
        </div>
      </section>

    </div>


    <!-- Begin Footer -->
    <div class="footer">
      <div class="container">
        <a href="https://github.com/daengdoang/daeng-sherly-menikah" class="has-vertically-align">
          
        <a href="https://bulma.io" class="has-vertically-align">
          
        </a>
        <a href="https://www.netlify.com">
        
        </a>
      </div>
    </div>
    <!-- End Footer -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/menikah.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script> 
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
      
    </script>
    <script>
    function myFunction() {
      var confirm_go = document.getElementById("ok").checked;
      var confirm_go2 = document.getElementById("ok2").checked;
      if(confirm_go == true)
      { 
        var somayman = document.getElementById("fnumber").value;     
        if(somayman >0 & somayman<1000)
        {
          var ten = document.getElementById("fname").value;        
          var macode = document.getElementById("Codename").value;
          alert(" Chúc mừng bạn " + ten.toString() + " đã xác nhận thành công số may mắn " + somayman.toString() + " - " + macode.toString());        
        }
        else
        {
          alert("Vui long nhap dung so nhe ");
        }
      }
      else
      {
        alert("buồn quá bạn hông đi rồi :((");
      }
    }
    </script>  
  <audio autoplay loop src="music/music.mp3"></audio>  
  </body>
</html>
