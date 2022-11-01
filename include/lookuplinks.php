<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["Enfants"] ) ) {
			$lookupTableLinks["Enfants"] = array();
		}
		if( !isset( $lookupTableLinks["Enfants"]["victime.Enfant_list"] )) {
			$lookupTableLinks["Enfants"]["victime.Enfant_list"] = array();
		}
		$lookupTableLinks["Enfants"]["victime.Enfant_list"]["edit"] = array("table" => "Victime", "field" => "Enfant_list", "page" => "edit");
		if( !isset( $lookupTableLinks["Victime"] ) ) {
			$lookupTableLinks["Victime"] = array();
		}
		if( !isset( $lookupTableLinks["Victime"]["enfants.ID_MereVict"] )) {
			$lookupTableLinks["Victime"]["enfants.ID_MereVict"] = array();
		}
		$lookupTableLinks["Victime"]["enfants.ID_MereVict"]["edit"] = array("table" => "Enfants", "field" => "ID_MereVict", "page" => "edit");
		if( !isset( $lookupTableLinks["Victime"] ) ) {
			$lookupTableLinks["Victime"] = array();
		}
		if( !isset( $lookupTableLinks["Victime"]["t_dossier.vcin"] )) {
			$lookupTableLinks["Victime"]["t_dossier.vcin"] = array();
		}
		$lookupTableLinks["Victime"]["t_dossier.vcin"]["edit"] = array("table" => "t_dossier", "field" => "vcin", "page" => "edit");
		if( !isset( $lookupTableLinks["Victime"] ) ) {
			$lookupTableLinks["Victime"] = array();
		}
		if( !isset( $lookupTableLinks["Victime"]["t_dossier.victime"] )) {
			$lookupTableLinks["Victime"]["t_dossier.victime"] = array();
		}
		$lookupTableLinks["Victime"]["t_dossier.victime"]["edit"] = array("table" => "t_dossier", "field" => "victime", "page" => "edit");
		if( !isset( $lookupTableLinks["Respviolence"] ) ) {
			$lookupTableLinks["Respviolence"] = array();
		}
		if( !isset( $lookupTableLinks["Respviolence"]["t_dossier.coupable"] )) {
			$lookupTableLinks["Respviolence"]["t_dossier.coupable"] = array();
		}
		$lookupTableLinks["Respviolence"]["t_dossier.coupable"]["edit"] = array("table" => "t_dossier", "field" => "coupable", "page" => "edit");
		if( !isset( $lookupTableLinks["tviolence"] ) ) {
			$lookupTableLinks["tviolence"] = array();
		}
		if( !isset( $lookupTableLinks["tviolence"]["t_dossier.viol_eco"] )) {
			$lookupTableLinks["tviolence"]["t_dossier.viol_eco"] = array();
		}
		$lookupTableLinks["tviolence"]["t_dossier.viol_eco"]["edit"] = array("table" => "t_dossier", "field" => "viol_eco", "page" => "edit");
		if( !isset( $lookupTableLinks["tviolence"] ) ) {
			$lookupTableLinks["tviolence"] = array();
		}
		if( !isset( $lookupTableLinks["tviolence"]["t_dossier.viol_corp"] )) {
			$lookupTableLinks["tviolence"]["t_dossier.viol_corp"] = array();
		}
		$lookupTableLinks["tviolence"]["t_dossier.viol_corp"]["edit"] = array("table" => "t_dossier", "field" => "viol_corp", "page" => "edit");
		if( !isset( $lookupTableLinks["tviolence"] ) ) {
			$lookupTableLinks["tviolence"] = array();
		}
		if( !isset( $lookupTableLinks["tviolence"]["t_dossier.viol_sexuel"] )) {
			$lookupTableLinks["tviolence"]["t_dossier.viol_sexuel"] = array();
		}
		$lookupTableLinks["tviolence"]["t_dossier.viol_sexuel"]["edit"] = array("table" => "t_dossier", "field" => "viol_sexuel", "page" => "edit");
		if( !isset( $lookupTableLinks["tviolence"] ) ) {
			$lookupTableLinks["tviolence"] = array();
		}
		if( !isset( $lookupTableLinks["tviolence"]["t_dossier.viol_psych"] )) {
			$lookupTableLinks["tviolence"]["t_dossier.viol_psych"] = array();
		}
		$lookupTableLinks["tviolence"]["t_dossier.viol_psych"]["edit"] = array("table" => "t_dossier", "field" => "viol_psych", "page" => "edit");
		if( !isset( $lookupTableLinks["tviolence"] ) ) {
			$lookupTableLinks["tviolence"] = array();
		}
		if( !isset( $lookupTableLinks["tviolence"]["t_dossier.viol_juris"] )) {
			$lookupTableLinks["tviolence"]["t_dossier.viol_juris"] = array();
		}
		$lookupTableLinks["tviolence"]["t_dossier.viol_juris"]["edit"] = array("table" => "t_dossier", "field" => "viol_juris", "page" => "edit");
		if( !isset( $lookupTableLinks["tconsequences"] ) ) {
			$lookupTableLinks["tconsequences"] = array();
		}
		if( !isset( $lookupTableLinks["tconsequences"]["t_dossier.conseq_corp"] )) {
			$lookupTableLinks["tconsequences"]["t_dossier.conseq_corp"] = array();
		}
		$lookupTableLinks["tconsequences"]["t_dossier.conseq_corp"]["edit"] = array("table" => "t_dossier", "field" => "conseq_corp", "page" => "edit");
		if( !isset( $lookupTableLinks["tconsequences"] ) ) {
			$lookupTableLinks["tconsequences"] = array();
		}
		if( !isset( $lookupTableLinks["tconsequences"]["t_dossier.consequ_psych"] )) {
			$lookupTableLinks["tconsequences"]["t_dossier.consequ_psych"] = array();
		}
		$lookupTableLinks["tconsequences"]["t_dossier.consequ_psych"]["edit"] = array("table" => "t_dossier", "field" => "consequ_psych", "page" => "edit");
		if( !isset( $lookupTableLinks["tconsequences"] ) ) {
			$lookupTableLinks["tconsequences"] = array();
		}
		if( !isset( $lookupTableLinks["tconsequences"]["t_dossier.conseq_ecosocial"] )) {
			$lookupTableLinks["tconsequences"]["t_dossier.conseq_ecosocial"] = array();
		}
		$lookupTableLinks["tconsequences"]["t_dossier.conseq_ecosocial"]["edit"] = array("table" => "t_dossier", "field" => "conseq_ecosocial", "page" => "edit");
		if( !isset( $lookupTableLinks["tconsequences"] ) ) {
			$lookupTableLinks["tconsequences"] = array();
		}
		if( !isset( $lookupTableLinks["tconsequences"]["t_dossier.conseq_enf"] )) {
			$lookupTableLinks["tconsequences"]["t_dossier.conseq_enf"] = array();
		}
		$lookupTableLinks["tconsequences"]["t_dossier.conseq_enf"]["edit"] = array("table" => "t_dossier", "field" => "conseq_enf", "page" => "edit");
}

?>