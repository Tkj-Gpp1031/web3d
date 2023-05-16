<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom_home.css" crossorigin="anonymous">

      <!-- Lets have some fonts  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../application/css/style.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../application/css/all.css">

    
    <title>WEB 3D ASSIGMENT</title>

  </head>
  <body id="bodyColor">
      <div id="transition">
      <div id="logo_a">
        <div id="my-image" class="logo" >
          <div class="lf" style="color: black; font-size: 90px;">
          <h1 style="font-size: 90px;">1</h1>
          <h1 style="font-size: 90px;">oca</h1>
          <h2 style="font-size: 90px;">Cola</h2>
          <h3>Great Britain</h3>
          </div>
        </div> 
         
      </div>
      <div class="bubbles">
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 6s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 10s;"></div>
        <div class="bubble" style="animation-delay: 10s;"></div>
      </div>
      </div>
      <div id="content_a" style="display:none;">
        <!-- The 3D App header -->
        <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Great Britain</h3>
                <p>Welcome to the home of Coca-Cola GB</p>
              </a>

              <!-- link Menu Icon button to the links class navbar-collapse selector] -->
              <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                  </li>
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
        </nav>
      
        <HR align=center width=100% color=#987cb9 SIZE=1>
        <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
        -->
        <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div> 

            <div class="t1">
              <p >Our brands</p>
            </div>

            <div class="t2">
              <a id="btn1" class="button" onclick="topFunction()">ALL</a>
              <a id="btn2" class="button" onclick="showCola()">COLA</a>
              <a id="btn3" class="button" onclick="showFanta()">FANTA</a>
              <a id="btn4" class="button" onclick="showSprite()">SPRITE</a>
              <a href="https://www.coca-cola.co.uk/brandsclass=" class="button" >More</a>
              <div id="content">Coca-Cola is a classic carbonated drink with a formula that includes ingredients such as carbonated water, high fructose corn syrup, phosphoric acid and flavourings. The Coca-Cola Company has also introduced many other flavours of carbonated beverages such as orange-flavoured Fanta and lemon-flavoured Sprite to meet the needs of different consumers.</div>
            </div>

            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#f40103;">
                <img src="../application/assets/images/cocacola_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Cocacola</h2>
                <p>Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/cocacola.png" class="product_img">
            </div>
            </div>
        
        
            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#f5a134;">
                <img src="../application/assets/images/fanta_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Fanta</h2>
                <p>Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/fanta.png" class="product_img">
            </div>
            </div>
        
        
            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#27fa31;">
                <img src="../application/assets/images/sprite_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Sprite</h2>
                <p>Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/sprite_b.png" class="product_img">
            </div>
            </div>

            <div class="t1">
            <p >Expolre more</p>
            </div>


            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/coke.png" data-fancybox data-caption="My 3D Coke Can Render">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coca_cola.png" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/renderImages/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.png" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/pepper.png" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/dr_pepper.png" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <button onclick="topFunction()" id="myBtn" title="Go to top">↑ Back</button>

          <div id="about" style="display:none;">
              Insert About Contents
          </div>  

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
          
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke_c.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite_c.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fanta.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
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
          </div> 

          <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-3">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item " >
                              <a class="nav-link active" href="#" id="camera-link"  data-toggle="dropdown">Cameras</a>
                            </li>
                          </ul>
                        </div>
                        <div id="camera-dropdown" style="display: none;">
                          <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
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
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
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
                        <a class="btn btn-success btn-responsive" onclick="original();">Original</a>
                        <a class="btn btn-primary btn-responsive" onclick="zero();">Zero</a>
                        <a class="btn btn-secondary btn-responsive" onclick="sliver();">Sliver</a>
                        <div class="card-text x3dCameraDescription drinksText">
                          <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
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
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight1();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive" onclick="poly();">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->

        </div> <!-- End 3D App SPA Contents -->
      
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2018 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
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
                  <p>Dr Martin White, Chichester 1, 126, Email: m.white@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
        </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>

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
      // 点击可口可乐标志后显示正文内容
      var logo_a = document.getElementById("logo_a");
      var content_a = document.getElementById("content_a");
      logo_a.addEventListener("click", function() {
        document.getElementById("transition").style.display = "none";
        content_a.style.display = "block";
        document.body.classList.add("clicked"); // 添加“clicked”类
      });

      content_a.addEventListener("click", function() {
        document.body.classList.remove("clicked"); // 删除“clicked”类
        document.body.style.backgroundColor = "rgb(255, 255, 255)"; // 将背景颜色设为白色
      });

      // 动画效果开始
      window.onload = function() {
        var bubbles = document.getElementsByClassName("bubble");
        for (var i = 0; i < bubbles.length; i++) {
          var bubble = bubbles[i];
          var delay = Math.random() * 2000; // 延迟时间
          setTimeout(animateBubble.bind(null, bubble), delay);
        }
      }

      // 单个气泡的动画效果
      function animateBubble(bubble) {
        var size = Math.floor(Math.random() * 100) + 100; // 气泡大小
        var duration = Math.floor(Math.random() * 5000) + 1500; // 动画时间
        var startX = Math.floor(Math.random() * (window.innerWidth - size)); // 起始位置
        var startY = Math.floor(Math.random() * (window.innerHeight - size)); // 起始位置
        var endX = Math.floor(Math.random() * (window.innerWidth - size)); // 终止位置
        var endY = Math.floor(Math.random() * (window.innerHeight - size)); // 终止位置

        bubble.style.opacity = 1;
        bubble.style.width = size + "px";
        bubble.style.height = size + "px";
        bubble.style.left = startX + "px";
        bubble.style.top = startY + "px";

        bubble.animate(
          [
            {left: startX + "px", top: startY + "px"},
            {left: endX + "px", top: endY + "px"}
          ],
          {
            duration: duration,
            easing: "ease-out",
            fill: "forwards"
          }
        ).onfinish = function() {
          bubble.style.opacity = 0;
          bubble.style.width = "0px";
          bubble.style.height = "0px";
        }
      }
      </script>

      <script type="text/javascript">
      $(document).ready(function(){
        $("#btn1").click(function(){
          $("#content").text("Coca-Cola is a classic carbonated drink with a formula that includes ingredients such as carbonated water, high fructose corn syrup, phosphoric acid and flavourings. The Coca-Cola Company has also introduced many other flavours of carbonated beverages such as orange-flavoured Fanta and lemon-flavoured Sprite to meet the needs of different consumers.");
        });

        $("#btn2").click(function(){
          $("#content").text("Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.");
        });

        $("#btn3").click(function(){
          $("#content").text("Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.");
        });

        $("#btn4").click(function(){
          $("#content").text("Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.");
        });
      });
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

  </body>
  <style>
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
        width: 40%;
        height: 40%;
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