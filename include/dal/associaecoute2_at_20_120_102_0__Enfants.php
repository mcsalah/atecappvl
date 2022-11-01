<?php
$dalTableEnfants = array();
$dalTableEnfants["ID_enfant"] = array("type"=>3,"varname"=>"ID_enfant", "name" => "ID_enfant");
$dalTableEnfants["ID_MereVict"] = array("type"=>200,"varname"=>"ID_MereVict", "name" => "ID_MereVict");
$dalTableEnfants["NomCompl_enfant"] = array("type"=>200,"varname"=>"NomCompl_enfant", "name" => "NomCompl_enfant");
$dalTableEnfants["DateNaiss_enfant"] = array("type"=>7,"varname"=>"DateNaiss_enfant", "name" => "DateNaiss_enfant");
$dalTableEnfants["Enfant_scolarise"] = array("type"=>200,"varname"=>"Enfant_scolarise", "name" => "Enfant_scolarise");
$dalTableEnfants["Enfant_Nscolarise"] = array("type"=>200,"varname"=>"Enfant_Nscolarise", "name" => "Enfant_Nscolarise");
$dalTableEnfants["Enf_InsEtatCivil"] = array("type"=>200,"varname"=>"Enf_InsEtatCivil", "name" => "Enf_InsEtatCivil");
	$dalTableEnfants["ID_enfant"]["key"]=true;

$dal_info["associaecoute2_at_20_120_102_0__Enfants"] = &$dalTableEnfants;
?>