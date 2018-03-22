# ttt
This webpage has been designed for the purpose of task completion, assigned to me.

Bootstrap Libraries has been used to design the webpage.

Codes and their explanations:

  1.$num = $_POST['number']; -It is the number entered by the user.
  
  2.$char = new SplFixedArray($num); - This code declares the array of fixed size.
  
  3.$file = file_get_contents('http://terriblytinytales.com/test.txt'); - This code is converting the whole file into string
  
  4.while (!feof($fh)) { - Looping  line by line till end of file
  
  5.$words = preg_split('/\s+/',$line,-1,PREG_SPLIT_NO_EMPTY);- Is being used to extract individual word from individual lines
  
  6.$count=substr_count($file,$word);// It counts number of occurences of a word in the whole file.
  
 Two test cases has been tested for the input by the user:
  1. When the user enters a natural number.Then after clicking submit we get the actual result.
  2. When the user enters a number other than natural number.Then user gets a alert message displaying "please enter the number greater          than 0".
  
  The screenshots of the test cases has been uploaded.
