<?php
class Category
{
 private $id;
 private $name;
 private $description;
 private $type_id;

 public function __construct($category_data = [])
 {

    if (isset($category_data['name'])) {
    $this->name          = @$category_data['name'];
    $this->description   = @$category_data['description'];
    $this->type_id       = @$category_data['type_id'];

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
 public function setName($name)
 {
  $this->name = $name;
 }

 public function getName()
 {
  return $this->name;
 }

 public function setDescription($description)
 {
  $this->description = $description;
 }

 public function getDescription()
 {
  return $this->description;
 }

 public function setType($typeId)
 {
     $this->type_id = $typeId;
 }

 public function getType()
 {
  return $this->type_id;
 }

 public function toArray()
 {
  return [
   "id"          => $this->getId(),
   "name"          => $this->getName(),
   "description"   => $this->getDescription(),
   "type_id"       => $this->getType(),
  ];
 }

}
