<?php
// include "conn.php";
Class Query extends Connection{
    function getQuery($query){
        $db =  new Connection();
        if($db -> connect_errno){
            echo "Failed to Mysql: ". $db -> connect_error;
            return;
        }  
        return $db;   
    }
    
}
    
?>