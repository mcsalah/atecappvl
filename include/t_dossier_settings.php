<?php



$tdatat_dossier = array();
$tdatat_dossier[".searchableFields"] = array();
$tdatat_dossier[".ShortName"] = "t_dossier";
$tdatat_dossier[".OwnerID"] = "";
$tdatat_dossier[".OriginalTable"] = "t_dossier";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatat_dossier[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_dossier[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_dossier[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelst_dossier = array();
$fieldToolTipst_dossier = array();
$pageTitlest_dossier = array();
$placeHolderst_dossier = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelst_dossier["Arabic"] = array();
	$fieldToolTipst_dossier["Arabic"] = array();
	$placeHolderst_dossier["Arabic"] = array();
	$pageTitlest_dossier["Arabic"] = array();
	$fieldLabelst_dossier["Arabic"]["num_dossier"] = "Num Dossier";
	$fieldToolTipst_dossier["Arabic"]["num_dossier"] = "";
	$placeHolderst_dossier["Arabic"]["num_dossier"] = "";
	$fieldLabelst_dossier["Arabic"]["nom_assist"] = "اسم المستمعة";
	$fieldToolTipst_dossier["Arabic"]["nom_assist"] = "";
	$placeHolderst_dossier["Arabic"]["nom_assist"] = "";
	$fieldLabelst_dossier["Arabic"]["SourceInfo"] = ": مصدر المعلومة";
	$fieldToolTipst_dossier["Arabic"]["SourceInfo"] = "";
	$placeHolderst_dossier["Arabic"]["SourceInfo"] = "";
	$fieldLabelst_dossier["Arabic"]["Date_ecoute"] = "تاريخ الاستقبال";
	$fieldToolTipst_dossier["Arabic"]["Date_ecoute"] = "";
	$placeHolderst_dossier["Arabic"]["Date_ecoute"] = "";
	$fieldLabelst_dossier["Arabic"]["vcin"] = "رقم البطاقة الوطنية للتعريف";
	$fieldToolTipst_dossier["Arabic"]["vcin"] = "";
	$placeHolderst_dossier["Arabic"]["vcin"] = "";
	$fieldLabelst_dossier["Arabic"]["victime"] = "الاسم الكامل";
	$fieldToolTipst_dossier["Arabic"]["victime"] = "";
	$placeHolderst_dossier["Arabic"]["victime"] = "";
	$fieldLabelst_dossier["Arabic"]["coupable"] = "بمرتكب العنف";
	$fieldToolTipst_dossier["Arabic"]["coupable"] = "";
	$placeHolderst_dossier["Arabic"]["coupable"] = "";
	$fieldLabelst_dossier["Arabic"]["rel_coup_victime"] = "علاقته بالضحية";
	$fieldToolTipst_dossier["Arabic"]["rel_coup_victime"] = "";
	$placeHolderst_dossier["Arabic"]["rel_coup_victime"] = "";
	$fieldLabelst_dossier["Arabic"]["date_viol"] = "تاريخ الإعتداء";
	$fieldToolTipst_dossier["Arabic"]["date_viol"] = "";
	$placeHolderst_dossier["Arabic"]["date_viol"] = "";
	$fieldLabelst_dossier["Arabic"]["viol_eco"] = "العنف الاقتصادي";
	$fieldToolTipst_dossier["Arabic"]["viol_eco"] = "";
	$placeHolderst_dossier["Arabic"]["viol_eco"] = "";
	$fieldLabelst_dossier["Arabic"]["viol_corp"] = "العنف الجسدي";
	$fieldToolTipst_dossier["Arabic"]["viol_corp"] = "";
	$placeHolderst_dossier["Arabic"]["viol_corp"] = "";
	$fieldLabelst_dossier["Arabic"]["viol_sexuel"] = "العنف الجنسي";
	$fieldToolTipst_dossier["Arabic"]["viol_sexuel"] = "";
	$placeHolderst_dossier["Arabic"]["viol_sexuel"] = "";
	$fieldLabelst_dossier["Arabic"]["viol_psych"] = "العنف النفسي";
	$fieldToolTipst_dossier["Arabic"]["viol_psych"] = "";
	$placeHolderst_dossier["Arabic"]["viol_psych"] = "";
	$fieldLabelst_dossier["Arabic"]["viol_juris"] = "العنف القانوني";
	$fieldToolTipst_dossier["Arabic"]["viol_juris"] = "";
	$placeHolderst_dossier["Arabic"]["viol_juris"] = "";
	$fieldLabelst_dossier["Arabic"]["conseq_corp"] = "آثار على الصحة الجسدية";
	$fieldToolTipst_dossier["Arabic"]["conseq_corp"] = "";
	$placeHolderst_dossier["Arabic"]["conseq_corp"] = "";
	$fieldLabelst_dossier["Arabic"]["consequ_psych"] = "آثار على الصحة النفسية";
	$fieldToolTipst_dossier["Arabic"]["consequ_psych"] = "";
	$placeHolderst_dossier["Arabic"]["consequ_psych"] = "";
	$fieldLabelst_dossier["Arabic"]["conseq_enf"] = "أثار على الأبناء";
	$fieldToolTipst_dossier["Arabic"]["conseq_enf"] = "";
	$placeHolderst_dossier["Arabic"]["conseq_enf"] = "";
	$fieldLabelst_dossier["Arabic"]["demand_vict"] = "مطالب الضحية";
	$fieldToolTipst_dossier["Arabic"]["demand_vict"] = "";
	$placeHolderst_dossier["Arabic"]["demand_vict"] = "";
	$fieldLabelst_dossier["Arabic"]["svce_prop"] = "Svce Prop";
	$fieldToolTipst_dossier["Arabic"]["svce_prop"] = "";
	$placeHolderst_dossier["Arabic"]["svce_prop"] = "";
	$fieldLabelst_dossier["Arabic"]["ms3cellenffem"] = "هل بلغت أو لجأت للسلطات";
	$fieldToolTipst_dossier["Arabic"]["ms3cellenffem"] = "";
	$placeHolderst_dossier["Arabic"]["ms3cellenffem"] = "";
	$fieldLabelst_dossier["Arabic"]["ms3oblpaye"] = "هل وجدت بدائرة الشرطة أو مركز الدرك خلية التكفل بالنساء و الأطفال ضحايا العنف؟";
	$fieldToolTipst_dossier["Arabic"]["ms3oblpaye"] = "";
	$placeHolderst_dossier["Arabic"]["ms3oblpaye"] = "";
	$fieldLabelst_dossier["Arabic"]["ms3obstacles"] = "هل تسلمت نسخة من المحضر؟";
	$fieldToolTipst_dossier["Arabic"]["ms3obstacles"] = "";
	$placeHolderst_dossier["Arabic"]["ms3obstacles"] = "";
	$fieldLabelst_dossier["Arabic"]["sachcellenffem"] = "في حالة نعم؟";
	$fieldToolTipst_dossier["Arabic"]["sachcellenffem"] = "";
	$placeHolderst_dossier["Arabic"]["sachcellenffem"] = "";
	$fieldLabelst_dossier["Arabic"]["sachcopyrap"] = "هل وجدت بالنيابة العامة خلية التكفل بالنساء و الأطفال ضحايا العنف ؟ ";
	$fieldToolTipst_dossier["Arabic"]["sachcopyrap"] = "";
	$placeHolderst_dossier["Arabic"]["sachcopyrap"] = "";
	$fieldLabelst_dossier["Arabic"]["rapporoui"] = "هل هناك لحظة أحسست فيها بالضغط عليك من أجل التنازل عن الشكاية؟";
	$fieldToolTipst_dossier["Arabic"]["rapporoui"] = "";
	$placeHolderst_dossier["Arabic"]["rapporoui"] = "";
	$fieldLabelst_dossier["Arabic"]["encscepublic"] = "هل حصلت على وثائق من عند النيابة العامة؟";
	$fieldToolTipst_dossier["Arabic"]["encscepublic"] = "";
	$placeHolderst_dossier["Arabic"]["encscepublic"] = "";
	$fieldLabelst_dossier["Arabic"]["encscpuboui"] = "هل وجدت بالمستشفى خلية التكفل بالنساء و الأطفال ضحايا العنف ؟";
	$fieldToolTipst_dossier["Arabic"]["encscpuboui"] = "";
	$placeHolderst_dossier["Arabic"]["encscpuboui"] = "";
	$fieldLabelst_dossier["Arabic"]["n3cellenffem"] = "هل هناك لحظة أحسست فيها بالضغط عليك من أجل التنازل عن الدعوى ؟";
	$fieldToolTipst_dossier["Arabic"]["n3cellenffem"] = "";
	$placeHolderst_dossier["Arabic"]["n3cellenffem"] = "";
	$fieldLabelst_dossier["Arabic"]["n3pression"] = "هل كنت مجبرة على أن تؤذي مقابل شيئا ما ؟";
	$fieldToolTipst_dossier["Arabic"]["n3pression"] = "";
	$placeHolderst_dossier["Arabic"]["n3pression"] = "";
	$fieldLabelst_dossier["Arabic"]["n3docs"] = "هل وجدت بالمستشفى خلية التكفل بالنساء و الأطفال ضحايا العنف ؟ ";
	$fieldToolTipst_dossier["Arabic"]["n3docs"] = "";
	$placeHolderst_dossier["Arabic"]["n3docs"] = "";
	$fieldLabelst_dossier["Arabic"]["tribcellenffem"] = "هل كنت مجبرة على أن تؤذي مقابل شيئا ما ؟";
	$fieldToolTipst_dossier["Arabic"]["tribcellenffem"] = "";
	$placeHolderst_dossier["Arabic"]["tribcellenffem"] = "";
	$fieldLabelst_dossier["Arabic"]["tribpression"] = "ما هي العراقيل التي واجهتك أثناء تواجدك بالمستشفى؟";
	$fieldToolTipst_dossier["Arabic"]["tribpression"] = "";
	$placeHolderst_dossier["Arabic"]["tribpression"] = "";
	$fieldLabelst_dossier["Arabic"]["tribobligpaye"] = "Tribobligpaye";
	$fieldToolTipst_dossier["Arabic"]["tribobligpaye"] = "";
	$placeHolderst_dossier["Arabic"]["tribobligpaye"] = "";
	$fieldLabelst_dossier["Arabic"]["remarques"] = "Remarques";
	$fieldToolTipst_dossier["Arabic"]["remarques"] = "";
	$placeHolderst_dossier["Arabic"]["remarques"] = "";
	$fieldLabelst_dossier["Arabic"]["conseq_ecosocial"] = "آثار سوسيو-اقتصادية";
	$fieldToolTipst_dossier["Arabic"]["conseq_ecosocial"] = "";
	$placeHolderst_dossier["Arabic"]["conseq_ecosocial"] = "";
	$pageTitlest_dossier["Arabic"]["add"] = "استمارة الاستماع";
	if (count($fieldToolTipst_dossier["Arabic"]))
		$tdatat_dossier[".isUseToolTips"] = true;
}


	$tdatat_dossier[".NCSearch"] = true;



$tdatat_dossier[".shortTableName"] = "t_dossier";
$tdatat_dossier[".nSecOptions"] = 0;

$tdatat_dossier[".mainTableOwnerID"] = "";
$tdatat_dossier[".entityType"] = 0;

$tdatat_dossier[".strOriginalTableName"] = "t_dossier";

	



$tdatat_dossier[".showAddInPopup"] = false;

$tdatat_dossier[".showEditInPopup"] = false;

$tdatat_dossier[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_dossier[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_dossier[".listAjax"] = false;
//	temporary
$tdatat_dossier[".listAjax"] = false;

	$tdatat_dossier[".audit"] = true;

	$tdatat_dossier[".locking"] = false;


$pages = $tdatat_dossier[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_dossier[".edit"] = true;
	$tdatat_dossier[".afterEditAction"] = 1;
	$tdatat_dossier[".closePopupAfterEdit"] = 1;
	$tdatat_dossier[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_dossier[".add"] = true;
$tdatat_dossier[".afterAddAction"] = 1;
$tdatat_dossier[".closePopupAfterAdd"] = 1;
$tdatat_dossier[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_dossier[".list"] = true;
}



$tdatat_dossier[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_dossier[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_dossier[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_dossier[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_dossier[".printFriendly"] = true;
}



$tdatat_dossier[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_dossier[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_dossier[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_dossier[".isUseAjaxSuggest"] = true;

$tdatat_dossier[".rowHighlite"] = true;





$tdatat_dossier[".ajaxCodeSnippetAdded"] = false;

$tdatat_dossier[".buttonsAdded"] = false;

$tdatat_dossier[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_dossier[".isUseTimeForSearch"] = false;


$tdatat_dossier[".badgeColor"] = "E07878";


$tdatat_dossier[".allSearchFields"] = array();
$tdatat_dossier[".filterFields"] = array();
$tdatat_dossier[".requiredSearchFields"] = array();

$tdatat_dossier[".googleLikeFields"] = array();
$tdatat_dossier[".googleLikeFields"][] = "num_dossier";
$tdatat_dossier[".googleLikeFields"][] = "nom_assist";
$tdatat_dossier[".googleLikeFields"][] = "SourceInfo";
$tdatat_dossier[".googleLikeFields"][] = "Date_ecoute";
$tdatat_dossier[".googleLikeFields"][] = "vcin";
$tdatat_dossier[".googleLikeFields"][] = "victime";
$tdatat_dossier[".googleLikeFields"][] = "coupable";
$tdatat_dossier[".googleLikeFields"][] = "rel_coup_victime";
$tdatat_dossier[".googleLikeFields"][] = "date_viol";
$tdatat_dossier[".googleLikeFields"][] = "viol_eco";
$tdatat_dossier[".googleLikeFields"][] = "viol_corp";
$tdatat_dossier[".googleLikeFields"][] = "viol_sexuel";
$tdatat_dossier[".googleLikeFields"][] = "viol_psych";
$tdatat_dossier[".googleLikeFields"][] = "viol_juris";
$tdatat_dossier[".googleLikeFields"][] = "conseq_corp";
$tdatat_dossier[".googleLikeFields"][] = "consequ_psych";
$tdatat_dossier[".googleLikeFields"][] = "conseq_ecosocial";
$tdatat_dossier[".googleLikeFields"][] = "conseq_enf";
$tdatat_dossier[".googleLikeFields"][] = "demand_vict";
$tdatat_dossier[".googleLikeFields"][] = "svce_prop";
$tdatat_dossier[".googleLikeFields"][] = "ms3cellenffem";
$tdatat_dossier[".googleLikeFields"][] = "ms3oblpaye";
$tdatat_dossier[".googleLikeFields"][] = "ms3obstacles";
$tdatat_dossier[".googleLikeFields"][] = "sachcellenffem";
$tdatat_dossier[".googleLikeFields"][] = "sachcopyrap";
$tdatat_dossier[".googleLikeFields"][] = "rapporoui";
$tdatat_dossier[".googleLikeFields"][] = "encscepublic";
$tdatat_dossier[".googleLikeFields"][] = "encscpuboui";
$tdatat_dossier[".googleLikeFields"][] = "n3cellenffem";
$tdatat_dossier[".googleLikeFields"][] = "n3pression";
$tdatat_dossier[".googleLikeFields"][] = "n3docs";
$tdatat_dossier[".googleLikeFields"][] = "tribcellenffem";
$tdatat_dossier[".googleLikeFields"][] = "tribpression";
$tdatat_dossier[".googleLikeFields"][] = "tribobligpaye";
$tdatat_dossier[".googleLikeFields"][] = "remarques";



$tdatat_dossier[".tableType"] = "list";

$tdatat_dossier[".printerPageOrientation"] = 0;
$tdatat_dossier[".nPrinterPageScale"] = 100;

$tdatat_dossier[".nPrinterSplitRecords"] = 40;

$tdatat_dossier[".geocodingEnabled"] = false;










$tdatat_dossier[".pageSize"] = 20;

$tdatat_dossier[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_dossier[".strOrderBy"] = $tstrOrderBy;

$tdatat_dossier[".orderindexes"] = array();

$tdatat_dossier[".sqlHead"] = "SELECT num_dossier,  	nom_assist,  	SourceInfo,  	Date_ecoute,  	vcin,  	victime,  	coupable,  	rel_coup_victime,  	date_viol,  	viol_eco,  	viol_corp,  	viol_sexuel,  	viol_psych,  	viol_juris,  	conseq_corp,  	consequ_psych,  	conseq_ecosocial,  	conseq_enf,  	demand_vict,  	svce_prop,  	ms3cellenffem,  	ms3oblpaye,  	ms3obstacles,  	sachcellenffem,  	sachcopyrap,  	rapporoui,  	encscepublic,  	encscpuboui,  	n3cellenffem,  	n3pression,  	n3docs,  	tribcellenffem,  	tribpression,  	tribobligpaye,  	remarques";
$tdatat_dossier[".sqlFrom"] = "FROM t_dossier";
$tdatat_dossier[".sqlWhereExpr"] = "";
$tdatat_dossier[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_dossier[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_dossier[".arrGroupsPerPage"] = $arrGPP;

$tdatat_dossier[".highlightSearchResults"] = true;

$tableKeyst_dossier = array();
$tableKeyst_dossier[] = "num_dossier";
$tdatat_dossier[".Keys"] = $tableKeyst_dossier;


$tdatat_dossier[".hideMobileList"] = array();




//	num_dossier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "num_dossier";
	$fdata["GoodName"] = "num_dossier";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","num_dossier");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "num_dossier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_dossier";

	
	
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


	$tdatat_dossier["num_dossier"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "num_dossier";
//	nom_assist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_assist";
	$fdata["GoodName"] = "nom_assist";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","nom_assist");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nom_assist";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_assist";

	
	
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


	$tdatat_dossier["nom_assist"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "nom_assist";
//	SourceInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SourceInfo";
	$fdata["GoodName"] = "SourceInfo";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","SourceInfo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SourceInfo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SourceInfo";

	
	
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


	$tdatat_dossier["SourceInfo"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "SourceInfo";
//	Date_ecoute
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date_ecoute";
	$fdata["GoodName"] = "Date_ecoute";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","Date_ecoute");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Date_ecoute";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Date_ecoute";

	
	
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

	
	
		$edata["DateEditType"] = 0;
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


	$tdatat_dossier["Date_ecoute"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "Date_ecoute";
//	vcin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vcin";
	$fdata["GoodName"] = "vcin";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","vcin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "vcin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vcin";

	
	
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
	$edata["DisplayField"] = "victime_CIN";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "victime";

	
	
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


	$tdatat_dossier["vcin"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "vcin";
//	victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "victime";
	$fdata["GoodName"] = "victime";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "victime";

	
	
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "vcin", "lookup" => "victime_CIN" );

	
	

	
	
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


	$tdatat_dossier["victime"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "victime";
//	coupable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "coupable";
	$fdata["GoodName"] = "coupable";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","coupable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "coupable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coupable";

	
	
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
	$edata["LookupTable"] = "Respviolence";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "R_nomcomplet";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "R_nomcomplet";

	

	
	$edata["LookupOrderBy"] = "ID_repviol";

	
	
	
	

	
	
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


	$tdatat_dossier["coupable"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "coupable";
//	rel_coup_victime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rel_coup_victime";
	$fdata["GoodName"] = "rel_coup_victime";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","rel_coup_victime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rel_coup_victime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rel_coup_victime";

	
	
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


	$tdatat_dossier["rel_coup_victime"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "rel_coup_victime";
//	date_viol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "date_viol";
	$fdata["GoodName"] = "date_viol";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","date_viol");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "date_viol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_viol";

	
	
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

	
	
		$edata["DateEditType"] = 0;
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


	$tdatat_dossier["date_viol"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "date_viol";
//	viol_eco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "viol_eco";
	$fdata["GoodName"] = "viol_eco";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","viol_eco");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "viol_eco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "viol_eco";

	
	
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
	$edata["LookupTable"] = "tviolence";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_violence";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

				$edata["LookupWhere"] = "Id_violence like '%_eco'";


	
	$edata["LookupOrderBy"] = "type_violence";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["viol_eco"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "viol_eco";
//	viol_corp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "viol_corp";
	$fdata["GoodName"] = "viol_corp";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","viol_corp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "viol_corp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "viol_corp";

	
	
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
	$edata["LookupTable"] = "tviolence";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_violence";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

				$edata["LookupWhere"] = "Id_violence like '%_corp'";


	
	$edata["LookupOrderBy"] = "type_violence";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["viol_corp"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "viol_corp";
//	viol_sexuel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "viol_sexuel";
	$fdata["GoodName"] = "viol_sexuel";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","viol_sexuel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "viol_sexuel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "viol_sexuel";

	
	
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
	$edata["LookupTable"] = "tviolence";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_violence";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

				$edata["LookupWhere"] = "Id_violence like '%_sex'";


	
	$edata["LookupOrderBy"] = "type_violence";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["viol_sexuel"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "viol_sexuel";
//	viol_psych
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "viol_psych";
	$fdata["GoodName"] = "viol_psych";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","viol_psych");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "viol_psych";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "viol_psych";

	
	
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
	$edata["LookupTable"] = "tviolence";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_violence";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

				$edata["LookupWhere"] = "Id_violence like '%_psych'";


	
	$edata["LookupOrderBy"] = "type_violence";

	
	
	
	

	
	
	
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


	$tdatat_dossier["viol_psych"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "viol_psych";
//	viol_juris
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "viol_juris";
	$fdata["GoodName"] = "viol_juris";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","viol_juris");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "viol_juris";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "viol_juris";

	
	
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
	$edata["LookupTable"] = "tviolence";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_violence";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

				$edata["LookupWhere"] = "Id_violence like '%_juri'";


	
	$edata["LookupOrderBy"] = "type_violence";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["viol_juris"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "viol_juris";
//	conseq_corp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "conseq_corp";
	$fdata["GoodName"] = "conseq_corp";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","conseq_corp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "conseq_corp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conseq_corp";

	
	
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
	$edata["LookupTable"] = "tconsequences";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_conseq";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "libelle";

				$edata["LookupWhere"] = "Id_conseq like 'corp%'";


	
	$edata["LookupOrderBy"] = "type_conseq";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["conseq_corp"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "conseq_corp";
//	consequ_psych
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "consequ_psych";
	$fdata["GoodName"] = "consequ_psych";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","consequ_psych");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "consequ_psych";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consequ_psych";

	
	
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
	$edata["LookupTable"] = "tconsequences";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_conseq";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "libelle";

				$edata["LookupWhere"] = "Id_conseq like 'PSYC%'";


	
	$edata["LookupOrderBy"] = "type_conseq";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["consequ_psych"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "consequ_psych";
//	conseq_ecosocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "conseq_ecosocial";
	$fdata["GoodName"] = "conseq_ecosocial";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","conseq_ecosocial");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "conseq_ecosocial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conseq_ecosocial";

	
	
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
	$edata["LookupTable"] = "tconsequences";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_conseq";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "libelle";

				$edata["LookupWhere"] = "Id_conseq like 'SOCECO%'";


	
	$edata["LookupOrderBy"] = "type_conseq";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["conseq_ecosocial"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "conseq_ecosocial";
//	conseq_enf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "conseq_enf";
	$fdata["GoodName"] = "conseq_enf";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","conseq_enf");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "conseq_enf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conseq_enf";

	
	
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
	$edata["LookupTable"] = "tconsequences";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_conseq";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "libelle";

				$edata["LookupWhere"] = "Id_violence like 'COE%'";


	
	$edata["LookupOrderBy"] = "type_conseq";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["conseq_enf"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "conseq_enf";
//	demand_vict
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "demand_vict";
	$fdata["GoodName"] = "demand_vict";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","demand_vict");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "demand_vict";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demand_vict";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatat_dossier["demand_vict"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "demand_vict";
//	svce_prop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "svce_prop";
	$fdata["GoodName"] = "svce_prop";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","svce_prop");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "svce_prop";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "svce_prop";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatat_dossier["svce_prop"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "svce_prop";
//	ms3cellenffem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ms3cellenffem";
	$fdata["GoodName"] = "ms3cellenffem";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","ms3cellenffem");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ms3cellenffem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ms3cellenffem";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "الشرطة ";
	$edata["LookupValues"][] = "الدرك";
	$edata["LookupValues"][] = "النيابة العامة ";
	$edata["LookupValues"][] = "المحكمة";
	$edata["LookupValues"][] = "مصالح الصحة العمومية";

		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["ms3cellenffem"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "ms3cellenffem";
//	ms3oblpaye
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ms3oblpaye";
	$fdata["GoodName"] = "ms3oblpaye";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","ms3oblpaye");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ms3oblpaye";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ms3oblpaye";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["ms3oblpaye"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "ms3oblpaye";
//	ms3obstacles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ms3obstacles";
	$fdata["GoodName"] = "ms3obstacles";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","ms3obstacles");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ms3obstacles";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ms3obstacles";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["ms3obstacles"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "ms3obstacles";
//	sachcellenffem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sachcellenffem";
	$fdata["GoodName"] = "sachcellenffem";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","sachcellenffem");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sachcellenffem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sachcellenffem";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "هل بشكل تلقائي ";
	$edata["LookupValues"][] = "بطلب من الضحية";

	
	
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


	$tdatat_dossier["sachcellenffem"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "sachcellenffem";
//	sachcopyrap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sachcopyrap";
	$fdata["GoodName"] = "sachcopyrap";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","sachcopyrap");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sachcopyrap";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sachcopyrap";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["sachcopyrap"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "sachcopyrap";
//	rapporoui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "rapporoui";
	$fdata["GoodName"] = "rapporoui";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","rapporoui");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rapporoui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rapporoui";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["rapporoui"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "rapporoui";
//	encscepublic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "encscepublic";
	$fdata["GoodName"] = "encscepublic";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","encscepublic");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "encscepublic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "encscepublic";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["encscepublic"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "encscepublic";
//	encscpuboui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "encscpuboui";
	$fdata["GoodName"] = "encscpuboui";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","encscpuboui");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "encscpuboui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "encscpuboui";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["encscpuboui"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "encscpuboui";
//	n3cellenffem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "n3cellenffem";
	$fdata["GoodName"] = "n3cellenffem";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","n3cellenffem");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "n3cellenffem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "n3cellenffem";

	
	
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
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
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


	$tdatat_dossier["n3cellenffem"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "n3cellenffem";
//	n3pression
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "n3pression";
	$fdata["GoodName"] = "n3pression";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","n3pression");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "n3pression";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "n3pression";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["n3pression"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "n3pression";
//	n3docs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "n3docs";
	$fdata["GoodName"] = "n3docs";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","n3docs");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "n3docs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "n3docs";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "نعم ";
	$edata["LookupValues"][] = "لا";

	
	
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


	$tdatat_dossier["n3docs"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "n3docs";
//	tribcellenffem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tribcellenffem";
	$fdata["GoodName"] = "tribcellenffem";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","tribcellenffem");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tribcellenffem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tribcellenffem";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "شهادة طبية";
	$edata["LookupValues"][] = "فحص";
	$edata["LookupValues"][] = "أشعة";
	$edata["LookupValues"][] = "تحاليل طبية ";

		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["tribcellenffem"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "tribcellenffem";
//	tribpression
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "tribpression";
	$fdata["GoodName"] = "tribpression";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","tribpression");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tribpression";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tribpression";

	
	
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
		$edata["LCType"] = 3;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "غياب المساعدة الاجتماعية في الفترة المسائية";
	$edata["LookupValues"][] = "غياب المساعدة الاجتماعية في نهاية الأسبوع – أيام العطل ";

		$edata["Multiselect"] = true;

	
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


	$tdatat_dossier["tribpression"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "tribpression";
//	tribobligpaye
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tribobligpaye";
	$fdata["GoodName"] = "tribobligpaye";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","tribobligpaye");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tribobligpaye";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tribobligpaye";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatat_dossier["tribobligpaye"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "tribobligpaye";
//	remarques
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "remarques";
	$fdata["GoodName"] = "remarques";
	$fdata["ownerTable"] = "t_dossier";
	$fdata["Label"] = GetFieldLabel("t_dossier","remarques");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "remarques";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarques";

	
	
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


	$tdatat_dossier["remarques"] = $fdata;
		$tdatat_dossier[".searchableFields"][] = "remarques";


$tables_data["t_dossier"]=&$tdatat_dossier;
$field_labels["t_dossier"] = &$fieldLabelst_dossier;
$fieldToolTips["t_dossier"] = &$fieldToolTipst_dossier;
$placeHolders["t_dossier"] = &$placeHolderst_dossier;
$page_titles["t_dossier"] = &$pageTitlest_dossier;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_dossier"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["t_dossier"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_dossier()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "num_dossier,  	nom_assist,  	SourceInfo,  	Date_ecoute,  	vcin,  	victime,  	coupable,  	rel_coup_victime,  	date_viol,  	viol_eco,  	viol_corp,  	viol_sexuel,  	viol_psych,  	viol_juris,  	conseq_corp,  	consequ_psych,  	conseq_ecosocial,  	conseq_enf,  	demand_vict,  	svce_prop,  	ms3cellenffem,  	ms3oblpaye,  	ms3obstacles,  	sachcellenffem,  	sachcopyrap,  	rapporoui,  	encscepublic,  	encscpuboui,  	n3cellenffem,  	n3pression,  	n3docs,  	tribcellenffem,  	tribpression,  	tribobligpaye,  	remarques";
$proto0["m_strFrom"] = "FROM t_dossier";
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
	"m_strName" => "num_dossier",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto6["m_sql"] = "num_dossier";
$proto6["m_srcTableName"] = "t_dossier";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_assist",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto8["m_sql"] = "nom_assist";
$proto8["m_srcTableName"] = "t_dossier";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SourceInfo",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto10["m_sql"] = "SourceInfo";
$proto10["m_srcTableName"] = "t_dossier";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_ecoute",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto12["m_sql"] = "Date_ecoute";
$proto12["m_srcTableName"] = "t_dossier";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vcin",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto14["m_sql"] = "vcin";
$proto14["m_srcTableName"] = "t_dossier";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "victime",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto16["m_sql"] = "victime";
$proto16["m_srcTableName"] = "t_dossier";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "coupable",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto18["m_sql"] = "coupable";
$proto18["m_srcTableName"] = "t_dossier";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rel_coup_victime",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto20["m_sql"] = "rel_coup_victime";
$proto20["m_srcTableName"] = "t_dossier";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "date_viol",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto22["m_sql"] = "date_viol";
$proto22["m_srcTableName"] = "t_dossier";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "viol_eco",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto24["m_sql"] = "viol_eco";
$proto24["m_srcTableName"] = "t_dossier";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "viol_corp",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto26["m_sql"] = "viol_corp";
$proto26["m_srcTableName"] = "t_dossier";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "viol_sexuel",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto28["m_sql"] = "viol_sexuel";
$proto28["m_srcTableName"] = "t_dossier";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "viol_psych",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto30["m_sql"] = "viol_psych";
$proto30["m_srcTableName"] = "t_dossier";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "viol_juris",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto32["m_sql"] = "viol_juris";
$proto32["m_srcTableName"] = "t_dossier";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "conseq_corp",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto34["m_sql"] = "conseq_corp";
$proto34["m_srcTableName"] = "t_dossier";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "consequ_psych",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto36["m_sql"] = "consequ_psych";
$proto36["m_srcTableName"] = "t_dossier";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "conseq_ecosocial",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto38["m_sql"] = "conseq_ecosocial";
$proto38["m_srcTableName"] = "t_dossier";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "conseq_enf",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto40["m_sql"] = "conseq_enf";
$proto40["m_srcTableName"] = "t_dossier";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "demand_vict",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto42["m_sql"] = "demand_vict";
$proto42["m_srcTableName"] = "t_dossier";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "svce_prop",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto44["m_sql"] = "svce_prop";
$proto44["m_srcTableName"] = "t_dossier";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ms3cellenffem",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto46["m_sql"] = "ms3cellenffem";
$proto46["m_srcTableName"] = "t_dossier";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ms3oblpaye",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto48["m_sql"] = "ms3oblpaye";
$proto48["m_srcTableName"] = "t_dossier";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ms3obstacles",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto50["m_sql"] = "ms3obstacles";
$proto50["m_srcTableName"] = "t_dossier";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sachcellenffem",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto52["m_sql"] = "sachcellenffem";
$proto52["m_srcTableName"] = "t_dossier";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sachcopyrap",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto54["m_sql"] = "sachcopyrap";
$proto54["m_srcTableName"] = "t_dossier";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "rapporoui",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto56["m_sql"] = "rapporoui";
$proto56["m_srcTableName"] = "t_dossier";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "encscepublic",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto58["m_sql"] = "encscepublic";
$proto58["m_srcTableName"] = "t_dossier";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "encscpuboui",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto60["m_sql"] = "encscpuboui";
$proto60["m_srcTableName"] = "t_dossier";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "n3cellenffem",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto62["m_sql"] = "n3cellenffem";
$proto62["m_srcTableName"] = "t_dossier";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "n3pression",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto64["m_sql"] = "n3pression";
$proto64["m_srcTableName"] = "t_dossier";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "n3docs",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto66["m_sql"] = "n3docs";
$proto66["m_srcTableName"] = "t_dossier";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tribcellenffem",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto68["m_sql"] = "tribcellenffem";
$proto68["m_srcTableName"] = "t_dossier";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "tribpression",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto70["m_sql"] = "tribpression";
$proto70["m_srcTableName"] = "t_dossier";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tribobligpaye",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto72["m_sql"] = "tribobligpaye";
$proto72["m_srcTableName"] = "t_dossier";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "remarques",
	"m_strTable" => "t_dossier",
	"m_srcTableName" => "t_dossier"
));

$proto74["m_sql"] = "remarques";
$proto74["m_srcTableName"] = "t_dossier";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "t_dossier";
$proto77["m_srcTableName"] = "t_dossier";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "num_dossier";
$proto77["m_columns"][] = "nom_assist";
$proto77["m_columns"][] = "SourceInfo";
$proto77["m_columns"][] = "Date_ecoute";
$proto77["m_columns"][] = "vcin";
$proto77["m_columns"][] = "victime";
$proto77["m_columns"][] = "coupable";
$proto77["m_columns"][] = "rel_coup_victime";
$proto77["m_columns"][] = "date_viol";
$proto77["m_columns"][] = "viol_eco";
$proto77["m_columns"][] = "viol_corp";
$proto77["m_columns"][] = "viol_sexuel";
$proto77["m_columns"][] = "viol_psych";
$proto77["m_columns"][] = "viol_juris";
$proto77["m_columns"][] = "conseq_corp";
$proto77["m_columns"][] = "consequ_psych";
$proto77["m_columns"][] = "conseq_ecosocial";
$proto77["m_columns"][] = "conseq_enf";
$proto77["m_columns"][] = "demand_vict";
$proto77["m_columns"][] = "svce_prop";
$proto77["m_columns"][] = "ms3cellenffem";
$proto77["m_columns"][] = "ms3oblpaye";
$proto77["m_columns"][] = "ms3obstacles";
$proto77["m_columns"][] = "sachcellenffem";
$proto77["m_columns"][] = "sachcopyrap";
$proto77["m_columns"][] = "rapporoui";
$proto77["m_columns"][] = "encscepublic";
$proto77["m_columns"][] = "encscpuboui";
$proto77["m_columns"][] = "n3cellenffem";
$proto77["m_columns"][] = "n3pression";
$proto77["m_columns"][] = "n3docs";
$proto77["m_columns"][] = "tribcellenffem";
$proto77["m_columns"][] = "tribpression";
$proto77["m_columns"][] = "tribobligpaye";
$proto77["m_columns"][] = "remarques";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "t_dossier";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "t_dossier";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_dossier";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_dossier = createSqlQuery_t_dossier();


	
		;

																																			

$tdatat_dossier[".sqlquery"] = $queryData_t_dossier;

$tableEvents["t_dossier"] = new eventsBase;
$tdatat_dossier[".hasEvents"] = false;

?>