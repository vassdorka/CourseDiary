<?php

$dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
$user="root";
$pass="";
$db = new PDO($dsn, $user, $pass);

if(!isset($_GET['']))
{
    $sql = "SELECT SUM(`course`.`credit`) as optionalCompleted FROM `course`
    WHERE `course`.`grade` > 0 AND
            `course`.`type` LIKE 'Optional'";
    
    $query = $db->query($sql);
    $result = $query->fetchAll( PDO::FETCH_ASSOC );
   

    foreach($result as $record)
    {
        $optionalCompleted = $record['optionalCompleted'];
        
        
        echo ''. $optionalCompleted .''; 
        
    }
   
}

?>