<?php
  /**
  * Format Class
  */
  class Format{
     public function formatDate($date){
      return date('F j, Y, g:i a', strtotime($date));
     }

     public function textShorten($text, $limit = 400){
      $text = $text. " ";
      $text = substr($text, 0, $limit);
      $text = substr($text, 0, strpos($text, ' '));
      $text = $text.".....";
      return $text;
     }

     public function validation($data){
      $data = htmlentities($data);
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
     }

      public function getMonthName($n){
      $month_list_name = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $index = $n - 1;
      return $month_list_name[$index];      
      }

      public function createDateRangeArray($strDateFrom,$strDateTo)
      {
          $aryRange=array();

          $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),substr($strDateFrom,8,2),substr($strDateFrom,0,4));
          $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),substr($strDateTo,8,2),substr($strDateTo,0,4));

          if ($iDateTo>=$iDateFrom){
              while ($iDateFrom<=$iDateTo){
                echo "'".date('d', $iDateFrom)."/".date('m', $iDateFrom)."', ";            
                  $iDateFrom+=86400; // add 24 hours
                  
           }
          }
         
      }

      public function date_array($strDateFrom,$strDateTo)
      {
          $aryRange=array();

          $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),substr($strDateFrom,8,2),substr($strDateFrom,0,4));
          $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),substr($strDateTo,8,2),substr($strDateTo,0,4));

          if ($iDateTo>=$iDateFrom){
              while ($iDateFrom<=$iDateTo){
                echo "'".date('d', $iDateFrom)."/".date('m', $iDateFrom)."', "; 
                $aryRange[]= array('tgl'=>date('Y', $iDateFrom)."-".date('m', $iDateFrom)."-".date('d', $iDateFrom));
                  $iDateFrom+=86400; // add 24 hours
                  
           }
          }

          return $aryRange;
         
      }

    

  }
?>
