<?php



$tdataenfants = array();
$tdataenfants[".searchableFields"] = array();
$tdataenfants[".ShortName"] = "enfants";
$tdataenfants[".OwnerID"] = "";
$tdataenfants[".OriginalTable"] = "Enfants";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataenfants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataenfants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataenfants[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsenfants = array();
$fieldToolTipsenfants = array();
$pageTitlesenfants = array();
$placeHoldersenfants = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsenfants["Arabic"] = array();
	$fieldToolTipsenfants["Arabic"] = array();
	$placeHoldersenfants["Arabic"] = array();
	$pageTitlesenfants["Arabic"] = array();
	$fieldLabelsenfants["Arabic"]["ID_enfant"] = "ID Enfant";
	$fieldToolTipsenfants["Arabic"]["ID_enfant"] = "";
	$placeHoldersenfants["Arabic"]["ID_enfant"] = "";
	$fieldLabelsenfants["Arabic"]["ID_MereVict"] = "إسم الأم";
	$fieldToolTipsenfants["Arabic"]["ID_MereVict"] = "";
	$placeHoldersenfants["Arabic"]["ID_MereVict"] = "";
	$fieldLabelsenfants["Arabic"]["NomCompl_enfant"] = "الاسم الكامل";
	$fieldToolTipsenfants["Arabic"]["NomCompl_enfant"] = "";
	$placeHoldersenfants["Arabic"]["NomCompl_enfant"] = "";
	$fieldLabelsenfants["Arabic"]["DateNaiss_enfant"] = "تاريخ الازدياد";
	$fieldToolTipsenfants["Arabic"]["DateNaiss_enfant"] = "";
	$placeHoldersenfants["Arabic"]["DateNaiss_enfant"] = "";
	$fieldLabelsenfants["Arabic"]["Enfant_scolarise"] = "متمدرس(ة)";
	$fieldToolTipsenfants["Arabic"]["Enfant_scolarise"] = "";
	$placeHoldersenfants["Arabic"]["Enfant_scolarise"] = "";
	$fieldLabelsenfants["Arabic"]["Enfant_Nscolarise"] = "منقطع(ة)";
	$fieldToolTipsenfants["Arabic"]["Enfant_Nscolarise"] = "";
	$placeHoldersenfants["Arabic"]["Enfant_Nscolarise"] = "";
	$fieldLabelsenfants["Arabic"]["Enf_InsEtatCivil"] = "مسجل في الحالة المدنية ";
	$fieldToolTipsenfants["Arabic"]["Enf_InsEtatCivil"] = "";
	$placeHoldersenfants["Arabic"]["Enf_InsEtatCivil"] = "";
	if (count($fieldToolTipsenfants["Arabic"]))
		$tdataenfants[".isUseToolTips"] = true;
}


	$tdataenfants[".NCSearch"] = true;



$tdataenfants[".shortTableName"] = "enfants";
$tdataenfants[".nSecOptions"] = 0;

$tdataenfants[".mainTableOwnerID"] = "";
$tdataenfants[".entityType"] = 0;

$tdataenfants[".strOriginalTableName"] = "Enfants";

	



$tdataenfants[".showAddInPopup"] = false;

$tdataenfants[".showEditInPopup"] = false;

$tdataenfants[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataenfants[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataenfants[".listAjax"] = false;
//	temporary
$tdataenfants[".listAjax"] = false;

	$tdataenfants[".audit"] = true;

	$tdataenfants[".locking"] = false;


$pages = $tdataenfants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataenfants[".edit"] = true;
	$tdataenfants[".afterEditAction"] = 1;
	$tdataenfants[".closePopupAfterEdit"] = 1;
	$tdataenfants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataenfants[".add"] = true;
$tdataenfants[".afterAddAction"] = 1;
$tdataenfants[".closePopupAfterAdd"] = 1;
$tdataenfants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataenfants[".list"] = true;
}



$tdataenfants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataenfants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataenfants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataenfants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataenfants[".printFriendly"] = true;
}



