<?php
include ("connection.php");
$db=$conn;
$tableName="criminal_details";
$columns=['criminal_name','age','height','weight','gender','hair_type','skin_color','race','description','records','image'];
$fetchData = fetch_data($db,$tableName,$columns);

function fetch_data($db,$tableName,$columns){
    if(empty($db)){
        $msg="database connection error";
    }elseif (empty($columns)|| !is_array($columns)){
        $msg="coklumn name must be defined in an indexed array";
    }elseif(empty($tableName)){
        $msg="empty table name ";
    }else{
        $columnName = implode(", ", $columns);
        $query = "SELECT * FROM $tableName";
        $result = $db->query($query);
        if($result== true){ 
            if ($result->num_rows > 0) {
               $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
               $msg= $row;
            } else {
               $msg= "No Data Found"; 
            }
           }else{
             $msg= mysqli_error($db);
           }
           }
           return $msg;
           
    }

?>