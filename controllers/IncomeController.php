<?php 


class IncomeController {

    private $db;
    private $userID;
    private $validation;

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function createIncome()
    {
    
     $amount         = $this->validation->input($_POST['amount']);
     $category_id        = $this->validation->input($_POST['category_id']);
     $user_id = 1; 
   
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


      $income = new Income();
      $income->setAmount($amount);
      $income->setCategory($category_id);
      $income->setUser($user_id);
      $income->setDate(date("Y/m/d"));
      $incomeCreated = $this->db->create('incomes',$income->toArray());

     }

     if($incomeCreated) 
     {
        //
     }

     else 
     {
        //
     }

     header('location:../income/index.php');

      }

    public function all()
    {     
        $income = new Income();
        return $this->db->readAll("incomes");
    }
    
    public function save($table)
    {
        $id              = $this->validation->input($_POST['id']);
        $amount          = $this->validation->input($_POST['amount']);
        $category_id     = $this->validation->input($_POST['category_id']);
        $date            = $this->validation->input($_POST['date']);
        $user_id         = $this->validation->input($_POST['user_id']);

        
        $income = new Income();
        $income->setId($id);
        $income->setAmount($amount);
        $income->setCategory($category_id);
        $income->setDate($date);
        $income->setUser($user_id);
        
        return $this->db->save($table,$income->toArray());

    }  


}


?>