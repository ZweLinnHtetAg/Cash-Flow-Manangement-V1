<?php 


class ExpenseController {

    private $db;
    private $userID;
    private $validation;

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function createExpense()
    {
    
     $amount         = $this->validation->input($_POST['amount']);
     $category_id    = $this->validation->input($_POST['category_id']);
     $qty            = $this->validation->input($_POST['qty']);
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


      $expense = new Expense();
      $expense->setAmount($amount);
      $expense->setCategory($category_id);
      $expense->setQty($qty);
      $expense->setUser($user_id);
      $expense->setDate(date("Y/m/d"));
      $expenseCreated = $this->db->create('expenses',$expense->toArray());

     }

     if($incomeCreated) 
     {
        //
     }

     else 
     {
        //
     }

     header('location:../expense/index.php');

      }

      public function all()
      {     
          $expense = new Expense();
          return $this->db->readAll("expenses");
      }

      public function save($table)
    {
       
        $id              = $this->validation->input($_POST['id']);
        $amount          = $this->validation->input($_POST['amount']);
        $qty             = $this->validation->input($_POST['qty']);
        $category_id     = $this->validation->input($_POST['category_id']);
        $date            = $this->validation->input($_POST['date']);
        $user_id         = $this->validation->input($_POST['user_id']);

        
        try{

            $expense = new Expense();
            $expense->setId($id);
            $expense->setAmount($amount);
            $expense->setQty($qty);
            $expense->setCategory($category_id);
            $expense->setDate($date);
            $expense->setUser($user_id);
        }
        catch(Exception $e)
        {
            echo $e;
        }
        
        
       return $this->db->save($table,$expense->toArray());

    }


}


?>