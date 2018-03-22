<?php
function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(isset($_POST['submit'])){

   
 $num = $_POST['number']; // the number entered by the user.
$char = new SplFixedArray($num); //declaring array of fixed size
for($x = 0; $x < $num; $x++) {
   $char[$x]= null;   //intialising with null values
}
$amount = new SplFixedArray($num);
for($x = 0; $x < $num; $x++) {
   $amount[$x]= 0;   //intialising with 0 values
}




if($num>0){
	$file = file_get_contents('http://terriblytinytales.com/test.txt');//converting the whole file into string
	$total_words=str_word_count($file);// counting total number of words in te file.
	
    if ($fh = fopen('http://terriblytinytales.com/test.txt', 'r')) { //opening file in read mode
    while (!feof($fh)) {//looping  line by line till end of file
        $line = fgets($fh);
		$words = preg_split('/\s+/',$line,-1,PREG_SPLIT_NO_EMPTY);//extracting words from individual lines
        
		foreach ($words as $word) {
			 $count=substr_count($file,$word);// counting number of occurences of a word in the whole file
			 $flag=0;
		for($x = 0; $x < $num; $x++) {
			if(!strcmp($char[$x],$word))//comparing word with words exiting in the array
			{
				$flag=1;
				break;
			}  
		}
		$min=$amount[0];
		$y=0;
		if(!$flag)
		{	for($x = 1; $x < $num; $x++) {
			 if($min>$amount[$x])
			 { $min=$amount[$x];
				$y=$x;
		 }
		}
		if($count>$min)
		{
		$amount[$y]=$count;
		$char[$y]=$word;
		}
		}
      }
    }
	

    fclose($fh);//closing the file
}
echo '<br><br><br>';

}
else
	phpAlert("Please enter number greater than 0");
 }


