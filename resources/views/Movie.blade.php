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
                    <a href="profile">PROFILE</a>           
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

        
              <div class="head-section">

                <div class="video">
                 <p class="watch-here">NAME OF THE MOVIE</p> 
                  <div class="movie-trailer">               
                    <iframe  src="https://www.youtube.com/watch?v=shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>                      
                  </div>
                </div>

              <div class="movie-details">
                  <div class="detail-top">
                    <div class="cover-img"> 
                    <img alt="" src="img/Jhon Wick.jpg" />
                    </div>
                    <div class="display-rating">
                    <span class="star">★ &nbsp;</span>
                    <span class="rt" style="color: #fff;"> 9.0 </span>
                    </div>
                  </div>
                  <div class="genre">ACTION | CRIME </div>
                  <i class="released">Released Year: XX-XX-XXXX</i>
                  <p>
                  A short synopsis on the movie or some short description on it. A
                  short synopsis on the movie or some short description on it. A short
                  synopsis on the movie or some short description on it.
                  </p>  
              </div>

      </div>        


      <div class="ratings">
            <div class="rating-text">Rate this movie</div>
            <div class="rating-value-head">
                <div class="rating-value">1</div>
                <div class="rating-value">2</div>
                <div class="rating-value">3</div>
                <div class="rating-value">4</div>
                <div class="rating-value">5</div>
                <div class="rating-value">6</div>
                <div class="rating-value">7</div>
                <div class="rating-value">8</div>
                <div class="rating-value">9</div>
                <div class="rating-value">10</div>
            </div>   
      </div>



    <div class="textarea-container">
      <div class="input-box">
        <textarea class="text-field" placeholder="Write your review" required></textarea>
        <button class="send-button"><i class='bx bx-send bx-tada-hover bx-sm' style="color: #090909"></i></button>
      </div>
    </div>



      <div class="review-section">
                  <p class="review-head"> REVIEWES</p>
                  <ul>
                    <li>
                      <div class="review-1">
                        <div class="username">@username</div>
                        <div class="review-text">
                          <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams regardless of
                            whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids attitude
                            to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="review-1">
                        <div class="username">@username</div>
                        <div class="review-text">
                          <p>Amazing VFx and cinematography. The story is very well written and the acting is superb. The movie is very well paced and
                            the action scenes are very well choreographed. The movie is very well paced and the action scenes are very well choreographed.
                          </p>
                        </div>
                      </div>
                    </li> 
                    <li>
                      <div class="review-1">
                        <div class="username">@username</div>
                        <div class="review-text">
                          <p>Nice Movie, I like it.
                          </p>
                        </div>
                      </div>
                    </li>                    
                    <li>
                      <div class="review-1">
                        <div class="username">@username</div>
                        <div class="review-text">
                          <p>Exactly what I expected. A great movie with a great story. I would recommend this movie to anyone who likes action movies.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>      
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