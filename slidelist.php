 <?php
error_reporting(0);
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM images ORDER BY id";        
        
        echo '<li>';
        foreach($conn->query($sql) as $row){
            
              
        echo'<ul>'.$row[name];
        echo '<button name="id" type="submit" value="'.$row[id].'">Usuń</button></ul>';
     
            
                            }
        echo '</li>';
            $conn=null;
 ?>
