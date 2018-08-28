<?php
      
      $link = mysqli_connect('mysql.cba.pl','helpinguser','Helpingais1','arjie');

if (!$link)
{	echo "Nie mogę połączyć się z serwerem MySQL. Kod błędu: " . mysqli_connect_error();
	exit;
}else{
	$result = mysqli_query($link,"SELECT * FROM slider;");
	if($result) {
                $emparray = array();
                while($row =mysqli_fetch_assoc($result))
                    $emparray[] = $row;

                echo(json_encode($emparray));           
            }
}
      
?>