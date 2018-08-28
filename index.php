<html>
<head></head>
    <body>
        <iframe name="hiddenFrame" class="hide"></iframe>

    <form action="http://arjie.cba.pl/UploadImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="send">
        </form>
            <?php
        $servername = "mysql.cba.pl";
        $username = "helpinguser";
        $dbname="arjie";
        $password= "Helpingais1";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM slider ORDER BY id";
        
        foreach($conn->query($sql) as $row){
            
           echo $row[image];
        }
                
            ?>
    </body>



</html>