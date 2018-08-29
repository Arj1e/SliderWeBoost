<?php
error_reporting(0);

        include'Connect.php';

        $name = $_FILES['image']['name'];
        $data= file_get_contents($_FILES['image']['tmp_name']);

        $caption = "TESST";
if(isset($_POST['send'])){
    if(getimagesize($_FILES['image']['tmp_name']) != FALSE){
        
    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $sql =$conn->prepare("INSERT INTO images(name, image, caption) VALUES(:name,:image,:caption)");
    $sql->bindParam(':name',$name);
    $sql->bindParam(':image',$data);
    $sql->bindParam(':caption',$caption);
    // use exec() because no results are returned
    $sql->execute();
    echo "Slajd przesłany pomyślnie";
    }
catch(PDOException $e)
    {
    echo "Napotkano problem podczas przesyłania pliku  :".$e;
    }
    }else{
        echo "Dopuszczalne są tylko pliki graficzne!";
    }

$conn = null;
}
?>