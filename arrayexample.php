<?php

  $record = array();
  $record['first_name'] = 'aaron';
  $record['last_name'] = 'winkler';

  
  $records = array();

  $records[] = $record;
  
  $record['first_name'] = 'keith' ;
  $record['last_name'] = 'williams' ;
  $records[] = $record;
  $record['first_name'] = 'kevin' ;
  $record['last_name'] = 'durant' ;
  $records[] = $record;

  print_r($records); 

?>
