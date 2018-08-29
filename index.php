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

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body >
    <!-- Page Content -->
    <div class="container">
     
           <div class="row">
            <div class="col-md ">
               
           <div id="slider">
  <a href="#" class="control_next">Naprzód</a>
  <a href="#" class="control_prev">Wstecz</a>
  <ul>
    <?php include'SlideDownload.php'; ?>
    
  </ul>  
        </div>
               
    </div>
   
      </div>
   <div class="row mt-5">
          <div class="col-md mx-auto">
              
              <form action="UploadImg.php" method="post" enctype="multipart/form-data" class="form-horizontal border border-primary rounded ">
<fieldset>
<center>
<!-- Form Name -->
    <center>
<legend>Dodaj Slajd</legend>
        </center>
<!-- File Button --> 
<div class="form-group">
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file">
  </div>
</div>

<div class="form-group">

  <div class="col-md-4">
    <button id="singlebutton" name="send" class="btn btn-primary">Wyślij</button>
  </div>
</div>
</center>
</fieldset>
</form>
       </div> 
       </div>
        <div class="row mt-5">
            
            <div class="col-md">
            <div id="slide-list">
            <form action="SlideDelete.php" method="post" enctype="multipart/form-data" target="hiddenFrame">
            <?php include'slidelist.php'; ?>
            </form>
        </div>
       </div>
        </div>
      </div>

  </body>

</html>
