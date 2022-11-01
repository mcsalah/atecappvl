<?php



$tdatarespviolence = array();
$tdatarespviolence[".searchableFields"] = array();
$tdatarespviolence[".ShortName"] = "respviolence";
$tdatarespviolence[".OwnerID"] = "";
$tdatarespviolence[".OriginalTable"] = "Respviolence";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatarespviolence[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarespviolence[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarespviolence[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsrespviolence = array();
$fieldToolTipsrespviolence = array();
$pageTitlesrespviolence = array();
$placeHoldersrespviolence = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsrespviolence["Arabic"] = array();
	$fieldToolTipsrespviolence["Arabic"] = array();
	$placeHoldersrespviolence["Arabic"] = array();
	$pageTitlesrespviolence["Arabic"] = array();
	$fieldLabelsrespviolence["Arabic"]["ID_repviol"] = "ID Repviol";
	$fieldToolTipsrespviolence["Arabic"]["ID_repviol"] = "";
	$placeHoldersrespviolence["Arabic"]["ID_repviol"] = "";
	$fieldLabelsrespviolence["Arabic"]["Etat"] = "Etat";
	$fieldToolTipsrespviolence["Arabic"]["Etat"] = "";
	$placeHoldersrespviolence["Arabic"]["Etat"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_nomcomplet"] = "الاسم الكامل";
	$fieldToolTipsrespviolence["Arabic"]["R_nomcomplet"] = "";
	$placeHoldersrespviolence["Arabic"]["R_nomcomplet"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_adresse"] = "العنوان";
	$fieldToolTipsrespviolence["Arabic"]["R_adresse"] = "";
	$placeHoldersrespviolence["Arabic"]["R_adresse"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_tel"] = "رقم الهاتف";
	$fieldToolTipsrespviolence["Arabic"]["R_tel"] = "";
	$placeHoldersrespviolence["Arabic"]["R_tel"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_nationalite"] = "الجنسية";
	$fieldToolTipsrespviolence["Arabic"]["R_nationalite"] = "";
	$placeHoldersrespviolence["Arabic"]["R_nationalite"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_age"] = "السن";
	$fieldToolTipsrespviolence["Arabic"]["R_age"] = "";
	$placeHoldersrespviolence["Arabic"]["R_age"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_NivScolaire"] = "المستوى التعليمي لمرتكب العنف";
	$fieldToolTipsrespviolence["Arabic"]["R_NivScolaire"] = "";
	$placeHoldersrespviolence["Arabic"]["R_NivScolaire"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_ActivitePro"] = "النشاط المهني لمرتكب العنف ";
	$fieldToolTipsrespviolence["Arabic"]["R_ActivitePro"] = "";
	$placeHoldersrespviolence["Arabic"]["R_ActivitePro"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_antesced"] = "هل للمعنف سوابق عدلية؟";
	$fieldToolTipsrespviolence["Arabic"]["R_antesced"] = "";
	$placeHoldersrespviolence["Arabic"]["R_antesced"] = "";
	$fieldLabelsrespviolence["Arabic"]["R_junck"] = "هل المعنف مدمن؟";
	$fieldToolTipsrespviolence["Arabic"]["R_junck"] = "";
	$placeHoldersrespviolence["Arabic"]["R_junck"] = "";
	$pageTitlesrespviolence["Arabic"]["add"] = "المعلومات الخاصة بمرتكب العنف";
	if (count($fieldToolTipsrespviolence["Arabic"]))
		$tdatarespviolence[".isUseToolTips"] = true;
}


	$tdatarespviolence[".NCSearch"] = true;



$tdatarespviolence[".shortTableName"] = "respviolence";
$tdatarespviolence[".nSecOptions"] = 0;

$tdatarespviolence[".mainTableOwnerID"] = "";
$tdatarespviolence[".entityType"] = 0;

$tdatarespviolence[".strOriginalTableName"] = "Respviolence";

	



$tdatarespviolence[".showAddInPopup"] = false;

$tdatarespviolence[".showEditInPopup"] = false;

$tdatarespviolence[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarespviolence[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarespviolence[".listAjax"] = false;
//	temporary
$tdatarespviolence[".listAjax"] = false;

	$tdatarespviolence[".audit"] = true;

	$tdatarespviolence[".locking"] = false;


$pages = $tdatarespviolence[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarespviolence[".edit"] = true;
	$tdatarespviolence[".afterEditAction"] = 1;
	$tdatarespviolence[".closePopupAfterEdit"] = 1;
	$tdatarespviolence[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarespviolence[".add"] = true;
$tdatarespviolence[".afterAddAction"] = 1;
$tdatarespviolence[".closePopupAfterAdd"] = 1;
$tdatarespviolence[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarespviolence[".list"] = true;
}



$tdatarespviolence[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarespviolence[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarespviolence[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarespviolence[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarespviolence[".printFriendly"] = true;
}



$tdatarespviolence[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarespviolence[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarespviolence[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarespviolence[".isUseAjaxSuggest"] = true;

$tdatarespviolence[".rowHighlite"] = true;





$tdatarespviolence[".ajaxCodeSnippetAdded"] = false;

$tdatarespviolence[".buttonsAdded"] = false;

$tdatarespviolence[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarespviolence[".isUseTimeForSearch"] = false;


$tdatarespviolence[".badgeColor"] = "008B8B";


$tdatarespviolence[".allSearchFields"] = array();
$tdatarespviolence[".filterFields"] = array();
$tdatarespviolence[".requiredSearchFields"] = array();

$tdatarespviolence[".googleLikeFields"] = array();
$tdatarespviolence[".googleLikeFields"][] = "ID_repviol";
$tdatarespviolence[".googleLikeFields"][] = "Etat";
$tdatarespviolence[".googleLikeFields"][] = "R_nomcomplet";
$tdatarespviolence[".googleLikeFields"][] = "R_adresse";
$tdatarespviolence[".googleLikeFields"][] = "R_tel";
$tdatarespviolence[".googleLikeFields"][] = "R_nationalite";
$tdatarespviolence[".googleLikeFields"][] = "R_age";
$tdatarespviolence[".googleLikeFields"][] = "R_NivScolaire";
$tdatarespviolence[".googleLikeFields"][] = "R_ActivitePro";
$tdatarespviolence[".googleLikeFields"][] = "R_antesced";
$tdatarespviolence[".googleLikeFields"][] = "R_junck";



$tdatarespviolence[".tableType"] = "list";

$tdatarespviolence[".printerPageOrientation"] = 0;
$tdatarespviolence[".nPrinterPageScale"] = 100;

$tdatarespviolence[".nPrinterSplitRecords"] = 40;

$tdatarespviolence[".geocodingEnabled"] = false;










$tdatarespviolence[".pageSize"] = 20;

$tdatarespviolence[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarespviolence[".strOrderBy"] = $tstrOrderBy;

$tdatarespviolence[".orderindexes"] = array();

$tdatarespviolence[".sqlHead"] = "SELECT ID_repviol,  	Etat,  	R_nomcomplet,  	R_adresse,  	R_tel,  	R_nationalite,  	R_age,  	R_NivScolaire,  	R_ActivitePro,  	R_antesced,  	R_junck";
$tdatarespviolence[".sqlFrom"] = "FROM Respviolence";
$tdatarespviolence[".sqlWhereExpr"] = "";
$tdatarespviolence[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarespviolence[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarespviolence[".arrGroupsPerPage"] = $arrGPP;

$tdatarespviolence[".highlightSearchResults"] = true;

$tableKeysrespviolence = array();
$tableKeysrespviolence[] = "ID_repviol";
$tdatarespviolence[".Keys"] = $tableKeysrespviolence;


$tdatarespviolence[".hideMobileList"] = array();




//	ID_repviol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_repviol";
	$fdata["GoodName"] = "ID_repviol";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","ID_repviol");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID_repviol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_repviol";

	
	
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


	$tdatarespviolence["ID_repviol"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "ID_repviol";
//	Etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Etat";
	$fdata["GoodName"] = "Etat";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","Etat");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Etat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Etat";

	
	
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


	$tdatarespviolence["Etat"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "Etat";
//	R_nomcomplet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "R_nomcomplet";
	$fdata["GoodName"] = "R_nomcomplet";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_nomcomplet");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_nomcomplet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_nomcomplet";

	
	
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


	$tdatarespviolence["R_nomcomplet"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_nomcomplet";
//	R_adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "R_adresse";
	$fdata["GoodName"] = "R_adresse";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_adresse");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "R_adresse";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_adresse";

	
	
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


	$tdatarespviolence["R_adresse"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_adresse";
//	R_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "R_tel";
	$fdata["GoodName"] = "R_tel";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_tel");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "R_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_tel";

	
	
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


	$tdatarespviolence["R_tel"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_tel";
//	R_nationalite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "R_nationalite";
	$fdata["GoodName"] = "R_nationalite";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_nationalite");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_nationalite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_nationalite";

	
	
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


	$tdatarespviolence["R_nationalite"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_nationalite";
//	R_age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "R_age";
	$fdata["GoodName"] = "R_age";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_age");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "R_age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_age";

	
	
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
	$edata["LookupValues"][] = "من 18 إلى28";
	$edata["LookupValues"][] = "من29 إلى38 ";
	$edata["LookupValues"][] = "من 39 إلى48";
	$edata["LookupValues"][] = "من 49 إلى59";
	$edata["LookupValues"][] = "فما فوق 60 سنة";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatarespviolence["R_age"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_age";
//	R_NivScolaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "R_NivScolaire";
	$fdata["GoodName"] = "R_NivScolaire";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_NivScolaire");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_NivScolaire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_NivScolaire";

	
	
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
	$edata["LookupValues"][] = "أمي";
	$edata["LookupValues"][] = "ابتدائي";
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


	$tdatarespviolence["R_NivScolaire"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_NivScolaire";
//	R_ActivitePro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "R_ActivitePro";
	$fdata["GoodName"] = "R_ActivitePro";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_ActivitePro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_ActivitePro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_ActivitePro";

	
	
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
	$edata["LookupValues"][] = "موظف في القطاع العام";
	$edata["LookupValues"][] = "أجير في القطاع الخاص";
	$edata["LookupValues"][] = "عاطل عن العمل ";
	$edata["LookupValues"][] = "تلميذ -طالب ";
	$edata["LookupValues"][] = "ربة بيت ";
	$edata["LookupValues"][] = "متقاعد";
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


	$tdatarespviolence["R_ActivitePro"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_ActivitePro";
//	R_antesced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "R_antesced";
	$fdata["GoodName"] = "R_antesced";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_antesced");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_antesced";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_antesced";

	
	
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
	$edata["LookupValues"][] = "نعم   ";
	$edata["LookupValues"][] = "لا";
	$edata["LookupValues"][] = "لا أعرف";

	
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


	$tdatarespviolence["R_antesced"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_antesced";
//	R_junck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "R_junck";
	$fdata["GoodName"] = "R_junck";
	$fdata["ownerTable"] = "Respviolence";
	$fdata["Label"] = GetFieldLabel("Respviolence","R_junck");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "R_junck";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R_junck";

	
	
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
	$edata["LookupValues"][] = "نعم";
	$edata["LookupValues"][] = "لا";
	$edata["LookupValues"][] = "لا أعرف";

	
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


	$tdatarespviolence["R_junck"] = $fdata;
		$tdatarespviolence[".searchableFields"][] = "R_junck";


$tables_data["Respviolence"]=&$tdatarespviolence;
$field_labels["Respviolence"] = &$fieldLabelsrespviolence;
$fieldToolTips["Respviolence"] = &$fieldToolTipsrespviolence;
$placeHolders["Respviolence"] = &$placeHoldersrespviolence;
$page_titles["Respviolence"] = &$pageTitlesrespviolence;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Respviolence"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Respviolence"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_respviolence()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_repviol,  	Etat,  	R_nomcomplet,  	R_adresse,  	R_tel,  	R_nationalite,  	R_age,  	R_NivScolaire,  	R_ActivitePro,  	R_antesced,  	R_junck";
$proto0["m_strFrom"] = "FROM Respviolence";
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
	"m_strName" => "ID_repviol",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto6["m_sql"] = "ID_repviol";
$proto6["m_srcTableName"] = "Respviolence";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Etat",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto8["m_sql"] = "Etat";
$proto8["m_srcTableName"] = "Respviolence";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "R_nomcomplet",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto10["m_sql"] = "R_nomcomplet";
$proto10["m_srcTableName"] = "Respviolence";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "R_adresse",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto12["m_sql"] = "R_adresse";
$proto12["m_srcTableName"] = "Respviolence";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "R_tel",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto14["m_sql"] = "R_tel";
$proto14["m_srcTableName"] = "Respviolence";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "R_nationalite",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto16["m_sql"] = "R_nationalite";
$proto16["m_srcTableName"] = "Respviolence";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "R_age",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto18["m_sql"] = "R_age";
$proto18["m_srcTableName"] = "Respviolence";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "R_NivScolaire",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto20["m_sql"] = "R_NivScolaire";
$proto20["m_srcTableName"] = "Respviolence";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "R_ActivitePro",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto22["m_sql"] = "R_ActivitePro";
$proto22["m_srcTableName"] = "Respviolence";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "R_antesced",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto24["m_sql"] = "R_antesced";
$proto24["m_srcTableName"] = "Respviolence";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "R_junck",
	"m_strTable" => "Respviolence",
	"m_srcTableName" => "Respviolence"
));

$proto26["m_sql"] = "R_junck";
$proto26["m_srcTableName"] = "Respviolence";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "Respviolence";
$proto29["m_srcTableName"] = "Respviolence";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID_repviol";
$proto29["m_columns"][] = "Etat";
$proto29["m_columns"][] = "R_nomcomplet";
$proto29["m_columns"][] = "R_adresse";
$proto29["m_columns"][] = "R_tel";
$proto29["m_columns"][] = "R_nationalite";
$proto29["m_columns"][] = "R_age";
$proto29["m_columns"][] = "R_NivScolaire";
$proto29["m_columns"][] = "R_ActivitePro";
$proto29["m_columns"][] = "R_antesced";
$proto29["m_columns"][] = "R_junck";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "Respviolence";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Respviolence";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Respviolence";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_respviolence = createSqlQuery_respviolence();


	
		;

											

$tdatarespviolence[".sqlquery"] = $queryData_respviolence;

$tableEvents["Respviolence"] = new eventsBase;
$tdatarespviolence[".hasEvents"] = false;

?>