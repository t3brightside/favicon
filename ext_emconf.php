<?php
	$EM_CONF[$_EXTKEY] = array (
		'title' => 'Favicon',
		'description' => 'Add favicon in page metadata tab',
		'category' => 'fe',
		'version' => '0.0.1',
		'state' => 'stable',
		'uploadfolder' => false,
		'createDirs' => '',
		'clearcacheonload' => true,
		'author' => 'Tanel Põld',
		'author_email' => 'tanel@brightside.ee',
		'author_company' => 'Brightside OÜ / t3brightside.com',
		'constraints' =>
			array (
				'depends' =>
				array (
					'typo3' => '9.5.0 - 9.5.99',
				),
				'conflicts' =>
				array (
				),
				'suggests' =>
				array (
				),
			),
		);
