<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Form\Tests\Unit\Controller;

use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Resource\Folder;
use TYPO3\CMS\Core\Resource\ResourceStorage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;
use TYPO3\CMS\Form\Controller\FormManagerController;
use TYPO3\CMS\Form\Mvc\Persistence\FormPersistenceManager;
use TYPO3\CMS\Form\Service\DatabaseService;
use TYPO3\CMS\Form\Service\TranslationService;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class FormManagerControllerTest extends UnitTestCase
{
    protected bool $resetSingletonInstances = true;

    /**
     * @test
     */
    public function getAccessibleFormStorageFoldersReturnsProcessedArray(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $formPersistenceManagerMock = $this->createMock(FormPersistenceManager::class);

        $mockController->_set('formPersistenceManager', $formPersistenceManagerMock);
        $mockController->_set('formSettings', [
            'persistenceManager' => [
                'allowSaveToExtensionPaths' => true,
            ],
        ]);

        $storageMock1 = $this->createMock(ResourceStorage::class);
        $storageMock2 = $this->createMock(ResourceStorage::class);

        $storageMock1->method('isPublic')->willReturn(true);
        $storageMock2->method('isPublic')->willReturn(false);

        $folder1Mock = $this->createMock(Folder::class);
        $folder1Mock->method('getPublicUrl')->willReturn('/fileadmin/user_upload/');
        $folder1Mock->method('getStorage')->willReturn($storageMock1);

        $folder2Mock = $this->createMock(Folder::class);
        $folder2Mock->method('getStorage')->willReturn($storageMock2);

        $formPersistenceManagerMock->method('getAccessibleFormStorageFolders')->willReturn([
            '1:/user_upload/' => $folder1Mock,
            '2:/forms/' => $folder2Mock,
        ]);

        $formPersistenceManagerMock->method('getAccessibleExtensionFolders')->willReturn([
            'EXT:form/Resources/Forms/' => '/some/path/form/Resources/Forms/',
            'EXT:form_additions/Resources/Forms/' => '/some/path/form_additions/Resources/Forms/',
        ]);

        $expected = [
            0 => [
                'label' => '/fileadmin/user_upload/',
                'value' => '1:/user_upload/',
            ],
            1 => [
                'label' => '2:/forms/',
                'value' => '2:/forms/',
            ],
            2 => [
                'label' => 'EXT:form/Resources/Forms/',
                'value' => 'EXT:form/Resources/Forms/',
            ],
            3 => [
                'label' => 'EXT:form_additions/Resources/Forms/',
                'value' => 'EXT:form_additions/Resources/Forms/',
            ],
        ];

        self::assertSame($expected, $mockController->_call('getAccessibleFormStorageFolders'));
    }

    /**
     * @test
     */
    public function getFormManagerAppInitialDataReturnsProcessedArray(): void
    {
        $mockTranslationService = $this->getAccessibleMock(TranslationService::class, ['translateValuesRecursive'], [], '', false);
        GeneralUtility::setSingletonInstance(TranslationService::class, $mockTranslationService);
        $mockTranslationService
            ->method('translateValuesRecursive')
            ->willReturnArgument(0);

        $subject = $this->getAccessibleMock(FormManagerController::class, ['getAccessibleFormStorageFolders'], [], '', false);

        $mockUriBuilder = $this->createMock(UriBuilder::class);

        $subject->_set('uriBuilder', $mockUriBuilder);
        $subject->_set('formSettings', [
            'formManager' => [
                'selectablePrototypesConfiguration' => [],
            ],
        ]);

        $mockUriBuilder->method('uriFor')->willReturn(
            '/typo3/index.php?some=param'
        );

        $subject
            ->method('getAccessibleFormStorageFolders')
            ->willReturn([
                0 => [
                    'label' => 'user_upload',
                    'value' => '1:/user_upload/',
                ],
            ]);

        $expected = [
            'selectablePrototypesConfiguration' => [],
            'accessibleFormStorageFolders' => [
                0 => [
                    'label' => 'user_upload',
                    'value' => '1:/user_upload/',
                ],
            ],
            'endpoints' => [
                'create' => '/typo3/index.php?some=param',
                'duplicate' => '/typo3/index.php?some=param',
                'delete' => '/typo3/index.php?some=param',
                'references' => '/typo3/index.php?some=param',
            ],
        ];

        self::assertSame($expected, $subject->_call('getFormManagerAppInitialData'));
    }

    /**
     * @test
     */
    public function getAvailableFormDefinitionsReturnsProcessedArray(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $formPersistenceManagerMock = $this->createMock(FormPersistenceManager::class);
        $mockController->_set('formPersistenceManager', $formPersistenceManagerMock);

        $databaseService = $this->createMock(DatabaseService::class);
        $mockController->_set('databaseService', $databaseService);

        $formPersistenceManagerMock->method('listForms')->willReturn([
            0 => [
                'identifier' => 'ext-form-identifier',
                'name' => 'some name',
                'persistenceIdentifier' => '1:/user_uploads/someFormName.yaml',
                'readOnly' => false,
                'removable' => true,
                'location' => 'storage',
                'duplicateIdentifier' => false,
            ],
        ]);

        $databaseService->method('getAllReferencesForFileUid')->willReturn([
            0 => 0,
        ]);

        $databaseService->method('getAllReferencesForPersistenceIdentifier')->willReturn([
            '1:/user_uploads/someFormName.yaml' => 2,
        ]);

        $expected = [
            0 => [
                'identifier' => 'ext-form-identifier',
                'name' => 'some name',
                'persistenceIdentifier' => '1:/user_uploads/someFormName.yaml',
                'readOnly' => false,
                'removable' => true,
                'location' => 'storage',
                'duplicateIdentifier' => false,
                'referenceCount' => 2,
            ],
        ];

        self::assertSame($expected, $mockController->_call('getAvailableFormDefinitions'));
    }

    /**
     * @test
     */
    public function getProcessedReferencesRowsThrowsExceptionIfPersistenceIdentifierIsEmpty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(1477071939);

        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $mockController->_call('getProcessedReferencesRows', '');
    }

    /**
     * @test
     */
    public function getProcessedReferencesRowsReturnsProcessedArray(): void
    {
        $iconFactoryMock = $this->createMock(IconFactory::class);
        $iconMock = $this->createMock(Icon::class);
        $iconMock->expects(self::atLeastOnce())->method('render')->willReturn('');
        $iconFactoryMock->method('getIconForRecord')->withAnyParameters()->willReturn($iconMock);
        GeneralUtility::addInstance(IconFactory::class, $iconFactoryMock);

        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'getModuleUrl',
            'getRecord',
            'getRecordTitle',
        ], [], '', false);

        $databaseService = $this->createMock(DatabaseService::class);
        $mockController->_set('databaseService', $databaseService);

        $databaseService->method('getReferencesByPersistenceIdentifier')->with(self::anything())->willReturn([
            0 => [
                'tablename' => 'tt_content',
                'recuid' => -1,
            ],
        ]);

        $mockController
            ->method('getModuleUrl')
            ->willReturn('/typo3/index.php?some=param');

        $mockController
            ->method('getRecord')
            ->willReturn([ 'uid' => 1, 'pid' => 0 ]);

        $mockController
            ->method('getRecordTitle')
            ->willReturn('record title');

        $expected = [
            0 => [
                'recordPageTitle' => 'record title',
                'recordTitle' => 'record title',
                'recordIcon' => '',
                'recordUid' => -1,
                'recordEditUrl' => '/typo3/index.php?some=param',
            ],
        ];

        self::assertSame($expected, $mockController->_call('getProcessedReferencesRows', 'fake'));
    }

    /**
     * @test
     */
    public function isValidTemplatePathReturnsTrueIfTemplateIsDefinedAndExists(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $mockController->_set('formSettings', [
            'formManager' => [
                'selectablePrototypesConfiguration' => [
                    0 => [
                        'identifier' => 'standard',
                        'label' => 'some label',
                        'newFormTemplates' => [
                            0 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/BlankForm.yaml',
                                'label' => 'some label',
                            ],
                            1 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/SimpleContactForm.yaml',
                                'label' => 'some other label',
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        self::assertTrue($mockController->_call('isValidTemplatePath', 'standard', 'EXT:form/Tests/Unit/Controller/Fixtures/SimpleContactForm.yaml'));
    }

    /**
     * @test
     */
    public function isValidTemplatePathReturnsFalseIfTemplateIsDefinedButNotExists(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $mockController->_set('formSettings', [
            'formManager' => [
                'selectablePrototypesConfiguration' => [
                    0 => [
                        'identifier' => 'standard',
                        'label' => 'some label',
                        'newFormTemplates' => [
                            0 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/BlankForm.yaml',
                                'label' => 'some label',
                            ],
                            1 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/SimpleContactForm.yaml',
                                'label' => 'some other label',
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        self::assertFalse($mockController->_call('isValidTemplatePath', 'standard', 'EXT:form/Tests/Unit/Controller/Fixtures/NonExistingForm.yaml'));
    }

    /**
     * @test
     */
    public function isValidTemplatePathReturnsFalseIfTemplateIsNotDefinedAndExists(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $mockController->_set('formSettings', [
            'formManager' => [
                'selectablePrototypesConfiguration' => [
                    0 => [
                        'identifier' => 'standard',
                        'label' => 'some label',
                        'newFormTemplates' => [
                            0 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/BlankForm.yaml',
                                'label' => 'some label',
                            ],
                            1 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/SimpleContactForm.yaml',
                                'label' => 'some other label',
                            ],
                        ],
                    ],
                    1 => [
                        'identifier' => 'other',
                        'label' => 'some label',
                        'newFormTemplates' => [
                            0 => [
                                'templatePath' => 'EXT:form/Tests/Unit/Controller/Fixtures/BlankForm.yaml',
                                'label' => 'some label',
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        self::assertFalse($mockController->_call('isValidTemplatePath', 'other', 'EXT:form/Tests/Unit/Controller/Fixtures/SimpleContactForm.yaml'));
    }

    /**
     * @test
     */
    public function convertFormNameToIdentifierRemoveSpaces(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $input = 'test form';
        $expected = 'testform';
        self::assertSame($expected, $mockController->_call('convertFormNameToIdentifier', $input));
    }

    /**
     * @test
     */
    public function convertFormNameToIdentifierConvertAccentedCharacters(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $input = 'téstform';
        $expected = 'testform';
        self::assertSame($expected, $mockController->_call('convertFormNameToIdentifier', $input));
    }

    /**
     * @test
     */
    public function convertFormNameToIdentifierConvertAccentedCharactersNotInNFC(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $input = 'test form ' . hex2bin('667275cc88686e65757a6569746c696368656e');
        $expected = 'testformfruehneuzeitlichen';
        self::assertSame($expected, $mockController->_call('convertFormNameToIdentifier', $input));
    }

    /**
     * @test
     */
    public function convertFormNameToIdentifierRemoveSpecialChars(): void
    {
        $mockController = $this->getAccessibleMock(FormManagerController::class, [
            'dummy',
        ], [], '', false);

        $input = 'test form ä#!_-01';
        $expected = 'testformae_-01';
        self::assertSame($expected, $mockController->_call('convertFormNameToIdentifier', $input));
    }
}
