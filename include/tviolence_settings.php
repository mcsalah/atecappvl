<?php



$tdatatviolence = array();
$tdatatviolence[".searchableFields"] = array();
$tdatatviolence[".ShortName"] = "tviolence";
$tdatatviolence[".OwnerID"] = "";
$tdatatviolence[".OriginalTable"] = "tviolence";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatviolence[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatviolence[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatviolence[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstviolence = array();
$fieldToolTipstviolence = array();
$pageTitlestviolence = array();
$placeHolderstviolence = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelstviolence["Arabic"] = array();
	$fieldToolTipstviolence["Arabic"] = array();
	$placeHolderstviolence["Arabic"] = array();
	$pageTitlestviolence["Arabic"] = array();
	$fieldLabelstviolence["Arabic"]["id_violence"] = "Id Violence";
	$fieldToolTipstviolence["Arabic"]["id_violence"] = "";
	$placeHolderstviolence["Arabic"]["id_violence"] = "";
	$fieldLabelstviolence["Arabic"]["nom"] = "Nom";
	$fieldToolTipstviolence["Arabic"]["nom"] = "";
	$placeHolderstviolence["Arabic"]["nom"] = "";
	$fieldLabelstviolence["Arabic"]["type_violence"] = "Type Violence";
	$fieldToolTipstviolence["Arabic"]["type_violence"] = "";
	$placeHolderstviolence["Arabic"]["type_violence"] = "";
	$fieldLabelstviolence["Arabic"]["Commentaire"] = "Commentaire";
	$fieldToolTipstviolence["Arabic"]["Commentaire"] = "";
	$placeHolderstviolence["Arabic"]["Commentaire"] = "";
	if (count($fieldToolTipstviolence["Arabic"]))
		$tdatatviolence[".isUseToolTips"] = true;
}


	$tdatatviolence[".NCSearch"] = true;



$tdatatviolence[".shortTableName"] = "tviolence";
$tdatatviolence[".nSecOptions"] = 0;

$tdatatviolence[".mainTableOwnerID"] = "";
$tdatatviolence[".entityType"] = 0;

$tdatatviolence[".strOriginalTableName"] = "tviolence";

	



$tdatatviolence[".showAddInPopup"] = false;

$tdatatviolence[".showEditInPopup"] = false;

$tdatatviolence[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatviolence[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatviolence[".listAjax"] = false;
//	temporary
$tdatatviolence[".listAjax"] = false;

	$tdatatviolence[".audit"] = true;

	$tdatatviolence[".locking"] = false;


$pages = $tdatatviolence[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatviolence[".edit"] = true;
	$tdatatviolence[".afterEditAction"] = 1;
	$tdatatviolence[".closePopupAfterEdit"] = 1;
	$tdatatviolence[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatviolence[".add"] = true;
$tdatatviolence[".afterAddAction"] = 1;
$tdatatviolence[".closePopupAfterAdd"] = 1;
$tdatatviolence[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatviolence[".list"] = true;
}



$tdatatviolence[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatviolence[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatviolence[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatviolence[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatviolence[".printFriendly"] = true;
}



$tdatatviolence[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatviolence[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatviolence[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatviolence[".isUseAjaxSuggest"] = true;

$tdatatviolence[".rowHighlite"] = true;





$tdatatviolence[".ajaxCodeSnippetAdded"] = false;

$tdatatviolence[".buttonsAdded"] = false;

$tdatatviolence[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatviolence[".isUseTimeForSearch"] = false;


$tdatatviolence[".badgeColor"] = "DC143C";


$tdatatviolence[".allSearchFields"] = array();
$tdatatviolence[".filterFields"] = array();
$tdatatviolence[".requiredSearchFields"] = array();

$tdatatviolence[".googleLikeFields"] = array();
$tdatatviolence[".googleLikeFields"][] = "id_violence";
$tdatatviolence[".googleLikeFields"][] = "nom";
$tdatatviolence[".googleLikeFields"][] = "type_violence";
$tdatatviolence[".googleLikeFields"][] = "Commentaire";



$tdatatviolence[".tableType"] = "list";

$tdatatviolence[".printerPageOrientation"] = 0;
$tdatatviolence[".nPrinterPageScale"] = 100;

$tdatatviolence[".nPrinterSplitRecords"] = 40;

$tdatatviolence[".geocodingEnabled"] = false;










$tdatatviolence[".pageSize"] = 20;

$tdatatviolence[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatviolence[".strOrderBy"] = $tstrOrderBy;

$tdatatviolence[".orderindexes"] = array();

$tdatatviolence[".sqlHead"] = "SELECT id_violence,  	nom,  	type_violence,  	Commentaire";
$tdatatviolence[".sqlFrom"] = "FROM tviolence";
$tdatatviolence[".sqlWhereExpr"] = "";
$tdatatviolence[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatviolence[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatviolence[".arrGroupsPerPage"] = $arrGPP;

$tdatatviolence[".highlightSearchResults"] = true;

$tableKeystviolence = array();
$tableKeystviolence[] = "id_violence";
$tdatatviolence[".Keys"] = $tableKeystviolence;


$tdatatviolence[".hideMobileList"] = array();




//	id_violence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_violence";
	$fdata["GoodName"] = "id_violence";
	$fdata["ownerTable"] = "tviolence";
	$fdata["Label"] = GetFieldLabel("tviolence","id_violence");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_violence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_violence";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatviolence["id_violence"] = $fdata;
		$tdatatviolence[".searchableFields"][] = "id_violence";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "tviolence";
	$fdata["Label"] = GetFieldLabel("tviolence","nom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatviolence["nom"] = $fdata;
		$tdatatviolence[".searchableFields"][] = "nom";
//	type_violence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type_violence";
	$fdata["GoodName"] = "type_violence";
	$fdata["ownerTable"] = "tviolence";
	$fdata["Label"] = GetFieldLabel("tviolence","type_violence");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "type_violence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_violence";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "العنف الاقتصادي";
	$edata["LookupValues"][] = "العنف الجسدي";
	$edata["LookupValues"][] = "العنف النفسي";
	$edata["LookupValues"][] = "العنف الجنسي";
	$edata["LookupValues"][] = "العنف القانوني";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatviolence["type_violence"] = $fdata;
		$tdatatviolence[".searchableFields"][] = "type_violence";
//	Commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Commentaire";
	$fdata["GoodName"] = "Commentaire";
	$fdata["ownerTable"] = "tviolence";
	$fdata["Label"] = GetFieldLabel("tviolence","Commentaire");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Commentaire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Commentaire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatviolence["Commentaire"] = $fdata;
		$tdatatviolence[".searchableFields"][] = "Commentaire";


$tables_data["tviolence"]=&$tdatatviolence;
$field_labels["tviolence"] = &$fieldLabelstviolence;
$fieldToolTips["tviolence"] = &$fieldToolTipstviolence;
$placeHolders["tviolence"] = &$placeHolderstviolence;
$page_titles["tviolence"] = &$pageTitlestviolence;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tviolence"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tviolence"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tviolence()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_violence,  	nom,  	type_violence,  	Commentaire";
$proto0["m_strFrom"] = "FROM tviolence";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_violence",
	"m_strTable" => "tviolence",
	"m_srcTableName" => "tviolence"
));

$proto6["m_sql"] = "id_violence";
$proto6["m_srcTableName"] = "tviolence";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "tviolence",
	"m_srcTableName" => "tviolence"
));

$proto8["m_sql"] = "nom";
$proto8["m_srcTableName"] = "tviolence";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type_violence",
	"m_strTable" => "tviolence",
	"m_srcTableName" => "tviolence"
));

$proto10["m_sql"] = "type_violence";
$proto10["m_srcTableName"] = "tviolence";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Commentaire",
	"m_strTable" => "tviolence",
	"m_srcTableName" => "tviolence"
));

$proto12["m_sql"] = "Commentaire";
$proto12["m_srcTableName"] = "tviolence";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tviolence";
$proto15["m_srcTableName"] = "tviolence";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_violence";
$proto15["m_columns"][] = "nom";
$proto15["m_columns"][] = "type_violence";
$proto15["m_columns"][] = "Commentaire";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tviolence";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tviolence";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tviolence";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tviolence = createSqlQuery_tviolence();


	
		;

				

$tdatatviolence[".sqlquery"] = $queryData_tviolence;

$tableEvents["tviolence"] = new eventsBase;
$tdatatviolence[".hasEvents"] = false;

?>