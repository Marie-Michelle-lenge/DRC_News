<?php

require('connect.php');

function dd($value)
{
    echo "<pre>".print_r($value, true)."</pre>";
    die();
}
function executeQuery($sql,$data){
    global $conn;
    $stmt= $conn->prepare($sql);
    $values= array_values($data);
    $types= str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []) {
    global $conn;
    if (empty($conditions)) {
        $sql = "SELECT * FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $sql = "SELECT * FROM $table WHERE ";
        $types = "";
        $values = [];
        foreach ($conditions as $key => $value) {
            $sql .= "$key = ? AND ";
            $types .= "s";
            $values[] = $value;
        }
        $sql = rtrim($sql, " AND "); 
        $stmt =executeQuery($sql, $conditions);

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectOne($table, $conditions) {
    global $conn;
        $sql = "SELECT * FROM $table WHERE ";
        $types = "";
        $values = [];
        foreach ($conditions as $key => $value) {
            $sql .= "$key = ? AND ";
            $types .= "s";
            $values[] = $value;
        }
       // $sql=$sql . " LIMIT 1";
        $sql = rtrim($sql, " AND "); 
        $stmt =executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    
}
function create($table,$data) {
    global $conn;
    $sql="INSERT INTO $table SET";
    $types = "";
    $values = [];
    $i=0;
    foreach ($data as $key => $value) {
        if ($i===0) {
            $sql .= " $key=?";
        }else {
            $sql .= ", $key=?";
        }
        $i++;
        $types .="s";
        $values[]= $value;
    }
    $stmt =executeQuery($sql, $data);
    $id= $stmt->insert_id;
    return $id;

}

function update($table,$id,$data) {
    global $conn;
    $sql="UPDATE $table SET";
    $types = "";
    $values = [];
    $i=0;
    foreach ($data as $key => $value) {
        if ($i===0) {
            $sql .= " $key=?";
        }else {
            $sql .= ", $key=?";
        }
        $i++;
        $types .="s";
        $values[]= $value;
    }
   $sql .= " WHERE id=?";
   $data['id']= $id;
    $stmt = executeQuery($sql, $data);
     
    return $stmt->affected_rows;
}

function delete($table,$id) {
    global $conn;
    $sql="DELETE FROM $table WHERE id=?";
    
    $stmt = executeQuery($sql, ['id'=>$id]);
     
    return $stmt->affected_rows;
}


?>