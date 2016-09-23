<?php 

/**
 * This Class simply illustrates how google make did you mean in search results
 */
class DYM
{
    /**
     * This function convert string to its alternative from english to arabic
     */
    public function resloveText($input)
    {
    	//define array of each button data
    	$buttons = array(
    		'a' => 'ش',
    		's' => 'س',
    		'd' => 'ي',
    		'f' => 'ب',
    		'g' => 'ل',
    		'h' => 'ا',
    		'j' => 'ت',
    		'k' => 'ن',
    		'l' => 'م',
    		';' => 'ك',
    		"'" => 'ط',
    		'q' => 'ض',
    		'w' => 'ص',
    		'e' => 'ث',
    		'r' => 'ق',
    		't' => 'ف',
    		'y' => 'غ',
    		'u' => 'ع',
    		'i' => 'ه',
    		'o' => 'خ',
    		'p' => 'ح',
    		'[' => 'ج',
    		']' => 'د',
    		'`' => 'ذ',
    		'z' => 'ئ',
    		'x' => 'ء',
    		'c' => 'ؤ',
    		'v' => 'ر',
    		'b' => 'لا',
    		'n' => 'ى',
    		'm' => 'ة',
    		',' => 'و',
    		'.' => 'ز',
    		'/' => 'ظ',
    		' ' => ' ',
    		'!' => '!',
    		'#' => '#',
    		'$' => '$',
    		'%' => '%',
    		'^' => '^',
    		'&' => '&',
    		'*' => '*',
    		'(' => '(',
    		')' => ')',
    		'-' => '-',
    		'_' => '_',
    		'=' => '=',
    		'+' => '+',
    		);    

    	//get all input data convert string to characters
    	for($i=0;$i<strlen($input);$i++){
		    $arr[$i] = substr($input,$i,1);
		}

		//get value of characters from buttons array
		foreach ($arr as $key => $value) {
			$newValue = strtolower($value);
			$newArr[$key] = $buttons[$newValue];
		}

		// print value of new string
    	foreach ($newArr as $key => $value) {
    		echo $value;
    	}
    }

}

//test 
echo "Did You Mean : <br />";

$output = new DYM();
$output->resloveText('hpl] lhiv hpl] pgdlm');

?>
