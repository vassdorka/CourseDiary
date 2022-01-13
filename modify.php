<?php  
      
    $dsn = "mysql:host=localhost;dbname=coursediary;charset=utf8mb4";
    $user="root";
    $pass="";
    $db = new PDO($dsn, $user, $pass);
        
        if(!isset($_GET['']))
        {
            $sql = "SELECT id, name, credit, grade, type FROM course";
            
            $query = $db->query($sql);
            $result = $query->fetchAll( PDO::FETCH_ASSOC );
            

            foreach($result as $record)
            {
                $cardid = $record['id'];
                $name = $record['name'];
                $credit = $record['credit'];
                $grade = $record['grade'];
                $type = $record['type'];
                
                
                echo '<section class="section">
                    <div id="'. $cardid .'a" class="mcontainer">
                    <div class="mcard">                         
                        <form class="info" method="post" action="">                           
                            <h3>Modify datas:</h3>              
                            <span class="spanInput">
                                <input class="mtextarea" type="hidden" name="id" value="'. $cardid .'"><br><br>                           
                            </span>                                            
                            <span class="spanInput">
                                <input class="mtextarea" type="text" name="name" value='. $name .'><br><br>
                                <small id="helperText" class="form-text text-muted">Course name</small>
                            </span>                                                       
                            <span class="spanInput">
                                <input class="mtextarea" type="text" name="type" value='. $type .'><br><br>
                                <small id="helperText" class="form-text text-muted">Course type</small>
                            </span>
                            <span class="spanInput">
                                <input class="mtextarea" type="number" name="credit" min="1" max="10" value='. $credit .'><br><br>
                                <small id="helperText" class="form-text text-muted">Course credit</small>
                            </span>
                            <span class="spanInput">
                                <input class="mtextarea" type="number" name="grade" min="1" max="5" value='. $grade .'><br><br>
                                <small id="helperText" class="form-text text-muted">Course grade</small>
                            </span>                           
                            <div class="doneSub">
                                <input class="doneBtn" id="doneBtn" type="submit" name="update" value="">
                            </div>                                                      
                        </form>
                        </div>           
                    </div>
                </section>';  
                
                
            }
        }



        if(isset($_POST['update']))
        {

            $id = trim($_POST['id']);
            $mname = trim($_POST['name']);
            $mcredit = trim($_POST['credit']);
            $mgrade = trim($_POST['grade']);
            $mtype = trim($_POST['type']);


            $dbc=@mysqli_connect('localhost', 'root', '', 'coursediary');
            $query='UPDATE course SET name=?, credit=?, grade=?, type=? WHERE id=?'; 
            $stmt=mysqli_prepare($dbc, $query);
            mysqli_stmt_bind_param($stmt,'siisi', $mname, $mcredit, $mgrade, $mtype, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);

        }                       
    ?>			

    
        
