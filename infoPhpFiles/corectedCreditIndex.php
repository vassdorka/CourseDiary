<?php

        $dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
        $user="root";
        $pass="";
        $db = new PDO($dsn, $user, $pass);



        if(!isset($_GET['']))
        {
            $sql = "SELECT SUM(`course`.`credit`) as allCompletedCredit FROM `course`
            WHERE `course`.`grade` > 0";

            $sql2 =  "SELECT SUM(`course`.`credit`) as allCredit
            FROM `course`";

            $sql3 =  "SELECT SUM(`course`.`grade` * `course`.`credit`) / 30 as creditIndex
            FROM `course`
            WHERE `course`.`grade` > 0";
            
            //allCompleted
            $query = $db->query($sql);
            $result = $query->fetchAll( PDO::FETCH_ASSOC );

            //allTaken
            $query2 = $db->query($sql2);
            $result2 = $query2->fetchAll( PDO::FETCH_ASSOC );

            //creditIndex
            $query3 = $db->query($sql3);
            $result3 = $query3->fetchAll( PDO::FETCH_ASSOC );

            //allCompleted
            foreach($result as $record)
            {
                $allCompletedCredit = $record['allCompletedCredit'];
   
            }
            //allTaken
            foreach($result2 as $record2)
            {
                $allCredit = $record2['allCredit'];
   
            }
             //creditIndex
            foreach($result3 as $record3)
            {
                $creditIndex = $record3['creditIndex'];
   
            }

            $cci = $creditIndex * ( $allCompletedCredit / $allCredit );
            echo ''. $cci .'';
        }

?>