<?php

class GeneralController {

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function getUser($id){
       return $this->db->getById('users',$id);
    }

    public function getCategory($id){
        return $this->db->getById('categories',$id);
    }

    public function getAll($table){     
        return $this->db->readAll($table);
    }

    public function getData($table,$id)
    {
        return $this->db->getById($table,$id);
    }

    public function getCategoryType($type_id){
        return $this->db->getById('types',$type_id);
    }

    public function columnFilter($table,$column,$id)
    {   
         return $this->db->columnFilter($table,$column,$id);
    }

    

    public function delete()
    {
       $id      = $this->validation->input($_POST['id']);
       $table   = $this->validation->input($_POST['table']);
       $success = $this->db->delete($table,$id);
       
       if($success)
       {
           // Add message
       }
       else{
           // Add message
       }

       header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}

?>