<?php
class Income
{
 private $amount;
 private $category_id;
 private $user_id;
 private $date;

 public function __construct($income_data = [])
 {

    if (isset($income_data['amount'])) {
    $this->name          = @$income_data['amount'];
    $this->category_id   = @$income_data['category_id'];

    }

 }
 
 public function setId($id)
 {
  $this->id = $id;
 }

 public function getId()
 {
  return $this->id;
 }

 public function setAmount($amount)
 {
  $this->amount = $amount;
 }

 public function getAmount()
 {
  return $this->amount;
 }
 public function setCategory($category_id)
 {
     $this->category_id = $category_id;
 }

 public function getCategory()
 {
     return $this->category_id;
 }

 public function setDate($date)
 {
     $this->date = $date; 
 }

 public function getDate()
 {
     return $this->date;
 }

 public function setUser($user_id)
 {
    $this->user_id = $user_id;
 }

 public function getUser()
 {   
     return $this->user_id;
 }

 public function toArray()
 {
  return [
   "id"            => $this->getId(),
   "amount"        => $this->getAmount(),
   "category_id"   => $this->getCategory(),
   "user_id"       => $this->getUser(),
   "date"          => $this->getDate(),
  ];
 }

}
