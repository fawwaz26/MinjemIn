<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Landing Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="/style/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/payloan-icon.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/icofont.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="/style/css/responsive.css"/>
        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="/style/images/favicon.png">

    {{-- template bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </head>
    <body style="
    background-color: #1B2124; ">
        <!-- loading -->
        <div class="preloader text-center">
            <div class="la-ball-circus la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Header section -->
        <header class="header_1" id="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="#"><img src="style/images/logo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <nav class="mainmenu MenuInRight text-right">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">Beranda</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#tentang">Tentang</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#cara">Cara Kerja</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#faq">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-xs">
                        <div class="navigator_btn btn_bg text-right">
                            <a class="common_btn" href="/login">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header section -->

       <!-- section satu -->
        <section class="beranda header_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome_area">
                            <div class="welcome_text">
                                <h1>Solusi Pinjaman Terpercaya</h1>
                                <p>Sekarang pinjaman untuk mahasiswa dapat berjalan dengan cepat. Dapatkan pinjaman terpercaya untuk biaya pendidikan anda.</p>
                            </div>
                            <div class="welcome_button">
                                <a href="/login" class="common_btn">Ajukan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header_img">
                            <img src="style/images/home1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section satu-->

        <!-- Tentang -->
        <section class="tentang callToAction" id="tentang">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="sec_title">Tentang</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="tw-stretch-element-inside-column">
                            <div class="callImage">
                                <img src="style/images/home2.png" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="serviceArea">
                            {{-- <h3>Manager will contact you to clear the details.</h3> --}}
                            <p>
                                Minjemin merupakan aplikasi berbasis web yang disediakan untuk mahasiswa dalam rangka untuk memudahkan mahasiswa dalam peminjaman uang. Aplikasi ini menjalankan transaksi secara online, yang membuat mahasiswa tidak perlu mengantri lama di bank untuk melakukan peminjaman. 
                            </p>
                            <a href="#" class="common_btn">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tentang -->

                <!-- Common section -->
                <section class="tentang homeService_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="sec_title">Kenapa Harus Pinjam di Jasa Kami</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="singleService_4">
                                    <i class="flaticon-money"></i>
                                    <div class="clearfix"></div>
                                    <h4>Minjem Cicilan</h4>
                                    <p>Pinjam uang hingga 20 juta tanpa jaminan apapun.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="singleService_4">
                                    <i class="flaticon-mortgage-loan"></i>
                                    <div class="clearfix"></div>
                                    <h4>Aman & Terpercaya</h4>
                                    <p>Pinjam uang dengan jaminan aman.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="singleService_4">
                                    <i class="flaticon-loan-1"></i>
                                    <div class="clearfix"></div>
                                    <h4>Minjem Cepat</h4>
                                    <p>Pinjam uang tanpa antri dan tanpa ribet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Common section -->

                <!-- Common section -->
                <section class="commonSection callToAction_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="tw-stretch-element-inside-column">
                                    <div class="callImage">
                                        <img src="style/images/home3.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="serviceArea">
                                    <h3>Ajukan Pembiayaan Pendidikanmu.</h3>
                                    <p>
                                        Minjemin merupakan aplikasi berbasis web yang disediakan untuk mahasiswa dalam rangka untuk memudahkan mahasiswa dalam peminjaman uang. Aplikasi ini menjalankan transaksi secara online, yang membuat mahasiswa tidak perlu mengantri lama di bank untuk melakukan peminjaman. 
                                    </p>
                                    {{-- <a href="#" class="common_btn">Detail</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Common section -->
        
        <!-- cara kerja -->
        <section class="commonSection applicatioProces_2" id="cara">
                <div class="service_border">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="singleProcess_3 padTop_1">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="bg_number">
                                            <h1>01</h1>
                                        </div>
                                        <h4>Login</h4>
                                    </div>
                                    <div class="back">
                                        <div class="bg_number">
                                            <h1>01</h1>
                                        </div>
                                        <h4>Login</h4>
                                        <p>Lakukan login jika sudah memiliki akun dan nikmati layanan dari Minjemin..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singleProcess_3">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="bg_number">
                                            <h1>02</h1>
                                        </div>
                                        <h4>Verifikasi KTM/KTP</h4>
                                    </div>
                                    <div class="back">
                                        <div class="bg_number">
                                            <h1>02</h1>
                                        </div>
                                        <h4>Verifikasi KTM/KTP</h4>
                                        <p>Pastikan kamu terdaftar pada daftar mahasiswa dengan adanya Kartu Tanda Mahasiswa. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singleProcess_3 lastBox">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="bg_number">
                                            <h1>03</h1>
                                        </div>
                                        <h4>Perjanjian</h4>
                                    </div>
                                    <div class="back">
                                        <div class="bg_number">
                                            <h1>03</h1>
                                        </div>
                                        <h4>Perjanjian</h4>
                                        <p>Selamat pembiayaan kamu disetujui ! Sekarang kamu bisa fokus pada pendidikan mu. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cara kerja -->



        <!-- Common section -->
        <section class="commonSection latestPostSec" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="sec_title">F.A.Q</h2>
                        {{-- <p class="sec_desc">
                            Simply import the sample files we ship with the theme and the core structure for your site is already<br>
                            mind that even if you don’t use the demo content, you’ll be much better off than with most other
                        </p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu minjemin ?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara mengajukan pinjaman ?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Berapa nominal pinjaman yang dapat diajukan dan berapa lama jangka waktu pinjaman ?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Common section -->

        <!-- footer section -->
        <footer class="footer footer_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <aside class="widget about_widgets">
                            <a href="#"><img src="style/images/logo.png" alt=""/></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit sed hendrerit est congue aenean.</p>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <aside class="widget links">
                            <h4>Tentang kami</h4>
                            <ul>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Team</a></li>
                                {{-- <li><a href="#">Security</a></li>
                                <li><a href="#">Report Bug</a></li>
                                <li><a href="#">Pricing</a></li> --}}
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <aside class="widget links">
                            <h4>Bantuan</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Cara kerja</a></li>
                                <li><a href="#">Pengajuan</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <aside class="widget links">
                            <h4>Legal</h4>
                            <ul>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <aside class="widget links">
                            <h4>Hubungi Kami</h4>
                            <div class="icon">
                                <ul>
                                    <li><a href="#" class="fa fa-github"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section -->

        <!-- Copyright -->
        <section class="copyright copyright_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>Copyright &copy; 2021 <span>IPB UNIVERSITY.</span> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        <!-- Include All JS -->
        <script src="/style/js/jquery.js"></script>
        <script src="/style/js/bootstrap.min.js"></script>
        <script src="/style/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/style/js/jquery.themepunch.tools.min.js"></script>
        <script src="/style/js/jquery-ui.js"></script>
        <script src="/style/js/shuffle.js"></script>
        <script src="/style/js/slick.js"></script>
        <script src="/style/js/gmaps.js"></script>
        <script src="/style/https://maps.google.com/maps/api/js?key=AIzaSyCysDHE3s4Qw3nTh9o58-2mJcqvR6HV8Kk"></script>
        <script src="/style/js/owl.carousel.js"></script>
        <script src="/style/js/theme.js"></script>
    </body>
</html>