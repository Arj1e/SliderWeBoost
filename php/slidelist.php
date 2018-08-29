 <?php
error_reporting(0);
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM images ORDER BY id";        
        
        echo '<ul>';
        foreach($conn->query($sql) as $row){
            
              
        echo'<li><p>'.$row[name];
        echo '<button name="delete" id="delete" type="submit" value="'.$row[id].'">Usuń</button></p></li>';
     
            
                            }
        echo '</ul>';
            $conn=null;
 ?>
