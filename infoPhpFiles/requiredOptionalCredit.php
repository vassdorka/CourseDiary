<?php

        $dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
        $user="root";
        $pass="";
        $db = new PDO($dsn, $user, $pass);

        if(!isset($_GET['']))
        {
            $sql = "SELECT SUM(`course`.`credit`) as rOpCompleted FROM `course`
            WHERE `course`.`grade` > 0 AND
                  `course`.`type` LIKE 'Required optional'";
            
            $query = $db->query($sql);
            $result = $query->fetchAll( PDO::FETCH_ASSOC );
            
            

            foreach($result as $record)
            {
                $rOpCompleted = $record['rOpCompleted'];
                
                
                echo ''. $rOpCompleted .''; 
               
            }

            
        }

?>