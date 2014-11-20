<?php

    function CaesarCipher($str, $num) {
      $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
                        'k', 'l', 'm', 'o', 'p', 'q', 'r', 's', 't', 'u',
                        'v', 'w', 'x', 'y', 'z');
      
      $str = strtolower($str);
      $length = strlen($str);  
      $output = '';
      
      for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == ' ') { $output .= " "; }
        else {
          $charPos = array_search($str[$i], $alphabet);
          $rot = ($charPos + $num) % 25;
          $output .= $alphabet[$rot];
        }// else
      }// for
      
      return $output; 
             
    }

?>