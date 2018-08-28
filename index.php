<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
        </head>
    <body>
    <div class="container">
   <?php
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM images ORDER BY id";        
        ?>
        <div id="slider-outer-container">
        
        <img src="img/left.png" class="prev-left" alt="Wstecz">
            <div class="slider-inside">
                
    <?php
                
                $count=0;
                
        foreach($conn->query($sql) as $row){
            
            if($count == 0){
                echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'" class="active"/>';     

            }else{
               
                echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'"/>';     

                 }
            $count++;
        
        }
            $conn=null;
            ?>
            
            </div>
        <img src="img/right.png" class="next-right" alt="Dalej" >
        
        
        </div>
        
        
        
        
        
        
        
        <iframe name="hiddenFrame" class="hide"></iframe>

    <form action="UploadImg.php" method="post" enctype="multipart/form-data" target="hiddenFrame">
        <input type="file" name="image">
        <input type="submit" name="send">
        </form>
        
        </div>
       
    </body>



</html>