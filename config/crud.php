<?php

class Database
{
 /*
  * @var PDO
  */
 private $pdo;
 public function __construct(PDO $pdo)
 {
  $this->pdo = $pdo;
 }
 /*
  * @param integer $id
  * @return Model
  */
 public function getById($table, $id)
 {
  $stm = $this->pdo->prepare('SELECT * FROM ' . $table . ' WHERE `id` = :id');
  $stm->bindValue(':id', $id);
  $success = $stm->execute();
  $row     = $stm->fetch(PDO::FETCH_ASSOC);
  return ($success) ? $row : [];
 }
 public function readAll($table)
 {
  $stm     = $this->pdo->prepare('SELECT * FROM ' . $table);
  $success = $stm->execute();
  $rows    = $stm->fetchAll(PDO::FETCH_ASSOC);
  return ($success) ? $rows : [];
 }
 public function readData($table, $id)
 {
  $stm = $this->pdo->prepare('SELECT * FROM ' . $table . ' WHERE `director_id` = (SELECT `id` FROM `director` WHERE `id` =:id)');
  $stm->bindValue(':id', $id);
  $success = $stm->execute();
  $row     = $stm->fetchAll(PDO::FETCH_ASSOC);
  return ($success) ? $row : [];
 }
 public function create($table, $data)
 {
  try {
   $columns    = array_keys($data);
   $columnSql  = implode(',', $columns);
   $bindingSql = ':' . implode(',:', $columns);
   $sql        = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
   $stm        = $this->pdo->prepare($sql);
   foreach ($data as $key => $value) {
    $stm->bindValue(':' . $key, $value);
   }
   $status = $stm->execute();
   return ($status) ? $this->pdo->lastInsertId() : false;

  } catch (Exception $e) {
   echo ($e);
  }
 }

 public function loginCheck($table,$email,$password)
 {
     try{
        
        $sql        = "SELECT * FROM ".$table ." WHERE `email` =:email AND `password` =:password ";
        $stm        = $this->pdo->prepare($sql);
        $stm->bindValue(':email',$email);
        $stm->bindValue(':password',$password);
        $success = $stm->execute();
        $row     = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
        
     }
     catch( Exception $e)
     {
         echo($e);
     }
 }


 public function update($table, $id, $data)
 {
  if (isset($data['id'])) {
   unset($data['id']);
  }
  
  $columns = array_keys($data);
  $columns = array_map(function ($item) {
   return $item . '=:' . $item;
  }, $columns);

  
  $bindingSql = implode(',', $columns);
 
   $sql        = "UPDATE $table SET $bindingSql WHERE `id` = :id";
   //echo $sql;
   $stm        = $this->pdo->prepare($sql);
   $data['id'] = $id;
  foreach ($data as $key => $value) {
   $stm->bindValue(':' . $key, $value);
  }
  try
  {
    $stm->execute();
  }
  catch( Exception $e)
     {
         echo($e);
     }
  
  $status = $stm->execute();
  var_dump($status);
  return $status;
 }
 /**
  * @param $table
  * @param $id
  * @return bool
  */
 public function delete($table, $id)
 {
  $stm = $this->pdo->prepare('DELETE FROM ' . $table . ' WHERE id = :id');
  $stm->bindParam(':id', $id);
  $success = $stm->execute();
  return ($success);
 }

 public function save($table, $data)
 {
  if (isset($data['id'])) {
   $this->update($table, $data['id'], $data);
  } else {
   return $this->create($table, $data);
  }
 }


 public function columnFilter($table,$column,$id)
 {

  $stm = $this->pdo->prepare('SELECT * FROM ' . $table . ' WHERE `' . str_replace('`', '', $column) . '` = :id');
  $stm->bindValue(':id', $id);
  $success = $stm->execute();
  $row     = $stm->fetchAll(PDO::FETCH_ASSOC);

  return ($success) ? $row : [];
  
 }


}