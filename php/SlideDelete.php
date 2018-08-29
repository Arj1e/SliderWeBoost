 <?php
error_reporting(0);
     
        include'Connect.php';

        $postedId= $_POST['delete'];
        
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if(isset($_POST['delete'])){
            
        try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $sql =$conn->prepare("DELETE FROM images WHERE id=:deleteid");
                    $sql->bindParam(':deleteid',$postedId);
                    // use exec() because no results are returned
                    $sql->execute();
                    echo "Slajd usunięty pomyślnie";
            }
            catch(PDOException $e)
                {
                echo $e;
                }
        }else{
            echo"Problem podczas usuwania";
        }
        
         $conn=null;
 ?>