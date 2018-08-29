<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/slidestyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
      <script src="js/slider.js"></script>
      
    <title>Slider jQuery</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="bg-light" >
    <!-- Page Content -->
    <div class="container">
     
           <div class="row">
                <div class="col-md ">
                <div id="slider">
                    <a href="#" class="next">-></a>
                    <a href="#" class="prev"><-</a>
                        <ul>
                            <?php include'php/SlideDownload.php'; ?>
    
                        </ul>  
                </div>
               
               </div>
   
            </div>
    <div class="row mt-5">
        <iframe class="php-output mx-auto" name="php-output"></iframe>
    </div>
        <div class="row mt-5">
            <div class="col-md mx-auto">
                <?php include'boxform.html'; ?>
            </div> 
        </div>
        <div class="row mt-5">
            
            <div class="col-md">
                <div id="slide-list">
                    <form action="php/SlideDelete.php" method="post" enctype="multipart/form-data" target="php-output">
                        <?php include'php/slidelist.php'; ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 mx-auto">
            <img width="60px" height="60px" src="img/gitlogo.png"></div>
            <h4><a href="https://github.com/Arj1e/SliderWeBoost">Projekt można sprawdzić na moim profilu GitHub!</a></h4>
        </div>
      </div>

  </body>

</html>
