 <?php
error_reporting(0);
     
        include'Connect.php';

        $postedId= $_POST['delete'];
        
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if(isset($_POST['delete'])){
            
        try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                   
                    $sql =$conn->prepare("DELETE FROM images WHERE id=:deleteid");
            //Bindowanie parametrów do zapytani
                    $sql->bindParam(':deleteid',$postedId);
                   
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