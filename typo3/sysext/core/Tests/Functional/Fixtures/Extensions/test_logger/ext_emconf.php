<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'Logger Test',
    'description' => 'Logger Test',
    'category' => 'example',
    'version' => '12.3.0',
    'state' => 'beta',
    'author' => 'Larry Garfield',
    'author_email' => 'larry.garfield@typo3.org',
    'author_company' => 'TYPO3 GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '12.3.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
