<?php
// Enter your code here, enjoy!
$array = [
    "Lorem",
    "ipsum",
    [
        "dolor",
        [
            "sit",
            "amet",
        ],
        "consectetur"
    ],
    [
       "adipiscing"
    ],
    "elit"  
];
function printLorem ($array) {
	foreach($array as $part){
	  	if(gettype($part) == "string"){
	  		print($part." ");
	  	} else if(gettype($part) == "array"){
	  		printLorem($part);
	  	}
	}
}
printLorem($array)
?>