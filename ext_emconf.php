<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Favicon',
    'description' => 'Add favicon through page settings. Renders icons for different devices.',
    'category' => 'fe',
    'version' => '1.3.0',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Tanel Põld',
    'author_email' => 'tanel@brightside.ee',
    'author_company' => 'Brightside OÜ / t3brightside.com',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0 - 14.99.99',
        ],
    ],
];
