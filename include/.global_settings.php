<?php

$tdataGLOBAL = array();


$allPages = my_json_decode( "{\"login\":[\"login\"],\"menu\":[\"menu\"]}" );
$pages = array();

foreach( $allPages as $ptype => $pids ) {
	foreach(  $pids as $pid ) {
		$pages[$pid] = $ptype;
	}
}

$defaultPages = my_json_decode( "{\"login\":\"login\",\"menu\":\"menu\"}" );

$tdataGLOBAL[".pages"] = $pages;
$tdataGLOBAL[".defaultPages"] = $defaultPages;
$tables_data["<global>"] =& $tdataGLOBAL;

$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>