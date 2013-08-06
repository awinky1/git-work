<?php
  
   
  $myarray = array('steve', 'joe', 'stan', 'kevin');
  $myarray[] = 'aron';
     print_r($myarray);        


  $associative_array = array('name1' => 'joe', 'name2' => 'stan');  
  $associative_array ['myobject'] = new myclass();
    
    echo count($associative_array);
    print_r($associative_array);

  class myclass{}

  $input_array = array($associative_array);
    print_r(array_change_case($input_array, CASE_UPPER));

?>