$tdataenfants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataenfants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataenfants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataenfants[".isUseAjaxSuggest"] = true;

$tdataenfants[".rowHighlite"] = true;





$tdataenfants[".ajaxCodeSnippetAdded"] = false;

$tdataenfants[".buttonsAdded"] = false;

$tdataenfants[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenfants[".isUseTimeForSearch"] = false;


$tdataenfants[".badgeColor"] = "DC143C";


$tdataenfants[".allSearchFields"] = array();
$tdataenfants[".filterFields"] = array();
$tdataenfants[".requiredSearchFields"] = array();

$tdataenfants[".googleLikeFields"] = array();
$tdataenfants[".googleLikeFields"][] = "ID_enfant";
$tdataenfants[".googleLikeFields"][] = "ID_MereVict";
$tdataenfants[".googleLikeFields"][] = "NomCompl_enfant";
$tdataenfants[".googleLikeFields"][] = "DateNaiss_enfant";
$tdataenfants[".googleLikeFields"][] = "Enfant_scolarise";
$tdataenfants[".googleLikeFields"][] = "Enfant_Nscolarise";
$tdataenfants[".googleLikeFields"][] = "Enf_InsEtatCivil";



$tdataenfants[".tableType"] = "list";

$tdataenfants[".printerPageOrientation"] = 0;
$tdataenfants[".nPrinterPageScale"] = 100;

$tdataenfants[".nPrinterSplitRecords"] = 40;

$tdataenfants[".geocodingEnabled"] = false;










$tdataenfants[".pageSize"] = 20;

$tdataenfants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenfants[".strOrderBy"] = $tstrOrderBy;

$tdataenfants[".orderindexes"] = array();

$tdataenfants[".sqlHead"] = "SELECT ID_enfant,  	ID_MereVict,  	NomCompl_enfant,  	DateNaiss_enfant,  	Enfant_scolarise,  	Enfant_Nscolarise,  	Enf_InsEtatCivil";
$tdataenfants[".sqlFrom"] = "FROM Enfants";
$tdataenfants[".sqlWhereExpr"] = "";
$tdataenfants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenfants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenfants[".arrGroupsPerPage"] = $arrGPP;

$tdataenfants[".highlightSearchResults"] = true;

$tableKeysenfants = array();
$tableKeysenfants[] = "ID_enfant";
$tdataenfants[".Keys"] = $tableKeysenfants;


$tdataenfants[".hideMobileList"] = array();




//	ID_enfant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_enfant";
	$fdata["GoodName"] = "ID_enfant";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","ID_enfant");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID_enfant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_enfant";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataenfants["ID_enfant"] = $fdata;
		$tdataenfants[".searchableFields"][] = "ID_enfant";
//	ID_MereVict
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_MereVict";
	$fdata["GoodName"] = "ID_MereVict";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","ID_MereVict");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ID_MereVict";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_MereVict";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Victime";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "victime_CIN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nom_victime";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataenfants["ID_MereVict"] = $fdata;
		$tdataenfants[".searchableFields"][] = "ID_MereVict";
//	NomCompl_enfant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NomCompl_enfant";
	$fdata["GoodName"] = "NomCompl_enfant";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","NomCompl_enfant");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NomCompl_enfant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NomCompl_enfant";

	
	
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


	$tdataenfants["NomCompl_enfant"] = $fdata;
		$tdataenfants[".searchableFields"][] = "NomCompl_enfant";
//	DateNaiss_enfant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DateNaiss_enfant";
	$fdata["GoodName"] = "DateNaiss_enfant";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","DateNaiss_enfant");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "DateNaiss_enfant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateNaiss_enfant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataenfants["DateNaiss_enfant"] = $fdata;
		$tdataenfants[".searchableFields"][] = "DateNaiss_enfant";
//	Enfant_scolarise
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Enfant_scolarise";
	$fdata["GoodName"] = "Enfant_scolarise";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","Enfant_scolarise");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Enfant_scolarise";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Enfant_scolarise";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataenfants["Enfant_scolarise"] = $fdata;
		$tdataenfants[".searchableFields"][] = "Enfant_scolarise";
//	Enfant_Nscolarise
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Enfant_Nscolarise";
	$fdata["GoodName"] = "Enfant_Nscolarise";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","Enfant_Nscolarise");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Enfant_Nscolarise";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Enfant_Nscolarise";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataenfants["Enfant_Nscolarise"] = $fdata;
		$tdataenfants[".searchableFields"][] = "Enfant_Nscolarise";
//	Enf_InsEtatCivil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Enf_InsEtatCivil";
	$fdata["GoodName"] = "Enf_InsEtatCivil";
	$fdata["ownerTable"] = "Enfants";
	$fdata["Label"] = GetFieldLabel("Enfants","Enf_InsEtatCivil");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Enf_InsEtatCivil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Enf_InsEtatCivil";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataenfants["Enf_InsEtatCivil"] = $fdata;
		$tdataenfants[".searchableFields"][] = "Enf_InsEtatCivil";


$tables_data["Enfants"]=&$tdataenfants;
$field_labels["Enfants"] = &$fieldLabelsenfants;
$fieldToolTips["Enfants"] = &$fieldToolTipsenfants;
$placeHolders["Enfants"] = &$placeHoldersenfants;
$page_titles["Enfants"] = &$pageTitlesenfants;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Enfants"] = array();
//	Victime
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Victime";
		$detailsParam["dOriginalTable"] = "Victime";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "victime";
	$detailsParam["dCaptionTable"] = GetTableCaption("Victime");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Enfants"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Enfants"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Enfants"][$dIndex]["masterKeys"][]="ID_MereVict";

				$detailsTablesData["Enfants"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Enfants"][$dIndex]["detailKeys"][]="victime_CIN";

// tables which are master tables for current table (detail)
$masterTablesData["Enfants"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_enfants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_enfant,  	ID_MereVict,  	NomCompl_enfant,  	DateNaiss_enfant,  	Enfant_scolarise,  	Enfant_Nscolarise,  	Enf_InsEtatCivil";
$proto0["m_strFrom"] = "FROM Enfants";
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
	"m_strName" => "ID_enfant",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto6["m_sql"] = "ID_enfant";
$proto6["m_srcTableName"] = "Enfants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_MereVict",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto8["m_sql"] = "ID_MereVict";
$proto8["m_srcTableName"] = "Enfants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NomCompl_enfant",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto10["m_sql"] = "NomCompl_enfant";
$proto10["m_srcTableName"] = "Enfants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DateNaiss_enfant",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto12["m_sql"] = "DateNaiss_enfant";
$proto12["m_srcTableName"] = "Enfants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Enfant_scolarise",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto14["m_sql"] = "Enfant_scolarise";
$proto14["m_srcTableName"] = "Enfants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Enfant_Nscolarise",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto16["m_sql"] = "Enfant_Nscolarise";
$proto16["m_srcTableName"] = "Enfants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Enf_InsEtatCivil",
	"m_strTable" => "Enfants",
	"m_srcTableName" => "Enfants"
));

$proto18["m_sql"] = "Enf_InsEtatCivil";
$proto18["m_srcTableName"] = "Enfants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Enfants";
$proto21["m_srcTableName"] = "Enfants";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID_enfant";
$proto21["m_columns"][] = "ID_MereVict";
$proto21["m_columns"][] = "NomCompl_enfant";
$proto21["m_columns"][] = "DateNaiss_enfant";
$proto21["m_columns"][] = "Enfant_scolarise";
$proto21["m_columns"][] = "Enfant_Nscolarise";
$proto21["m_columns"][] = "Enf_InsEtatCivil";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Enfants";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Enfants";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Enfants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enfants = createSqlQuery_enfants();


	
		;

							

$tdataenfants[".sqlquery"] = $queryData_enfants;

$tableEvents["Enfants"] = new eventsBase;
$tdataenfants[".hasEvents"] = false;

?>