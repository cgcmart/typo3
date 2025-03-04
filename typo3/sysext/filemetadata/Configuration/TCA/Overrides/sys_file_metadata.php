<?php

defined('TYPO3') or die();

$tca = [
    'ctrl' => [
        'type' => 'file:type',
    ],
    'types' => [
        TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright,
                    --palette--;;40,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
        TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
        TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    --palette--;;30,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.camera,
                    color_space,
                    --palette--;;50,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
        TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.audio,
                    duration,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
        TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.video,
                    duration,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
        TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    pages,
                    --palette--;;50,
                    --palette--;;60,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ],
    ],
    'palettes' => [
        '10' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility',
            'showitem' => 'visible, status',
        ],
        '20' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility',
            'showitem' => 'alternative, --linebreak--, caption, --linebreak--, download_name',
        ],
        '25' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility',
            'showitem' => 'caption, --linebreak--, download_name',
        ],
        '30' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.gps',
            'showitem' => 'latitude, longitude',
        ],
        '40' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location',
            'showitem' => 'location_country, location_region, location_city',
        ],
        '50' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics',
            'showitem' => 'width, height, unit',
        ],
        '60' => [
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date',
            'showitem' => 'content_creation_date, content_modification_date',
        ],
    ],
    'columns' => [
        'visible' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.visible',
            'config' => [
                'type' => 'check',
                'default' => '1',
            ],
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.1',
                        1,
                        'actions-check',
                    ],
                    [
                        'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.2',
                        2,
                        'actions-clock',
                    ],
                    [
                        'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.3',
                        3,
                        'actions-view',
                    ],
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],
        'keywords' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.keywords',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
                'placeholder' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:placeholder.keywords',
            ],
        ],
        'caption' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.caption',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
            ],
        ],
        'creator_tool' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator_tool',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
        'download_name' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.download_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'creator' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'publisher' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.publisher',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
        'source' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.source',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
        'copyright' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.copyright',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
            ],
        ],
        'location_country' => [
            'exclude' => true,
            'l10n_display' => '',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_country',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'location_region' => [
            'exclude' => true,
            'l10n_display' => '',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_region',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'location_city' => [
            'exclude' => true,
            'l10n_display' => '',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_city',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'latitude' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.latitude',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 30,
                'default' => '0.00000000000000',
            ],
        ],
        'longitude' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.longitude',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 30,
                'default' => '0.00000000000000',
            ],
        ],
        'ranking' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ranking',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'minitems' => 1,
                'maxitems' => 1,
                'items' => [
                    [0, 0],
                    [1, 1],
                    [2, 2],
                    [3, 3],
                    [4, 4],
                    [5, 5],
                ],
            ],
        ],
        'content_creation_date' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_creation_date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'default' => time(),
            ],
        ],
        'content_modification_date' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_modification_date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'default' => time(),
            ],
        ],
        'note' => [
            'exclude' => true,
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.note',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        /*
         * METRICS ###########################################
         */
        'unit' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', ''],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.px', 'px'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.cm', 'cm'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.in', 'in'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.mm', 'mm'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.m', 'm'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.p', 'p'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.pt', 'pt'],
                ],
                'default' => '',
                'readOnly' => true,
            ],
        ],
        'duration' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.duration',
            'config' => [
                'type' => 'number',
                'size' => 10,
                'default' => 0,
            ],
        ],
        'color_space' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', ''],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.RGB', 'RGB'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.sRGB', 'sRGB'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMYK', 'CMYK'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMY', 'CMY'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.YUV', 'YUV'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.grey', 'grey'],
                    ['LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.indx', 'indx'],
                ],
                'default' => '',
                'readOnly' => true,
            ],
        ],
        'width' => [
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.width',
            'config' => [
                'type' => 'number',
                'size' => 10,
                'default' => 0,
                'readOnly' => true,
            ],
        ],
        'height' => [
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.height',
            'config' => [
                'type' => 'number',
                'size' => 10,
                'default' => 0,
                'readOnly' => true,
            ],
        ],
        'pages' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.pages',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'language' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.language',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'fe_groups' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
    ],
];

$GLOBALS['TCA']['sys_file_metadata'] = array_replace_recursive($GLOBALS['TCA']['sys_file_metadata'], $tca);
