 <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    {{-- <link rel="stylesheet" href="./home.css" /> --}}
    <link rel="stylesheet" href="home.css"/>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight"
     rel="stylesheet"> --}}
 <title>ChitraFlix</title>
</head>


<body>
    <div class="home">
        <header>
            <div class="logo">
                <img src="img/chitraflix-logo(1).png" width="200px" alt="Chitraflix logo">
            </div>
            <div class="search">
                <input type="text" placeholder="Search" >
                <i class='bx bx-search bx-tada-hover bx-sm' style="color: #090909"></i>
            </div>
            <nav class="navbar">             
                    <a href="#">HOME</a>
                    <a href="#">MOVIES</a>
                    <a href="#">GENRE</a>
                    <a href="#">WATCHLIST</a>           
            </nav>
            <div class="login">
                <button>Log In</button>
            </div>
            <div class="signup">
                <button>Sign Up</button>
            </div>
        </header>
        <div class="index">
            <div class="slider">
                <div class="slide">
                    <img src="img/slider-img.png" alt="Image 1">
                </div> 
                <div class="box"> 
                  <b class="rate-and-share-container">
                    <p class="rate-and-share">Rate and Share Reviews on Movies.</p>
                    <p class="rate-and-share">
                      Keep track of what you’ve watched and
                    </p>
                    <p class="rate-and-share">what’s on your WatchList.</p>
                  </b>
                  <div class="get-started" id="getStartedContainer">
                    <div class="bg14"></div>
                    <button class="getstarted-txt">Get Started</div>
                  </div>
                  <!-- <div class="a-social-network">
                    A social Network for movie Geeks.
                  </div> -->
                </div>               
              </div>
              <div class="title">
                <p class="top-rated-on">FEATURED THIS WEEK</p>
                <p class="more">More</p>
              </div>
              <div class="featured-this-week">
                <div class="movie-card">
                    <img src="img/the boys.jpg" alt="Movie 1">
                    <div class="movie-info">
                     <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">THE BOYS</div>
                    </div>
                </div>          
                <div class="movie-card">
                    <img src="img/ant man.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">ANT-MAN</div>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="img/thor love of thunder.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">THOR</div>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="img/avengers.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">AVENGERS</div>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="img/spiderman.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">SPIDERMAN</div>
                    </div>
                </div>   
                <div class="movie-card">
                  <img src="img/interstellar-p963317.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">INTERSTELLER</div>
                  </div>
              </div>             
              </div>
              <div class="section-video">
                <div class="video">
                  <p class="whats-new">What’s new</p>
                  <div class="movie-trailer">               
                    <video src="video/john wick.webm" autoplay muted></video>                      
                  </div>
                </div>
                <div class="video-reviews ">
                  <div class="video-reviews-header">
                    <p>POPULAR REVIEWS</p>

                  </div>
                  <ul>
                    <li>
                      <div class="reviewer1" style="padding-top: none; margin-top: -16px;">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="reviews">@username</div>
                        <div class="username">53 reviews</div>
                      </div>
                    </li>
                  </ul>      
                </div>
              </div>

              <div class="title1">
                <p class="top-rated-on"> TOP RATED</p>
                <p class="more">More</p>
              </div>
              <div class="toprated">
                <div class="movie-card1">
                  <img src="img/thor love of thunder.jpg" alt="Movie 1">
                  <div class="movie-info">
                   <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">THOR</div>
                  </div>
              </div>          
              <div class="movie-card1">
                  <img src="img/breaking_bad-p1089490.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                   <span class="span"> 9.0</span>
                   <div class="name-of-the">BREAKING BAD</div>
                  </div>
              </div>
              <div class="movie-card1">
                  <img src="img/la_casa_de_papel-p1297455.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">MONEY HEIST</div>
                  </div>
              </div>
              <div class="movie-card1">
                  <img src="img/topgun.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">TOPGUN</div>
                  </div>
              </div>
              <div class="movie-card1">
                  <img src="img/kota factory.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">KOTA FACTORY</div>
                  </div>
              </div>
              <div class="movie-card1">
                <img src="img/avengers.jpg" alt="Movie 2">
                <div class="movie-info">
                <span style="color: #FBBD12;">★</span>
                <span class="span"> 9.0</span>
                <div class="name-of-the">AVENGERS</div>
                </div>
            </div>
        </div>
        <div class="footer">
          <div class="icon">
            <i class="fab fa-facebook"></i> &nbsp; &nbsp;
            <i class="fab fa-youtube"></i> &nbsp; &nbsp;
            <i class="fab fa-instagram"></i> &nbsp; &nbsp;
            <i class="fab fa-tiktok"></i> &nbsp; &nbsp;
            <i class="fab fa-discord"></i> &nbsp; &nbsp;
            <i class="fab fa-twitter"></i> &nbsp; &nbsp;
            <i class="fas fa-comments"></i>
        </div>
        <div class="copyright">
          © Copyright CHITRAFLIX | All rights reserved.
        </div>
        <div class="privacy-policy">
          Privacy Policy | About | Contact | FAQs
        </div>
       </div>
    </div>


    <script>
        var item1Container1 = document.getElementById("item1Container1");
        if (item1Container1) {
          item1Container1.addEventListener("click", function (e) {
            // Please sync "Particular Movie" to the project
          });
        }
        
        var getStartedContainer = document.getElementById("getStartedContainer");
        if (getStartedContainer) {
          getStartedContainer.addEventListener("click", function (e) {
            // Please sync "login" to the project
          });
        }
        
        var signUpContainer = document.getElementById("signUpContainer");
        if (signUpContainer) {
          signUpContainer.addEventListener("click", function (e) {
            // Please sync "sign up" to the project
          });
        }
        
        var loginTxtText = document.getElementById("loginTxtText");
        if (loginTxtText) {
          loginTxtText.addEventListener("click", function (e) {
            // Please sync "login" to the project
          });
        }
        
        var moviesTxtText = document.getElementById("moviesTxtText");
        if (moviesTxtText) {
          moviesTxtText.addEventListener("click", function (e) {
            // Please sync "Movies" to the project
          });
        }
        </script>
</body>
</html>