<?php
        $name = $_FILES['image']['name'];
        $data= file_get_contents($_FILES['image']['tmp_name']);

        $servername = "localhost";
        $username = "root";
        $caption = "TESST";
        $password = "";
        $dbname = "slider";
if(isset($_POST['send'])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $sql =$conn->prepare("INSERT INTO images(name, image, caption) VALUES(:name,:image,:caption)");
    $sql->bindParam(':name',$name);
    $sql->bindParam(':image',$data);
    $sql->bindParam(':caption',$caption);
    // use exec() because no results are returned
    $sql->execute();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $e;
    }

$conn = null;
}
?>