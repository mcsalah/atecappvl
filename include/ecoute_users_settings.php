<?php



$tdataecoute_users = array();
$tdataecoute_users[".searchableFields"] = array();
$tdataecoute_users[".ShortName"] = "ecoute_users";
$tdataecoute_users[".OwnerID"] = "";
$tdataecoute_users[".OriginalTable"] = "Ecoute_users";


$defaultPages = my_json_decode( "{\"search\":\"search\"}" );

$tdataecoute_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataecoute_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataecoute_users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsecoute_users = array();
$fieldToolTipsecoute_users = array();
$pageTitlesecoute_users = array();
$placeHoldersecoute_users = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsecoute_users["Arabic"] = array();
	$fieldToolTipsecoute_users["Arabic"] = array();
	$placeHoldersecoute_users["Arabic"] = array();
	$pageTitlesecoute_users["Arabic"] = array();
	$fieldLabelsecoute_users["Arabic"]["ID"] = "ID";
	$fieldToolTipsecoute_users["Arabic"]["ID"] = "";
	$placeHoldersecoute_users["Arabic"]["ID"] = "";
	$fieldLabelsecoute_users["Arabic"]["username"] = "Username";
	$fieldToolTipsecoute_users["Arabic"]["username"] = "";
	$placeHoldersecoute_users["Arabic"]["username"] = "";
	$fieldLabelsecoute_users["Arabic"]["password"] = "Password";
	$fieldToolTipsecoute_users["Arabic"]["password"] = "";
	$placeHoldersecoute_users["Arabic"]["password"] = "";
	$fieldLabelsecoute_users["Arabic"]["email"] = "Email";
	$fieldToolTipsecoute_users["Arabic"]["email"] = "";
	$placeHoldersecoute_users["Arabic"]["email"] = "";
	$fieldLabelsecoute_users["Arabic"]["fullname"] = "Fullname";
	$fieldToolTipsecoute_users["Arabic"]["fullname"] = "";
	$placeHoldersecoute_users["Arabic"]["fullname"] = "";
	$fieldLabelsecoute_users["Arabic"]["groupid"] = "Groupid";
	$fieldToolTipsecoute_users["Arabic"]["groupid"] = "";
	$placeHoldersecoute_users["Arabic"]["groupid"] = "";
	$fieldLabelsecoute_users["Arabic"]["active"] = "Active";
	$fieldToolTipsecoute_users["Arabic"]["active"] = "";
	$placeHoldersecoute_users["Arabic"]["active"] = "";
	$fieldLabelsecoute_users["Arabic"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsecoute_users["Arabic"]["ext_security_id"] = "";
	$placeHoldersecoute_users["Arabic"]["ext_security_id"] = "";
	if (count($fieldToolTipsecoute_users["Arabic"]))
		$tdataecoute_users[".isUseToolTips"] = true;
}


	$tdataecoute_users[".NCSearch"] = true;



$tdataecoute_users[".shortTableName"] = "ecoute_users";
$tdataecoute_users[".nSecOptions"] = 0;

$tdataecoute_users[".mainTableOwnerID"] = "";
$tdataecoute_users[".entityType"] = 0;

$tdataecoute_users[".strOriginalTableName"] = "Ecoute_users";

	



$tdataecoute_users[".showAddInPopup"] = false;

$tdataecoute_users[".showEditInPopup"] = false;

$tdataecoute_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataecoute_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataecoute_users[".listAjax"] = false;
//	temporary
$tdataecoute_users[".listAjax"] = false;

	$tdataecoute_users[".audit"] = true;

	$tdataecoute_users[".locking"] = false;


$pages = $tdataecoute_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataecoute_users[".edit"] = true;
	$tdataecoute_users[".afterEditAction"] = 1;
	$tdataecoute_users[".closePopupAfterEdit"] = 1;
	$tdataecoute_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataecoute_users[".add"] = true;
$tdataecoute_users[".afterAddAction"] = 1;
$tdataecoute_users[".closePopupAfterAdd"] = 1;
$tdataecoute_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataecoute_users[".list"] = true;
}



