<?php
require('../../../wp-blog-header.php');
if(isset($_POST['key'])){
	$file = get_template_directory_uri().'/localize.json';

	$json = json_decode(file_get_contents($file),true);

	$key=$_POST['key'];
	$nepali=$_POST['nepali'];
	$english=$_POST['english'];
 //	echo $key.'=ne->'.$nepali.'->en'.$english;
	$json[$key]=array("en"=>$english,"ne"=>$nepali);


	$jsonData = json_encode($json);
	print_r($json);
	file_put_contents($file, $jsonData);
	file_put_contents($file, 'test');







//print_r($json);
//  file_put_contents($file, json_encode($json));
}
else {
	echo "fail";


	$filename =get_template_directory_uri().'/test/ram.txt';
	$somecontent = "Add this to the file\n";

// Let's make sure the file exists and is writable first.
	if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
		if (!$handle = fopen($filename, 'a')) {
			echo "Cannot open file ($filename)";
			exit;
		}

    // Write $somecontent to our opened file.
		if (fwrite($handle, $somecontent) === FALSE) {
			echo "Cannot write to file ($filename)";
			exit;
		}

		echo "Success, wrote ($somecontent) to file ($filename)";

		fclose($handle);

	} else {
		echo "The file $filename is not writable";
	}
}
?>

<form method="POST" action="<?php echo site_url()?>/localize">
	Key:<input type="text" id="key" name="key">
	nepalli:<input type="text" id="lan_ne" name="nepali">
	english:<input type="text" id="lang_en" name="english">
	<input type="submit">
</form>