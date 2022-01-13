<?php

        $dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
        $user="root";
        $pass="";
        $db = new PDO($dsn, $user, $pass);

        if(!isset($_GET['']))
        {
            $sql = "SELECT SUM(`course`.`grade` * `course`.`credit`) / 30 as creditIndex
            FROM `course`
            WHERE `course`.`grade` > 0";
            
            $query = $db->query($sql);
            $result = $query->fetchAll( PDO::FETCH_ASSOC );
            
            

            foreach($result as $record)
            {
                $creditIndex = $record['creditIndex'];
                
            echo ''. $creditIndex .''; 
               
            }          
        }
?>