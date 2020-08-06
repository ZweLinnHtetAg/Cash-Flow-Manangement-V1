<?php 


class CategoryController {

    private $db;
    private $userID;
    private $validation;

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function createCategory()
    {
    
     $name               = $this->validation->input($_POST['name']);
     $description        = $this->validation->input($_POST['description']);
     $type_id            = $this->validation->input($_POST['type_id']);
   
     #Input validation
    //  if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
    //   $nameError = 'Name can only contain letters, numbers and white spaces';
    //  }
   
    //  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //   $emailError = 'Invalid Email';
    //  }
   
    //  if (strlen($password) < 6) {
    //   $passwordError = 'Please enter a long password';
    //  }
     


     if ($_SERVER['REQUEST_METHOD'] === 'POST') {


      $category = new Category();
      $category->setName($name);
      $category->setDescription($description);
      $category->setType($type_id);

      $categoryCreated = $this->db->create('categories',$category->toArray());

     }

     if($categoryCreated) 
     {
        //
     }

     else 
     {
       //
     }

     header('location:../category/index.php');

     }

     public function save($table)
    {
      
        $id              = $this->validation->input($_POST['id']);
        $name            = $this->validation->input($_POST['name']);
        $type_id         = $this->validation->input($_POST['type_id']);
        $description     = $this->validation->input($_POST['description']);

        
        $category = new Category();
        $category->setId($id);
        $category->setName($name);
        $category->setType($type_id);
        $category->setDescription($description);
        var_dump($category->toArray());
        return $this->db->save($table,$category->toArray());

    }



}


?>