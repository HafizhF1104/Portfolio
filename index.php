<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio | Hafizh Fadhlurrohman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
      .jumbotron {
        padding-top: 6rem;
        background-color: #f0f0f0;
      }
      #project {
        background-color: #f0f0f0;
      }
      section {
        padding-top: 5rem;
      }
      .social-icon{
        font-size: 30px;
        margin-right: 0.2cm;
        margin-left: 0.2cm;
      }
      .logo-container {
            position: absolute;
            top: -17px; 
            left: 80px; 
            z-index: 2;
            padding: 10px 20px;
            color: #000;
            font-size: 3em;
            font-weight: bold;
            transition: all 0.5s ease;
        }
        .logo-container2 {
            position: absolute;
            top: -7px; 
            left: 110px; 
            z-index: 2;
            padding: 10px 20px;
            color: #000;
            font-size: 3em;
            font-weight: bold;
            transition: all 0.5s ease;
            opacity: 0%;
        }
        .logo-small {
          width: 130px !important;
          height:75px !important;
          top: -7px !important;
          left: 110px !important;
          opacity: 0%;
        }
        .logo-small2 {
          width: 230px !important;
          height:70px !important;
          top: -7px !important;
          left: 110px !important;
          opacity: 100%;
        }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #000;">
      <div class="container">
        <img src="img/logo1.png" class="logo-container" width="255" height="150" alt="Hafizh" id="logo">
        <img src="img/logo4.png" class="logo-container2" width="230" height="70" alt="Hafizh" id="logo2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section id="home" class="jumbotron text-center mt-4">
      <img src="img/Biru3.jpg" alt="Hafizh Fadhlurrohman" width="200" class="img-thumbnail rounded-circle" data-aos="zoom-in-down" data-aos-duration="1000" />
      <h1 class="display-4" data-aos="zoom-out" data-aos-duration="1000" style="font-weight: 400;">Hafizh Fadhlurrohman</h1>
      <p class="lead" data-aos="fade-up" data-aos-duration="1000">Fresh Graduate | Computer Engineering</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L0,96L36.9,96L36.9,128L73.8,128L73.8,32L110.8,32L110.8,32L147.7,32L147.7,32L184.6,32L184.6,256L221.5,256L221.5,224L258.5,224L258.5,96L295.4,96L295.4,256L332.3,256L332.3,320L369.2,320L369.2,64L406.2,64L406.2,224L443.1,224L443.1,224L480,224L480,128L516.9,128L516.9,32L553.8,32L553.8,32L590.8,32L590.8,320L627.7,320L627.7,128L664.6,128L664.6,288L701.5,288L701.5,128L738.5,128L738.5,128L775.4,128L775.4,32L812.3,32L812.3,256L849.2,256L849.2,128L886.2,128L886.2,160L923.1,160L923.1,64L960,64L960,0L996.9,0L996.9,224L1033.8,224L1033.8,96L1070.8,96L1070.8,192L1107.7,192L1107.7,32L1144.6,32L1144.6,320L1181.5,320L1181.5,256L1218.5,256L1218.5,224L1255.4,224L1255.4,64L1292.3,64L1292.3,288L1329.2,288L1329.2,96L1366.2,96L1366.2,128L1403.1,128L1403.1,224L1440,224L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-4 mt-5">
          <div class="col">
            <h2 data-aos="zoom-in" data-aos-duration="1000">About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-8">
            <p data-aos="fade-right" data-aos-duration="1000">Lulusan D3 Teknik Komputer Politeknik Negeri Padang dengan fokus pada pengembangan dan implementasi sistem Internet of Things (IoT). Memiliki pengalaman mengembangkan proyek berbasis ESP32 yang mengintegrasikan sensor, aktuator, dan sistem monitoring. Memiliki kemampuan dasar dalam hardware troubleshooting dan networking serta pengalaman bekerja di lingkungan profesional. Tertarik pada pengembangan sistem IoT, embedded system, dan solusi otomasi berbasis perangkat keras.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f0f0f0"
          fill-opacity="1"
          d="M0,128L0,128L36.9,128L36.9,160L73.8,160L73.8,64L110.8,64L110.8,64L147.7,64L147.7,192L184.6,192L184.6,288L221.5,288L221.5,288L258.5,288L258.5,160L295.4,160L295.4,192L332.3,192L332.3,192L369.2,192L369.2,224L406.2,224L406.2,256L443.1,256L443.1,256L480,256L480,128L516.9,128L516.9,96L553.8,96L553.8,224L590.8,224L590.8,160L627.7,160L627.7,96L664.6,96L664.6,192L701.5,192L701.5,256L738.5,256L738.5,192L775.4,192L775.4,32L812.3,32L812.3,128L849.2,128L849.2,192L886.2,192L886.2,160L923.1,160L923.1,128L960,128L960,96L996.9,96L996.9,224L1033.8,224L1033.8,224L1070.8,224L1070.8,96L1107.7,96L1107.7,128L1144.6,128L1144.6,224L1181.5,224L1181.5,128L1218.5,128L1218.5,128L1255.4,128L1255.4,256L1292.3,256L1292.3,128L1329.2,128L1329.2,192L1366.2,192L1366.2,192L1403.1,192L1403.1,96L1440,96L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 data-aos="zoom-out" data-aos-duration="1000">Project</h2>
          </div>
        </div>
        
        <hr><br><br>
        <div class="row g-0 fs-6 text-left">
          <div class="col-sm-6 col-md-7">
            <h2 data-aos="fade-left" data-aos-duration="1000">Sistem Solar Water Heater Otomatis berbasis IoT & Single-Axis Solar Tracker</h2>
            <h5 data-aos="fade-left" data-aos-duration="1000">~ Project Tugas Akhir ~</h5>
            <p data-aos="fade-right" data-aos-duration="1000">
              <ul data-aos="fade-right" data-aos-duration="1000">
                <li>Merancang sistem Solar Water Heater otomatis menggunakan mekanisme single-axis tracker dan metode continuous dripping</li>
                <li>Mengimplementasikan Solar Position Algorithm untuk mendukung pengaturan posisi tracker</li>
                <li>Mengintegrasikan ESP32, K-Type Thermocouple dengan MAX6675, LDR, dan servo MG996R untuk mendukung pengukuran, pengendalian, dan otomatisasi sistem</li>
              </ul>
          </p>            
          </div>
          <div class="col-sm-6 col-md-2"></div>
          <div class="col-6 col-md-3">

        <!-- carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="5000">
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/P1-1.jpeg" class="d-block w-100" alt="TA">
    </div>
    <div class="carousel-item">
      <img src="img/P1-2.jpeg" class="d-block w-100" alt="TA">
    </div>
    <div class="carousel-item">
      <img src="img/P1-3.jpeg" class="d-block w-100" alt="TA">
    </div>
    <div class="carousel-item">
      <img src="img/P1-4.jpeg" class="d-block w-100" alt="TA">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- carousel -->

          </div>
        </div>
        <br><br><hr><br><br>
        <div class="row g-0 fs-6 text-right">
           <div class=" col-sm-6 col-md-3">

        <!-- carousel -->
    <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="5000">
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/P2-1.jpeg" class="d-block w-100" alt="PBL">
    </div>
    <div class="carousel-item">
      <img src="img/P2-2.jpeg" class="d-block w-100" alt="PBL">
    </div>
    <div class="carousel-item">
      <img src="img/P2-3.jpeg" class="d-block w-100" alt="PBL">
    </div>
    <div class="carousel-item">
      <img src="img/P2-4.png" class="d-block w-100" alt="PBL">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- carousel -->

          </div>
          <div class="col-sm-6 col-md-2"></div>
          <div class="col-6 col-md-7">
          <h2 style="text-align: right;" data-aos="fade-right" data-aos-duration="1000">Sistem Fogponik Cerdas</h2>
          <h5 data-aos="fade-right" data-aos-duration="1000" style="text-align: right;">~ Project-Base Learning (PBL) ~</h5>
            <p data-aos="fade-left" data-aos-duration="1000" style="text-align: right;">
              <ul style="direction:rtl" data-aos="fade-left" data-aos-duration="1000">
                <li>Membuat sistem budidaya tanaman menggunakan kabut mikro untuk penyaluran nutrisi</li>
                <li>Mengintegrasikan DHT22, mist maker, TDS, pH, Ultrasonic, dan ESP32 untuk monitoring IoT</li>
              </ul>
          </p>            
          </div>          
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L0,32L36.9,32L36.9,160L73.8,160L73.8,288L110.8,288L110.8,224L147.7,224L147.7,256L184.6,256L184.6,32L221.5,32L221.5,192L258.5,192L258.5,256L295.4,256L295.4,192L332.3,192L332.3,224L369.2,224L369.2,32L406.2,32L406.2,0L443.1,0L443.1,160L480,160L480,160L516.9,160L516.9,128L553.8,128L553.8,96L590.8,96L590.8,96L627.7,96L627.7,224L664.6,224L664.6,288L701.5,288L701.5,192L738.5,192L738.5,288L775.4,288L775.4,96L812.3,96L812.3,128L849.2,128L849.2,64L886.2,64L886.2,256L923.1,256L923.1,64L960,64L960,256L996.9,256L996.9,192L1033.8,192L1033.8,32L1070.8,32L1070.8,288L1107.7,288L1107.7,64L1144.6,64L1144.6,96L1181.5,96L1181.5,160L1218.5,160L1218.5,128L1255.4,128L1255.4,128L1292.3,128L1292.3,32L1329.2,32L1329.2,192L1366.2,192L1366.2,128L1403.1,128L1403.1,128L1440,128L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section>
     
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#000"
          fill-opacity="1"
          d="M0,96L34.3,117.3C68.6,139,137,181,206,202.7C274.3,224,343,224,411,192C480,160,549,96,617,85.3C685.7,75,754,117,823,165.3C891.4,213,960,267,1029,250.7C1097.1,235,1166,149,1234,128C1302.9,107,1371,149,1406,170.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer id="contact" class="text-white text-center pb-5" style="background-color: #000;">
     
      <p><span style="font-size: 30px;">Contact</span> <br>
        <a href="https://wa.me/082286063872" target="_blank"  class="social-icon"><i class="bi bi-whatsapp text-white"></i></a>
        <a href="https://www.instagram.com/hafizhfadhlurrohman?igsh=ZWhuc2J0bnFqMGt0" target="_blank" class="social-icon"><i class="bi bi-instagram text-white"></i></a>
        <a href="http://t.me/Phoenix1104" target="_blank" class="social-icon"><i class="bi bi-telegram text-white"></i></a>
        <a href="https://www.facebook.com/hafizh.fadhlurrohman.02?mibextid=ZbWKwL" target="_blank" class="social-icon"><i class="bi bi-facebook text-white"></i></a>
        <a href="https://discordid.netlify.app/?id=695491369870950400" target="_blank" class="social-icon"><i class="bi bi-discord text-white"></i></a>
        <a href="mailto:hafizh.fadhlurrohman123@gmail.com" target="_blank" class="social-icon"><i class="bi bi-envelope text-white"></i></a>
        <br><br>
        Created by
        <i class="bi bi-controller"></i>
        Hafizh
      </p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", function () {
          let current = "";

          sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop - 50) {
              current = section.getAttribute("id");
            }
          });

          navLinks.forEach((link) => {
            link.classList.remove("active");
            link.removeAttribute("aria-current");
            if (link.getAttribute("href").substring(1) === current) {
              link.classList.add("active");
              link.setAttribute("aria-current", "page");
            }
          });
        });
      });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });

        function toggleSmallLogo(isSmall) {
        var logo = document.getElementById('logo');
        var logo2 = document.getElementById('logo2')
        if (isSmall) {
          logo.classList.add('logo-small');
          logo2.classList.add('logo-small2');
        } else {
          logo.classList.remove('logo-small');
          logo2.classList.remove('logo-small2');
        }
        }

        document.addEventListener('scroll', function() {
            const aboutSection = document.getElementById('about');
            const logo = document.querySelector('.logo-container');
            const rect = aboutSection.getBoundingClientRect();

            if (rect.top <= 50) {
              toggleSmallLogo(true); // Menjadikan logo kecil
             
            } else {
              toggleSmallLogo(false); // Mengembalikan logo ke ukuran aslinya
            
            }
        });
    </script>
    
  </body>
</html>
