<?php

   
$dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
$user="root";
$pass="";
$db = new PDO($dsn, $user, $pass);
    
    if(!isset($_GET['']))
    {
        $sql = "SELECT id FROM course";
        
        $query = $db->query($sql);
        $result = $query->fetchAll( PDO::FETCH_ASSOC );
        

        foreach($result as $record)
        {
            $cardid = $record['id'];
            
            
            echo '<section class="section">
                <div id="'. $cardid .'d" class="dcontainer">
                <div class="dcard">                         
                    <form class="deleteForm" method="post" action="">                           
                        <h3>Are you sure want to delete?</h3>
                        <span class="spanInput">
                                <input class="mtextarea" type="hidden" name="id" value="'. $cardid .'"><br><br>                           
                        </span>                                                                                                         
                        <div class="choices">
                            <input class="deleteBtn" id="deleteBtn" type="submit" name="delete" value="Yes">
                            <button id="notdeleteBtn" onClick="notDeleteFunction('. $cardid .')">No</button>
                        </div>                                                      
                    </form>
                    </div>           
                </div>
            </section>';         
        }
    }

    if(isset($_POST['delete']))
    {

        $id = trim($_POST['id']);

        $dbc=@mysqli_connect('localhost', 'root', '', 'coursediary');
        $query='DELETE FROM course WHERE id=?'; 
        $stmt=mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt,'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

    }           

?>
