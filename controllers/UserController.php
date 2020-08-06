<?php 


class UserController {

    private $db;
    private $userID;
    private $validation;

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function createUser()
    {
   
     $token        = bin2hex(random_bytes(50));
     $name         = $this->validation->input($_POST['name']);
     $email        = $this->validation->input($_POST['email']);
     $password     = $this->validation->input($_POST['password']);
     $profileImage = $this->validation->input('default_profile.jpg');
   
     #Input validation
     if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
      $nameError = 'Name can only contain letters, numbers and white spaces';
     }
   
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = 'Invalid Email';
     }
   
     if (strlen($password) < 6) {
      $passwordError = 'Please enter a long password';
     }
     
     //Hash Password before saving

     $hash_password = base64_encode(($password));
     
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
      $user = new User();
      $user->setName($name);
      $user->setEmail($email);
      $user->setPassword($hash_password);
      $user->setToken($token);
      $user->setProfileImage($profileImage);
      $user->setIsLogin(0);
      $user->setIsActive(0);
      $user->setIsConfirmed(0);
      $user->setDate(date('Y-m-d H:i:s'));
      $userCreated = $this->db->create('users', $user->toArray());

     }
     if($userCreated) 
     {
         header('location:../../index.php');
     }

     else 
     {
         header('location:../../register.php');
     }

     }

     public function loginCheck()
     {  

        $email        = $this->validation->input($_POST['email']);
        $password     = $this->validation->input($_POST['password']);
        $hash_password = base64_encode(($password));

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $rows = $this->db->loginCheck('users',$email,$hash_password);   
            
            if($rows)
            {
                header('location:../dashboard.php');
            }
            else{
                header('location:../../index.php');
            }
        }
     }

}


?>