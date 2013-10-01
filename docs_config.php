
<?php

$doc_sys_config = array(

'data_provider' => array( // top level data provider

	'class' => '<class name>'
	'criteria' => '<criteria>' // params will be passed when object is instantiated (:client_id, :property_id, ...)

), // data_provider

'documents' => array(

	'<doc_code>' => array(

		'file'  => '<path to file relative to sysy templates dir>',
		'descr' => '<description>',

		'data_provider' => array(), // document level data provider, overrides 'set' level provider

		'field_map' => array(

			'<pdf_field_name>' => array('dp_member' => '<data provider member name>'),

		), // field_map

	), // document


), // documents

'doc_sets' => array(

	'<set_code>' => array(

		'name' => '<description>',

		'docs' => array(
			'<doc_code1>' => '<description1>',
			'<doc_code2>' => '<description2>',
			//...
		), // docs

		'data_provider' => array(), // set level data provider, overrides 'top' level provider

		'props' => array(
			'TRAN_TYPE'   => 'PURCHASE',  // PURCHASE, RENT
			'TRAN_DIR'    => 'BUY',       // BUY or SELL
			'PROP_TYPE'   => '1F-HOUSE',  // 1F-HOUSE, MF-HOUSE, APARTMENT, ...
			'TRAN_STATE'  => 'NY',        // transaction state
			'TRAN_COUNTY' => 'MANHATTAN', // transaction county
			'TRAN_CITY'   => 'NEW YORK',  // transaction city
		), // props
	),

), // doc_sets


'prop_codes' = array(

   'TRAN_TYPE',   // PURCHASE, RENT
   'TRAN_DIR',    // BUY or SELL
   'PROP_TYPE',   // 1F-HOUSE, MF-HOUSE, APARTMENT, ...
   'TRAN_STATE',  // transaction state
   'TRAN_COUNTY', // transaction county
   'TRAN_CITY',   // transaction city

), // prop_codes

); // END: doc_sys_config
