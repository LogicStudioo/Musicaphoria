<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!--  /Link Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- icon Web -->
    <link rel="shortcut icon" href="Assets/Logo MP.svg" type="image/x-icon">
    <!-- Bootstrap (CSS) -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- Gfont inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap (JS) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="anime.min.js"></script>
    <title>Filmophoria | Movie Of The year</title>
  </head>
  <body>
    <!-- Navbar -->
    <header>
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
          <a>
            <img
              src="Assets/LogicLogo.svg"
              style="width: 120px; height: 50px; margin-top: 0px"
          /></a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div
              class="navbar-nav ms-auto"
              style="font-family: 'Poppins', sans-serif"
            >
              <a class="hoverable-text" href="#" data-link-alt="HOME">
                <span>HOME</span></a>
              <span class="d-flex align-items-center">•</span>
              <a class="hoverable-text" href="Detail.html" data-link-alt="WATCHLIST">
                <span>WATCHLIST</span></a>
              <span class="d-flex align-items-center">•</span>
              <a class="hoverable-text" href="collections/colect.html" data-link-alt="STREAM">
                <span>STREAM</span></a>
              <span style="margin: 20px;"></span>
              <a class="text-sign-up hoverable-text" href="#" data-link-alt="SIGN UP">
                <span>SIGN UP</span></a>
              <span class="d-flex align-items-center">•</span>
              <a class="text-sign-up hoverable-text" href="#" data-link-alt="SIGN IN">
                <span>SIGN IN</span></a>
              <!-- Button Sign in | Sign Up -->
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
  <!-- Container Movie -->
  <div class="top-movie-section">
    <!-- BaseContainer -->
    <div class="container-fluid">
      <div class="row justify-content-space-between">
        <!-- Left Navigation -->
        <!-- center -->
        <div class="col">
          <div class="Center-section float-left">
            <!-- Title & Sembarange -->
            <div class="row ">
              <div class="col-8">
                <h class="mx-1 movie-title ">Film Gallery</h>
              </div>
              <div class="col-4 mt-2 container-desc">
                <p class="movie-desc">Welcome to Filmophoria, your one-stop shop for all things movies! Whether you're a seasoned cinephile or a casual film buff, we have something for everyone</p>
              </div>
              <div class="col-8">
                <h class="ms-1 row movie-subtitle">Movie Collections</h>
              </div>
              <div class="col-4">
                <h class="mb-1 row desc-no">NO: 04126 - 065485</h>
              </div>
            </div>
            <!-- Movie Collection -->
            <section id="Movie-Cinema">
              <div class="movie-benner">
                <div class="video-container">
                    <div class="video-duration">
                      <div class="duration">00:00/00:00</div>
                      <div class="progress-bar" id="progress-bar">
                      </div> 
                      <div class="sub-progress-bar" id="sub-progress-bar"></div>
                    </div>
                    <video id="hover-video" src="Assets/Video/THE BOY AND THE HERON - Official Teaser Trailer.mp4" loop style="border-radius: 30px; width: 1625px;"></video>
                </div>
                <div class="benner-title">
                  <h4> Title (2023)</h4>
                  <p class="desc-movie-monster">A single mother demands answers from a school teacher when her son begins acting strangely. A fight at school causes even more trouble.</p>
                  <div class="diract">
                    <p class="dir-movie">Dir: Director</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- Right Navigation -->
        <div class="col">
          <div class="information">
            <div class="social-media-wrapper">
              <div class="instagram-wrapper">
                <a href="https://www.instagram.com/ko.logicstudio" target="_blank" rel="noopener noreferrer"   class="social-link">
                  <img src="Assets/Instagram.svg" alt="Instagram" class="#social-icon">
                </a>
              </div>
          
              <!-- Facebook Logo -->
              <div class="facebook-wrapper">
                <a href="https://www.facebook.com/your_page_here" target="_blank" rel="noopener noreferrer" data-link-alt="facebook" class="social-link">
                  <img src="Assets/Facebook.svg" alt="Facebook" class="social-icon">
                </a>
              </div>
              <div class="copyright">
                <h5>COPYRIGHT 2023 LOGICSTUDIO STAY ALL RIGHT RESERVED.</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="owl-Carousel">
    <div class="container-xxl">
      <div class="heading-carousel justify-content-center d-flex">
        <h1>Discover What You Want to Watch</h1>
      </div>
          <div class="slider">
            <!-- Item 1 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px; margin: 0;">PRINCESS MONONOKE</h1>
                  <p style="font-size: 14px; font-family: 'PPmori-semBold'; padding-left: 15px; padding-bottom: 10px; margin: 0; color: #7c7c7c;">134mnt (1997)</p>
                </div>
                <div class="col">
                  <a href="https://www.imdb.com/title/tt0119698/" target="_blank">
                    <button class="button-card">
                      <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                    </button>
                  </a>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 2 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px; margin: 0;">SPIRITED AWAY</h1>
                  <p style="font-size: 14px; font-family: 'PPmori-semBold'; padding-left: 15px; padding-bottom: 10px; margin: 0; color: #7c7c7c;">120mnt (2021)</p>
                </div>
                <div class="col" style="gap: 0;">
                    <a href="https://www.imdb.com/title/tt0245429/" target="_blank">
                      <button class="button-card">
                      <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                    </button>
                    </a>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/wp9659927-spirited-away-aesthetic-desktop-wallpapers.jpg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 3 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 4 Primary -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 5  -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- item 6 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 7 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
            </div>
            <!-- Item 8 -->
            <div class="item">
              <div class="row">
                <div class="col">
                  <h1 style="font-size: 24px; font-family: 'PPmori-semBold'; padding-left: 15px;">PRINCESS MONONOKE</h1>
                </div>
                <div class="col">
                  <button class="button-card">
                    <img src="Assets/Arrow.svg" style="height: 25px; width: 25px;" alt="">
                  </button>
                </div>
              </div>
              <div class="row" style="padding: 0; margin: 0; width: fit-content;">
                <img src="Assets/PM.svg" style="border-radius: 15px; padding: 0;" alt="">
              </div>
          </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="bento-box">
    <div class="container-xxl" style="height: fit-content; margin-bottom: 200px;">
      <div class="row" style=" height: 400p;">
        <div class="col-8" style="border: 1px solid blue; border-radius: 20px;">

        </div>
        <!-- base -->
        <div class="col-4" style="height: 400px; flex-direction: column; ">
          <!-- child -->
          <div class="col-4" style="border: 2px solid cadetblue; height: 190px; width: auto; border-radius: 20px;" >

          </div>
          <!-- child -->
          <div class="col-4" style="height: 190px; width: auto; border-radius: 20px; margin-top: 20px; flex-direction: column; padding: 10px;">
            <div class="col d-flex justify-content-center">
              <img class="Emote" style="width: 45px; height: 45px;" src="Assets/download_FILL0_wght400_GRAD0_opsz24.svg">
            </div>
            <div class="col d-flex justify-content-center" style="text-align: center;  padding: 10px; font-size: 16px;">
             "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim natus doloremque similique laborum"
            </div>
            <div class="col d-flex justify-content-center" style="text-align: center;">
              <a href="#"><button style="height: 30px; width: 200px; border-radius: 20px;">
                Download Now! <img src="Assets/download_FILL0_wght400_GRAD0_opsz24.svg" alt="">
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="card-collection">
    <div class="container-xl">
      <div class="row">
        <div class="col-8">
          <h1 class="heading-Card">Discover</h1>
        </div>
        <div class="col-4">
          <a href="Detail.html"><button class="float-end button-cards" type="button">Explore More </button></a>
        </div>
      </div>
        <div class="row cards ">
          <div class="col card collection1">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
          </div>
          <div class="col card collection1">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
          </div>
          <div class="col card collection1">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
          </div>
          <div class="col card collection1">
            <p class="tip">Hover Me</p>
            <p class="second-text">Lorem Ipsum</p>
        </div>
          <div class="col card collection1">
            <p class="tip">Hover Me</p>
            <p class="second-text">Lorem Ipsum</p>
        </div>
      </div>
      </div>
  </div>
</div>
</section>
<!-- Movie Collections -->
<div class="movie-collections">
  <div class="conatiner fluid">

  </div>
</div>
    </main>
    
    <footer>
      <div class="parallax">
        <div class="parallax-background"></div>
        <div class="content">
        </div>
      </div>
    </footer>
    

    <script src="script.js"></script>
  </body>
</html>