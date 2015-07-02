<?php

Flight::route('/', function(){
	dispatch(function(){
		echo '<p><a href="/s1">Section 1</a></p>';
		echo '<p><a href="/s2">Section 2</a></p>';
		echo '<p><a href="/s3">Section 3</a></p>';
	});
});

$ranges = [
	range(0,20000), //Section 1
	range(20001,50000), //Section 2
	range(50001,60000), //Section 3
	range(60001,65000), //Section 4
	range(65001,73000), //Section 5
	range(73001,74500), //Section 6
	range(74501,81000), //Section 7
	range(81001,89000), //Section 8
	range(89001,99999)  //Section 9
];

Flight::route('/doc/@doc', function($doc){
	dispatch(function($doc){
		echo md5($doc);
	}, [$doc]);
});

function doRange($i, $secs=[]){
	  global $ranges, $data;
		foreach($ranges[$i] as $n){
	    echo "<a href='/doc/$data[$n]'>$data[$n]</a><br />";
		}

		foreach($secs as $s){
		  echo "<a href='/s$s'>Section $s</a><br />";
		}
}

Flight::route('/s1', function(){
	dispatch(function(){
		doRange(0, [4,5]);
	});
});

Flight::route('/s2', function(){
	dispatch(function(){
		doRange(1, [6,7,8]);
	});
});

Flight::route('/s3', function(){
	dispatch(function(){
		doRange(2, [0]);
	});
});

Flight::route('/s4', function(){
	dispatch(function(){
		doRange(3, [1,2,3]);
	});
});

Flight::route('/s5', function(){
	dispatch(function(){
		doRange(4, [3,4]);
	});
});

Flight::route('/s6', function(){
	dispatch(function(){
		doRange(5, [4,7]);
	});
});

Flight::route('/s7', function(){
	dispatch(function(){
		doRange(6, [3,4]);
	});
});

Flight::route('/s8', function(){
	dispatch(function(){
		doRange(7, [9]);
	});
});

Flight::route('/s9', function(){
	dispatch(function(){
		doRange(8, [6]);
	});
});
