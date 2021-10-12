<?php
  
class Model {
    

    public function printDrinkList(){
        //use this function to get drink list and return data arrays
        //connect mysql db
        $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$link) {
        die('Could not connect to MYSQL Database: ' . mysql_error());
        }
        //echo 'Connected successfully';
        
        //select db
        $db_selected = mysql_select_db(DB_NAME, $link);
        if (!$db_selected) {
            die ('Can\'t use : ' . mysql_error());
        }
        
        $result = mysql_query('SELECT * FROM drinks');
        if (!$result) {
            die('Could not query:' . mysql_error());
        }
        
        $count=mysql_num_rows($result);
        $index=0;
        $html="";
        while($index<$count){
            $row=mysql_fetch_array($result);
            
            $html=$html. "<div id='drink_".$row['id']."' class='row'>";
            $html=$html. "<div id='drink_".$row['id']."' class='drink_name' rel='".$row['drink_name']."'>";
            $html=$html. $row['drink_name'];
            $html=$html. "</div>";
            
            $html=$html. "<div  id='drink_".$row['id']."' class='coffeine_in_mg' rel='".$row['coffeine_in_mg']."'>";
            $html=$html. $row['coffeine_in_mg'];
            $html=$html. "</div>";
            
            $html=$html. "<div  id='drink_".$row['id']."' class='serving' rel='".$row['serving']."'>";
            $html=$html. $row['serving'];
            $html=$html. "</div>";
            
            $html=$html. "<div  id='drink_".$row['id']."' class='intake_limit' rel='".$row['intake_limit']."'>";
            $html=$html. $row['intake_limit'];
            $html=$html. "</div>";
            if ($row['serving_unit']=='na'){$row['serving_size']='Unknown';}

            $html=$html. "<div  id='drink_".$row['id']."' class='serving_size' rel='".$row['serving_size']."'>";
            $html=$html. $row['serving_size'];
            $html=$html. "</div>";
            
            if ($row['serving_unit']=='na'){$row['serving_unit']='N/A';}
            $html=$html. "<div  id='drink_".$row['id']."' class='serving_unit' rel='".$row['serving_unit']."'>";
            $html=$html. $row['serving_unit'];
            $html=$html. "</div>";
            


            $html=$html. "</div>";

            $index++;
        }
        
        mysql_close($link);
        return  $html;
    }
    
}

?>
