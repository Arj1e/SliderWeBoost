<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <iframe name="hiddenFrame" class="hide"></iframe>

    <form action="UploadImg.php" method="post" enctype="multipart/form-data" target="hiddenFrame">
        <input type="file" name="image">
        <input type="submit" name="send">
        </form>
            <?php
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM images ORDER BY id";
        $images[];
        foreach($conn->query($sql) as $row){
            
echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'"/>';     
        
        }
            $conn=null;
            ?>
    </body>



</html>