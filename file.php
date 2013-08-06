<?php

  $obj = new account(1000);
  
  $obj->debit(100, 'Walmart', 'Jul 20');
  $obj->credit(200, 'Cash Deposit', 'Jul 25');
  $obj->debit(500, 'Target', 'Aug 1');
  $obj->credit(250, 'Sears', 'Aug 10');  
    $obj->process();
//    print_r($obj);

  class account {
    public $starting_balance;
    public $current_balance;
    private $transactions = array();    
    

    public function __construct($amount) {
      $this->starting_balance = $amount;
      $this->current_balance = $amount;   
    }
    public function debit($amount, $source, $date) {
      $transaction = array();
      $transaction['type'] = 'debit';
      $transaction['amount'] = $amount;
      $transaction['source'] = $source;
      $transaction['date'] = $date;   

      $this->transactions[] = $transaction;
    }
 
    public function credit($amount, $source, $date) {
      $transaction = array();
      $transaction['type'] = 'credit';
      $transaction['amount'] = $amount;
      $transaction['source'] = $source;
      $transaction['date'] = $date; 

      $this->transactions[] = $transaction;
    }  
   
    public function process() {
      echo 'Type  |  Source  |   Amount  |  Date  <br>';
        foreach($this->transactions as $transaction) {
       
      echo $transaction['type'] . ' | ' . $transaction['source'] . ' | ' . $transaction['amount'] . ' | ' . $transaction['date'] . '<br>';
 
          if($transaction['type'] == 'debit') {
            $this->current_balance = $this->current_balance - $transaction['amount'];
          } else { 
            $this->current_balance = $this->current_balance + $transaction['amount'];
          }
        }  
    }
 
    public function __destruct() {
      echo '<br> Your starting balance was: ' . $this->starting_balance . '<br>';
      echo 'Your ending balance is: ' . $this->current_balance . '<br>';
    }
  
 
} 

?>
