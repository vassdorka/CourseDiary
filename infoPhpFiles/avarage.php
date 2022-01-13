<?php

        $dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
        $user="root";
        $pass="";
        $db = new PDO($dsn, $user, $pass);

        if(!isset($_GET['']))
        {
            $sql = "SELECT AVG(`course`.`grade`) as regularAvarage FROM `course`";
            
            $query = $db->query($sql);
            $result = $query->fetchAll( PDO::FETCH_ASSOC );
            
            

            foreach($result as $record)
            {
                $regularAvarage = $record['regularAvarage'];
                
                
                echo ''. $regularAvarage .''; 
               
            }

            
        }

?>