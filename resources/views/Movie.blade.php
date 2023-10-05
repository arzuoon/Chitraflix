 <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="NavFoot.css"/>
    <link rel="stylesheet" href="movie.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight"
     rel="stylesheet"> --}}
 <title>Movie</title>
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
                    <a href="home">HOME</a>
                    <a href="movies">MOVIES</a>
                    <a href="genre">GENRE</a>
                    <a href="profile">WATCHLIST</a>           
            </nav>
            <a href="login"> 
            <div class="login">
                <button>Log In</button>
            </div>
            </a>

            <a href="signup"> 
            <div class="signup">
                <button>Sign Up</button>
            </div>
            </a>
        </header>

        
        <div class="movie-name">Movie Name</div>
        <div class="container">
        <div class="movie-trailer">               
            <video src="video/john wick.webm" autoplay muted></video>                      
          </div>
          <div class="movie-details" id="movie-details">
            <div class="detail-image-rating">
              <div class="rating">
                <img class="cover-icon" alt="" src="img/Jhon Wick.jpg" />
                <div class="display-rating">
                  <span style="color:#FBBD12;">★</span>
                  <span class="span" style="color: #fff;">  9.0  </span>
                </div>
              </div>
              <div class="genre">GENRE | GENRE | GENRE</div>
              <i class="released">Released Year: XX-XX-XXXX</i>
              <p>
                A short synopsis on the movie or some short description on it. A
                short synopsis on the movie or some short description on it. A short
                synopsis on the movie or some short description on it.
              </p>  
          </div>
        </div>  
        </div>
        <div class="ratings">
            <div class="give-your-ratings">Give your Ratings</div>
            <div class="rating1">
                <div class="rating-txt">1</div>
              </div>
              <div class="rating2">
                <div class="rating-txt1">2</div>
              </div>
              <div class="rating3">
                <div class="rating-txt1">3</div>
              </div>
              <div class="rating4">
                <div class="rating-txt1">4</div>
              </div>
              <div class="rating5">
                <div class="rating-txt1">5</div>
              </div>
              <div class="rating6">
                <div class="rating-txt1">6</div>
              </div>
              <div class="rating7">
                <div class="rating-txt6">7</div>
              </div>
              <div class="rating8">
                <div class="rating-txt1">8</div>
              </div>
              <div class="rating9">
                <div class="rating-txt1">9</div>
              </div>
              <div class="rating10">
                <div class="rating-txt9">10</div>
             </div>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Write your review"required>
    </div>
    <div class="post">
        <button>POST REVIEW</button>
    </div> 
    <h4>Reviews</h4>
    <div class="review">   
        <ul>
            <li>
              <div class="reviewer1" style="padding-top: none; margin-top: -16px;">
                <div class="reviews">@username</div>
                <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams regardless of
                    whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids attitude
                    to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
                </p>
              </div>
            </li>
            <li>
                <div class="reviewer1" style="padding-top: none; margin-top: -16px;">
                  <div class="reviews">@username</div>
                  <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams regardless of
                      whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids attitude
                      to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
                  </p>
                </div>
              </li>
              <li>
                <div class="reviewer1" style="padding-top: none; margin-top: -16px;">
                  <div class="reviews">@username</div>
                  <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams regardless of
                      whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids attitude
                      to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
                  </p>
                </div>
              </li>
              <li>
                <div class="reviewer1" style="padding-top: none; margin-top: -16px;">
                  <div class="reviews">@username</div>
                  <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams regardless of
                      whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids attitude
                      to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
                  </p>
                </div>
              </li>
          </ul>  
    </div>
    </div>


        <div class="footer">
          <div class="icon">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a> &nbsp; &nbsp;
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a> &nbsp; &nbsp;
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> &nbsp; &nbsp;
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
          </div>
        <div class="copyright">
          © Copyright <a href="home">CHITRAFLIX</a> | All rights reserved.
        </div>
        <div class="privacy-policy">
          <a href="privacy"> Privacy Policy</a> | <a href="about">About</a> | <a href="contact">Contact</a> | <a href="faq">FAQs</a>
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