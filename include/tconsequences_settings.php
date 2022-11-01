<?php



$tdatatconsequences = array();
$tdatatconsequences[".searchableFields"] = array();
$tdatatconsequences[".ShortName"] = "tconsequences";
$tdatatconsequences[".OwnerID"] = "";
$tdatatconsequences[".OriginalTable"] = "tconsequences";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );

$tdatatconsequences[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatconsequences[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatconsequences[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstconsequences = array();
$fieldToolTipstconsequences = array();
$pageTitlestconsequences = array();
$placeHolderstconsequences = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelstconsequences["Arabic"] = array();
	$fieldToolTipstconsequences["Arabic"] = array();
	$placeHolderstconsequences["Arabic"] = array();
	$pageTitlestconsequences["Arabic"] = array();
	$fieldLabelstconsequences["Arabic"]["id_conseq"] = "Id Conseq";
	$fieldToolTipstconsequences["Arabic"]["id_conseq"] = "";
	$placeHolderstconsequences["Arabic"]["id_conseq"] = "";
	$fieldLabelstconsequences["Arabic"]["libelle"] = "Libelle";
	$fieldToolTipstconsequences["Arabic"]["libelle"] = "";
	$placeHolderstconsequences["Arabic"]["libelle"] = "";
	$fieldLabelstconsequences["Arabic"]["type_conseq"] = "Type Conseq";
	$fieldToolTipstconsequences["Arabic"]["type_conseq"] = "";
	$placeHolderstconsequences["Arabic"]["type_conseq"] = "";
	$fieldLabelstconsequences["Arabic"]["commentaire"] = "Commentaire";
	$fieldToolTipstconsequences["Arabic"]["commentaire"] = "";
	$placeHolderstconsequences["Arabic"]["commentaire"] = "";
	if (count($fieldToolTipstconsequences["Arabic"]))
		$tdatatconsequences[".isUseToolTips"] = true;
}


	$tdatatconsequences[".NCSearch"] = true;



$tdatatconsequences[".shortTableName"] = "tconsequences";
$tdatatconsequences[".nSecOptions"] = 0;

$tdatatconsequences[".mainTableOwnerID"] = "";
$tdatatconsequences[".entityType"] = 0;

$tdatatconsequences[".strOriginalTableName"] = "tconsequences";

	



$tdatatconsequences[".showAddInPopup"] = false;

$tdatatconsequences[".showEditInPopup"] = false;

$tdatatconsequences[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatconsequences[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatconsequences[".listAjax"] = false;
//	temporary
$tdatatconsequences[".listAjax"] = false;

	$tdatatconsequences[".audit"] = true;

	$tdatatconsequences[".locking"] = false;


$pages = $tdatatconsequences[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatconsequences[".edit"] = true;
	$tdatatconsequences[".afterEditAction"] = 1;
	$tdatatconsequences[".closePopupAfterEdit"] = 1;
	$tdatatconsequences[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatconsequences[".add"] = true;
$tdatatconsequences[".afterAddAction"] = 1;
$tdatatconsequences[".closePopupAfterAdd"] = 1;
$tdatatconsequences[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatconsequences[".list"] = true;
}



$tdatatconsequences[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatconsequences[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatconsequences[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatconsequences[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatconsequences[".printFriendly"] = true;
}



$tdatatconsequences[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatconsequences[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatconsequences[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatconsequences[".isUseAjaxSuggest"] = true;

$tdatatconsequences[".rowHighlite"] = true;





$tdatatconsequences[".ajaxCodeSnippetAdded"] = false;

$tdatatconsequences[".buttonsAdded"] = false;

$tdatatconsequences[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatconsequences[".isUseTimeForSearch"] = false;


$tdatatconsequences[".badgeColor"] = "CD5C5C";


$tdatatconsequences[".allSearchFields"] = array();
$tdatatconsequences[".filterFields"] = array();
$tdatatconsequences[".requiredSearchFields"] = array();

$tdatatconsequences[".googleLikeFields"] = array();
$tdatatconsequences[".googleLikeFields"][] = "id_conseq";
$tdatatconsequences[".googleLikeFields"][] = "libelle";
$tdatatconsequences[".googleLikeFields"][] = "type_conseq";
$tdatatconsequences[".googleLikeFields"][] = "commentaire";



$tdatatconsequences[".tableType"] = "list";

$tdatatconsequences[".printerPageOrientation"] = 0;
$tdatatconsequences[".nPrinterPageScale"] = 100;

$tdatatconsequences[".nPrinterSplitRecords"] = 40;

$tdatatconsequences[".geocodingEnabled"] = false;










$tdatatconsequences[".pageSize"] = 20;

$tdatatconsequences[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatconsequences[".strOrderBy"] = $tstrOrderBy;

$tdatatconsequences[".orderindexes"] = array();

$tdatatconsequences[".sqlHead"] = "SELECT id_conseq,  	libelle,  	type_conseq,  	commentaire";
$tdatatconsequences[".sqlFrom"] = "FROM tconsequences";
$tdatatconsequences[".sqlWhereExpr"] = "";
$tdatatconsequences[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatconsequences[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatconsequences[".arrGroupsPerPage"] = $arrGPP;

$tdatatconsequences[".highlightSearchResults"] = true;

$tableKeystconsequences = array();
$tdatatconsequences[".Keys"] = $tableKeystconsequences;


$tdatatconsequences[".hideMobileList"] = array();




//	id_conseq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_conseq";
	$fdata["GoodName"] = "id_conseq";
	$fdata["ownerTable"] = "tconsequences";
	$fdata["Label"] = GetFieldLabel("tconsequences","id_conseq");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_conseq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_conseq";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatconsequences["id_conseq"] = $fdata;
		$tdatatconsequences[".searchableFields"][] = "id_conseq";
//	libelle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "libelle";
	$fdata["GoodName"] = "libelle";
	$fdata["ownerTable"] = "tconsequences";
	$fdata["Label"] = GetFieldLabel("tconsequences","libelle");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "libelle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libelle";

	
	
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


	$tdatatconsequences["libelle"] = $fdata;
		$tdatatconsequences[".searchableFields"][] = "libelle";
//	type_conseq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type_conseq";
	$fdata["GoodName"] = "type_conseq";
	$fdata["ownerTable"] = "tconsequences";
	$fdata["Label"] = GetFieldLabel("tconsequences","type_conseq");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "type_conseq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_conseq";

	
	
			
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
	$edata["LookupValues"][] = "الصحة الجسدية";
	$edata["LookupValues"][] = "الصحة النفسية";
	$edata["LookupValues"][] = "سوسيو-اقتصادية";
	$edata["LookupValues"][] = "الأبناء";

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatatconsequences["type_conseq"] = $fdata;
		$tdatatconsequences[".searchableFields"][] = "type_conseq";
//	commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "commentaire";
	$fdata["GoodName"] = "commentaire";
	$fdata["ownerTable"] = "tconsequences";
	$fdata["Label"] = GetFieldLabel("tconsequences","commentaire");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "commentaire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commentaire";

	
	
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


	$tdatatconsequences["commentaire"] = $fdata;
		$tdatatconsequences[".searchableFields"][] = "commentaire";


$tables_data["tconsequences"]=&$tdatatconsequences;
$field_labels["tconsequences"] = &$fieldLabelstconsequences;
$fieldToolTips["tconsequences"] = &$fieldToolTipstconsequences;
$placeHolders["tconsequences"] = &$placeHolderstconsequences;
$page_titles["tconsequences"] = &$pageTitlestconsequences;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tconsequences"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tconsequences"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tconsequences()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_conseq,  	libelle,  	type_conseq,  	commentaire";
$proto0["m_strFrom"] = "FROM tconsequences";
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
	"m_strName" => "id_conseq",
	"m_strTable" => "tconsequences",
	"m_srcTableName" => "tconsequences"
));

$proto6["m_sql"] = "id_conseq";
$proto6["m_srcTableName"] = "tconsequences";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "libelle",
	"m_strTable" => "tconsequences",
	"m_srcTableName" => "tconsequences"
));

$proto8["m_sql"] = "libelle";
$proto8["m_srcTableName"] = "tconsequences";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type_conseq",
	"m_strTable" => "tconsequences",
	"m_srcTableName" => "tconsequences"
));

$proto10["m_sql"] = "type_conseq";
$proto10["m_srcTableName"] = "tconsequences";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaire",
	"m_strTable" => "tconsequences",
	"m_srcTableName" => "tconsequences"
));

$proto12["m_sql"] = "commentaire";
$proto12["m_srcTableName"] = "tconsequences";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tconsequences";
$proto15["m_srcTableName"] = "tconsequences";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_conseq";
$proto15["m_columns"][] = "libelle";
$proto15["m_columns"][] = "type_conseq";
$proto15["m_columns"][] = "commentaire";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tconsequences";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tconsequences";
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
$proto0["m_srcTableName"]="tconsequences";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tconsequences = createSqlQuery_tconsequences();


	
		;

				

$tdatatconsequences[".sqlquery"] = $queryData_tconsequences;

$tableEvents["tconsequences"] = new eventsBase;
$tdatatconsequences[".hasEvents"] = false;

?>