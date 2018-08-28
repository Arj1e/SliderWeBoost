 <?php
error_reporting(0);
        $servername = "localhost";
        $username = "root";
        $dbname="slider";
        $password= "";
        $postedId= $_POST['id'];
        
        
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if(isset($_POST['id'])){
            
        try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $sql =$conn->prepare("DELETE FROM images WHERE id=:deleteid");
                    $sql->bindParam(':deleteid',$postedId);
                    // use exec() because no results are returned
                    $sql->execute();
                    echo "Delete Succes";
            }
            catch(PDOException $e)
                {
                echo $e;
                }
        }else{
            echo"Problem";
        }
        
         $conn=null;
 ?>