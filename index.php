<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
        </head>
    <body>
    <div class="container">
 
        <div id="form-sendimg">
        <?php include'boxform.html' ?>
        </div>
        
        <div id="slider-outer-container">
        
        <img width="30px" height="30px" src="img/left.png" class="prev-left" alt="Wstecz">
            <div class="slider-inside">
                <?php include'SlideDownload.php'; ?>    
            
            </div>
        <img width="30px" height="30px" src="img/right.png" class="next-right" alt="Dalej" >
        </div>
        
        
        <div id="slide-list">
            <form action="SlideDelete.php" method="post" enctype="multipart/form-data" target="hiddenFrame">
            <?php include'slidelist.php'; ?>
            </form>
        </div>
        </div>
       
    </body>



</html>