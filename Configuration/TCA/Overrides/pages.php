<?php
$tempColumns = array(
	'tx_favicon_favicon' => [
		'exclude' => 1,
		'label' => 'Image',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			'tx_favicon_favicon',
			[
				'behaviour' => [
					'allowLanguageSynchronization' => true,
				],
				'appearance' => [
		        	'headerThumbnail' => [
			        	'width' => '20',
						'height' => '20',
	        		],
		            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
		    	],
				'overrideChildTca' => [
					'types' => [
						'0' => [
							'showitem' => '
								--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
								--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
							'showitem' => '
								crop,
								--palette--;;filePalette'
						],

					],
				],
			],
			'png'
		),
	],
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'pages',
	'--palette--;Favicon;favicon,',
	'',
	'after:lastUpdated'
);
$GLOBALS['TCA']['pages']['palettes']['favicon']['showitem'] = '
	tx_favicon_favicon
';
