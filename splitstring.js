/*
 * Function to seperate a string based on a delimiter
 *
 * @param string str
 * The string that needs to be splitted
 *
 * @param string delimiter
 * The string where the original string splits
 *
 * @return array
 * Returns array that is split on the delimiter
 */
function seperateCommaSeperatedString(str,delimiter){
	return str.split(delimiter);
}
/*
 * Function for generating numbers in a sequence.
 *
 * @param int start
 * Specifies the starting number
 *
 * @param int limit
 * Specifies the maximum number
 *
 * @param int step
 * Specifies the interval between each number
 *
 *
 * @return string
 * Returns an array of stringified numbers
 *
 * @example
 * console.log(series(0,10,2));
 * should return ['0','2','4','6','8','10']
 */

function series(start, limit, step) {
	var str = ""+start;
	for (var i=start+step; i<=limit; i+=step) {
		str += ","+i;
	}
	return seperateCommaSeperatedString(str,",");
}

for (var i = 0; i < program_output.length; i++) {
	alert(program_output[i]);
}

// DO NOT CHANGE ANYTHING BELOW THIS LINE!
var program_output = series(0,10,2);
var expected_output = ['0','2','4','6','8','10'];

//Compare program output to expected output. This is an example of a UnitTest
if(program_output === expected_output){
	console.log("Match! You succeded");
}
else{
	console.log("Fail!");
}
