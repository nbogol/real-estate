<?php

$doc_sys_config = array(

'data_providers' => array( // top level data provider
	'<dp name>' => array(

		'type'	=> '<data provider type>', // XActiveRecord, ...
		'class' => '<class name>',
		'criteria' => '<criteria>', // params will be passed when object is instantiated (:client_id, :property_id, ...)
		'params' => array(
			':<param name>' => '<User state name>', // Yii::app()->user->getState($state_name)
		),
	), // data provider name

), // data_provider

'documents' => array(

	'<doc_code>' => array(

		'file'  => '<path to file relative to sysy templates dir>',
		'descr' => '<description>',

		'data_provider' => '<data provider name>', 

		'field_map' => array(

			'<pdf_field_name>' => array(
				'data_provider' => '<data provider name>', // optional
				'dp_member' => '<data provider member name>',
				'callback'  => '<callback method>', // 
			),

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
			'<property name>' => '<propverty value>',
			
			'TRAN_DIR'    => 'BUY',       // BUY or SELL or RENT
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




$field_map_arr = array(
	
	'DB_Property' => array(
		'Property street address' => 'PropertyStreetAddress',
		'Property complete address' => 'PropertyCompleteAddress',
	),

	'DB_Client' => array(
		'Client name' => 'name',
		'Client main phone' => 'MainPhone',
	),
);


?>

job_tbl
-------
job_id
owner
job_type - EMAIL, CALL, PDF-DOC,...
job_status - NEW, ACTIVE, DONE, ERROR, ON-HOLD
status_notes
start_time
priority - LOW, REG, HI, SYS
complete_time
notify_type - EMAIL, SMS
notify_address - ... (if null use default notification address or phone)

job_detail_pdf_doc_tbl
----------------------
job_detail_id
job_id
doc_set_code
doc_code
status - NEW, ACTIVE (in process), DONE, ERROR
status_notes
complete_time

job_detail_pdf_doc_param_tbl
----------------------------
job_detail_param_id
job_detail_id
data_provider
pname
pval


Forms:
=================
CLIENT
AGENT
LAWYER

OFFICE
DEAL



re_deal_tbl
------------
re_deal_id
owner_user_id
tran_dir // BUY or SELL or RENT
property_id
client_id
agent_id
lawyer_id
counter_client_id
counter_agent_id
counter_lawyer_id
deal_status

