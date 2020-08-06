<?php
class User
{
 private $id;
 private $name;
 private $email;
 private $password;
 private $profile_image;
 private $is_confirmed;
 private $is_active;
 private $is_login;
 private $created_date;
 private $token;

 public function __construct($user_data = [])
 {

    if (isset($user_data['name'])) {
    $this->name          = @$user_data['name'];
    $this->email         = @$user_data['email'];
    $this->password      = @$user_data['password'];
    $this->token         = @$user_data['token'];
    $this->profile_image = @$user_data['profile_image'];
    $this->is_confirmed  = @$user_data['is_confirmed'];
    $this->is_active     = @$user_data['is_active'];
    $this->is_login      = @$user_data['is_login'];
    $this->created_date  = @$user_data['date'];
    }

 }

 public function setName($name)
 {
  $this->name = $name;
 }

 public function getName()
 {
  return $this->name;
 }

 public function setEmail($email)
 {
  $this->email = $email;
 }

 public function getEmail()
 {
  return $this->email;
 }

 public function setPassword($password)
 {
  $this->password = $password;
 }

 public function getPassword()
 {
  return $this->password;
 }

 public function setToken($token)
 {
  $this->token = $token;
 }

 public function getToken()
 {
  return $this->token;
 }

 public function setProfileImage($profileImage)
 {
  $this->profile_image = $profileImage;
 }

 public function getProfileImage()
 {
  return $this->profile_image;
 }

 public function setIsActive($is_active)
 {
  $this->is_active = $is_active;
 }

 public function getIsActive()
 {
  return $this->is_active;
 }

 public function setIsLogin($is_login)
 {
  $this->is_login = $is_login;
 }

 public function getIsLogin()
 {
  return $this->is_login;
 }

 public function setIsConfirmed($is_confirmed)
 {
  $this->is_confirmed = $is_confirmed;
 }

 public function getIsConfirmed()
 {
  return $this->is_confirmed;
 }

 public function setDate($date)
 {
  $this->created_date = $date;
 }

 public function getDate()
 {
  return $this->created_date;
 }

 public function toArray()
 {
  return [
   "name"          => $this->getName(),
   "email"         => $this->getEmail(),
   "password"      => $this->getPassword(),
   "token"         => $this->getToken(),
   "profile_image" => $this->getProfileImage(),
   "is_active"     => $this->getIsActive(),
   "is_login"      => $this->getIsLogin(),
   "is_confirmed"  => $this->getIsConfirmed(),
   "created_date"  => $this->getDate(),
  ];
 }

}
