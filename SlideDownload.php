 <?php
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
        $sql="SELECT * FROM images ORDER BY id";        
    
                $count=0;
                
        foreach($conn->query($sql) as $row){
            
            if($count == 0){
                echo '<li><img width="400" height="300" src="data:image/png;base64,'.base64_encode( $row['image'] ).'"/></li>';     

            }else{
               
                echo '<li><img width="400" height="300" src="data:image/png;base64,'.base64_encode( $row['image'] ).'"/></li>';     

                 }
            $count++;
        
        }
            $conn=null;
    ?>