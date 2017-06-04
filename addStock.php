<?php
$arr = array("INTC","CSCO","TSLA","MSFT","GOOG","NVDA","YHOO","FB","AAPL","AMZN","WMT","CRAY","AMD","NFLX","TWTR","EA");
ini_set('max_execution_time', 300);
echo "Running . . . . . ";
/*
foreach ($arr as &$item){
	$result = exec("python core/indicator.py $item");

	$result_array = json_decode($result);
	/*foreach ($result_array as $row){
		echo $row." ";
	}
	echo "<BR>";

	echo "$result_array[0] $result_array[1] $result_array[2]<BR>";
}
foreach ($arr as &$item){
	$result = exec("cd core"&&"source venv/bin/activate"&&"python twitter.py $item"&&"deactivate");
 	$val = json_decode($result);

	echo "$val<BR>";
}*/
$item = "FB"
$result = echo exec("python core/twitter.py $item");
$val = json_decode($result);

echo "$val<BR>";
echo "Done ";

;?>
