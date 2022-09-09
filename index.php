<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="assets\css\bootstrap.css">
    <link rel="stylesheet" href="css\swapimagesonhover\swapimagesonhover.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=B612+Mono&display=swap" rel="stylesheet">    
    <script src="css\swapimagesonhover\swapimagesonhover.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="image/circle logo.png">
    
    <title>Inception</title>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:black;">
 
 <a href="index.php"><img class="Logo-navbar" src="image/logo word.png" alt=""></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <img  class="tombol" style="  width: 1.5em; height: 1.5em; " src="image/menu logo.png" alt="image/x logo.png">
</button>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav ml-auto">
   <li class="nav-item">
       <a class="nav-link" href="#">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="about.php">About us</a>
     </li>
     <li class="nav-item">
     <div class="dropdown" style="  transition: ease-in-out;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Chapter
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="chapter i.php">Chapter I</a>
    <a class="dropdown-item" href="chapter ii.php">Chapter II</a>
  </div>
</div>
     </li>

   </ul>

</div>

</nav>

 
    <div class="bd-example" style="width:100%; height:15%;"center">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <img src="image/carousel1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="image/banner.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="image/banner2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>


<br>
<h2 class="featured" style="text-align:center;">Featured Products</h2>
<hr color="black" style="
    width:35%;
    height:1px;     
    margin-top:1%;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:auto;
    left:0;
    right:0;
    top:0;
    bottom:0;
    align-items: center;
    ">
<br>

<div class="wrap">
<span class="item">

        
        <a href="item1.php">
        <img id="hover1" src="image\item1.jpeg">
        <script>$(document).ready(function(){
    $('#hover1').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item1.jpeg');
    });
});</script>     </a>
      <p><a
      href="item1.php">
    <b style="color:black;">LADY ROSE</b><br>
     <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
              </p>
    </li>
</span>


<span class="item">     
<a href="item2.php">
        <img id="hover2" src="image\item2.jpeg">
        <script>$(document).ready(function(){
    $('#hover2').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item2.jpeg');
    });
});</script>
        </a>
      <p><a 
      href="item2.php">
    <b style="color:black;">TONGUE</b><br>
    <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
              </p>
    </li>
</span>
<span class="item">

        
        <a href="item3.php">
        <img id="hover3" src="image\item3.jpeg">
        <script>$(document).ready(function(){
    $('#hover3').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item3.jpeg');
    });
});</script>
        </a>
      <p><a 
      href="item3.php">
    <b style="color:black;">MEDUSA</b><br>
    <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
              </p>
    </li>
</span>
<span class="item">

    
    <a href="item4.php">
    <img id="hover4" src="image\item4.jpeg">
           <script>$(document).ready(function(){
    $('#hover4').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item4.jpeg');
    });
});</script>
    </a>
  <p><a 
  href="item4.php">
    <b style="color:black;">FUNATICS</b><br>
    <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
          </p>
</li>
</span>
<span class="item">

    
    <a href="item5.php">
    <img id="hover5" src="image\item5.jpeg">
           <script>$(document).ready(function(){
    $('#hover5').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item5.jpeg');
    });
});</script>
    </a>
  <p><a href="item6.php">
      <b style="color:black;">FAKE PROPHET</b><br>
      <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
          </p>
</li>
</span>
<span class="item">

    
    <a href="item6.php">
    <img id="hover6" src="image\item6.jpeg">
           <script>$(document).ready(function(){
    $('#hover6').hover(function(){
        $(this).attr('src', 'image/item2-1.jpeg');
    }, function(){
        $(this).attr('src', 'image/item6.jpeg');
    });
});</script>
    </a>
  <p><a 
  href="item6.php">
    <b style="color:black;">THE ORDO</b><br>
    <strike style="color:red;">Rp.130.000</strike> <i class="icon-shopping-cart icon-black" style="color:rgb(56, 56, 56); text-align:center;">Rp.89.000</i></a>
          </p>
</li>
</span>
</div>

<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
    <hr>
<footer style="    text-decoration: none;
    display: inline-block;
    padding: 2%;
    bottom:0;
    width: 100%;
    height: 110px;
    position:relative;
    text-align: center;
    color:#000; ">
<small>
<h5 > 
<a style="color:black; font-size:12px; margin-right:0.4%;" href="about.php">About us</a> <a style="font-size:12px; color:black;margin-left:0.4%;" href="condition.php">Terms and condition</a><br>
</h5>
    <a href="https://shopee.co.id/inceptionside"><img class="sosmed" src="image/shopee logo.png" alt=""></a>
    <a href="https://wa.me/6282117707360"><img class="sosmed" src="image/wa logo.png" alt=""></a>
    <a href="https://Instagram.com/inception.side"><img class="sosmed-ig" src="image/instagram logo.png" alt=""></a>
    <br>
    &copy;2020      Inceptionside  
    </small>
    <a class="fix" href="https://wa.me/6282117707360"><img src="image/Wa fixed.png" alt=""></a>
    <p class="backTop"><img src="image/scroll up.png" alt=""></p>
    <script type="text/javascript">
    var $backToTop = $(".backTop");
    $backToTop.hide();
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 100) {
        $backToTop.fadeIn();
      } else {
        $backToTop.fadeOut();
      }
    });

    $backToTop.on('click', function(e) {
      $("html, body").animate({scrollTop: 0}, 500);
    });
</script>
</footer>


</body>
</div>

    
</html>