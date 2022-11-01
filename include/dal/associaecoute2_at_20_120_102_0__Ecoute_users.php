<?php
$dalTableEcoute_users = array();
$dalTableEcoute_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTableEcoute_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableEcoute_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableEcoute_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableEcoute_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableEcoute_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTableEcoute_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTableEcoute_users["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
	$dalTableEcoute_users["ID"]["key"]=true;

$dal_info["associaecoute2_at_20_120_102_0__Ecoute_users"] = &$dalTableEcoute_users;
?>