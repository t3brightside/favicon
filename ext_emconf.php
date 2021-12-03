<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Favicon',
    'description' => 'Add favicon through page settings. Renders icons for different devices.',
    'category' => 'fe',
    'version' => '0.1.0',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Tanel Põld',
    'author_email' => 'tanel@brightside.ee',
    'author_company' => 'Brightside OÜ / t3brightside.com',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0 - 11.5.99',
        ],
    ],
];
