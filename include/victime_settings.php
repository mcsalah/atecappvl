<?php



$tdatavictime = array();
$tdatavictime[".searchableFields"] = array();
$tdatavictime[".ShortName"] = "victime";
$tdatavictime[".OwnerID"] = "";
$tdatavictime[".OriginalTable"] = "Victime";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatavictime[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavictime[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavictime[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsvictime = array();
$fieldToolTipsvictime = array();
$pageTitlesvictime = array();
$placeHoldersvictime = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsvictime["Arabic"] = array();
	$fieldToolTipsvictime["Arabic"] = array();
	$placeHoldersvictime["Arabic"] = array();
	$pageTitlesvictime["Arabic"] = array();
	$fieldLabelsvictime["Arabic"]["victime_CIN"] = "رقم البطاقة الوطنية للتعريف";
	$fieldToolTipsvictime["Arabic"]["victime_CIN"] = "";
	$placeHoldersvictime["Arabic"]["victime_CIN"] = "";
	$fieldLabelsvictime["Arabic"]["Nom_victime"] = "الاسم الكامل";
	$fieldToolTipsvictime["Arabic"]["Nom_victime"] = "";
	$placeHoldersvictime["Arabic"]["Nom_victime"] = "";
	$fieldLabelsvictime["Arabic"]["Adresse_victime"] = "العنوان";
	$fieldToolTipsvictime["Arabic"]["Adresse_victime"] = "";
	$placeHoldersvictime["Arabic"]["Adresse_victime"] = "";
	$fieldLabelsvictime["Arabic"]["Tel_victime"] = "رقم الهاتف";
	$fieldToolTipsvictime["Arabic"]["Tel_victime"] = "";
	$placeHoldersvictime["Arabic"]["Tel_victime"] = "";
	$fieldLabelsvictime["Arabic"]["Age_victime"] = "السن";
	$fieldToolTipsvictime["Arabic"]["Age_victime"] = "";
	$placeHoldersvictime["Arabic"]["Age_victime"] = "";
	$fieldLabelsvictime["Arabic"]["Region_victime"] = "جهة الإقامة";
	$fieldToolTipsvictime["Arabic"]["Region_victime"] = "";
	$placeHoldersvictime["Arabic"]["Region_victime"] = "";
	$fieldLabelsvictime["Arabic"]["TypeHabitation_victime"] = "نوع السكن";
	$fieldToolTipsvictime["Arabic"]["TypeHabitation_victime"] = "";
	$placeHoldersvictime["Arabic"]["TypeHabitation_victime"] = "";
	$fieldLabelsvictime["Arabic"]["NivScolaire_victime"] = "المستوى التعليمي للناجية من العنف";
	$fieldToolTipsvictime["Arabic"]["NivScolaire_victime"] = "";
	$placeHoldersvictime["Arabic"]["NivScolaire_victime"] = "";
	$fieldLabelsvictime["Arabic"]["ActivitePro_victime"] = "النشاط المهني للناجية من العنف";
	$fieldToolTipsvictime["Arabic"]["ActivitePro_victime"] = "";
	$placeHoldersvictime["Arabic"]["ActivitePro_victime"] = "";
	$fieldLabelsvictime["Arabic"]["EtatCivil_victime"] = "الحالة العائلية للناجية من العنف";
	$fieldToolTipsvictime["Arabic"]["EtatCivil_victime"] = "";
	$placeHoldersvictime["Arabic"]["EtatCivil_victime"] = "";
	$fieldLabelsvictime["Arabic"]["VictDate_marriage"] = "تاريخ الزواج";
	$fieldToolTipsvictime["Arabic"]["VictDate_marriage"] = "";
	$placeHoldersvictime["Arabic"]["VictDate_marriage"] = "";
	$fieldLabelsvictime["Arabic"]["Periode_marriage"] = "مدة الزواج";
	$fieldToolTipsvictime["Arabic"]["Periode_marriage"] = "";
	$placeHoldersvictime["Arabic"]["Periode_marriage"] = "";
	$fieldLabelsvictime["Arabic"]["Date_divorce"] = "تاريخ الطلاق";
	$fieldToolTipsvictime["Arabic"]["Date_divorce"] = "";
	$placeHoldersvictime["Arabic"]["Date_divorce"] = "";
	$fieldLabelsvictime["Arabic"]["Type_divorce"] = "نوع الطلاق";
	$fieldToolTipsvictime["Arabic"]["Type_divorce"] = "";
	$placeHoldersvictime["Arabic"]["Type_divorce"] = "";
	$fieldLabelsvictime["Arabic"]["Nbr_enfants"] = "عدد الأبناء";
	$fieldToolTipsvictime["Arabic"]["Nbr_enfants"] = "";
	$placeHoldersvictime["Arabic"]["Nbr_enfants"] = "";
	$fieldLabelsvictime["Arabic"]["NbrEnfant_Gracon"] = "عدد الذكور";
	$fieldToolTipsvictime["Arabic"]["NbrEnfant_Gracon"] = "";
	$placeHoldersvictime["Arabic"]["NbrEnfant_Gracon"] = "";
	$fieldLabelsvictime["Arabic"]["NbrEnfant_Fille"] = "عدد الإناث";
	$fieldToolTipsvictime["Arabic"]["NbrEnfant_Fille"] = "";
	$placeHoldersvictime["Arabic"]["NbrEnfant_Fille"] = "";
	$fieldLabelsvictime["Arabic"]["Victime_ENceinte"] = "حامل";
	$fieldToolTipsvictime["Arabic"]["Victime_ENceinte"] = "";
	$placeHoldersvictime["Arabic"]["Victime_ENceinte"] = "";
	$fieldLabelsvictime["Arabic"]["Enfant_list"] = "Enfant List";
	$fieldToolTipsvictime["Arabic"]["Enfant_list"] = "";
	$placeHoldersvictime["Arabic"]["Enfant_list"] = "";
	$fieldLabelsvictime["Arabic"]["CouvSocial_victime"] = "CouvSocial Victime";
	$fieldToolTipsvictime["Arabic"]["CouvSocial_victime"] = "";
	$placeHoldersvictime["Arabic"]["CouvSocial_victime"] = "";
	$pageTitlesvictime["Arabic"]["add"] = "المعلومات الخاصة بالناجية من العنف";
	if (count($fieldToolTipsvictime["Arabic"]))
		$tdatavictime[".isUseToolTips"] = true;
}


	$tdatavictime[".NCSearch"] = true;



$tdatavictime[".shortTableName"] = "victime";
$tdatavictime[".nSecOptions"] = 0;

$tdatavictime[".mainTableOwnerID"] = "";
$tdatavictime[".entityType"] = 0;

$tdatavictime[".strOriginalTableName"] = "Victime";

	



$tdatavictime[".showAddInPopup"] = false;

$tdatavictime[".showEditInPopup"] = false;

$tdatavictime[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavictime[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavictime[".listAjax"] = false;
//	temporary
$tdatavictime[".listAjax"] = false;

	$tdatavictime[".audit"] = true;

	$tdatavictime[".locking"] = false;


$pages = $tdatavictime[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavictime[".edit"] = true;
	$tdatavictime[".afterEditAction"] = 1;
	$tdatavictime[".closePopupAfterEdit"] = 1;
	$tdatavictime[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavictime[".add"] = true;
$tdatavictime[".afterAddAction"] = 1;
$tdatavictime[".closePopupAfterAdd"] = 1;
$tdatavictime[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavictime[".list"] = true;
}



$tdatavictime[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavictime[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavictime[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavictime[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavictime[".printFriendly"] = true;
}



$tdatavictime[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavictime[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavictime[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavictime[".isUseAjaxSuggest"] = true;

$tdatavictime[".rowHighlite"] = true;





$tdatavictime[".ajaxCodeSnippetAdded"] = false;

$tdatavictime[".buttonsAdded"] = false;

$tdatavictime[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavictime[".isUseTimeForSearch"] = false;


$tdatavictime[".badgeColor"] = "7b68ee";


$tdatavictime[".allSearchFields"] = array();
$tdatavictime[".filterFields"] = array();
$tdatavictime[".requiredSearchFields"] = array();

$tdatavictime[".googleLikeFields"] = array();
$tdatavictime[".googleLikeFields"][] = "victime_CIN";
$tdatavictime[".googleLikeFields"][] = "Nom_victime";
$tdatavictime[".googleLikeFields"][] = "Adresse_victime";
$tdatavictime[".googleLikeFields"][] = "Tel_victime";
$tdatavictime[".googleLikeFields"][] = "Age_victime";
$tdatavictime[".googleLikeFields"][] = "Region_victime";
$tdatavictime[".googleLikeFields"][] = "TypeHabitation_victime";
$tdatavictime[".googleLikeFields"][] = "NivScolaire_victime";
$tdatavictime[".googleLikeFields"][] = "ActivitePro_victime";
$tdatavictime[".googleLikeFields"][] = "EtatCivil_victime";
$tdatavictime[".googleLikeFields"][] = "VictDate_marriage";
$tdatavictime[".googleLikeFields"][] = "Periode_marriage";
$tdatavictime[".googleLikeFields"][] = "Date_divorce";
$tdatavictime[".googleLikeFields"][] = "Type_divorce";
$tdatavictime[".googleLikeFields"][] = "Nbr_enfants";
$tdatavictime[".googleLikeFields"][] = "NbrEnfant_Gracon";
$tdatavictime[".googleLikeFields"][] = "NbrEnfant_Fille";
$tdatavictime[".googleLikeFields"][] = "Victime_ENceinte";
$tdatavictime[".googleLikeFields"][] = "Enfant_list";
$tdatavictime[".googleLikeFields"][] = "CouvSocial_victime";



$tdatavictime[".tableType"] = "list";

$tdatavictime[".printerPageOrientation"] = 0;
$tdatavictime[".nPrinterPageScale"] = 100;

$tdatavictime[".nPrinterSplitRecords"] = 40;

$tdatavictime[".geocodingEnabled"] = false;










$tdatavictime[".pageSize"] = 20;

$tdatavictime[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavictime[".strOrderBy"] = $tstrOrderBy;

$tdatavictime[".orderindexes"] = array();

$tdatavictime[".sqlHead"] = "SELECT victime_CIN,  	Nom_victime,  	Adresse_victime,  	Tel_victime,  	Age_victime,  	Region_victime,  	TypeHabitation_victime,  	NivScolaire_victime,  	ActivitePro_victime,  	EtatCivil_victime,  	VictDate_marriage,  	Periode_marriage,  	Date_divorce,  	Type_divorce,  	Nbr_enfants,  	NbrEnfant_Gracon,  	NbrEnfant_Fille,  	Victime_ENceinte,  	Enfant_list,  	CouvSocial_victime";
$tdatavictime[".sqlFrom"] = "FROM Victime";
$tdatavictime[".sqlWhereExpr"] = "";
$tdatavictime[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavictime[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavictime[".arrGroupsPerPage"] = $arrGPP;

$tdatavictime[".highlightSearchResults"] = true;

$tableKeysvictime = array();
$tableKeysvictime[] = "victime_CIN";
$tdatavictime[".Keys"] = $tableKeysvictime;


$tdatavictime[".hideMobileList"] = array();




//	victime_CIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "victime_CIN";
	$fdata["GoodName"] = "victime_CIN";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","victime_CIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "victime_CIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "victime_CIN";

	
	
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


	$tdatavictime["victime_CIN"] = $fdata;
		$tdatavictime[".searchableFields"][] = "victime_CIN";
//	Nom_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nom_victime";
	$fdata["GoodName"] = "Nom_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Nom_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nom_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nom_victime";

	
	
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


	$tdatavictime["Nom_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Nom_victime";
//	Adresse_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Adresse_victime";
	$fdata["GoodName"] = "Adresse_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Adresse_victime");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Adresse_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Adresse_victime";

	
	
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


	$tdatavictime["Adresse_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Adresse_victime";
//	Tel_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tel_victime";
	$fdata["GoodName"] = "Tel_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Tel_victime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Tel_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tel_victime";

	
	
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


	$tdatavictime["Tel_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Tel_victime";
//	Age_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Age_victime";
	$fdata["GoodName"] = "Age_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Age_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Age_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Age_victime";

	
	
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
	$edata["LookupValues"][] = "أقل من 18";
	$edata["LookupValues"][] = "من 18 إلى 28 ";
	$edata["LookupValues"][] = "من 29 إلى 38 ";
	$edata["LookupValues"][] = "من 39 إلى 48";
	$edata["LookupValues"][] = "من 49 إلى 59 ";
	$edata["LookupValues"][] = "فما فوق 60 سنة";

	
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


	$tdatavictime["Age_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Age_victime";
//	Region_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Region_victime";
	$fdata["GoodName"] = "Region_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Region_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Region_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Region_victime";

	
	
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
	$edata["LookupValues"][] = "جهة طنجة-تطوان-الحسيمة ";
	$edata["LookupValues"][] = "جهة فاس-مكناس ";
	$edata["LookupValues"][] = "جهة الشرق ";
	$edata["LookupValues"][] = "جهة الرباط-سلا-القنيطرة ";
	$edata["LookupValues"][] = "جهة بني ملال-خنيفرة ";
	$edata["LookupValues"][] = "جهة الدار البيضاء-السطات";
	$edata["LookupValues"][] = "جهة مراكش-آسفي";
	$edata["LookupValues"][] = "جهة درعة-تافيلالت ";
	$edata["LookupValues"][] = "جهة سوس-ماسة ";
	$edata["LookupValues"][] = "جهة كلميم-واد نون ";
	$edata["LookupValues"][] = "جهة العيون-الساقية الحمراء ";
	$edata["LookupValues"][] = "جهة الداخلة واد الذهب";

	
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


	$tdatavictime["Region_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Region_victime";
//	TypeHabitation_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TypeHabitation_victime";
	$fdata["GoodName"] = "TypeHabitation_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","TypeHabitation_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TypeHabitation_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeHabitation_victime";

	
	
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
	$edata["LookupValues"][] = "منزل مستقل ";
	$edata["LookupValues"][] = "سكن اقتصادي";
	$edata["LookupValues"][] = "شقة فاخرة";
	$edata["LookupValues"][] = "فيلا";
	$edata["LookupValues"][] = "دور الصفيح ";
	$edata["LookupValues"][] = "سكن قروي ";
	$edata["LookupValues"][] = "غرفة ";

	
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


	$tdatavictime["TypeHabitation_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "TypeHabitation_victime";
//	NivScolaire_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NivScolaire_victime";
	$fdata["GoodName"] = "NivScolaire_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","NivScolaire_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NivScolaire_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NivScolaire_victime";

	
	
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
	$edata["LookupValues"][] = "أمية";
	$edata["LookupValues"][] = "ابتدائي ";
	$edata["LookupValues"][] = "إعدادي";
	$edata["LookupValues"][] = "ثانوي";
	$edata["LookupValues"][] = "جامعي";
	$edata["LookupValues"][] = "تكوين مهني ";

	
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


	$tdatavictime["NivScolaire_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "NivScolaire_victime";
//	ActivitePro_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ActivitePro_victime";
	$fdata["GoodName"] = "ActivitePro_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","ActivitePro_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ActivitePro_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActivitePro_victime";

	
	
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
	$edata["LookupValues"][] = "موظفة في القطاع العام ";
	$edata["LookupValues"][] = "أجيرة في القطاع الخاص";
	$edata["LookupValues"][] = "عاطلة عن العمل ";
	$edata["LookupValues"][] = "تلميذة -طالبة";
	$edata["LookupValues"][] = "ربة بيت ";
	$edata["LookupValues"][] = "متقاعدة";
	$edata["LookupValues"][] = "مهنة حرة ";
	$edata["LookupValues"][] = "عاملة نظافة";

	
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


	$tdatavictime["ActivitePro_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "ActivitePro_victime";
//	EtatCivil_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EtatCivil_victime";
	$fdata["GoodName"] = "EtatCivil_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","EtatCivil_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "EtatCivil_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EtatCivil_victime";

	
	
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
	$edata["LookupValues"][] = "عازبة";
	$edata["LookupValues"][] = "أم عازبة ";
	$edata["LookupValues"][] = "مطلقة";
	$edata["LookupValues"][] = "متزوجة ";
	$edata["LookupValues"][] = "أرملة ";
	$edata["LookupValues"][] = "مساكنة";

	
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


	$tdatavictime["EtatCivil_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "EtatCivil_victime";
//	VictDate_marriage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VictDate_marriage";
	$fdata["GoodName"] = "VictDate_marriage";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","VictDate_marriage");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "VictDate_marriage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VictDate_marriage";

	
	
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


	$tdatavictime["VictDate_marriage"] = $fdata;
		$tdatavictime[".searchableFields"][] = "VictDate_marriage";
//	Periode_marriage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Periode_marriage";
	$fdata["GoodName"] = "Periode_marriage";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Periode_marriage");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Periode_marriage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Periode_marriage";

	
	
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


	$tdatavictime["Periode_marriage"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Periode_marriage";
//	Date_divorce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Date_divorce";
	$fdata["GoodName"] = "Date_divorce";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Date_divorce");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Date_divorce";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Date_divorce";

	
	
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


	$tdatavictime["Date_divorce"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Date_divorce";
//	Type_divorce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Type_divorce";
	$fdata["GoodName"] = "Type_divorce";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Type_divorce");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Type_divorce";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Type_divorce";

	
	
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


	$tdatavictime["Type_divorce"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Type_divorce";
//	Nbr_enfants
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Nbr_enfants";
	$fdata["GoodName"] = "Nbr_enfants";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Nbr_enfants");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Nbr_enfants";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nbr_enfants";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatavictime["Nbr_enfants"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Nbr_enfants";
//	NbrEnfant_Gracon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "NbrEnfant_Gracon";
	$fdata["GoodName"] = "NbrEnfant_Gracon";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","NbrEnfant_Gracon");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "NbrEnfant_Gracon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NbrEnfant_Gracon";

	
	
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


	$tdatavictime["NbrEnfant_Gracon"] = $fdata;
		$tdatavictime[".searchableFields"][] = "NbrEnfant_Gracon";
//	NbrEnfant_Fille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "NbrEnfant_Fille";
	$fdata["GoodName"] = "NbrEnfant_Fille";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","NbrEnfant_Fille");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "NbrEnfant_Fille";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NbrEnfant_Fille";

	
	
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


	$tdatavictime["NbrEnfant_Fille"] = $fdata;
		$tdatavictime[".searchableFields"][] = "NbrEnfant_Fille";
//	Victime_ENceinte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Victime_ENceinte";
	$fdata["GoodName"] = "Victime_ENceinte";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Victime_ENceinte");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Victime_ENceinte";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Victime_ENceinte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatavictime["Victime_ENceinte"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Victime_ENceinte";
//	Enfant_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Enfant_list";
	$fdata["GoodName"] = "Enfant_list";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","Enfant_list");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Enfant_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Enfant_list";

	
	
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
	$edata["LookupTable"] = "Enfants";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NomCompl_enfant";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NomCompl_enfant";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

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


	$tdatavictime["Enfant_list"] = $fdata;
		$tdatavictime[".searchableFields"][] = "Enfant_list";
//	CouvSocial_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CouvSocial_victime";
	$fdata["GoodName"] = "CouvSocial_victime";
	$fdata["ownerTable"] = "Victime";
	$fdata["Label"] = GetFieldLabel("Victime","CouvSocial_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CouvSocial_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CouvSocial_victime";

	
	
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
	$edata["LookupValues"][] = "CNSS";
	$edata["LookupValues"][] = "RAMED";
	$edata["LookupValues"][] = "CNOPS";
	$edata["LookupValues"][] = "ASSURANCE";
	$edata["LookupValues"][] = "ليست لديها أية تغطية صحية ";

	
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


	$tdatavictime["CouvSocial_victime"] = $fdata;
		$tdatavictime[".searchableFields"][] = "CouvSocial_victime";


$tables_data["Victime"]=&$tdatavictime;
$field_labels["Victime"] = &$fieldLabelsvictime;
$fieldToolTips["Victime"] = &$fieldToolTipsvictime;
$placeHolders["Victime"] = &$placeHoldersvictime;
$page_titles["Victime"] = &$pageTitlesvictime;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Victime"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Victime"] = array();



	
				$strOriginalDetailsTable="Enfants";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Enfants";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "enfants";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Victime"][0] = $masterParams;
				$masterTablesData["Victime"][0]["masterKeys"] = array();
	$masterTablesData["Victime"][0]["masterKeys"][]="ID_MereVict";
				$masterTablesData["Victime"][0]["detailKeys"] = array();
	$masterTablesData["Victime"][0]["detailKeys"][]="victime_CIN";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_victime()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "victime_CIN,  	Nom_victime,  	Adresse_victime,  	Tel_victime,  	Age_victime,  	Region_victime,  	TypeHabitation_victime,  	NivScolaire_victime,  	ActivitePro_victime,  	EtatCivil_victime,  	VictDate_marriage,  	Periode_marriage,  	Date_divorce,  	Type_divorce,  	Nbr_enfants,  	NbrEnfant_Gracon,  	NbrEnfant_Fille,  	Victime_ENceinte,  	Enfant_list,  	CouvSocial_victime";
$proto0["m_strFrom"] = "FROM Victime";
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
	"m_strName" => "victime_CIN",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto6["m_sql"] = "victime_CIN";
$proto6["m_srcTableName"] = "Victime";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nom_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto8["m_sql"] = "Nom_victime";
$proto8["m_srcTableName"] = "Victime";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Adresse_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto10["m_sql"] = "Adresse_victime";
$proto10["m_srcTableName"] = "Victime";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tel_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto12["m_sql"] = "Tel_victime";
$proto12["m_srcTableName"] = "Victime";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Age_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto14["m_sql"] = "Age_victime";
$proto14["m_srcTableName"] = "Victime";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Region_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto16["m_sql"] = "Region_victime";
$proto16["m_srcTableName"] = "Victime";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeHabitation_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto18["m_sql"] = "TypeHabitation_victime";
$proto18["m_srcTableName"] = "Victime";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NivScolaire_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto20["m_sql"] = "NivScolaire_victime";
$proto20["m_srcTableName"] = "Victime";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ActivitePro_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto22["m_sql"] = "ActivitePro_victime";
$proto22["m_srcTableName"] = "Victime";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EtatCivil_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto24["m_sql"] = "EtatCivil_victime";
$proto24["m_srcTableName"] = "Victime";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VictDate_marriage",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto26["m_sql"] = "VictDate_marriage";
$proto26["m_srcTableName"] = "Victime";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Periode_marriage",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto28["m_sql"] = "Periode_marriage";
$proto28["m_srcTableName"] = "Victime";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_divorce",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto30["m_sql"] = "Date_divorce";
$proto30["m_srcTableName"] = "Victime";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Type_divorce",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto32["m_sql"] = "Type_divorce";
$proto32["m_srcTableName"] = "Victime";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Nbr_enfants",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto34["m_sql"] = "Nbr_enfants";
$proto34["m_srcTableName"] = "Victime";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "NbrEnfant_Gracon",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto36["m_sql"] = "NbrEnfant_Gracon";
$proto36["m_srcTableName"] = "Victime";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "NbrEnfant_Fille",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto38["m_sql"] = "NbrEnfant_Fille";
$proto38["m_srcTableName"] = "Victime";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Victime_ENceinte",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto40["m_sql"] = "Victime_ENceinte";
$proto40["m_srcTableName"] = "Victime";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Enfant_list",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto42["m_sql"] = "Enfant_list";
$proto42["m_srcTableName"] = "Victime";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CouvSocial_victime",
	"m_strTable" => "Victime",
	"m_srcTableName" => "Victime"
));

$proto44["m_sql"] = "CouvSocial_victime";
$proto44["m_srcTableName"] = "Victime";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "Victime";
$proto47["m_srcTableName"] = "Victime";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "victime_CIN";
$proto47["m_columns"][] = "Nom_victime";
$proto47["m_columns"][] = "Adresse_victime";
$proto47["m_columns"][] = "Tel_victime";
$proto47["m_columns"][] = "Age_victime";
$proto47["m_columns"][] = "Region_victime";
$proto47["m_columns"][] = "TypeHabitation_victime";
$proto47["m_columns"][] = "NivScolaire_victime";
$proto47["m_columns"][] = "ActivitePro_victime";
$proto47["m_columns"][] = "EtatCivil_victime";
$proto47["m_columns"][] = "VictDate_marriage";
$proto47["m_columns"][] = "Periode_marriage";
$proto47["m_columns"][] = "Date_divorce";
$proto47["m_columns"][] = "Type_divorce";
$proto47["m_columns"][] = "Nbr_enfants";
$proto47["m_columns"][] = "NbrEnfant_Gracon";
$proto47["m_columns"][] = "NbrEnfant_Fille";
$proto47["m_columns"][] = "Victime_ENceinte";
$proto47["m_columns"][] = "Enfant_list";
$proto47["m_columns"][] = "CouvSocial_victime";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "Victime";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "Victime";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Victime";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_victime = createSqlQuery_victime();


	
		;

																				

$tdatavictime[".sqlquery"] = $queryData_victime;

$tableEvents["Victime"] = new eventsBase;
$tdatavictime[".hasEvents"] = false;

?>