<?php

  $records = array(
    array(
        'id' => 1368,
        'first_name' => 'Don',
        'last_name' => 'Dane',
    ),
    array(
        'id' => 1427,
        'first_name' => 'James',
        'lst_name' => 'Jones',
    ),
    array(
        'id' => 1586
        'first_name' => 'Ken',
        'last_name' => 'Kamin',   
    ),

  );
  
  $full_names = array_column($records, 'id', 'first_name', 'last_name');
   print_r($full_names);

?>
