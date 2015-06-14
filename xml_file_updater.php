<?php include("header.php");
	$search= strtolower($_GET["search"]);
	
	$xml=simplexml_load_file("xml-configuration/categories.xml") or die("Error: Cannot create object");
	$xml_urls=array();
	function truncate($text, $length) {
   		$length = abs((int)$length);
   		if(strlen($text) > $length) {
      		$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   		}
   		return($text);
	}
	

	function downloadfiles ($url, $path) {
	 echo '<p>Downloading file... URL='.$url.' Path='.$path;
	  $newfname = './xml/'.$path;
	  $file = fopen ($url, "rb");
	  if ($file) {
	    $newf = fopen ($newfname, "wb");
	
	    if ($newf)
	    while(!feof($file)) {
	      fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
	    }
	  }
	
	  if ($file) {
	    fclose($file);
	  }
	
	  if ($newf) {
	    fclose($newf);
	  }
	 }

	

    foreach($xml->children() as $organization) {
		foreach($organization->children() as $section) {
			array_push($xml_urls, $section['feed']);
		}
	}
	foreach($xml_urls as $xml_url) {
		downloadfiles($xml_url,basename($xml_url));
		}
	?>