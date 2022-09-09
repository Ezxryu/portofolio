<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="assets\css\bootstrap.css">
    <link rel="stylesheet" href="css\swapimagesonhover\swapimagesonhover.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=B612+Mono:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="css\swapimagesonhover\swapimagesonhover.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="image/circle logo.png">
    
    <title>Inception</title>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:black;">
 
 <a href="index.php"><img class="Logo-navbar" src="image/logo word.png" alt=""></a>

 
 <button class="navbar-toggler"   type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <img  class="tombol" style="  width: 1.5em; height: 1.5em; " src="image/menu logo.png" alt="">
   <script>
        $(document).ready(function() {

          $(document).on('click', "#un_btn", function() {
                if ($(this).attr('class') == 'btn_s') {
                    $(this).html('<img class="tombol" style="  width: 1.5em; height: 1.5em; " src="image/x logo.png" alt="">');
                    $(this).removeClass('btn_s');
                    $(this).addClass('notsu');
                } else {
                    $(this).html('<img class="tombol" style="  width: 1.5em; height: 1.5em; " src="image/menu logo.png" alt="">');
                    $(this).removeClass('notsu');
                    $(this).addClass('btn_s');
                }
            });
        });
    </script> 
</button>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav ml-auto">
   <li class="nav-item">
       <a class="nav-link" href="index.php">Home</a>
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
