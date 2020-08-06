<?php
error_reporting(0);

class Validation
{
 public function input($inputName)
 {
  if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'post') {
   return trim(strip_tags(htmlspecialchars($inputName)));
  } else if ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get') {
   return trim(strip_tags(htmlspecialchars($inputName)));
  }
 }

}