$tdataecoute_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataecoute_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataecoute_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataecoute_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataecoute_users[".printFriendly"] = true;
}



$tdataecoute_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataecoute_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataecoute_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataecoute_users[".isUseAjaxSuggest"] = true;

$tdataecoute_users[".rowHighlite"] = true;





$tdataecoute_users[".ajaxCodeSnippetAdded"] = false;

$tdataecoute_users[".buttonsAdded"] = false;

$tdataecoute_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataecoute_users[".isUseTimeForSearch"] = false;


$tdataecoute_users[".badgeColor"] = "CFAE83";


$tdataecoute_users[".allSearchFields"] = array();
$tdataecoute_users[".filterFields"] = array();
$tdataecoute_users[".requiredSearchFields"] = array();

$tdataecoute_users[".googleLikeFields"] = array();
$tdataecoute_users[".googleLikeFields"][] = "ID";
$tdataecoute_users[".googleLikeFields"][] = "username";
$tdataecoute_users[".googleLikeFields"][] = "password";
$tdataecoute_users[".googleLikeFields"][] = "email";
$tdataecoute_users[".googleLikeFields"][] = "fullname";
$tdataecoute_users[".googleLikeFields"][] = "groupid";
$tdataecoute_users[".googleLikeFields"][] = "active";
$tdataecoute_users[".googleLikeFields"][] = "ext_security_id";



$tdataecoute_users[".tableType"] = "list";

$tdataecoute_users[".printerPageOrientation"] = 0;
$tdataecoute_users[".nPrinterPageScale"] = 100;

$tdataecoute_users[".nPrinterSplitRecords"] = 40;

$tdataecoute_users[".geocodingEnabled"] = false;










$tdataecoute_users[".pageSize"] = 20;

$tdataecoute_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataecoute_users[".strOrderBy"] = $tstrOrderBy;

$tdataecoute_users[".orderindexes"] = array();

$tdataecoute_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataecoute_users[".sqlFrom"] = "FROM Ecoute_users";
$tdataecoute_users[".sqlWhereExpr"] = "";
$tdataecoute_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataecoute_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataecoute_users[".arrGroupsPerPage"] = $arrGPP;

$tdataecoute_users[".highlightSearchResults"] = true;

$tableKeysecoute_users = array();
$tableKeysecoute_users[] = "ID";
$tdataecoute_users[".Keys"] = $tableKeysecoute_users;


$tdataecoute_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataecoute_users["ID"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataecoute_users["username"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataecoute_users["password"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataecoute_users["email"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataecoute_users["fullname"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataecoute_users["groupid"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdataecoute_users["active"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "Ecoute_users";
	$fdata["Label"] = GetFieldLabel("Ecoute_users","ext_security_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataecoute_users["ext_security_id"] = $fdata;
		$tdataecoute_users[".searchableFields"][] = "ext_security_id";


$tables_data["Ecoute_users"]=&$tdataecoute_users;
$field_labels["Ecoute_users"] = &$fieldLabelsecoute_users;
$fieldToolTips["Ecoute_users"] = &$fieldToolTipsecoute_users;
$placeHolders["Ecoute_users"] = &$placeHoldersecoute_users;
$page_titles["Ecoute_users"] = &$pageTitlesecoute_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Ecoute_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Ecoute_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ecoute_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM Ecoute_users";
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
	"m_strName" => "ID",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Ecoute_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "Ecoute_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "Ecoute_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "Ecoute_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "Ecoute_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "Ecoute_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "Ecoute_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "Ecoute_users",
	"m_srcTableName" => "Ecoute_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "Ecoute_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Ecoute_users";
$proto23["m_srcTableName"] = "Ecoute_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Ecoute_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Ecoute_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Ecoute_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ecoute_users = createSqlQuery_ecoute_users();


	
		;

								

$tdataecoute_users[".sqlquery"] = $queryData_ecoute_users;

$tableEvents["Ecoute_users"] = new eventsBase;
$tdataecoute_users[".hasEvents"] = false;

?>