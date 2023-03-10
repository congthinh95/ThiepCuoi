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
                  Ng??y t??? ch???c
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#lokasi">
                  ?????a ??i???m
                </a>
              </div>
              
              <div class="navbar-item">
                <a class="navbar-item" href="#tentang-sherly-daeng">
                  C??u truy???n t??nh y??u
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#rsvp">
                  L???i k???t v?? mini game
                </a>
              </div>
            </div>
          </div>
        </nav>

        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">L??? Th??nh H??n</h1>
            <h2 class="title">C??ng Thinh v?? em</h2>
            <h4 class="subtitle tempatwaktu">
              
                Tp H??? Ch?? Minh, 28/12/2023 
                </br>
                Nh?? H??ng ABC 
                </br>
                V???i nh???ng ??i???u ng???t ng??o nh???t
              
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
                day: 'ng??y',
                days: 'ng??y'
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
                    <a href="#home">Trang Ch???</a>
                  </li>
                  <li>
                    <a href="#Waktu">Ng??y t??? ch???c</a>
                  </li>
                  <li>
                    <a href="#lokasi">V??? tr??</a>
                  </li>
                  <li>
                    <a href="#tentang-sherly-daeng">K??? ni???m c???a ch??ng ??m</a>
                  </li>

                  <li>
                    <a href="#rsvp">X??c nh???n v?? ch??i mini game</a>
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
          C???m ??n m???i ng?????i ???? tham d??? ????m c?????i c???a ch??ng ??mmmmmmm
          <br />
          Th???t h??nh ph??c v?? vinh d??? bi???t bao khi c?? s??? g??p m???t c???a m???i ng?????i trong ng??y tr???ng ?????i n??y, 
          <br />
          Nh??n d???p ng??y tr???ng ?????i n??y ch??ng em c?? tr?? ch??i nho nh??? cho qu?? d??? :D :D 
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
            <h1 class="title has-text-centered section-title">Ng??y t??? ch???c</h1>
          </div>
          <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
            <div
              class="column is-4 has-vertically-aligned-content">
             
              <p class="is-larger has-text-centered">
                  <div class="waktu tanggal-hari has-text-centered">Th??? X</div> 
                  <div class="waktu tanggal-angka has-text-centered">28</div>
                  <div class="waktu tanggal-bulan has-text-centered">Dec 2023</div>
              </p>
            
            </div>
            <div class="column is-4 has-vertically-aligned-content">
            
              <p class="waktu is-larger has-text-centered">
                Gi??? b???t ?????u l???:
                <br>
                <strong>18.00 pm</strong>
              </p>
            
            </div>

            <div class="column is-4 has-vertically-aligned-content">
              
              <h1 class="waktu is-larger has-text-centered">
                Gi??? khai ti???c:
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
            <h1 class="title has-text-centered section-title">?????a ??i???m</h1>
            <p class="tempat is-larger has-text-centered">
              <strong>Nh?? H??ng ABCD</strong>
              <br>
              s??? A ???????ng 33 ph?????ng 55
              <br>
              S???nh s??? N t???i nh?? h??ng abcdefgh
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
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">C??u truy???n t??nh y??u</h1>
            

          
          <!-- IMAGES -->  
        <div class=" tile">
          <div class="tile is-ancestor">
          <div class="tile is-parent">
            <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">Dec 2016</p>
                <p class="subtitle-foto">
                  Hai ch??ng ta g???p nhau v?? b???t ?????u c??u truy???n  <a href="https://google.com" target="_blank">t??nh y??u</a>
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
                  Tr???i qua nhi???u s??? y??u th????ng.
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
                  C?? nhi???u bi???n c??? v?? ch??ng ta ???? v?????t qua
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
              <p class="subtitle-foto">Ch??ng ta y??u nhau nhi???u h??n</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">2021</p>
              <p class="subtitle-foto">Ch??ng ta nh??n v??? m???t h?????ng c?? nhi???u quy???t ?????nh trong ?????i</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">              
          <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto"> 2022</p>
              <p class="subtitle-foto">Th???t kh?? n??i</p>
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
              <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">X??c nh???n c?? m???t v?? ch??i tr?? ch??i</h1>
            </div>
            <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
              <p class="h2 subtitle">
                ???? l?? ni???m vinh d??? v?? h???nh ph??c cho ch??ng t??i
                <br>
                N???u b???n c?? th???i gian tham d???, h??y nh???n n??t ??? d?????i nh??
                <br>
                <br>
                Ch??ng ta c?? m???t tr?? ch??i nho nh???
                <br>
                B???n h??y ch???n m???t con s??? may m???n ??? ?? n??y
                <br>
                <br>
                ??i???n t??n c???a m??nh v?? nh?? :p
                <br> 
                V?? ?????t m???t k?? hi???u ?????c bi???t ????? ch??ng t??? c??n bi???t trao qu?? cho ????ng ng?????i n??
                <br>
                <br>
               Ch??c m???i ng?????i s??? c?? th???t nhi???u s???c kh???e ^^ :)
                </p>
     
              <!-- ??i???n Game tr?? ch??i ??? ????y-->
              <form>
                B???n s??? ch???c ch???n tham gia ch???? <br>
                              
                <label ><input type="radio" id="ok2" name="drone" value="0"  >kh??ng ??i</label>  
                <label ><input type="radio" id="ok" name="drone" value="1"  >c??</label>   
                <br>
                <label for="fname">T??n c???a b???n:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="Codename">M?? code tr??n thi???p n??:</label><br> 
                <input type="text" id="Codename" name="Codename"><br>
                <label for="fnumber">Con s??? may m???n(1->999): </label><br>
                <input type="number" id="fnumber" name="fnumber" min="1" max="999"><br>
                <input type="button" id="myBtn" onclick="myFunction()" value="G???i x??c nh???n">
              </form>  

              <div class="space40px"></div>

              <div class="space40px"></div>
              <div data-aos="fade-up" data-aos-easing="linear">
                <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
              </div>
              <div class="space40px"></div>
              <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
                Ch??ng t??i, nh???ng ng?????i h???nh ph??c!
                <br>
                <a class="instagram":" href="https://instagram.com/congthinh95" target="_blank" alt="Instagram Sherly">
                  <i class="fab fa-instagram"></i> @Th???nh
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
          alert(" Ch??c m???ng b???n " + ten.toString() + " ???? x??c nh???n th??nh c??ng s??? may m???n " + somayman.toString() + " - " + macode.toString());        
        }
        else
        {
          alert("Vui long nhap dung so nhe ");
        }
      }
      else
      {
        alert("bu???n qu?? b???n h??ng ??i r???i :((");
      }
    }
    </script>  
  <audio autoplay loop src="music/music.mp3"></audio>  
  </body>
</html>
