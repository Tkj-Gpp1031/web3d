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

      <!-- Lets have some fonts   -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../application/css/style.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../application/css/all.css">

    
    <title>WEB 3D</title>

  </head>
  <style type="text/css">
  .footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 50px;
            background-color: 	#708090;
            z-index: 9999;
        }

    .image_size{
      width: 200px;
        height: 400px;
    }
    .wrap{
    width: 200px;//容器大小要和图片大小保持一致。
    height: 400px;
    margin: 50px auto 0;
    overflow: hidden;
    position: relative;
    border: px solid black;
}
ol{
    position: absolute;
    bottom: 0;
    left: 50%;
    padding: 10px;
    margin-left: -50px;
    z-index: 999;

}
ol li{
    width: 25px;
    height: 25px;
    background-color: #fff;
    border: 1px solid red;
    border-radius: 50%;
    margin: 0 10px;
}
.wrap ul{
       animation:Yui 9s cubic-bezier(0, 1, 0, 1) 1s infinite ;
       width: 400%;

}
@keyframes Yui{
      0% {
        transform: translateX(0px);
      }
      33% {
        transform: translateX(-200px);
      }
      66% {
        transform: translateX(-400px);
      }
      100% {
        transform: translateX(0px);
      }
      
}
ol li {
  animation:focus 9s linear infinite ;//时间要和图片保持一致
  }
  ol li:nth-child(1) {
    animation-delay: 0s;
  }
  ol li:nth-child(2) {
    animation-delay: 9s;
  }
  ol li:nth-child(3) {
    animation-delay: 18s;
  }

 
  @keyframes focus {
    0% { 
      background-color: #000;
    }
    20% {
      background-color: #000;
    }
    30% {
      background-color: #fff;
    }

  }



  </style>
  <body >
    
    <div id="transition">
      <div id="logo_a">
        <div id="my-image" class="logo" >
          <div class="lf" style="color: Red; font-size: 90px;">
            <h1 style="font-size: 90px;">1</h1>
            <h1 style="font-size: 90px;">oca</h1>
            <h2 style="font-size: 90px;">Cola</h2>
            <h3>Great Britain</h3>
            <p>Forever Coca-Cola </p>
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
      <div id="content_a" style="display:none;" >
        <!-- The 3D App header -->
        <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="index.php/#">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Great Britain</h3>
                <p>The home of Coca-Cola GB</p>
              </a>
            
              <!-- link Menu Icon button to the links class navbar-collapse selector] -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                
              <div class="navbar-text float-left copyright">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>
                    <div class="dropdown-menu">
                      <div class = "t2" onclick="scrollToView()">
                        <a id="btn1" class="button" onclick="topFunction()">ALL</a>

                        <a href = "#1" class="button" onclick="showCola()">COLA</a>
                        <a href = "#1" class="button" onclick="showFanta()">FANTA</a>
                        <a href = "#1" class="button" onclick="showSprite()">SPRITE</a>
                        <a href="https://www.coca-cola.co.uk/brandsclass=" class="button" >More</a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                <a id="navModels" class="nav-link"  href="ColaCan" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Fanta">Models</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                  <li class="nav-item">
                  <a id="navModels" class="nav-link"  href="https://github.com/Tkj-Gpp1031/web3d.git/" data-toggle="popover" data-trigger="hover" 
                  data-placement="bottom" title="Github" data-content="There have all source we use , include X3D models ,php ,
                  css,javascript,images,db files and readme file">Github</a>
                  </li>
                  
                </ul>
              </div>
              
            </div>
          </nav>
            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
        
      
        <HR align=center width=100% color=#987cb9 SIZE=1>
        <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
        -->
        <div class="container-fluid">

            <!-- This is the home page contents -->
            <div id="home" class="main_contents">
              <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
            
              <div class = "wrap">
                <ul >
                  <li><img src="../application/assets/images/cocacola.png" alt="" class = "image_size"></li>
                  <li><img src="../application/assets/images/sprite_b.png" alt="" class = "image_size"></li>
                  <li><img src="../application/assets/images/fanta.png" alt="" class = "image_size"></li>
                
                </ul>
            
              </div>

            </div> 

            

              
            <p  align="center" style="font-size:30px"; >Our brands</p>


          <div class="row" id = "1">
          
            <div class="col-sm-4">
              <div class="container" >
                <div class="cardc" >
                  <div  style="--clr:#f40103;">
                    <img src="../application/assets/images/cocacola_logo .png" class="logo1">
                  </div>
                  <div class="content">
                    <h2>Cocacola</h2>
                    <text>Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.</text>
                    <div class="t2">
                      <a href="#" class="button">Buy now</a>
                      <a href="ColaCan"class="button">about model</a>
                      
                      <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                              
                    </div>
                    
                  </div>
                  <img src="../application/assets/images/cocacola.png" class="product_img">
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container" >
                <div class="cardc"  >
                  <div  style="--clr:#f5a134;">
                    <img src="../application/assets/images/fanta_logo.png" class="logo1">
                  </div>
                  <div class="content">
                    <h2>Fanta</h2>
                    <text>Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.</text>
                    <div class="t2">
                      <a href="#" class="button">Buy now</a>
                      <a href="ColaCan"class="button">about model</a>
                      <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                  </div>
                  <img src="../application/assets/images/fanta.png" class="product_img">
                </div>
                <br>
                <br>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="container" >
                  <div class="cardc"   >
                    <div  style="--clr:#27fa31;">
                      <img src="../application/assets/images/sprite_logo.png" class="logo1">
                    </div>
                      <div class="content">
                        <h2>Sprite</h2>
                        <text>Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.</text>
                        <br>
                        <div class="t2">
                        <a href="#" class="button">Buy now</a>
                        <a href="ColaCan" class="button">about model</a>
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                        </div>
                      </div>
                      <img src="../application/assets/images/sprite_b.png" class="product_img">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>  
    <!-- End home page contents-->

      <button onclick="topFunction()" id="myBtn" title="Go to top">↑ Back</button>

      <div id="about" style="display:none;">
              Insert About Contents
      </div>  

        

         <!-- End 3D App SPA Contents -->
      <div class="footer">
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
        document.getElementById('1').scrollIntoView({
            block: 'start',
            inline: 'nearest',
            behavior: 'smooth'
        })
      }
      
      function showFanta() {
        document.getElementById('1').scrollIntoView({
            block: 'start',
            inline: 'nearest',
            behavior: 'smooth'
        })
      }
      
      function showSprite() {
        document.getElementById('1').scrollIntoView({
            block: 'start',
            inline: 'nearest',
            behavior: 'smooth'
        })
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
          var delay = Math.random() * 3000; // 延迟时间
          setTimeout(animateBubble.bind(null, bubble), delay);
        }
      }

      
      </script>

      



  </body>
  <style>
    body {
      background-image: linear-gradient(rgba(126, 116, 116, 0.5), rgba(0, 0, 0, 0.5)), url('../application/assets/images/background2.jpg');
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
    *{padding: 0;margin: 0;box-sizing: border-box;}
li{
    list-style: none;
    float: left;
}
ul img{
    width: 30%;
    height: auto;
    
}

  </style>
</html>