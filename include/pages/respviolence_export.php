<?php
			$optionsArray = array( 'totals' => array( 'ID_repviol' => array( 'totalsType' => '' ),
'Etat' => array( 'totalsType' => '' ),
'R_nomcomplet' => array( 'totalsType' => '' ),
'R_adresse' => array( 'totalsType' => '' ),
'R_tel' => array( 'totalsType' => '' ),
'R_nationalite' => array( 'totalsType' => '' ),
'R_age' => array( 'totalsType' => '' ),
'R_NivScolaire' => array( 'totalsType' => '' ),
'R_ActivitePro' => array( 'totalsType' => '' ),
'R_antesced' => array( 'totalsType' => '' ),
'R_junck' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ID_repviol',
'Etat',
'R_nomcomplet',
'R_adresse',
'R_tel',
'R_nationalite',
'R_age',
'R_NivScolaire',
'R_ActivitePro',
'R_antesced',
'R_junck' ),
'exportFields' => array( 'ID_repviol',
'Etat',
'R_nomcomplet',
'R_adresse',
'R_tel',
'R_nationalite',
'R_age',
'R_NivScolaire',
'R_ActivitePro',
'R_antesced',
'R_junck' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ID_repviol' => array( 'export_field' ),
'Etat' => array( 'export_field1' ),
'R_nomcomplet' => array( 'export_field2' ),
'R_adresse' => array( 'export_field3' ),
'R_tel' => array( 'export_field4' ),
'R_nationalite' => array( 'export_field5' ),
'R_age' => array( 'export_field6' ),
'R_NivScolaire' => array( 'export_field7' ),
'R_ActivitePro' => array( 'export_field8' ),
'R_antesced' => array( 'export_field9' ),
'R_junck' => array( 'export_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'ID_repviol',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Etat',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'R_nomcomplet',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'R_adresse',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'R_tel',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'R_nationalite',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'R_age',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'R_NivScolaire',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'R_ActivitePro',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'R_antesced',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'R_junck',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>