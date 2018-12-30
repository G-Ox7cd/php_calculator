<?php 

$input = "255+43-22.97";
$symbols = array('+', '-', '*', '*');//input and defaults symbols to pasre any data other then the symbols in this array

$input_r = str_split($input);
$small_value = "";//for each digits to stick letters to give as whole.temporary

$data_numbers = array();//final array for nums
$data_symbols = array();//final array for symbols

//counters for symbol and numbers;
$num_counter, $sym_counter = 0,0;

//variable for skips and countinues
$found = false;


foreach($number_indi as $input_r){//looping through the input
	foreach($symbol_indi as $symbols){//checking if the word is symbol
		if($number_indi === $symbol_indi){
			$data_symbols[$sym_counter] = $symbol_indi;
			$sym_counter++;
			$found = true;//after this statements are excecuted the loop is broke and goes on with outer looop code which makes the whole numbers.
			break;
		
		}
		
	}
	
	if(!$found){//if found is false keeps adding number_indi strings one to another
		$small_value += $number_indi;
	}else if($found){//inserts the combined small_value into data_numbers array then resets it to default value sets found variale to false and breaks loop
		$data_numbers[$num_counter] = $small_value;
		$small_value = "";
		$found = false;
		break;
	}
	
	
			
	
	
		
	
		
	
		
	
		
	

