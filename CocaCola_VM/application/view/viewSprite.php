<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../application/css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom_home.css">

    <!-- Link in some fonts — Not used because we finally installed the fonts
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    -->

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="./application/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="./application/css/style.css">

    

    <title>Lab 6 Responsive Mobile First Web 3D Applications 2020</title>

  </head>
  <body>
    
    
    <!-- Logo and navigation bar -->
    <nav  class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index_c.html">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Great Britain</h3>
          <p>Welcome to Coca Cola X3D Museum</p>
          </a>

          <!-- Link Menu item button to the links class navbar-collapse selector -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <!-- nothing changed from Lab 5 -->
              <li class="nav-item">
                <a class="nav-link active" href="home">Home</a>
              </li>
              <!-- Added navAbout ID, do we use this? -->
              <li class="nav-item">
                  <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
              </li>

              
        
              <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
              </li>
            </ul>
          </div>

        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
      </div>
    </nav>

    <HR align=center width=100% color=#987cb9 SIZE=1>
    
        
   

    <div class ="title1">
      
      <img src="../application/assets/images/sprite-500ml-2023.png" class="p2">
    </div>

    <!-- Start 3D App SPA Contents -->
      <div class="container main_contents"> <!-- Start SPA Contents -->
        

        <!-- Start X3D models and 3D Image Gallery -->
        
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                           <li class="nav-item">
                          <a id="navCoke" class="nav-link" href="ColaCan">Coke</a>
                          </li>
                          <li class="nav-item">
                          <a id="navSprite" class="nav-link active" href="Sprite">Sprite</a>
                          </li>
                          <li class="nav-item">
                          <a id="navPepper" class="nav-link" href="Fanta">Fanta</a>
                          </li>
                      </ul>
                      </div>

                      <div class="card-body">
                      <!-- sprite X3D model -->
                      <div id="sprite">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d  id="wire">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite_c.x3d" > </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                      </div>

                      
                      
                      </div>
                  </div>
              </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="#">Gallery</a>
                          </li>
                      </div>
                      <div class="card-body">
                          <div class="card-title title_gallery drinksText"></div>
                          <div class="gallery" id="gallery"></div>
                          <div class="card-text description_gallery drinksText"></div>
                      </div>
                  </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
          </div> <!-- End row for X3D Model and Gallery -->
         <!-- End X3D Models and Gallery -->
    
        <!-- Start the interaction panels -->
        
                <!-- Column for the camera view controls -->
                <div class="col-sm-3">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                            <a id="camera-link" class="nav-link active" href="#">Camera</a>
                          </li>
                          </ul>
                        </div>
                        <div id="camera-dropdown" style="display: none;">
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a  class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a  class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a  class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a  class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                      </div>
                </div>

                <div class="col-sm-3">
                  <div class="card text-left">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item">
                          <a class="nav-link active" href="#" id="texture-link">Texture</a>
                        </li>
                        </ul>
                      </div>
                      <div class="card-body" id="texture-card" style="display:none">
                        <div class="card-Title x3dCamera_Subtitle drinksText">
                          <h3>Texture Select</h3>
                        </div>                            
                        <a class="btn btn-success btn-responsive" onclick="original1();">Original</a>
                        <a class="btn btn-primary btn-responsive" onclick="zero1();">Zero</a>
                        <a class="btn btn-secondary btn-responsive" onclick="old1();">Old</a>
                        <div class="card-text x3dCameraDescription drinksText">
                          <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                        </div>
                      </div>
                    </div>
              </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-3">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#" id="animation-link">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body" id="animation-card" style="display:none">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a  class="btn btn-outline-dark btn-responsive" onclick="spin();">Rotation</a>
                          <a  class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-3">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active " href="#"  data-toggle="dropdown"  id="render-link">Render</a>
                            </li>
                          <!-- Dropdown nav-tab -->
                          </ul>
                        </div>
                        <div class="card-body" id="render-card" style="display:none">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a  class="btn btn-success btn-responsive" onclick="poly();">Poly</a>
                          <a  class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a  class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          
                          <a class="btn btn-success btn-responsive" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Default</a>
                              <a class="dropdown-item" href="#">Onmi On/Off</a>
                              <a class="dropdown-item" href="#">Target On/Off</a>
                              <a class="dropdown-item" href="#">Headlight On/Off</a>
                          </div>
                          
                          
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
         <!-- End the interaction panels -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
         <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
         <!-- End pepper description contents -->  

      </div>  <!-- End 3D App SPA Contents --> 
    </div>

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
      <div class="container-fluid">   
          <div class="navbar-text float-left copyright">
              <p><span class="align-baseline">&copy 2020 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
          </div>
          <div class="navbar-text social">
                <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
          </div>
      </div>
  </nav> 

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p>252502 kt398</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../application/js/jquery-3.4.1.js"></script>
    <script src="../application/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="../application/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='../application/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src=".../application/js/custom.js" crossorigin="anonymous"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src=".../application/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="../application/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="../application/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="../application/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src=".../application/js/jquery.fancybox.min.js"></script>
    

    <script>
      window.onscroll = function() {scrollFunction()};
  
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
  
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <script>
      function scrollToBottom() {
        window.scrollTo(0,document.body.scrollHeight);
      }
      
      function showCola() {
        scrollToBottom();
      }
      
      function showFanta() {
        scrollToBottom();
      }
      
      function showSprite() {
        scrollToBottom();
      }
      </script>
      <script>
      const cameraLink = document.getElementById('camera-link');
      const cameraDropdown = document.getElementById('camera-dropdown');

      cameraLink.addEventListener('click', function(event) {
        event.preventDefault(); // 防止链接跳转
        if (cameraDropdown.style.display === 'block') {
          cameraDropdown.style.display = 'none';
        } else {
          cameraDropdown.style.display = 'block';
        }
      });
      </script>
      <script>
        const textureLink = document.getElementById("texture-link");
        const textureCard = document.getElementById("texture-card");
      
        textureLink.addEventListener("click", function() {
          event.preventDefault(); // 防止链接跳转
          if (textureCard.style.display === 'block') {
            textureCard.style.display = 'none';
        } else {
          textureCard.style.display = 'block';
        }
        });
      </script>
      <script>
        const animationLink = document.getElementById("animation-link");
        const animationCard = document.getElementById("animation-card");
      
        animationLink.addEventListener("click", function() {
          event.preventDefault(); // 防止链接跳转
          if (animationCard.style.display === 'block') {
            animationCard.style.display = 'none';
        } else {
          animationCard.style.display = 'block';
        }
        });
      </script>
      <script>
        const renderLink = document.getElementById("render-link");
        const renderCard = document.getElementById("render-card");
      
        renderLink.addEventListener("click", function() {
          event.preventDefault(); // 防止链接跳转
          if (renderCard.style.display === 'block') {
            renderCard.style.display = 'none';
        } else {
          renderCard.style.display = 'block';
        }
        });
      </script>
      <script>
        const clickLink = document.getElementById("click-link");
        const clickCard = document.getElementById("click-card");
      
        clickLink.addEventListener("click", function() {
          event.preventDefault(); // 防止链接跳转
          if (clickCard.style.display === 'block') {
            clickCard.style.display = 'none';
        } else {
          clickCard.style.display = 'block';
        }
        });
      </script>
      <script>
        const p1 = document.querySelector('.p1');
        const info = '这是更多信息。';

        p1.addEventListener('click', () => {
          alert(info);
        });
        
      </script>

      <script>
          //sprite
          function original1() {
	          var texturez = document.querySelector('ImageTexture');
	          var texturePathz = 'maps/mpm_vol.09_p35_can_green_diff.JPG';
	          if (texturez.url === texturePathz) {
	            texturez.url = 'maps/mpm_vol.09_p35_can_green_diff.JPG';
	  
	          } else {
	            texturez.url = texturePathz;
	  
	          }
          }

          function zero1() {
	
	          var texturez = document.querySelector('ImageTexture');
	          var texturePathz = 'maps/mpm_vol.09_p35_can_green_sliver_diff.JPG';
	          if (texturez.url === texturePathz) {
	            texturez.url = 'maps/mpm_vol.09_p35_can_green_sliver_diff.JPG';
	  
	          } else {
	            texturez.url = texturePathz;
	  
	          }
          }

          function old1() {
	
	          var texturez = document.querySelector('ImageTexture');
	          var texturePathz = 'maps/mpm_vol.09_p35_can_green_blue_diff.JPG';
	          if (texturez.url === texturePathz) {
	            texturez.url = 'maps/mpm_vol.09_p35_can_green_blue_diff.JPG';
	  
	          } else {
	            texturez.url = texturePathz;
	  
	          }
          }

        function wireframe()
        {
	        var e = document.getElementById('wire');
	        e.runtime.togglePoints(true);
	        e.runtime.togglePoints(true);
        }

        function wireframe()
        {
	        var e = document.getElementById('wire');
	        e.runtime.togglePoints(true);
	        e.runtime.togglePoints(true);
        }

        var lightOn = true;

        function headlight()
        {
	        lightOn = !lightOn;
	        document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
        }

        function poly() {
	        var material = document.querySelector('Material');
	        var texture = document.querySelector('ImageTexture');
	        var texturePath = 'maps/mpm_vol.09_p35_steel.JPG';
	        if (texture.url === texturePath) {
	        texture.url = '';
	        material.diffuseColor = '0 0 0';
	        } else {
	        texture.url = texturePath;
	        material.diffuseColor = '0.588 0.588 0.588';
	        }
        }

      </script>

  </body>

  <style>
    body {
      background-color: green;
    }
    #my-image:hover {
      transform: scale(1.15);
      transition: transform 0.2s ease-in-out;
    }

    #myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #555;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}

		#myBtn:hover {
			background-color: #333;
		}

    .p1{
        width: 100%;
        height: 100%;
        position: relative;
    }

    .p2{
        width: 20%;
        height: 20%;
        position: relative;
        top: 0%;
        left: 50%;
        transform: translateX(-50%);
        
    }

    .container {
      position: relative;
    }

    .text-overlay {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      color: white;
      font-size: 10px;
      font-weight: bold;
      text-align: center;
      opacity: 0;
      animation: fade 2s ease-in-out infinite;
    }

    .title1 p {
        font-size: 40px;
        font-weight: bold;
        color: green;
        text-align: center;
      }

      
      
      .title1 h1 {
        font-size: 24px;
        font-weight: bold;
        color: rgb(255, 255, 255);
        text-align: center;
      }

    @media (min-width: 720px) {
      .p1{
          width: 100%;
          height: 100%;
          position: relative;
      }

      .text-overlay {
          position: relative;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 1;
          color: white;
          font-size: 24px;
          font-weight: bold;
          text-align: center;
        }
    }

    @keyframes fade {
      0% {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }
  </style>
</html>

